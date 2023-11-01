<?php

namespace App\Http\Services;

use Illuminate\Http\UploadedFile;

class UploadService
{
    public function upload(UploadedFile $file, $path): string
    {
        $image = $file;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path($path), $imageName);
        return $path.'/'.$imageName;
    }
}
