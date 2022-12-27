@extends('admin.layouts.app')

@section('content')

            <div class="page-heading">
                <h1 class="page-title">User</h1>

            </div>
            <div class="page-content fade-in-up">
                <div class="row">

                    <div class="col-md-10">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit User</div>
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
                                <form class="form-horizontal" action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="name" type="text"  value="@if (old('name')){{ old('name') }}@else{{ $user->name }}@endif">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="email" type="text"  value="@if (old('email')){{ old('email') }}@else{{ $user->email }}@endif">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                   

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                           <div class="checkbox">
                                                <label ><input type="checkbox" name="status" 
                    @if (old('status')==1 || $user->status == 1)
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
                                            <div class="">
                                                <div class="checkbox">
                                                <label ><input type="checkbox" name="role[]" value="{{ $role->id }}"
                                                @foreach ($user->roles as $user_role)
                                                    @if ($user_role->id == $role->id)
                                                    checked
                                                    @endif
                                                @endforeach> {{ $role->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                           
                                           
                                        </div>
                                        @if ($errors->has('role[]'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('role[]') }}</span>
                                        @endif
                                    </div>

                                      <div class="form-group">
          

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

                {{--<script>
                    $(document).on('click','.status',function(){
                        let h_value= $(this).parent().find('.status_h').val();

                        //console.log(h_value==0);
                        if (h_value==1){
                            alert('hi');
                            $(this).parent().find('.status_h').val(0)
                        }
                        else if (h_value==0){
                            alert('hlw');
                            $(this).parent().find('.status_h').val(1)
                        }
                        /*if($(this).is(':checked')){
                            $(this).parent().find('.status_h').val(1)
                        } else {
                            $(this).parent().find('.status_h').val(0)
                        }*/
                    });
                </script>--}}
            </div>





@endsection
