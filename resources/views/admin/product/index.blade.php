@extends('admin.layouts.app')


@section('content')

    <div class="page-content fade-in-up">

        <div class="ibox">
            <div class=col-md-12>

                <div class="ibox-head">
                        <div class="ibox-title">List of Product</div>
                </div>


                <div class="ibox-body">
                   
                        <span>
                            @if($message = Session::get('success'))
                                <br>
                                <div class="alert alert-success alert-dismissible">{{ $message }}</div>
                            @endif
                        </span>

                        <table class="table table-striped table-bordered table-hover display responsive nowrap" id="product-data-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Category</td>
                                    <td>Price</td>
                                    <td>Quantity</td>
                                    <td>Code</td>
                                    <td>Description</td>
                                    <td>Image</td>
                                    <th>Actions</th>
                                 
                                  
                                </tr>

                            </thead>
                            <tbody>
                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->brand}}</td>
                                            <td>{{ $product->category->name}}
                                            
                                                
                                            </td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->qty}}</td>
                                            <td>{{$product->code}}</td>
                                            <td>{{$product->description}}</td>
                                           
                                            <td>
                                                <img src="{{url('image/products/',$product->image)}}" alt="Product Image" srcset="" width="80">
                                            </td>
                                            <td>
                                                <form action="{{ route('product.destroy',$product->id) }}" method="Post">
                                                    <a href="{{route('product.edit',$product['id'])}}" class="btn btn-default btn-sm"> <i class="fa fa-edit text-success"></i> </a>
                                                    @CSRF
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-default btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                            <i class="fa fa-trash-o text-danger"></i>
                                                    </button>
                                                </form>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                
                                </tbody>
                        </table>
                </div>
            </div>

        </div>
    </div>




@endsection
