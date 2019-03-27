<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      // $title = "Welcome to Laravel";
      // return view("pages.index", compact('title'));
      $data = array(
        'title' => "Welcome to Laravel"
      );
      return view("pages.index")->with($data);
    }

    public function about(){
      //$title = "About";
      // return view("pages.about", compact('title'));
      $data = array(
        'title' => "About"
      );
      return view("pages.about")->with($data);
    }

    public function services(){
      // $title = "Services";
      // return view("pages.services", compact('title'));
      $data = array(
        'title' => "Services",
        'services' => ['Web Design', 'Programming', 'SEO']
      );
      return view("pages.services")->with($data);
    }

    public function welcome(){
      return view("welcome");
    }
}
