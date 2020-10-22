<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postingan = Blog::all();
        return view('blog')->with(['postingan' => $postingan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($files = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }
        $blog = new Blog;
        $blog->judul = $request->judul;
        $blog->isi = $request->isi;
        $blog->image = $profileImage;
        $blog->user_id = Auth::user()->id;
        $blog->save();

        return redirect(route('blog.index'));
    }

    /** 
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show')->with(['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
