<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Sheets;

class Projects extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function projects(Sheets $sheets)
    {
        return view('pages.projects', [
            'projects' => $sheets->all('projects'),
        ]);
    }

    public function project(Sheets $sheets, $project)
    {
        return view('pages.project', [
            'project' => $sheets->get($project)
        ]);
    }
}
