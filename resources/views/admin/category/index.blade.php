@extends('admin.master')
@section('title' , 'Category Page')
@section('content')
	<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px" >

        <h3 style="text-decoration: underline;"> List Category </h3>
			@if ($message = Session::get('success'))
			<div class="alert alert-success">
			  <p>{{ $message }}</p>
			</div>
			@endif
        <div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Category ID</th>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
						<td>
							<form action="{{ route('category.destroy',$category->id) }}" method="POST">
			                    @csrf
			                    @method('DELETE')
			                    <button type="submit" class="btn btn-danger">Delete</button>
			                </form>
							

						</td>
					</tr>
					@empty
						<li>No Categories</li>
				    @endforelse		
			    </tbody>
			</table>
		</div>			
       

        <form action="{{route('category.store')}}" method="post" role="main">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Category Name</label>
	            <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
	                        
	        </div>
	        <button type="submit" class="btn btn-primary">save</button>
	</main>

@endsection