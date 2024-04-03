@extends('layout.master')

@section('container')

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Montserrat';
        margin: 0;
        padding:0;
    }

    .our-team {
        font-weight: 600;
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .container {
        padding-top: 10px;
    }

    h5.card-title {
        text-align: center;
        font-weight: 700;
    }

    /* Menambahkan CSS untuk Flexbox */
    .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
    }

    .card {
    flex: 1 1 0;
    margin: 10px;
    max-width: 400px;
    height: 100%;
    max-height: 550px;
}

    .col-md-4{
        max-height: 550px;
        max-width: 380px;
    }
    .card-body {
        display: flex;
        flex-direction: column;
    }

    .card-img-top {
        max-width: 100%;
        height: auto;
        width: 200px;
        height: 200px;
        object-fit: cover;
        text-align: center;
        margin: 0 auto;
    }

    p{
        text-align: center;
    }
</style>

<h2 class="our-team">Our Team</h2>
<div class="container">

    <div class="row">
        @foreach($data as $key => $value)
        <?php $exp = explode("|",$value->name_nim);
          $img = ($value->image);
        ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{$img}}" class="card-img-top" alt="daniel">
                <div class="card-body">
                    <h5 class="card-title">
                    {{$exp[0]}}
                    </h5>
                    <div class="card-text">
                        <p>{{$exp[1]}}</p>
                    </div>
                    <a href="{{url('profile/'.$value->username)}}" class="btn btn-primary">See more details</a>
                </div>
            </div>
        </div>

        @endforeach
    {{-- <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{asset('img/intj.png')}}" class="card-img-top" alt="daniel">
                <div class="card-body">
                    <h5 class="card-title">Daniel Hendra S</h5>
                    <div class="card-text">
                        <p>2602102145</p>
                    </div>
                    <a href="{{url('profile/daniel')}}" class="btn btn-primary">See more details</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{asset('img/syam.png')}}" class="card-img-top" alt="syam">
                <div class="card-body">
                    <h5 class="card-title">Tsalasa Kale Syamsu M</h5>
                    <div class="card-text">
                        <p>2602168425</p>
                    </div>
                    <a href="{{url('profile/syam')}}" class="btn btn-primary">See more details</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{asset('img/levi.png')}}" class="card-img-top" alt="levi">
                <div class="card-body">
                    <h5 class="card-title">Lavender Nathania A</h5>
                    <div class="card-text">
                        <p>2602108483</p>
                    </div>
                    <a href="{{url('profile/levi')}}" class="btn btn-primary">See more details</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{asset('img/regina.png')}}" class="card-img-top" alt="regina">
                <div class="card-body">
                    <h5 class="card-title">Regina Patricia H</h5>
                    <div class="card-text">
                        <p>2602098614</p>
                    </div>
                    <a href="{{url('profile/regina')}}" class="btn btn-primary">See more details</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{asset('img/intj.png')}}" class="card-img-top" alt="sekar">
                <div class="card-body">
                    <h5 class="card-title">Sekar Ayu N</h5>
                    <div class="card-text">
                        <p>2602166640</p>
                    </div>
                    <a href="{{url('profile/sekar')}}" class="btn btn-primary">See more details</a>
                </div>
            </div>
        </div>
    </div>

 --}}
@endsection
