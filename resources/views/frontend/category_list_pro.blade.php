@extends('frontend.master')
@section('title','Category Page')
@section('content')

<div class="album py-5 bg-light">
        <div class="container">
        	<?php $cats_name = DB::table('categories')->select('name')->where('id',$id_)->get(); ?>
        	<h4>
        		Category:

        		@foreach($cats_name as $c_name)

        			{{$c_name->name}}

        		@endforeach


        	</h4><br>
          <div class="row">
            @forelse($category_products as $product)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{url('images',$product->image)}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-body">{{$product->pro_name}}</p>
                  <del>$ {{$product->pro_price}}</del>
                  <span class="price text-muted float-right">$ {{$product->spl_price}} </span>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="{{url('productDetail',$product->id)}}" class="btn btn-sm btn-outline-secondary" >View Product </a>

                    <a href="{{url('cart/addItem',$product->id)}}" class="btn btn-sm btn-outline-secondary">Add to Cart <i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <small class="price text-muted float-right">{{$product->created_at}}</small>
                  </div>
                </div>
              </div>
            </div>
            @empty
                <h3>No Product</h3>
            @endforelse

          </div>
        </div>
      </div>




@endsection
