<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function courses(){
        return view('pages.courses');
    }
    public function about(){
        return view('pages.about');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function gelary(){
        return view('pages.gelary');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function addmision(){
        return view('pages.addmision');
    }
    public function staff(){
        $staff=Staff::all();
        return view('pages.staff',compact('staff'));
    }
}
