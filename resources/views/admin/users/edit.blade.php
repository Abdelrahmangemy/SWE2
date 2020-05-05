@extends('admin.master')
@section('title','Form Edit')
@section('content')
   <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
        <h3>Edit User</h3>
         <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <form action="{{route('users.store')}}" method="post" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('name')?' has-error':''}}">
                        <label for="name">Name</label>
                        <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name" placeholder="UserName">
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>


                    <div class="form-group{{$errors->has('email')?' has-error':''}}">
                        <label for="email">Email</label>
                        <input type="text" value="{{$user->email}}" class="form-control" name="email" id="email" placeholder="Code">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('password')?' has-error':''}}">
                        <label for="password">Password</label>
                        <input type="text" value="{{$user->password}}" class="form-control" name="password" id="password" placeholder="Price">
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('confirm-password')?' has-error':''}}">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="text" value="{{$user->password}}" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                        <span class="text-danger">{{$errors->first('confirm-password')}}</span>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


    </form>
</main>
</div>
</div>


@endsection