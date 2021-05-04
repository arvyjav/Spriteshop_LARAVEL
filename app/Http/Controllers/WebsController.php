<?php

namespace App\Http\Controllers;
use App\Models\Webs;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class WebsController extends Controller
{
    public function __construct()
    {
        $this->Webs = new Webs();
    }
  
    public function index()
    {
        Paginator::useBootstrap();

        $data = [
           'webs' => $this->Webs->paginate(4),
        ];
        return view('admin/HANS_crud1',$data);
    }

   
    public function create()
    {
        return view('admin/crud1/createdev');
    }

  
    public function store(Request $request)
    {
        Request()->validate([
            'NIM' => 'required|unique:webs,NIM|min:4|max:5',
            'Username' => 'required|unique:webs,Username|min:10|max:20',
            'Password' => 'required|min:8|max:20',
            'Name' => 'required',
            'State' => 'required',
            'Email' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'NIM.required' => 'NIM Cant EMpty',
            'NIM.unique' => 'NIM Cant Same',
            'NIM.min' => 'NIM Cant -4 ',
            'NIM.max' => 'NIM Cant +5 ',
            'Name.required' => 'name Cant Empty',
            'State.required' => 'State Cant Empty',
            'Email.required' => 'Email Cant Empty',
            'photo.required' => 'Photo Cant Empty',
            'Username.required' => 'Username Cant Empty',
            'Username.unique' => 'Username Cant Same',
            'Username.min' => 'Username minimal : 10 Words',
            'Username.max' => 'Username maximal : 20 Words',
            'Password.required' => 'name Cant Empty',
            'Password.min' => 'Password cant -8 Its Weak',
            'Password.max' => 'Password Maximal Only 20 Words too Strong',

        ]);

        $file = Request()->photo;
        $fileName = Request()->NIM.'.'. $file->extension();
        $file->move(public_path('Sprite'), $fileName);

        $data = [
            'NIM' => Request()->NIM,
            'Name' => Request()->Name,
            'Username' => Request()->Username,
            'Password' => Request()->Password,
            'Email' => Request()->Email,
            'State' => Request()->State,
            'photo' => $fileName,
        ];
        $this->Webs->addData($data);
        return redirect()->route('crud')->with('success','DATA SUCCESS');
    }

  
    public function show($id)
    {
        if(!$this->Webs->detailData($id)){
            abort(404);
        }
        $data = [
            'webs' => $this->Webs->detailData($id),
         ];
         return view('admin/crud1/v_viewdata',$data);
    }

    
    public function edit($id)
    {
        $data = [
            'webs' => $this->Webs->detailData($id),
         ];
        return view('admin/crud1/v_editdata',$data);
    }

    
    public function update($id)
    {
        Request()->validate([
            'NIM' => 'required|min:4|max:5',
            'Username' => 'required|min:10|max:20',
            'Password' => 'required|min:8|max:20',
            'Name' => 'required',
            'State' => 'required',
            'Email' => 'required',
            'photo' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'NIM.required' => 'NIM Cant EMpty',
            'NIM.unique' => 'NIM Cant Same',
            'NIM.min' => 'NIM Cant -4 ',
            'NIM.max' => 'NIM Cant +5 ',
            'Name.required' => 'name Cant Empty',
            'State.required' => 'State Cant Empty',
            'Email.required' => 'Email Cant Empty',
            'Username.required' => 'Username Cant Empty',
            'Username.unique' => 'Username Cant Same',
            'Username.min' => 'Username minimal : 10 Words',
            'Username.max' => 'Username maximal : 20 Words',
            'Password.required' => 'name Cant Empty',
            'Password.min' => 'Password cant -8 Its Weak',
            'Password.max' => 'Password Maximal Only 20 Words too Strong',

        ]);
        if(Request()->photo <> ""){
            $file = Request()->photo;
            $fileName = Request()->NIM.'.'. $file->extension();
            $file->move(public_path('Sprite'), $fileName);
    
            $data = [
                'NIM' => Request()->NIM,
                'Name' => Request()->Name,
                'Username' => Request()->Username,
                'Password' => Request()->Password,
                'Email' => Request()->Email,
                'State' => Request()->State,
                'photo' => $fileName,
            ];
        }else{
            
            $data = [
                'NIM' => Request()->NIM,
                'Name' => Request()->Name,
                'Username' => Request()->Username,
                'Password' => Request()->Password,
                'Email' => Request()->Email,
                'State' => Request()->State,
            ];
            $this->Webs->editData($id,$data);

        }
        return redirect()->route('crud')->with('success','DATA SUCCESS EDITED!!!');
    }

   
    public function destroy($id)
    {
        $webs = $this->Webs->detailData($id);
        if($webs->photo <> ""){
          unlink(public_path('Sprite'). '/' . $webs->photo);
        }
        $this->Webs->deleteData($id);
        return redirect()->route('crud')->with('success','DATA SUCCESS DELETED!!!');
    }
}
