<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title ="welcome to Soutwest Tropicals";
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title ="About Us";
        return view('pages.about');
    }

    public function trees() {
        $title ="Fruit Trees that grow here";
        return view('pages.trees');
    }

 

}
