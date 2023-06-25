@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-sm bg-primary navbar-primary sticky-top">
  <div class="container">
    <a class="navbar-brand text-light" href="{{ route('home') }}">MyInventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{ route('home') }}"  class="nav-link text-light"  >Dashboard</a>
        </li>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown">Product</a>
  <ul class="dropdown-menu bg-primary">
    <li><a class="dropdown-item text-light" href="{{ route('barangs.index') }}">List Product</a></li>
    <li><a class="dropdown-item text-light" href="{{ route('barangs.create') }}">Add Product</a></li>
  </ul>
</li>    
<li class="nav-item">
          <a class="nav-link text-light" href="{{ route('profile') }}">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
