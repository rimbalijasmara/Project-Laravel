<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View; // Correct namespace for View class
use Illuminate\Support\Facades\DB; // Import the correct namespace for DB

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
    public function edit(string $id): View
    {
        // Get contact by ID
        $contact = Contact::findOrFail($id);

        // Render view with contact
        return view('template.edit', compact('contact'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
      $contact = Contact::findOrFail($id);

      // Update contact
      $contact->update([
          'pesan' => $request->input('pesan'),
      ]);
      return redirect()
            ->route('template.contact')
            ->with(['success' => 'Data Berhasil Disimpan!']);
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
