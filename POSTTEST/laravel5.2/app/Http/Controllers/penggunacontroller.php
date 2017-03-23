<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class penggunacontroller extends Controller
{
   public function awal(){
   		return "hello from the other side";
   }

   public function tambah(){

   			return $this->simpan();
   }

   public function simpan(){

   	$pengguna = new Pengguna();
   	$pengguna->Username = 'jon_doe';
   	$pengguna->Password = 'doe_jon';
   	$pengguna->save();
   	return "data username {$pengguna->Username} has been saved";
   }
}
