<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Section for editing website icon
     */
    public function iconSection() {
        return view('rockstar::admin.icon');
    }

    /**
     * Section for editing home images
     */
    public function homeSection() {
        return view('rockstar::admin.home');
    }

    /**
     * Section for editing band images and text
     */
    public function bandSection() {
        return view('rockstar::admin.band');
    }

    /**
     * Section for editing tour upcoming dates
     */
    public function tourSection() {
        return view('rockstar::admin.tour');
    }

    /**
     * Section for editing contact form image
     */
    public function contactSection() {
        return view('rockstar::admin.contact');
    }

    /**
     * Section for editing social links on footer
     */
    public function socialSection() {
        return view('rockstar::admin.social');
    }
}
