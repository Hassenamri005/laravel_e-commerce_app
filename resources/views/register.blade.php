@extends('index')
@section('content')
    

<div class="container text-center" style=" width: 100%; padding: 30px; ">
    <div class="row justify-content-center">
            <main class="form-signin col-4">
                <form method="POST" action="/register">
                    @csrf
                  <img class="mb-4" src="https://image.flaticon.com/icons/png/512/2170/2170153.png" alt="" width="100" height="100">
                  <h1 class="h3 mb-3 fw-normal">Welcome</h1>
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Name</label>
                  </div>
                  <br>
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <br>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <br>
                  <div class="checkbox mb-3">
                    <label>
                      <a href="/register">or Sign in</a> 
                    </label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                  
                </form>
              </main>           
    </div>
</div>

@endsection


