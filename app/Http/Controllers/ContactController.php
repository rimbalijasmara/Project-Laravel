<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    public function index() {
        $data = DB::table('pesan')->get();
        return view ('template.contact',[
            'title' => 'contact',
            'items'  => $data
        ]);
    }
    public function store(Request $request){
        DB::table('pesan')-> insert([
            'komen' => $request ->komen
        ]);
        return redirect()->back();
    }
}
