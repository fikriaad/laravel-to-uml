<?php

namespace Fikriaad\LaravelToUML\Http\Controllers;

use Fikriaad\LaravelToUML\Facades\LaravelToUML;

class LaravelToUMLController extends Controller {
    public function index() {
        $source = LaravelToUML::create()->getSource();
        return view('laravel-to-uml::uml', compact('source'));
    }
}