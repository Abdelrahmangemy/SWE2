@extends('admin.master')
@section('title','Form Insert')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
        <h3>Add New User</h3>
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        <div class="col-md-6">
            <div class="panel-body">
                <form action="{{route('users.store')}}" method="post" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('name')?' has-error':''}}">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Username">
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>


                    <div class="form-group{{$errors->has('email')?' has-error':''}}">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('password')?' has-error':''}}">
                        <label for="password">Password</label>
                        <input type="Password" class="form-control" name="password" id="password" placeholder="password">
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('confirm-password')?' has-error':''}}">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="confirm password">
                        <span class="text-danger">{{$errors->first('confirm-password')}}</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>
        </div>
    </div>
@endsection