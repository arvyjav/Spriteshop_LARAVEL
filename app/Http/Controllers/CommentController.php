<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->Comment = new Comment();
        $this->middleware('auth');
    }
    public function comments(){
        Paginator::useBootstrap();

        $data = [
            'comments' => $this->Comment->paginate(4),
         ];
        return view('admin/comments',$data);
    }
  

    public function create()
    {
        return view('detailpage/report');
    }

  
    public function store(Request $request)
    {
        Request()->validate([
            'description' => 'required|min:50|max:1000',
            'name' => 'required',
            'email' => 'required',
        ],[
            'name.required' => 'name Cant Empty',
            'email.required' => 'Email Cant Empty',
            'description.required' => 'Username Cant Empty',
            'description.min' => 'Username minimal : 10 Words',
            'description.max' => 'Username maximal : 20 Words',


        ]);
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
            'email' => Request()->email,
        ];
        $this->Comment->addData($data);
        return redirect()->route('report')->with('toast_success','DATA SUCCESS');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        $this->Comment->deleteData($id);
        return redirect()->route('comments')->with('success','DATA SUCCESS DELETED!!!');
    }
}
