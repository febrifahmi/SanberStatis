<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DatatabController extends Controller
{
    //
    public function show() {
    	return view('datatables');
    }
}
