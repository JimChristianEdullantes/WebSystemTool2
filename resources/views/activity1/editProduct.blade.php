@extends('dashboard')

@section('title')
Activity 1
@endsection

@section('content') 

<div class="card mb-3">                    
    <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    
        <form method="POST" action="{{route('products.products.update', $product)}}">
            @csrf
            {{method_field('PUT')}}

            <div class="form-group">
                <label><h5>Name:</h5></label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control">
                <span style="color:red;">@error('name'){{$message}}@enderror</span>
            </div>
                    
            <div class="form-group">
                <label><h5>Description:</h5></label>
                <input type="text" name="description" value="{{$product->description}}" class="form-control">
                <span style="color:red;">@error('description'){{$message}}@enderror</span>
            </div>
                    
            <div class="form-group">
                <label><h5>Price:</h5></label>
                <input type="text" name="price" value="{{$product->price}}" class="form-control">
                <span style="color:red;">@error('price'){{$message}}@enderror</span>
            </div>
                    
            </br>
                    
            <div class="text-center">
                <input type="submit" value="Save" class="btn btn-primary">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('products.products.index')}}" class="btn btn-primary">Cancel</a>
            </div>
                                                        
                    
        </form>
    </div>
</div>
@endsection