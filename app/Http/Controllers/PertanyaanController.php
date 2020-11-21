<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PertanyaanController extends Controller
{
    //
    public function index(){
    	$query = DB::table('pertanyaan')->get();
    	return view('listpertanyaan', ['hasil' => $query]);
    }

    public function create(){
    	return view('buatpertanyaan');
    }

    public function store(Request $request){
    	// $request->validate([
     //        'judul' => 'required|unique:post',
     //        'pertanyaan' => 'required',
     //    ]);
        $query = DB::table('pertanyaan')->insert([
        	"username" => $request["username"],
            "judul" => $request["judul"],
            "pertanyaan" => $request["pertanyaan"]
        ]);
        return redirect('/pertanyaan');
    }

    public function show(Request $request){
    	$request->validate([
    		'username' => 'required|unique:post',
    	]);
    	$users = DB::table('users')->get();
    	return view('pertanyaanshow',['users' => $users]);
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
