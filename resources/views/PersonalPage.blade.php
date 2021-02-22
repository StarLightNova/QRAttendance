@extends('layouts.app')

@section('content')
    <div class="row text-center m-0 p-0">
        <div id="personal-page-container" class="container border p-3 text-center">
            <h1>Your Personal Data</h1>
            <div class="row d-flex justify-content-center align-items-center flex-wrap">
                <div class="col-md-6 text-md-left">
                    <div class="col-6 d-flex flex-wrap">
                        <div class="col-6">Surname: </div>
                        <div class="col-6"> {{$user->last_name}}</div>
                    </div>
                    <div class="col-6 d-flex flex-wrap">
                        <div class="col-6">Name: </div>
                        <div class="col-6"> {{$user->name}}</div>
                    </div>
                    <div class="col-6 d-flex flex-wrap">
                        <div class="col-6">Email: </div>
                        <div class="col-6"> {{$user->email}}</div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>Personal QR Code</h3>
                    <div class="container-fluid">
                        <img class="img-thumbnail" src="data:image/svg+xml;base64,{{$user->user_qr}}" alt="personal qr code">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
