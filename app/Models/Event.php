<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'content_ru',
        'content_uz',
        'frame',
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/event/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/event/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $event): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $event->image)) {
                File::delete(public_path() . $event->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/event/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/event/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $event->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/event/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/event/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
