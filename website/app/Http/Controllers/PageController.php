<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($page)
    {
        // return view("website.$page");
        $bgImage = ''; // Default value

        // Set background image based on the page
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
            // Add more cases for other pages as needed
        }

      

        return view("website.$page", compact('bgImage'));
    }
}
