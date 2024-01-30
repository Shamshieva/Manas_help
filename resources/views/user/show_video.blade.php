{{--show_video.blade.php--}}
@extends('user.layouts.app')

@section('content')
    <div class="mb-4">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
            <div class="text-center p-4 h-auto md:h-40 lg:h-20">
                <a href="{{ route('user.show', $video->id) }}" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                    {{ $video->title_ky }}
                </a>
            </div>
{{--            <video--}}
{{--                id="my-video"--}}
{{--                class="video-js"--}}
{{--                controls--}}
{{--                preload="auto"--}}
{{--                width="640"--}}
{{--                height="264"--}}
{{--                data-setup="{}"--}}
{{--            >--}}
{{--                <source src="{{ route('video.show', ['video' => $video->id]) }}" type="video/mp4" />--}}
{{--                <p class="vjs-no-js">--}}
{{--                    To view this video please enable JavaScript, and consider upgrading to a--}}
{{--                    web browser that--}}
{{--                    <a href="https://videojs.com/html5-video-support/" target="_blank"--}}
{{--                    >supports HTML5 video</a--}}
{{--                    >--}}
{{--                </p>--}}
{{--            </video>--}}
{{--            @dd(public_path($video->video_path_ky))--}}
{{--            @dd(storage_path($video->video_path_ky))--}}


            <video id="myVideo" width="640" height="360" controls onclick="startWatch()">
                <source src="{{ "/".$video->video_path_ky }}" type="video/mp4" >
                Your browser does not support the video tag.
            </video>

        </div>
    </div>
    <script>
        function startWatch(videoId)
        {
            // console.log(localStorage.getItem('manas_help_users_token'))
            // console.log("start Watch");

            let userToken = localStorage.getItem('manas_help_users_token');
            let url = "{{ route('user.startWatch') }}";
            if (userToken){
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        'Authorization': 'Bearer ' + userToken,
                    },
                    body: JSON.stringify({
                        video_id: videoId,
                    }),
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        console.log('started to watch');
                    })
                    .catch(error => console.error('Error: ', error));
            } else {
                console.log("User not authenticated");
            }

        }
    </script>
@endsection
