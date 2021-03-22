@extends('dashboard')

@section('content') 

<h1>&nbsp;&nbsp;Activity 1 CRUD</h1>
</br>


<div class="card mb-3">
                            <div class="card-header-tab card-header">
                                 &nbsp;&nbsp;&nbsp;<a href="{{route('products.products.index')}}" class="btn btn-primary">Back</a>
                            </div>
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                
                                <form method="POST" action="{{route('products.products.update', $product)}}">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <label><h5>Name:</h5></label> </br>
                                    <input type="text" name="name" value="{{$product->name}}"></br>
                                    <label><h5>Description:</h5></label> </br>
                                    <input type="text" name="description" value="{{$product->description}}"></br>
                                    <label><h5>Price:</h5></label> </br>
                                    <input type="text" name="price" value="{{$product->price}}"></br></br>

                                    <input type="submit" value="Submit" class="btn btn-primary">

                                </form>
                                   
                            </div>
                        </div>
@endsection