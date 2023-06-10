<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiContactController;

class ApiContactController extends Controller
{
    public function store(Request $request)
    {

        $nama = $request->input('nama');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $deskripsi = $request->input('deskripsi');
        $data=array('nama'=>$nama,"email"=>$email,"subject"=>$subject,"deskripsi"=>$deskripsi);
        DB::table('tb_contact')->insert($data);

    }
}
