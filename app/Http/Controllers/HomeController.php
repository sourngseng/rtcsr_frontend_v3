<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    private $domain;
    public function index()
    {
        // $response=Http::get('https://apps.rpitssr.edu.kh/api/sliders');
        // $response=Http::get('http://localhost:8000/api/sliders');
        $this->domain =env('APP_URL_API');
        $response=Http::get($this->domain .'/sliders');
        $galleries=Http::get($this->domain .'/galleries');
        $data['galleries']=$galleries->json();
        $data['slides']=$response->json();
//         dd($data['slides']);
        return view('pages.home.index',$data);
    }
    public function about()

    {
        $response=Http::get('https://apps.rpitssr.edu.kh/api/front-teachers');
        $data['teachers']=$response->json();
//        dd($data['teachers']);
        return view('pages.about.index_about',$data);
    }
    public function blog()
    {
        return view('pages.blog.index_blog');
    }
    public function contact()
    {
        return view('pages.contact.index_contact');
    }
    public function courses()
    {
        // return view('pages.course.index_courses');
        return view('pages.course.our-courses-list');
    }
    public function courses_detail(){
        return view('pages.course.courses-details');

    }
    public function event()
    {
        return view('pages.event.index_event');
    }
    public function teacher()
    {
        $response=Http::get('https://apps.rpitssr.edu.kh/api/front-teachers');
        $data['teachers']=$response->json();
//        dd($data['teachers']);
        return view('pages.teacher.index_teacher',$data);
    }
    public function gallery()
    {
        return view('pages.gallery.index_gallery');
    }
    public function login()
    {
        return view('pages.login.index_login');
    }
    public function register()
    {
        return view('pages.register.index_register');
    }
    public function notice()
    {
        return view('pages.notice.index_notice');
    }
}