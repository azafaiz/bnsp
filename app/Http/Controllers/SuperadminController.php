<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function dashboard() {
        return view('superadmin.dashboard');
    }

    public function index(): View
    {
        //get posts
        $posts = Pegawai::latest()->paginate(10);

        //render view with posts
        return view('superadmin.index', compact('posts'));
    }

    public function create(): View
    {
        return view('superadmin.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'alamat'     => 'required|min:5',
            'no_hp'   => 'required|min:5'
        ]);

        //create post
        Pegawai::create([
            'nama'     => $request->nama,
            'alamat'     => $request->alamat,
            'no_hp'   => $request->no_hp
        ]);

        //redirect to index
        return redirect()->route('index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id)
    {
        $post = Pegawai::findOrFail($id);
        // return view('superadmin.show',['post' => $post]);
        return view('superadmin.show', compact('post'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Pegawai::findOrFail($id);

        //render view with post
        return view('superadmin.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'alamat'     => 'required|min:5',
            'no_hp'   => 'required|min:5',
        ]);

        //get post by ID
        $data = Pegawai::findOrFail($id);

            //update post with new image
        $data->update([
            'nama'     => $request->nama,
            'alamat'     => $request->alamat,
            'no_hp'   => $request->no_hp,
        ]);

        //redirect to index
        return redirect()->route('index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Pegawai::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}