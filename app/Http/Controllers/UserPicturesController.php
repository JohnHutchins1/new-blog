<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\UserPictures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserPicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $message = "ERROR!!";
        echo "<script type='text/javascript'>alert('$message');</script>";

        $userPictures = new UserPictures;
        $userPictures->user_id = 1;
        $userPictures->img_id = 1;
        $userPictures->added_on = Carbon::now();
        $userPictures->save();
        
        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function show(UserPictures $userPictures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPictures $userPictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPictures $userPictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserPictures  $userPictures
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPictures $userPictures)
    {
        //
    }
}
