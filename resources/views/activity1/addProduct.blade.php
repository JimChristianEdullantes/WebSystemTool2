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
                                
                                <form method="POST" action="{{route('products.products.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label><h5>Name:</h5></label>
                                        <input type="text" name="name" placeholder="Name" class="form-control">
                                       <span style="color:red;">@error('name'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group">
                                        <label><h5>Description:</h5></label>
                                        <input type="text" name="description" placeholder="Description" class="form-control">
                                        <span style="color:red;">@error('description'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group">
                                        <label><h5>Price:</h5></label>
                                        <input type="text" name="price" placeholder="Put the price" class="form-control">
                                        <span style="color:red;">@error('price'){{$message}}@enderror</span>
                                    </div>

                                    </br>

                                    <div class="text-center">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                    

                                </form>
                            </div>
                        </div>
@endsection