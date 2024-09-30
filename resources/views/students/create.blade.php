@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
      @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control"  placeholder="Enter your Name" id="name" name="Sname" >
                @error('Sname')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" id="email" name="Semail">
                @error('Semail')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control"  placeholder="Enter your Mobile Number" id="mobile" name="Smobile" >
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="Sgender">
                    <option value="">Select Gender</option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                    <option value="O">Other</option>
                </select>
            </div>
            <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="Status" value="1" {{ old('Status') ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Active</label>
            </div>
                           
                           
        <input type="submit" value="Save" class="btn btn-info"></br>
    </form>
   
  </div>
</div>
 
@stop