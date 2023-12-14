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
        $this->domain =env('APP_URL_API');
        $data['slides']=Http::get($this->domain .'/sliders')->json();
        $data['blogs']=Http::get($this->domain .'/blogs')->json();
        // dd($data['blogs']);
        return view('pages.blog.index_blog',$data);
    }
    public function blog_details($slug)
    {
        $this->domain =env('APP_URL_API');
        $data['slides']=Http::get($this->domain .'/sliders')->json();
        $data['blog_detail']=Http::get($this->domain .'/blog-details/'.$slug)->json();
        // dd($data['blog_detail']);
        return view('pages.blog.blog_detail',$data);
    }
    public function contact()
    {
        $this->domain =env('APP_URL_API');
        return view('pages.contact.index_contact');
    }
    public function courses()
    {
        $this->domain =env('APP_URL_API');
        // $response=Http::get($this->domain .'/sliders');
        $courses=Http::get($this->domain .'/courses');
        $data['courses']=$courses->json();        
        // return view('pages.course.index_courses');
        return view('pages.course.our-courses-list',$data);
    }
    public function courses_detail(){
        $this->domain =env('APP_URL_API');
        $courses=Http::get($this->domain .'/courses');
        $data['courses']=$courses->json();
        return view('pages.course.courses-details',$data);

    }
    public function event()
    {
        $this->domain =env('APP_URL_API');
        return view('pages.event.index_event');
    }
    public function teacher()
    {
        $this->domain =env('APP_URL_API');
        $response=Http::get('https://apps.rpitssr.edu.kh/api/front-teachers');
        $data['teachers']=$response->json();
//        dd($data['teachers']);
        return view('pages.teacher.index_teacher',$data);
    }
    public function gallery()
    {
        $this->domain =env('APP_URL_API');
        return view('pages.gallery.index_gallery');
    }
    public function login()
    {
        $this->domain =env('APP_URL_API');
        return view('pages.login.index_login');
    }
    public function register()
    {
        $this->domain =env('APP_URL_API');
        return view('pages.register.index_register');
    }
    public function notice()
    {
        return view('pages.notice.index_notice');
    }
}