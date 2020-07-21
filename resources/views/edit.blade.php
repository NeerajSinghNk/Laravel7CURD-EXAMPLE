@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Student Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.update', $studentEdit->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $studentEdit->name }}"/>
          </div>
          <div class="form-group">
              <label for="symptoms">Address :</label>
              <textarea rows="5" columns="5" class="form-control" name="address">{{ $studentEdit->address }}</textarea>
          </div>
          <div class="form-group">
              <label for="phone">Phone :</label>
              <input type="text" class="form-control" name="phone" value="{{ $studentEdit->phone }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection