<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Webs extends Model
{
    public function allData()
    {
      return DB::table('webs')->get();
    }
    public function detailData($id)
    {
      return DB::table('webs')->where('id', $id)->first();
    }
    public function addData($data)
    {
      DB::table('webs')->insert($data);
    }
    public function editData($id, $data)
    {
      DB::table('webs')->where('id',$id)->update($data);
    }
    public function deleteData($id)
    {
      DB::table('webs')->where('id',$id)->delete();
    }
}
