<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Sheets;

class Home extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Sheets $sheets)
    {
        return view('pages.home', [
            'projects' => $sheets->all('projects'),
        ]);
    }
}
