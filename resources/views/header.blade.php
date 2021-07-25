<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartItemNumbers();
}


?>


<nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 0.2px solid rgb(235, 233, 233)">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">MyShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cart-list">Cart({{$total}})</a>
          </li>
          <li class="nav-item">
            <form class="d-flex" method="GET" action="/search">
                <input name="query" class="search-input form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </li>
        </ul>
        @if(Session::has('user'))
        <ul class="navbar-nav" style="margin-right: 20px">
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('user')['name']}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                </ul>
              </li>
        </ul>
        @else
        <a class="btn btn-outline-primary" href="/login">Login</a>
        <a class="btn btn-primary" href="/register">Register</a>
        @endif
      </div>
   
    </div>
   
  </nav>
  



