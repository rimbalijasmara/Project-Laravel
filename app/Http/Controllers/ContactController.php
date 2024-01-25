<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // Show Data
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

    // Edit Data
    public function edit($id){
        $data = DB::table('pesan')->where('id',$id)->first();
        return view('template.edit',[
            'item' =>$data, 
            'title' =>'update data'
        ]);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('/template.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
