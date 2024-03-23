<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class Contact extends Controller
{
     public function __invoke()
    {
        SEOTools::setTitle('Tailwind CSS Developer | Frontend Developer');
        SEOTools::setDescription('Discover expert Tailwind CSS skills from a dedicated frontend developer. Elevate your website with Alpine.js.  let\'s create a standout online presence!');
        SEOTools::opengraph()->setUrl('http://coder-x.com');
        SEOTools::setCanonical('http://coder-x.com');
        SEOTools::opengraph()->addProperty('type', 'Portfolio');
        SEOTools::twitter()->setSite('@subtain_farooq');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');

        return view('pages.contact');
    }
}
