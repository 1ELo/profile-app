
@extends('layout.master')
@section('container')
<link

<div class="container d-grid col-3 mx-auto">
    @if($errors->any())
        <h4>{{ $errors->first()}}</h4>
    @endif
    <div class="card mt-5">
        <div class="card-header">
            <h2 align="center">Welcome Back.</h2>
        </div>
        <br><br>
        <div class="card-body">
            <form action="{{ url('authenticate')}}" method="POST" id="form1">
            @csrf
            <div class="d-grid gap-2 col-9 mx-auto">
                <label for="email" class="form-tabel"></label>
                <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>

                <br>

            <div class="d-grid gap-2 col-9 mx-auto">
                <label for="password" class="form-tabel"></label>
                <input type="password" class="form-control" name="password" required placeholder="Password">
            </div>


            <div class="text-left mt-3">
                <a href="/Forget Password/confirmation.html">Forget pasword ?</a>
            </div>

            <br><br>

            <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-primary" form="form1" value="submit">LOGIN</button>
            </div>
            </form>
            <br>

            <div class="sign-up">
                <p align="center">Dont have account? <a href="/sign-up/index.html">Sign up</a></p>
            </div>

        </div>

        <br><br><br>

        <div class="card-footer">
            <p>Geng Kepet
            <img src="/img/logo.png" alt="todofly-logo" width="50" sizes="24px">
            </p>
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
