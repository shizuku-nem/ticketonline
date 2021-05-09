@extends('layouts.app')
@section('content')
<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('searchtrippost')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="start_point_id">start_point_id</label>
          <input type="number" class="form-control rounded-0" id="start_point_id" placeholder="start_point_id" name="start_point_id">
        </div>
        <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="end_point_id">end_point_id</label>
            <input type="number" class="form-control rounded-0" id="end_point_id" placeholder="end_point_id" name="end_point_id">
          </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="start_time">start_time</label>
          <input type="date" class="form-control rounded-0" id="start_time" placeholder="start_time" name="start_time">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
            search
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection