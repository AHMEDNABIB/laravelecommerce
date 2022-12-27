@extends('admin.layouts.app')

@section('content')

            <div class="page-heading">
                <h1 class="page-title">Category</h1>

            </div>
            <div class="page-content fade-in-up">
                <div class="row">

                    <div class="col-md-10">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit Role</div>
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
                                <form class="form-horizontal" action="{{ route('role.update',$role->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name" value={{$role->name}}>
                                            @if ($errors->has('name'))
                                                <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> User Permissions</label>
                                        <div class="col-sm-8 d-flex justify-content-between">
                                            	@foreach ($permissions as $permission)
                                                    @if ($permission->for == 'user')
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}" @foreach ($role->permissions as $role_permit)
	              			              			@if ($role_permit->id == $permission->id)
	              			              				checked
	              			              			@endif
	              			              		@endforeach>{{ $permission->name }}</label>
                                                        </div>
                                                    @endif
	              	                            @endforeach
                                        </div>
                                        @if ($errors->has('permission'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('permission') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Permissions</label>
                                        <div class="col-sm-8 d-flex justify-content-between">
                                                @foreach ($permissions as $permission)
                                                    @if ($permission->for == 'category')
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}" @foreach ($role->permissions as $role_permit)
	              			              			@if ($role_permit->id == $permission->id)
	              			              				checked
	              			              			@endif
	              			              		@endforeach >{{ $permission->name }}</label>
                                                        </div>
                                                    @endif
  	                                         	@endforeach
                                        </div>
                                        @if ($errors->has('permission'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('permission') }}</span>
                                        @endif
                                    </div>
                                
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Permissions</label>
                                        <div class="col-sm-8 d-flex justify-content-between">
                                                @foreach ($permissions as $permission)
                                                    @if ($permission->for == 'product')
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}" @foreach ($role->permissions as $role_permit)
	              			              			@if ($role_permit->id == $permission->id)
	              			              				checked
	              			              			@endif
	              			              		@endforeach >{{ $permission->name }}</label>
                                                        </div>
                                                    @endif
  	                                         	@endforeach
                                        </div>
                                        @if ($errors->has('permission'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('permission') }}</span>
                                        @endif
                                    </div>
                                
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Order Permissions</label>
                                        <div class="col-sm-8 d-flex justify-content-between">
                                                @foreach ($permissions as $permission)
                                                    @if ($permission->for == 'order')
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}" @foreach ($role->permissions as $role_permit)
	              			              			@if ($role_permit->id == $permission->id)
	              			              				checked
	              			              			@endif
	              			              		@endforeach >{{ $permission->name }}</label>
                                                        </div>
                                                    @endif
  	                                         	@endforeach
                                        </div>
                                        @if ($errors->has('permission'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('permission') }}</span>
                                        @endif
                                    </div>
                                


                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

              
            </div>





@endsection
