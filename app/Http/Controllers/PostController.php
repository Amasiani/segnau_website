<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    
    //Route middleware
    public function __construct()
    {
        $this->middleware('isMember')->except('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        //list trending post
        return view('posts.index', ['posts' => Post::latest('created_at')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        //creates a new blog post
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        //stroring new post
        $user = auth()->user();
        $member = User::find($user->id)->member;
        //dd($user->id);

            $request->validate([
                'title' => 'required|unique:posts',
                'description' => 'required|max:255',
                'image' => 'required|mimes:jpg,png,jpeg,bmp|max:3048',
            ]);
    
            $image = $request->file('image');
            $newImageName = time() . '-' . $request->title . '.' . $image->extension();
           
            $image->move(public_path('public/images/'), $newImageName);
            
            //$post = Post::create([
            //    'title' => $request->input('title'),
            //    'description' => $request->input('description'),
            //    'img' => $newImageName,
            //]);
            //$post = new Post($request->only(['title', 'description', 'img' => $newImageName]));
            $post = Post::create([
                'title' => $request->title,
                'description' => $request->description,
                'img' => $newImageName,
                //'member_id' => $member_id,
            ]);
            dd($post);
            $post->member()->associate($member);
            //$post->save();

            return redirect('/posts')->with('success', 'Post created.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Blog post detail view
        return view('posts.show', ['post' => Post::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
