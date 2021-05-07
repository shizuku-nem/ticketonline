@extends('layouts.app')
@section('content')

<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('users.update',$user->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="username">username</label>
            <input type="text" class="form-control rounded-0" id="username" placeholder="Username" name="username"
            value="{{$user->username}}">
        </div>
        <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="password">password</label>
            <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection