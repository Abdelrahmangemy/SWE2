@extends('admin.master')
@section('title','List Product')
@section('content')

	<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
		<h3>Product</h3>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>


				@foreach($products as $product)	

					<tr>
						<td><img src="{{url('images',$product->image)}}" width="80px"></td>
						<td>{{$product->pro_name}}</td>
						<td>{{$product->pro_price}}</td>
						<td>
							<form action="{{ route('product.destroy',$product->id) }}" method="POST">
			                    <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>
			                    <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>


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