<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        //collections da passare alla view
        $data = [

        ];
        //pagina da mostrare
        return view('home',$data);
    }
    //
    public function products(){
        //collections da passare alla view
        $data = [

        ];
        //pagina da mostrare
        return view('products',$data);
    }
}
