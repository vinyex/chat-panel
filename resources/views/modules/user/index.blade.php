@section('title', 'User')

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- <div class="user-photo text-center">
                    <img class="rounded-circle" src="{{ asset('img/homepage.jpg') }}" alt="User Profile" width="50px" height="50px">
                </div> --}}
                <form class="ui form user-form">
                    @csrf
                    <div class="field">
                        <label>Full Name</label>
                        <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
                        <input type="text" id="fullname" name="fullname" placeholder="Full Name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="field">
                        <label>Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" value="{{ Auth::user()->username }}">
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" id="password" name="password" placeholder="Password can be blank">
                    </div>
                    <button class="ui animated button" tabindex="0">
                        <div class="visible content">Update</div>
                        <div class="hidden content">
                            <i class="right arrow icon"></i>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            let idUser = $('#id').val();
            let userForm = $('.user-form');
            let updateUrl = '{{ url("profile/update") }}/'+idUser;
            userForm.on('submit', function (e) { 
                e.preventDefault();
                
                $.ajax({
                    url: updateUrl,
                    type: 'POST',
                    data: userForm.serialize(),
                    success: function(data){
                        Swal.fire({
                            type: 'success',
                            title: 'It\'s updated!',
                            showConfirmButton: false,
                            timer: 2000
                        })
                        window.location.reload();
                    },
                    error: function(data){
                        Swal.fire(
                            'Oops!',
                            'Something went wrong!',
                            'error'
                        );
                    }
                })
            })
        });
    </script>
@endsection