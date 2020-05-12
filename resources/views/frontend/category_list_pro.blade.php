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
        </div>
      </div>




@endsection
