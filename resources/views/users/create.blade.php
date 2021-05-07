@extends('layouts.app')
@section('content')
<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('users.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="username">username</label>
          <input type="text" class="form-control rounded-0" id="username" placeholder="Username" name="username">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="password">password</label>
          <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
            confirm
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection