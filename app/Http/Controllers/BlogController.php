<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \TCG\Voyager\Models\Post;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $post_per_page = 5;
        $posts = Post::
        forPage($request->page, $post_per_page)
        ->get();

        $posts_count = round(Post::count() / $post_per_page);



        if ($posts_count == 1 ) {
          $next = 1;
        } else {
          $next =  $request->page +1;
        }
        if ($posts_count == $request->page) {
            $next =  $request->page;
        }
        if ($posts_count == 1  or $request->page == 1) {
          $prev = 1;
        } else {
          $prev =  $request->page -1;
        }


        //dd($posts_count);
        $all = [];

        foreach ($posts as $key ) {
          $date = Carbon::parse($key->created_at)->format('d.m.Y');
          //dd($date);
      //    dd($key);
          $all[] = [
            'id' => $key->id,
            'photo' => $key->image,
            'title' => $key->title,
            'text' => $key->excerpt,
            'date' => $date
          ];
        }
    //    dd($all);

        return view('blog.blog', ['posts' => $all, 'page_count' => $posts_count, 'next' => $next, 'prev' => $prev]);
    }

    public function detail($id)
    {
        $post = Post::
        where('id', $id)
        ->first();



        $date = Carbon::parse($post->created_at)->format('d.m.Y');

        $return[] = [
          'title' => $post->title,
          'text' => strval($post->body),
          'date' => $date
        ];

        return view('blog.detail', ['post' => $return])  ;
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
