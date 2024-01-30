<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Video;
use App\Models\ViewVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class VideoController extends Controller
{


    public function show(Video $video)
    {
        $path = storage_path('/video/video.mp4');

        if (!file_exists($path)) {
            abort(404);
        }

        $file = file_get_contents($path);
//        $type = mime_content_type($path);

        return Response::make($file, 200, [
            'Content-Type' => 'video/mp4',
            'Content-Disposition' => 'inline; filename="' . $video . '"',
        ]);
    }


    public function saveView(User $user, Video $video)
    {
        $hasWatched = ViewVideo::where('user_id', $user->id)
            ->where('video_id', $video->id)
            ->exists();

        if (!$hasWatched){
            ViewVideo::create([
                'user_id' => $user->id,
                'video_id' => $video->id,
                'time' => now(),
            ]);
        }
    }



    public function startWatch($videoId, $token)
    {
        $user = User::where('token', $token)->first();

        if($user) {
            $hasWatched = ViewVideo::where('user_id', $user->id)
                ->where('video_id', $videoId)
                ->exists();

            if (!$hasWatched){
                ViewVideo::create([
                    'user_id' => $user->id,
                    'video_id' => $videoId,
                    'time' => now(), // You may want to track the time the user watched the video
                ]);
                return view('user.watch_video', ['videoId' => $videoId, 'user' => $user]);
            } else {
                abort(404, 'User not found');
            }
        }
    }
}
