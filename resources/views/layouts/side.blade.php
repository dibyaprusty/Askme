<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-2">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::path() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path() === 'questions' ? 'active' : ''}}" href="{{ route('all_question') }}">Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path() === 'tags' ? 'active' : ''}}" href="{{url('/tags')}}">Tags</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path() === 'profile' ? 'active' : ''}}" href="{{url('/tags')}}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path() === 'ask' ? 'active' : ''}}" href="{{url('/ask')}}">Ask a question</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>