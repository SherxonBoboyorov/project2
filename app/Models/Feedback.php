<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

    protected $fillable = [
        'fullname',
        'phone_number',
        'content',
        'video'
    ];


    public static function uploadVideo($request): ?string
    {
        if ($request->hasFile('video')) {

            $request->file('video')
                ->move(
                    public_path() . '/upload/videos/' . date('d-m-Y'),
                    $request->file('video')->getClientOriginalName()
                );
            return '/upload/videos/' . date('d-m-Y') . '/' . $request->file('video')->getClientOriginalName();
        }

        return null;
    }

    public static function updateVideo($request, $videos): string
    {
        if ($request->hasFile('video')) {
            if (File::exists(public_path() . $videos->video)) {
                File::delete(public_path() . $videos->video);
            }

            $request->file('video')
                ->move(
                    public_path() . '/upload/videos/' . date('d-m-Y'),
                    $request->file('video')->getClientOriginalName()
                );
            return '/upload/videos/' . date('d-m-Y') . '/' . $request->file('video')->getClientOriginalName();
        }

        return $videos->video;
    }
}
