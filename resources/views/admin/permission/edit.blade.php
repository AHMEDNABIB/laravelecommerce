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
                                <form class="form-horizontal" action="{{ route('permission.update',$permission->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name" value={{$permission->name}}>
                                            @if ($errors->has('name'))
                                                <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Permission For</label>
                                        <div class="col-sm-10">
                                             <select name="for" id="for" class="form-control">
                                                <option selected disable>Select Permission for</option>
                                                <option value="user">User</option>
                                                <option value="product">Product</option>
                                                <option value="category">Category</option>
                                                <option value="order">Order</option>
                                                <option value="role">Role</option>
                                                <option value="permission">Permission</option>
	                                     	</select>
                                            @if ($errors->has('for'))
                                                <span class="text-danger error-text mt-1">{{ $errors->first('for') }}</span>
                                            @endif
                                        </div>
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
