<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Feedback;
use App\Models\HouseImage;
use App\Models\Integration;
use App\Models\Number;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Promotional;
use App\Models\Slider;
use Illuminate\Http\Request;

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
            'promotionals'
        ));
    }

    public function uploadVideo(Request $request)
    {
       $this->validate($request, [
          'fullname' => 'required|string|max:255',
          'phone_number' => 'required|string|max:55',
          'content' => 'required',
          'video' => 'required|file|mimetypes:video/mp4',
    ]);

        $video = new Feedback();
        $video->fullname = $request->fullname;
        $video->phone_number = $request->phone_number;
        $video->content = $request->content;

      if ($request->hasFile('video'))
      {
        $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
        $video->video = $path;
      }
        $video->save();
    
   }
}
