@extends('layout')


@section('content')

<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{route('help')}}">Help</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        <a href="{{route('help')}}">Help</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <span style="color: red;">Ask</span>me
                </div>
                <div class="m-b-md">
                    Get Your Doubts Solved.
                </div>
            </div>
        </div>

@endsection