@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Student</div>
  <div class="card-body">

 <form action="{{ url('student/' .$students->id) }}" method="post">
 @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="Sname" value="{{ $students->Sname }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="Semail" value="{{ $students->Semail }}" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" class="form-control" id="mobile" name="Smobile" value="{{ $students->Smobile }}">
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="Sgender" required>
            <option value="">Select Gender</option>
            <option value="F" {{ $students->Sgender == 'F' ? 'selected' : '' }}>Female</option>
            <option value="M" {{ $students->Sgender == 'M' ? 'selected' : '' }}>Male</option>
            <option value="O" {{ $students->Sgender == 'O' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="status" name="Status"  {{ $students->Status ? 'checked' : '' }}>
        <label class="form-check-label" for="status">
                {{ $students->Status ? 'Active' : 'Inactive' }}
        </label>
    </div>
    <input type="submit" value="Update" class="btn btn-success"></br>
</form>

  </div>
</div>
 
@stop