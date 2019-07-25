@section('title', 'Conversation')

@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Vue Components Down Here --}}
    <chats :user="{{ auth()->user() }}"></chats>
</div>
@endsection