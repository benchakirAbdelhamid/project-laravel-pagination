<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomControleur extends Controller
{
    public function __construct()
    {
        // http://127.0.0.1:8000/meth3?age=25
        // http://127.0.0.1:8000/meth2?age=25
        // http://127.0.0.1:8000/meth1?age=25
        // $this->middleware('age');

        // $this->middleware('age')->only('methode1');
        // http://127.0.0.1:8000/meth2
        // http://127.0.0.1:8000/meth3
        // http://127.0.0.1:8000/meth1?age=25

        $this->middleware('age')->except('methode1');
        // http://127.0.0.1:8000/meth1
        // http://127.0.0.1:8000/meth2?age=25
        // http://127.0.0.1:8000/meth3?age=25☻
    }
    public function methode1()
    {
        return 'methode 1 ';
    }
    public function methode2()
    {
        return 'methode 2';
    }
    public function methode3()
    {
        return 'methode 3 ';
    }
}
