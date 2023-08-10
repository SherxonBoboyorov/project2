<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Integration extends Model
{
    use HasFactory;

    protected $table = 'integrations';

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
                    public_path() . '/upload/integration/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/integration/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $integration): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $integration->image)) {
                File::delete(public_path() . $integration->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/integration/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/integration/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $integration->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/integration/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/integration/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }

}
