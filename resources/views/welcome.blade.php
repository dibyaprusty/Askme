<!--
|--------------------------------------------------------------------------
| welcome.blade.php
|--------------------------------------------------------------------------
|
| welcome/index page of the application.
|
-->
@extends('layouts.layout')


@section('content')

<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                   <!-- different navbar options for guest and authenticated users  -->

                    @auth
                        <a href="{{route('home')}}">Home</a>
                        <a href="{{route('help')}}">Help</a>
                        <a href="{{route('all_question')}}">Questions</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        <a href="{{route('all_question')}}">Questions</a>
                        <a href="{{route('help')}}">Help</a>
                    @endauth
                   
                </div>
            @endif


            <!-- page contents -->

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