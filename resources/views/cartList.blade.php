@extends('index')
@section('content')
    
<br><br>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col" class=" text-center">Operations</th>
          </tr>
        </thead>
        <tbody >
            <?php $total=0; ?>
            @foreach ($products as $item)
                <tr>
                    <td><a style="text-decoration: none; color: black" href="/details/{{$item->id}}">{{$item->name}}</a></td>
                    <td>{{$item->cart_quantity}}</td>
                    <td>{{$item->price}}</td>
                    <?php
                        $total = $total+($item->cart_quantity*$item->price);
                    ?>
                    <td  class=" text-center">
                        <a class="btn btn-danger" href="/remove/{{$item->cart_id}}">Remove</a>
                        
                    </td>
                </tr>
            @endforeach
                <tr>
                    <td><b>Total :</b></td>
                    <td></td>
                    <td><b>$ {{$total}}</b></td>
                    <td></td>

                </tr>
          
        </tbody>
      </table>
      <br>
      <a style="float: right" href="/ordernow" class="btn btn-success">Order Now</a>
      <br><br>
</div>









<br><br>
@endsection