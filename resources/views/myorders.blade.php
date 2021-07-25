@extends('index')

@section('content')

<br>
<h2 style="margin-left: 20px">My Orders list</h2 style="margin-left: 10px">
<br>

</div>  
   <div class="container " style="margin: auto;">
        <div class="row justify-content-center" style="width: 100%; margin: auto">
            <div class="col-sm-6" style="width: 100%; ">
                @foreach($products as $item)
                    <div class="card mb-3" style="padding: 5px; width: 100%; box-shadow: 5px 1px 10px 2px rgb(218, 215, 215); ">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{  $item->gallery }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h2 class="card-title">{{ $item->name }}</h2>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="card-text">Delivery status : {{ $item->status }}</p>
                            <p class="card-text">Quantity : {{ $item->quantity }}</p>
                            <p class="card-text">Name : {{ $item->fullName }}</p>
                            <p class="card-text">Mobile : {{ $item->num_tel }}</p>
                            <p class="card-text">Adress : {{ $item->adress }}</p>
                            <p class="card-text">Payment method : {{ $item->payment_method }}</p>
                            <p class="card-text">Payment status : {{ $item->payment_status }}</p>
                            <button class="btn btn-danger" style="float: right; margin-bottom: 10px">Delete Order</button>     
                                
                            </div>
                        </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
   </div>
<br><br><br>
  


@endsection