@extends('index')
@section('content')
    
<div class="container">
    <div class="card mb-3" style="width: 90%; margin-top: 30px">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="{{$data->gallery}}" class="img-fluid rounded-start" alt="...">
          </div>
        
          <div class="col-md-6" style="margin-top: 30px;">
            <form method="POST" action ="/add_to_cart" style="width: 100%; height: 100%;">
            @csrf
                <div class="card-body" style="height: 88%;">
                    <h3 class="card-title">{{$data->name}}</h3>
                    <h2 class="card-title">$ {{$data->price}}</h2>
                    <p class="card-text">{{$data->description}}</p>
                    <br>
                    <input type="hidden" name="product_id" value="{{$data['id']}}">
                    <input type="number" name="quantity" id="quantity" value="1" min="1" max="50" required>
                    
                </div>
                <div class="card-footer" style="height: 12%;">
                    <small>Available</small>
                    <button class="btn btn-primary" style="float: right">Add to Cart</button>     
                </div>
            </form>
          </div>
        </div>
      </div>
</div>
<br><br>


@endsection

