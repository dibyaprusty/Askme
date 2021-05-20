<!--
|--------------------------------------------------------------------------
| Help.blade.php
|--------------------------------------------------------------------------
|
| Help page.
|
-->
@extends('layouts.app')


@section('content')

    <!-- shows side bar if authenticated else blank. -->

    @auth
        @include('layouts.side')
    @else
    <div class="container" style="margin-top:30px">
        <div class="row">
        <div class="col-sm-2">
        </div>
    @endauth

    <div class="col-sm-9">
        <h2>Help options</h2>
        </br>

        <!-- Oprion 1 -->
        
        <div class="border p-2 bg-white">
            <p>How to change Password?</p>

            <p>Click on forget password -> Enter email Id -> Click on the reset link sent in your email -> Change your password.</p>        
        </div>
        <br>

        <!-- option 2 -->

        <div class="border p-2 bg-white">
            <p>How to change Password?</p>

            <p>Click on forget password -> Enter email Id -> Click on the reset link sent in your email -> Change your password.</p>        
        </div>
    </div>

  </div>
</div>
@endsection
