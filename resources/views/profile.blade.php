@extends('layout.master')
@section('container')

<link rel="stylesheet" href="{{ asset('/css/app.css') }}">

<style>
    .card {
        max-width: 1200px;
        margin: 30px auto 0;
    }

    .story-text {
        text-align: justify;
    }
</style>

<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset($data->image)}}" class="img-fluid rounded-start" alt="daniel">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $data->name_nim}}</h5>
                <h6 class="card-text">{{ $data->tgl_lahir}}</h6>
                <h6 class="card-text">{{$data->hobi}}</h6>
                <h6 class="card-text">{{$data->mbti}}</h6>
                <h6 class="card-text">{{$data->insta_username}}| <a href={{$data->insta_link}}>Link     </a></h6>
                <br>
                <h5 class="story-judul">{{$data->judul_story}}</h5>
                <p class="story-text">{{$data->story}}</p>
            </div>
        </div>
    </div>
</div>

@stop
