<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'content_ru',
        'content_uz',
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/article/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/article/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $article): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $article->image)) {
                File::delete(public_path() . $article->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/article/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/article/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $article->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/article/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/article/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
