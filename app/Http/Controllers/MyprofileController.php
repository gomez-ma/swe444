<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyprofileController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function profile(){
        return view('profile.profile');
    }

    public function education(){
        return view('profile.education');
    }

    public function talent(){
        return view('profile.talent');
    }

    public function profession(){
        return view('profile.profession');
    }

    public function teacher(){
        return view('profile.teacher');
    }

    public function contact(){
        return view('profile.contact');
    }
}
