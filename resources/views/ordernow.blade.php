@extends('index')
@section('content')
    
<br><br>

<div class="container">
    <h2>Cart list</h2>
    <br>
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
      
      
</div>

<hr>


<br>
<div class="container">
    
<h3>Shipping</h3>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <table class="table table-striped">
                
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td><b>$ {{$total+10}}<b></td>
                  </tr>
                </tbody>
              </table>
        </div>  
    </div>
    <br>
    
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div>
                <form action="/orderplace" method="POST">
                  @csrf
                  <label for="pwd" class="form-label"><b>Personal informations :</b></label><br>
                  <div class="mb-3">
                    <input name="name" type="text" placeholder="Enter your Name ..." class="form-control">
                  </div>
                  <div class="mb-3">
                    <input name="num_tel" type="tel" placeholder="Enter your Mobile number ..." class="form-control">
                  </div>
                    <div class="mb-3">
                      <textarea name="adress" type="textarea" placeholder="Enter your adress ..." class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label"><b>Payment method :</b></label><br>
                      <input type="radio" name="payment" value="card"><span>  Visa/Master Card</span><br>
                      <input type="radio" name="payment" value="bank"><span>  Bank account</span>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-success">Order Now</button>
                  </form>
            </div>  
        </div>
    </div>
</div>
<div style="margin-bottom: 140px"></div>

</div>





<br><br>
@endsection
