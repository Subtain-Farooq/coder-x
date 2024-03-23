<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Sheets;
use Artesaos\SEOTools\Facades\SEOTools;

class Projects extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function projects(Sheets $sheets)
    {
        SEOTools::setTitle('Tailwind CSS Developer | Frontend Developer');
        SEOTools::setDescription('Discover expert Tailwind CSS skills from a dedicated frontend developer. Elevate your website with Alpine.js.  let\'s create a standout online presence!');
        SEOTools::opengraph()->setUrl('http://coder-x.com');
        SEOTools::setCanonical('http://coder-x.com');
        SEOTools::opengraph()->addProperty('type', 'Portfolio');
        SEOTools::twitter()->setSite('@subtain_farooq');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');

        return view('pages.projects', [
            'projects' => $sheets->all('projects'),
        ]);
    }

    public function project(Sheets $sheets, $project)
    {
        SEOTools::setTitle('Tailwind CSS Expert | Frontend Developer');
        SEOTools::setDescription('Discover expert Tailwind CSS skills from a dedicated frontend developer. Elevate your website with Alpine.js.  let\'s create a standout online presence!');
        SEOTools::opengraph()->setUrl('http://coder-x.com');
        SEOTools::setCanonical('http://coder-x.com');
        SEOTools::opengraph()->addProperty('type', 'Portfolio');
        SEOTools::twitter()->setSite('@subtain_farooq');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        
        return view('pages.project', [
            'project' => $sheets->get($project)
        ]);
    }
}
