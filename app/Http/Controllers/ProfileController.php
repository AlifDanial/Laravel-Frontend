<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use DB;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $threads = DB::table('thread')->paginate(4);

        return view ('profile.profile') -> with ('threads', $threads );
    }
}
