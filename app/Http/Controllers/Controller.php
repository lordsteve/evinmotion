<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function indicators() {
        $indicators = new \stdClass();
        $indicators->home = false;
        $indicators->whatIsEv = false;
        $indicators->products = false;
        $indicators->incentives = false;
        $indicators->contactUs = false;
        $indicators->aboutUs = false;
        $indicators->news = false;
        return $indicators;
    }

    function home() {
        $indicators = $this->indicators();
        $indicators->home = true;
        return view('home', compact('indicators'));
    }

    function whatIsEv() {
        $indicators = $this->indicators();
        $indicators->whatIsEv = true;
        return view('what-is-ev', compact('indicators'));
    }

    function products() {
        $indicators = $this->indicators();
        $indicators->products = true;
        return view('products', compact('indicators'));
    }

    function incentives() {
        $indicators = $this->indicators();
        $indicators->incentives = true;
        return view('incentives', compact('indicators'));
    }

    function contactUs() {
        $indicators = $this->indicators();
        $indicators->contactUs = true;
        return view('contact-us', compact('indicators'));
    }

    function aboutUs() {
        $indicators = $this->indicators();
        $indicators->aboutUs = true;
        return view('about-us', compact('indicators'));
    }

    function news() {
        $indicators = $this->indicators();
        $indicators->news = true;
        return view('news', compact('indicators'));
    }
}
