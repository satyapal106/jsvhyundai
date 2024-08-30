<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $data['title'] = "Home Page";
        $data['desc']  = "Home Page";
        $data['nav'] = 'home';
        return view('pages.index', $data);
    }
    public function TestDrive(){
        $data['title'] = "Request a Test Drive";
        $data['desc']  = "Test Drive";
        $data['nav'] = 'test-drive';
        return view('pages.test-drive-form', $data);
    }
    public function CarDetail(){
        $data['title'] = "Car-details";
        $data['desc']  = "Car-details";
        $data['nav'] = 'car-details';
        return view('pages.cardetails', $data);
    }
    public function About(){
        $data['title'] = "about";
        $data['desc']  = "about";
        $data['nav'] = "about";
        return view('pages.about', $data);
    }
    public function Contact(){
        $data['title'] = "contact";
        $data['desc']  = "contact";
        $data['nav'] = "contact";
        return view('pages.contact', $data);
    }
    public function Brochure(){
        $data['title'] = "brochure";
        $data['desc']  = "brochure";
        $data['nav'] = "brochure";
        return view('pages.brochure', $data);
    }
    public function Services(){
        $data['title'] = "services";
        $data['desc']  = "services";
        $data['nav'] = "services";
        return view('pages.services', $data);
    }


}
