<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\UploadService;
use App\Models\Subcategory;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    private UploadService $uploadService;
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }
    public function videoForm()
    {
        return view('admin.video.index');
    }

    public function storeVideo(Request $request , Subcategory $subcategory){
        $data = $request->validate([
//            "title_ky"=>"required",
            "video_ky"=>"required",
            "video_tr"=>"required",
//            "title_tr"=>"required"
        ]);
        $data['video_ky'] = $this->uploadService->upload($data['video_ky'], 'videos');
        $data['video_tr'] = $this->uploadService->upload($data['video_tr'], 'videos');
//        $result = $this->uploadService->upload($data);
        Video::create($data);
        return redirect()->route('admin.subcategory.index');

//        Video::create([
//            "video_ky" => $request,
//            "video_tr" => $request
//        ]);

//        $service = new UploadService();
//        $video_tr = $service->upload($data['video_tr'],'videos');
//        $video_ky = $service->upload($data['video_ky'], 'videos');
//        dd($data, $video_ky,$video_tr);
    }

}
