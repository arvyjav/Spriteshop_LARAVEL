<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Menu extends Model
{
    public function allData()
    {
      return DB::table('menus')->get();
    }
    public function detailData($id)
    {
      return DB::table('menus')->where('id', $id)->first();
    }
    public function addData($data)
    {
      DB::table('menus')->insert($data);
    }
    public function editData($id, $data)
    {
      DB::table('menus')->where('id',$id)->update($data);
    }
    public function deleteData($id)
    {
      DB::table('menus')->where('id',$id)->delete();
    }
}
