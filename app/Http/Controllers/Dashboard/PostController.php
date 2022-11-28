<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\IncorrectValetDbCredentialsSolutionProvider;
use Termwind\Components\Raw;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // $posts = Post::where('user_id', Auth::id())->get();
        $category = Category::all();

        return view('dashboard.post.index', compact('posts', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        $category = Category::all();

        return view('dashboard.post.create', compact('posts', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::all();
        $request->validate([
            'title' => ['string',],
            'smallDesc' => ['string',],
            'category' => ['string'],
            'contant' => ['string',],
        ]);

        $image = $request->file('image');
        $data = $request->all();
        if ($request->hasFile('image')) {
            $imageurl = $image->store('image', 'public');
            $data['image'] = $imageurl;
        }
        // $post->create(['user_id'=>auth()->user()->id]);
        $data['user_id'] = Auth::id();
        $post = Post::create($data);

        return redirect('dashboard/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Post $post)
    // {
    //     $post = Post::all();
    //     $user=User::all();
    //     $category=Category::all();
    //     return view('front.details', compact('post','user','category'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $post = Post::where('id')->first();
        $post = Post::findOrFail($id);
        $this->authorize('update', $post);

        // $post = Post::FindOrFail($post);

        // $post = Post::whare('id', $request->id)->get();

        return view('dashboard.post.edit', compact('post', 'category'));
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
        $post = Post::findOrFail($id);
        $this->authorize('update', $post);

        $post->update($request->all());
        $post->save();
        return redirect('dashboard/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::all();
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('dashboard/post');
    }
}
