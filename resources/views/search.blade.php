@extends('index')
@section('content')
    
<br><br>
<div class="container">
    @foreach ($products as $item)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4 justify-content-center">
                <img src="{{$item->gallery}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body" style="height: 82%;">
                    <h3 class="card-title">{{$item->name}}</h3>
                    <p class="card-text">{{$item->description}}</p>
                    
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <div class="card-footer" style="height: 18%;">
                    <span class="card-text"><small class="text-muted">Available</small></span>
                    <a class="btn btn-primary" style="float: right" href="/details/{{$item->id}}">Details</a>
                
                </div>
            </div>
            </div>
        </div>
    @endforeach
    
</div>
<br><br>

@endsection