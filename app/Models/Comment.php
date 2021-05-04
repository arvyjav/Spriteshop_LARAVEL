<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    public function allData()
    {
        return DB::table('comments')->get();
    }
    public function detailData($id)
    {
        return DB::table('comments')->where('id', $id)->first();

    }
    public function addData($data)
    {
         DB::table('comments')->insert($data);
    }
    public function deleteData($id)
    {
      DB::table('comments')->where('id',$id)->delete();
    }
}
