@extends('layouts.app')

@push('css')
  <link href="{{ url('css/style.css') }}" rel="stylesheet">
@endpush

@push('js')
<script src="{{ url('js/jquery-1.10.1.min.js') }}"></script>
<script src="{{ url('js/script.js') }}"></script>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Chat Control') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div id="chat-sidebar">
        @foreach(App\Models\User::all() as $user)
        <div id="sidebar-user-box" class="100" >
            <img src="{{ url('image/user.png') }}" />
            <span id="slider-username">{{ $user->name }} </span>
            <span class="user_status online">&nbsp;</span>
        </div>
        @endforeach
    </div>

</div>
@endsection
