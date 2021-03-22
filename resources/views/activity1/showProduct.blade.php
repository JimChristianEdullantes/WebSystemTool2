@extends('dashboard')

@section('content') 

<h1>&nbsp;&nbsp;Activity 1 CRUD</h1>
</br>

@if(session('Product'))
    <p class="text-success"> &nbsp;&nbsp;&nbsp;{{session('Product')}}</p></br>
@endif

@if(session('updateProduct'))
    <p class="text-primary"> &nbsp;&nbsp;&nbsp;{{session('updateProduct')}}</p></br>
@endif

@if(session('deleteProduct'))
    <p class="text-danger"> &nbsp;&nbsp;&nbsp;{{session('deleteProduct')}}</p></br>
@endif



<div class="card mb-3">
                            <div class="card-header-tab card-header">
                                 &nbsp;&nbsp;&nbsp;<a href="{{route('products.products.create')}}" class="btn btn-success">Add Product</a>
                                 
                            </div>
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 128.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 204.2px;" aria-label="Position: activate to sort column ascending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 90.2px;" aria-label="Office: activate to sort column ascending">Description</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 44.2px;" aria-label="Age: activate to sort column ascending">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 94.2px;" aria-label="Start date: activate to sort column ascending">Date Created</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 69.2px;" aria-label="Salary: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($products as $product)
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->description}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$product->created_at}}</td>
                                                    <td>
                                                        <a href="{{route('products.products.show', $product)}}" class="btn btn-success btn-sm" style="width:62px;">View</a>
                                                        <a href="{{route('products.products.edit', $product)}}" class="btn btn-primary btn-sm" style="width:62px;">Edit</a>

                                                        <a class="btn btn-danger btn-sm" href="{{route('products.products.destroy', $product)}}" onclick="event.preventDefault();document.getElementById('delete').submit();">Delete</a>
                                                        <form id="delete" action="{{route('products.products.destroy', $product)}}" method="POST" class="d-none">
                                                            @csrf 
                                                            {{method_field('DELETE')}}
                                                        </form>  
                                                    </td>
                                                    
                                                </tr>
                                                
                                                @empty 
                                                    <h4>No Products Available</h4>
                                                    
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <span class="text-center">
                                        {{$products->links()}}
                                    </span>

                                    
                            </div>
                        </div>
@endsection