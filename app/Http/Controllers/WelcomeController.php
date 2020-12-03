<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public $name;
    public $surname;

    public function hello(){
        $this->name = 'Gomes';
        $this->surname = 'Supakthanyakit';

        return view('hello.index', ['name'=>$this->name, 'surname'=>$this->surname]);
    }
}
