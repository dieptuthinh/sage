@extends('layouts.app')
   
@section('content')
<!-- @session('content') -->

<section class="py-5 font-sans min-h-screen -mb-10 leading-normal text-black">
    <h2 class="text-4xl mb-4">{{$post->post_title}}</h2>
    {!!$post->post_content!!}

    <div class="row mt-5 d-flex justify-content-between container-fluid">
        @foreach($projects as $project)
        <div class="col-md-4 text-center " style="width: 300px; height: 300px;">
            <a href="{{$project->permalink}}" class="text-white no-underline">
                <div class="bg-secondary flex flex-col p-3 rounded">
                    <img class="rounded mb-3 img-thumbnail"
                     src="{{$project->thumb}}" alt="{{$project->alt}}"
                        title="{{$project->title}}"
                        style="width: 200px; height: 200px;">
                    <p class="font-semibold uppercase text-lg">{{$project->title}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>

</section>
<!-- @endsession -->
@endsection