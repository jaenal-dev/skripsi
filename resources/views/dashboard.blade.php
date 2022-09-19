@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="title">
        Dashboard
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hi, Selamat Datang <b>{{ Auth::user()->name }}</b></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
