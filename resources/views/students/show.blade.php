@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
    <h5 class="card-title">Name : {{ $students->Sname }}</h5>
    <p class="card-text">Email : {{ $students->Semail }}</p>
    <p class="card-text">Mobile : {{ $students->Smobile }}</p>
    <p class="card-text">Gender : {{ $students->Sgender }}</p>
    <p class="card-text">Status : {{ $students->Status ? 'Active' : 'Inactive' }}</p>
    <a href="{{ url('/student/' . $students->id . '/edit') }}" class="btn btn-primary">Edit</a>
    <a href="{{ url('/student') }}" class="btn btn-secondary">Back to List</a>
  </div>
</div>
       
    </hr>
  
  </div>
</div>
@endsection