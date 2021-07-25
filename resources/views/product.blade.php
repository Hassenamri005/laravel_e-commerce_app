@extends('index')

@section('content')
<style>
  .top-mini-nav .row .col-sm a{
    text-decoration: none;
    color: black

  }
  .top-mini-nav .row{
    box-shadow: 0px 1px 10px 3px rgb(214, 214, 214);
    
  }
  .my-products .col .card{
    box-shadow: 0px 1px 10px 3px rgb(214, 214, 214);
    
  }
</style>
<div class="top-mini-nav container card" style="width: 60%;margin-top: 20px">
  <div class="row text-center" style="padding: 10px">
    <div class="col-sm">
      <a href="">
      <i class="fas fa-mobile-alt"></i><br>Mobile
    </a>
    </div>
    <div class="col-sm">
      <a href="">
      <i class="fas fa-tv"></i><br>TV
    </a>
    </div>
    <div class="col-sm">
      <a href="">
      <i class="fas fa-laptop"></i><br>Computers
    </a>
    </div>
    <div class="col-sm">
      <a href="">
      <i class="fas fa-tshirt"></i><br>Clothes
    </a>
    </div>
    <div class="col-sm">
      <a href="">
      <i class="fab fa-bandcamp"></i><br>Accessories
    </a>
    </div>
    <div class="col-sm">
      <a href="">
      <i class="fas fa-bolt"></i><br>Electronics
    </a>
    </div>
  </div>
</div>


<div class="container">
  <div class="my-products row row-cols-1 row-cols-md-4 row-cols-sm-2 g-4" style="margin-top: 25px">
    @foreach ($products as $item)
      <div class="col">
        <div class="card h-100">
          <div class="h-70">
            <img src="{{$item->gallery}}" class="card-img-top" alt="...">
          </div>
          
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <small class="text-muted">$ {{$item->price}}</small>
          </div>
          <div class="card-footer">
            
            <a href="/details/{{$item->id}}" class="btn btn-primary" style="float: right">Details</a>
            <a href="/details/{{$item->id}}" class="btn btn-outline-primary" style="float: right">Add to Cart</a>
          </div>
        </div>
      </div>
    @endforeach    
  </div>  
</div>
<hr>






<br>
<h2 class="container">Products List</h2>
<br>

<!-- section 2 -->
<div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 g-4" style="width: 98%;margin: auto;">
    @foreach ($products as $item)
    

    <div class="card h-90">
      <img src="{{$item->gallery}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
        <p class="card-text">{{$item->description}}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">$ {{$item->price}}</small>
        <a href="/details/{{$item->id}}" class="btn btn-primary" style="float: right">Details</a>
        <a href="/details/{{$item->id}}" class="btn btn-outline-primary" style="float: right">Add to Cart</a>
      
      </div>
    </div>
    @endforeach
  </div>


<br><br>

@endsection

