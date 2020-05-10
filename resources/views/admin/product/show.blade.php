@extends('admin.master')
@section('title','Form Show')
@section('content')

   <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
        <h3>Show Product</h3>
         <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
        <div class="col-md-6">
            <div class="panel-body">
                <strong>Name:</strong>
                {{ $product->pro_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                {{ $product->pro_code }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $product->pro_price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                {{ $product->stock }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $product->pro_info }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $product->category_id }}
            </div>
         </div>  
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sale Price:</strong>
                {{ $product->spl_price }}
            </div>
         </div>   
        </main>
    </div>
</div>
<
@endsection