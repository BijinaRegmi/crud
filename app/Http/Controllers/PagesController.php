<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function list(){
        $data = array(
            'title'=>'Lists',
            'list' => ['The Fault in Our Stars', 'Paper Town', 'Escape Room']
        );
        return view('pages.list')->with($data);
    }
}
