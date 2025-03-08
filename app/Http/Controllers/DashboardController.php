<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function AboutPage()
    {
        return view('pages.about-page');
    }

    public function ContactPage()
    {
        return view('pages.contact-page');
    }

    public function PortfolioPage()
    {
        $projects = DB::table('projects')->get();
        return view('pages.portfolio-page', compact('projects'));
    }

    public function ServicesPage()
    {
        return view('pages.service-page');
    }

    public function BlogPage(){
        return view('pages.blog-page');
    }


}
