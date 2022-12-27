@extends('admin.layouts.app')

@section('content')

    <div class="page-heading  ml-5 mt-5">
        <h1 class="page-title ml-2">Product</h1>
    </div>

    <div class="page-content fade-in-up">
                <div class="row ml-5">
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create Product</div>
                                <span>
                                    @if($message = Session::get('success'))
                                        <br>
                                        <div class="alert alert-success alert-dismissible">{{ $message }}</div>
                                    @endif
                                </span>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action={{ route('product.store')}} method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="name" type="text" value="{{old('name')}}">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tags</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="tags" type="text" value="{{old('tags')}}">
                                        </div>
                                        @if ($errors->has('tags'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('tags') }}</span>
                                        @endif
                                    </div>
                                  

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Brand</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="brand" type="text" value="{{old('brand')}}">
                                        </div>
                                        @if ($errors->has('brand'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('brand') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Size</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="size" type="text"  value="{{old('size')}}">
                                        </div>
                                        @if ($errors->has('size'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('size') }}</span>
                                        @endif
                                    </div>


{{-- 
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="price" type="text" value="{{old('price')}}">
                                        </div>
                                        @if ($errors->has('price'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div> --}}

                                    
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Color</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="color" type="text" value="{{old('color')}}">
                                        </div>
                                        @if ($errors->has('color'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('color') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="qty" type="text" value="{{old('qty')}}" >
                                        </div>
                                        @if ($errors->has('qty'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('qty') }}</span>
                                        @endif
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Code</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="code" type="text" value="{{old('code')}}" >
                                        </div>
                                        @if ($errors->has('code'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('code') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Selling Price</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="selling_price" type="text" value="{{old('selling_price')}}" >
                                        </div>
                                        @if ($errors->has('selling_price'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('selling_price') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Discount Price</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="discount_price" type="text" value="{{old('discount_price')}}" >
                                        </div>
                                        @if ($errors->has('discount_price'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('discount_price') }}</span>
                                        @endif
                                    </div>

                                

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="cat_id">
                                                @foreach ($categories as $key=>$category)
                                                   <option value="{{$category->id}}" {{ old('cat_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('cat_id'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('cat_id') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="image" type="file" >
                                        </div>
                                        @if ($errors->has('image'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                    
                                   

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hot Deals</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="hot_deals" type="text" value="{{old('hot_deals')}}" >
                                        </div>
                                        @if ($errors->has('hot_deals'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('hot_deals') }}</span>
                                        @endif
                                    </div>    

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Featured</label>
                                        <div class="col-sm-8">
                                            <input class="form-control"  name="featured" type="text" value="{{old('featured')}}" >
                                        </div>
                                        @if ($errors->has('featured'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('featured') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Special Offer</label>
                                        <div class="col-sm-8">
                                            <input class="form-control"  name="special_offer" type="text" value="{{old('special_offer')}}" >
                                        </div>
                                        @if ($errors->has('special_offer'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('special_offer') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Special Deals</label>
                                        <div class="col-sm-8">
                                            <input class="form-control"  name="special_deals" type="text" value="{{old('special_deals')}}" >
                                        </div>
                                        @if ($errors->has('special_deals'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('special_deals') }}</span>
                                        @endif
                                    </div>

                                      <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Short Description</label>
                                        <div class="col-sm-8">
                                              <textarea class="form-control" name="short_descp" rows="4" cols="50" value="{{old('short_descp')}}"></textarea>
                                        </div>
                                        @if ($errors->has('short_descp'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('short_descp') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Long Description</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="long_descp" rows="4" cols="50" value="{{old('long_descp')}}"></textarea>
                                        </div>
                                        @if ($errors->has('long_descp'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('long_descp') }}</span>
                                        @endif
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-8 ml-sm-auto">
                                           
                                           <input type="submit" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             
    
@endsection