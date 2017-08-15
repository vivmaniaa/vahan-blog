<?php

namespace App\Http\Controllers;

use App\post;

class PagesController extends Controller{

    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();        
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout(){
        $first_name = 'vivek';
        $last_name = 'singh';
        $fullname = $first_name.' '.$last_name;
        $data['first_name'] = $first_name;
        $data['last_name'] = $last_name;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }

    public function getContact(){
        return view('pages.contact');
    }


}