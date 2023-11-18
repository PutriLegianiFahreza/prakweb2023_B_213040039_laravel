@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
    <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center ">Registration form</h1>
            <form>
              <div class="form-floating">
                <input type="text" name="name" class="form-control id="name" 
                placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control id="username" 
                placeholder="Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control id="email" 
                placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" 
                placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
          </main>
    </div>
</div>
    </div>
</div>

@endsection