<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public function index ()
    {
        $projects = 'morguh';
        return view('test_development')
            ->with('projects', $projects);
    }

}
// heb nog database nodig. en hier komt de data om te laten zien van daan
//$projects