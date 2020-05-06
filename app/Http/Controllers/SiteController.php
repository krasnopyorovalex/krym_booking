<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}
