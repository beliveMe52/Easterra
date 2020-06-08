<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Qiuz;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!isset($request->login) or !isset($request->password)) {
          return $this->login($request);
        }
        $admin = Admin::first();
        if($request->login == $admin->login and $request->password == $admin->password) {
           $quizs = Qiuz::where('active', 0)->get();
           return view('admin', ['quizs' => $quizs, 'l' => $request->password , 'a' => $request->login ]);
        } else {
            return $this->login($request);
        }

    }

    public function login(Request $request)
    {
        return view('login');
    }
    public function like($id, Request $request)
    {
         $quiz = Qiuz::find($id);
         $quiz->active = 1;
         $quiz->save();
         return $this->index($request);
    }
    public function dislike($id, Request $request)
    {
         Qiuz::where('id', $id)->delete();
           return $this->index($request);
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
