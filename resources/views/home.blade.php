@section('title', 'Chat Panel | Dashboard')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <div class="alert alert-success welcome-panel" role="alert">
                Hi <strong>{{ ucwords(auth()->user()->name) }}!</strong><br>
                Click me for info
            </div>
        </div>
    </div>

    <div class="row justify-content-center text-center">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/profile.svg') }}" class="card-img-top" alt="Cover Chat" style="max-height: 230px;overflow: hidden;object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">User</h5>
                    <p class="card-text">For update your profile.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="{{ url('profile') }}">
                            <h6 class="text-muted">Click here <span class="fa fa-fw fa-chevron-right"></span> </h6>
                        </a>
                    </small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/chat.svg') }}" class="card-img-top" alt="Cover Chat" style="max-height: 230px;overflow: hidden;object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Chat</h5>
                    <p class="card-text">Start chating here.</p>
                </div>
                <div class="card-footer">
                    <a href="{{ url('chat') }}">
                        <h6 class="text-muted">Click here <span class="fa fa-fw fa-chevron-right"></span></h6>                    
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        $('.welcome-panel').on('click', function(){
            Swal.fire({
                title: 'Dashboard Menu',
                text: 'User for your profile, and Chat for start chatting.',
                type: 'info',
                confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Great!',
            })
        })
    </script>
@endsection