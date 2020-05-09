@extends('admin.master')
@section('title','Form Edit')
@section('content')
   <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
        <h3>Edit Product</h3>
         <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>

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


    <form action="{{ route('product.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <form action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('pro_name')?' has-error':''}}">
                        <label for="pro_name">Name</label>
                        <input type="text" value="{{$product->pro_name}}" class="form-control" name="pro_name" id="pro_name" placeholder="Product Name">
                        <span class="text-danger">{{$errors->first('pro_name')}}</span>
                    </div>


                    <div class="form-group{{$errors->has('pro_code')?' has-error':''}}">
                        <label for="pro_code">Code</label>
                        <input type="text" value="{{$product->pro_code}}" class="form-control" name="pro_code" id="pro_code" placeholder="Code">
                        <span class="text-danger">{{$errors->first('pro_code')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('pro_price')?' has-error':''}}">
                        <label for="pro_price">Price</label>
                        <input type="text" value="{{$product->pro_price}}" class="form-control" name="pro_price" id="pro_price" placeholder="Price">
                        <span class="text-danger">{{$errors->first('pro_price')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('stock')?' has-error':''}}">
                        <label for="stock">Stock</label>
                        <input type="text" value="{{$product->stock}}" class="form-control" name="stock" id="stock" placeholder="Stock">
                        <span class="text-danger">{{$errors->first('stock')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('pro_info')?' has-error':''}}">
                        <label for="pro_info">Description</label>
                        <textarea name="pro_info" value="{{$product->pro_info}}" id="pro_info" rows="5" class="form-control"></textarea>
                        <span class="text-danger">{{$errors->first('pro_info')}}</span>
                    </div>

                     <div class="form-group{{$errors->has('category_id')?' has-error':''}}">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="{{$product->category_id}}"> -- Select Category -- </option>
                            @foreach($categories as $id=>$category)
                                <option value="{{$id}}">{{$category}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->first('category_id')}}</span>
                    </div>                    

                    <div class="form-group{{$errors->has('image')?' has-error':''}}">
                        <label for="image">Image</label>
                        <input type="file" value="{{$product->image}}" name="image" class="form-control">
                        <span class="text-danger">{{$errors->first('image')}}</span>
                    </div>

                    <div class="form-group{{$errors->has('spl_price')?' has-error':''}}">
                        <label for="spl_price">Sale Price</label>
                        <input type="text" value="{{$product->spl_price}}" class="form-control" name="spl_price" id="spl_price" placeholder="Sale Price">
                        <span class="text-danger">{{$errors->first('spl_price')}}</span>
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