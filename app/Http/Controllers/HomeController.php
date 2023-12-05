<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response=Http::get('https://apps.rpitssr.edu.kh/api/sliders');
        $data['slides']=$response->json();
//         dd($data['slides']);
        return view('home.index',$data);
    }
    public function about()

    {
        $response=Http::get('https://apps.rpitssr.edu.kh/api/front-teachers');
        $data['teachers']=$response->json();
//        dd($data['teachers']);
        return view('about.index_about',$data);
    }
    public function blog()
    {
        return view('blog.index_blog');
    }
    public function contact()
    {
        return view('contact.index_contact');
    }
    public function courses()
    {
        return view('course.index_courses');
    }
    public function event()
    {
        return view('event.index_event');
    }
    public function teacher()
    {
        $response=Http::get('https://apps.rpitssr.edu.kh/api/front-teachers');
        $data['teachers']=$response->json();
//        dd($data['teachers']);
        return view('teacher.index_teacher',$data);
    }
    public function gallery()
    {
        return view('gallery.index_gallery');
    }
    public function login()
    {
        return view('login.index_login');
    }
    public function register()
    {
        return view('register.index_register');
    }
    public function notice()
    {
        return view('notice.index_notice');
    }
}