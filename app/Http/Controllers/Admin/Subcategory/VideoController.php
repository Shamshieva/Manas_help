<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }

}
