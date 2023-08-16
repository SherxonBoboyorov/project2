<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateVideo;
use App\Models\Article;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Feedback;
use App\Models\HouseImage;
use App\Models\Integration;
use App\Models\Number;
use App\Models\Options;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Promotional;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $pages = Page::all();
        $houseimages = HouseImage::orderBy('created_at', 'DESC')->get();
        $articles = Article::orderBy('created_at', 'DESC')->get();
        $events = Event::orderBy('created_at', 'DESC')->get();
        $faqs = Faq::orderBy('created_at', 'DESC')->get();
        $partners = Partner::orderBy('created_at', 'DESC')->get();
        $numbers = Number::orderBy('created_at', 'DESC')->get();
        $integrations = Integration::orderBy('created_at', 'DESC')->get();
        $promotionals = Promotional::orderBy('created_at', 'DESC')->get();
        $options = Options::orderBy('created_at', 'DESC')->get();

        return view('front.index', compact(
            'sliders',
            'pages',
            'houseimages',
            'articles',
            'events',
            'faqs',
            'partners',
            'numbers',
            'integrations',
            'promotionals',
            'options'
        ));
    }


    public function saveCallback(CreateVideo $request)
    {
        $data = $request->all();

        // dd($request);
        $data['video'] = Feedback::uploadVideo($request);


        if (Feedback::create($data)) {
           return back()->with('message', 'Your application has been successfully sent');
        }
         return back()->with('message', 'unable to sending');
    }

}
