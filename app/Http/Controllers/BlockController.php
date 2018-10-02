<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Blog;

class BlockController extends Controller
{
    public function index()
    {
      $blogs = Blog::all();
      return view('blog/home', ['blog' => $blogs]);
    }

    public function show($id)
    {
      // data yang di isi adalah $id(integer) kedalam string
      $page = "ini adalah halaman $id";
      // data yang di isi adalah string
      //$nama = ['alwindo','windo','siski'];

      //melakukan insert ke database
      DB::table('tbl_user')->insert([
        ['username' => 'alalwindo','password' => 'siskiki']
      ]);//karena disini kita memasukkan data lebih dari satu makanya kita jadikan array dengan membuat [[

      //untuk melakukan update data
      DB::table('tbl_user')->where('username', 'alalwindo')
                    ->update(['username' => 'alalwindodo']);

      //untuk mnghapus data ke database
      DB::table('tbl_user')->where('username', '=' ,'alalwindodo')->delete();

      //untuk melakukan query ke database
      $nama = DB::table('tbl_user')->where('username','like','%a%')->get();
      return view('blog/single',
      [/*untuk menampilkan string page*/"blog" =>$page,#blok adalah nama variable yang akan ditampilkan di halaman blade
      "nama" => $nama, 'html' => "<h1>ini adalah h1</h1>"]);
    }
}
