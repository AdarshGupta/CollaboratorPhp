<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

  <ul class="nav nav-pills flex-column">
    @if (Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="#"> {{ Auth::user()->name }} </a>
      </li>
    @endif
    
    <li class="nav-item">
      <a class="nav-link" href="#">Overview </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Analytics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Export</a>
    </li>
  </ul>

</nav>