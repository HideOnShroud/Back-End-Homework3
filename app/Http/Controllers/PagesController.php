<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public  function index(){
        $video = Videos::all();
        return view('welcome',['video' => $video]);
    }
}
