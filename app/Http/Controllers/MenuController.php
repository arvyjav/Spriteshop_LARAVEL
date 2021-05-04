<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->Menu = new Menu();
        $this->middleware('auth');

    }
    public function index()
    {
        Paginator::useBootstrap();

        $data = [
           'menu' => $this->Menu->paginate(4),
        ];
        return view('admin/HANS_menu',$data);
        
    }

    public function create()
    {
        return view('admin/crud2/createdata');
    }

    public function store()
    {
        Request()->validate([
            'product_name' => 'required',
            'how_much' => 'required',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[

            'product_name.required' => 'name Cant Empty',
            'how_much.required' => 'State Cant Empty',
            'description.required' => 'Description Cant Empty',
            'price.required' =>'Price Cant Empty',
            'photo.required' => 'Photo Cant Empty',
            'photo.mimes' => 'Photo Only jpg-jpeg-bmp-png',


        ]);

        $file = Request()->photo;
        $fileName = Request()->product_name.'.'. $file->extension();
        $file->move(public_path('Sprite'), $fileName);

        $data = [
            'product_name' => Request()->product_name,
            'how_much' => Request()->how_much,
            'description' => Request()->description,
            'price' => Request()->price,
            'photo' => $fileName,
        ];
        $this->Menu->addData($data);
        return redirect()->route('crud2')->with('pesan','DATA SUCCESS');
    }

  
    public function show($id)
    {
        if(!$this->Menu->detailData($id)){
            abort(404);
        }
        $data = [
            'menu' => $this->Menu->detailData($id),
         ];
         return view('admin/crud2/v_viewdata',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'menu' => $this->Menu->detailData($id),
         ];
        return view('admin/crud2/v_editdata',$data);
    }

  
    public function update($id)
    {
        Request()->validate([
            'product_name' => 'required',
            'how_much' => 'required',
            'price' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[

            'product_name.required' => 'name Cant Empty',
            'how_much.required' => 'State Cant Empty',
            'price.required' =>'Price Cant Empty',
            'photo.required' => 'Photo Cant Empty',

        ]);

        if(Request()->photo <> ""){
            $file = Request()->photo;
            $fileName = Request()->product_name.'.'. $file->extension();
            $file->move(public_path('Sprite'), $fileName);
    
            $data = [
                'product_name' => Request()->product_name,
                'how_much' => Request()->how_much,
                'price' => Request()->price,
                'photo' => $fileName,
            ];
        }else{
            $data = [
                'product_name' => Request()->product_name,
                'how_much' => Request()->how_much,
                'price' => Request()->price,
            ];
            $this->Menu->editData($id,$data);
        }
        return redirect()->route('crud2')->with('pesan','DATA SUCCESS');
    }


    public function destroy($id)
    {
        $menu = $this->Menu->detailData($id);
        if($menu->photo <> ""){
          unlink(public_path('Sprite'). '/' . $menu->photo);
        }
        $this->Menu->deleteData($id);
        return redirect()->route('crud2')->with('pesan','DATA SUCCESS DELETED!!!');
    }
    
    public function click(){
        $data = [
            'menu' => $this->Menu->allData(),
         ];
        return view('shop',$data);
    }
  
    public function shop($id){
        toast('Welcome bro!','success');

        if(!$this->Menu->detailData($id)){
            abort(404);
        }
        $data = [
            'menu' => $this->Menu->detailData($id),
         ];
         return view('/detailpage/viewshop',$data);
    }
    public function clickadmin(){
        $data = [
            'menu' => $this->Menu->allData(),
         ];
        return view('admin/shop',$data);
    }
  
    public function shopadmin($id){
        if(!$this->Menu->detailData($id)){
            abort(404);
        }
        $data = [
            'menu' => $this->Menu->detailData($id),
         ];
         return view('/admin/detail/viewshop',$data);
    }
    
}
