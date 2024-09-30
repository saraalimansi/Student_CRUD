@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Students</div>
                   
                    <div class="card-body">
                    <a href="{{ url('/student/create') }}" class="btn btn-warning btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @if($message=Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{$message}}
                            </div>
                        @endif
                        @if($message=Session::get('unsuccess'))
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($students)>0)
                                @foreach ($students as $item)
                                

                                        <td>{{ $item->Sname }}</td>
                                        <td>{{ $item->Semail }}</td>
                                        <td>{{ $item->Smobile }}</td>
                                        <td>{{ $item->Sgender }}</td>
                                        <td>{{ $item->Status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                        <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                   @else
                                  <p>Data is not available</p>
                                  @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
