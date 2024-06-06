<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workwith;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Client;
use App\Models\Header;
use App\Models\Industry;
use App\Models\Ourtech;
use App\Models\Project;
use App\Models\Review;
use App\Models\Stage;
use App\Models\Team;
use App\Models\Service;

class HomePageController extends Controller
{
    public function index(){
        $header = Header::latest()->first();
        $services = Service::all();
        $projects = Project::all();
        $workwiths = Workwith::all();
        $blogs = Blog::all();
        $casestudys = CaseStudy::all();
        $clients = Client::all();
        $industries = Industry::all();
        $ourtechs = Ourtech::all();
        $reviews = Review::all();
        $teams = Team::all();
        $stages = Stage::all();

        return view('welcome', compact(
            'header',
            'services',
            'projects',
            'workwiths',
            'blogs',
            'casestudys',
            'clients',
            'industries',
            'ourtechs',
            'reviews',
            'teams',
            'stages',
        ));

    }
}
