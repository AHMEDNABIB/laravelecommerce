@extends('admin.layouts.app')


@section('content')


<div class="page-content fade-in-up">

        <div class="ibox">
            <div class=col-md-12>

                <div class="ibox-head">
                        <div class="ibox-title">List of permission
                        </div>
                </div>


                <div class="ibox-body">
                   
                        <span>
                            @if($message = Session::get('success'))
                                <br>
                                <div class="alert alert-success alert-dismissible">{{ $message }}</div>
                            @endif
                        </span>

                        <table class="table table-striped table-bordered table-hover" id="permission-data-table" cellspacing="0" width="100%">
                            <thead>
                            
                               <tr>
                                <td>No</td>
                                <td>Name</td>
                                 <th>Permission For</th>
                                <th>Actions</th>
                               </tr>

                            </thead>
                                <tbody>
                                    @foreach($permissions as $key=>$permission)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$permission->name}}</td>
                                              <td>{{ $permission->for }}</td>
                                            <td>
                                                <form action="{{ route('permission.destroy',$permission->id) }}" method="Post">
                                                    <a href="{{route('permission.edit',$permission['id'])}}" class="btn btn-default btn-sm"> <i class="fa fa-edit text-success"></i> </a>
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
