<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($page)
    {
        $bgImage = ''; 

        switch ($page) {
            case 'home':
                $bgImage = '/images/home-bg.jpg';
                break;
            case 'about':
                $bgImage = '/images/about-bg.jpg';
                break;
            case 'blog':
                $bgImage = '/images/blog-image.jpg';
                break;
            case 'contact':
                $bgImage = '/images/contact-bg.jpg';
                break;
           
        }

      

        return view("website.$page", compact('bgImage'));
    }
}
