@extends('admin.master')
@section('title','List Product')
@section('content')

  <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h3>Users Management</h3>

    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
          </tr>
        </thead>
        <tbody>


        @foreach($users as $user) 

          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>m
            <td>
              <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                          <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>


                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
              

            </td>
          </tr>
        @endforeach 




        </tbody>
      </table>
    </div>
  </main>



@endsection