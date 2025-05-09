@extends('front-end.layout.app')

@section('title', 'Home Page')

@section('content')

{{-- <form action="{{ url('/register-store') }}"  method="POST"> --}}
<form action="{{ route('register.store') }}" method="POST">
@csrf

{{-- ___________________card______________________________ --}}
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">

        <div class="card" >
            <div class="card-body">
              <h5 class="card-title py-3">Registration</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"></h6>

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Example input placeholder">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">phone</label>
                <input type="text" name="phone" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">city</label>
                <input type="text" name="city" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
              </div>

              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="formGroupExampleInput2" placeholder="Another input placeholder"></textarea>
              </div>

              <button type="submit"  class="btn bg-primary">Submit</button>
            </div>
          </div>



    </div>
    <div class="col-3"></div>
</div>

  {{-- ______________________________________________________ --}}


</form>
@endsection
