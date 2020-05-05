@extends('admin.master')
@section('title','Form Show')
@section('content')

   <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
        <h3>Show User</h3>
         <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        <div class="col-md-6">
            <div class="panel-body">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
          
        </main>
    </div>
</div>
<
@endsection