@extends('admin.layouts.app')

@section('content')
            <div class="page-heading ml-5 mt-5">
                <h1 class="page-title ml-3">New User</h1>
            </div>

            <div class="page-content fade-in-up">
                <div class="row ml-5" >
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create User</div>
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
                                <form action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="email" type="text">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                             <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ old('password') }}">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Confirm Password</label>
                                        <div class="col-sm-8">
                                             <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm passowrd">
                                        </div>
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('confrim_password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                           <div class="checkbox">
                                                <label ><input type="checkbox" name="status" @if (old('status') == 1)
                                                checked
                                                @endif value="1">Status</label>
                                             </div>
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                  

                                      <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-8">

                                            @foreach ($roles as $role)
                                            <div class="checkbox">
                                                <label for="" > <input class="ml-1" name="role[]" type="checkbox" value="{{$role->id}}">{{$role->name}}</label>
                                            </div>
                                                 
                                            @endforeach
                                           
                                           
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>




                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
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
