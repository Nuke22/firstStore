<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function showHomePage($info, $id = null)
    {
        dd($info, $id);
        return view('HomePage');
    }
}
