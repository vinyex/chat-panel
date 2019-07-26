@section('title', 'Chat Panel | Dashboard')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="alert alert-success welcome-panel" role="alert">
                Welcome back <strong>{{ ucwords(auth()->user()->name) }}!</strong>
                <i class="fa fa-fw fa-eye"></i>
            </div>
        </div>
    </div>
</div>
@endsection
