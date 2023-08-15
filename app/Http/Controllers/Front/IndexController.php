<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {
        //
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
