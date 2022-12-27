@extends('admin.layouts.app')


@section('content')


<div class="page-content fade-in-up">

        <div class="ibox">
            <div class=col-md-12>

                <div class="ibox-head">
                        <div class="ibox-title">List of Category
                        </div>
                </div>


                <div class="ibox-body">
                   
                        <span>
                            @if($message = Session::get('success'))
                                <br>
                                <div class="alert alert-success alert-dismissible">{{ $message }}</div>
                            @endif
                        </span>

                        <table class="table table-striped table-bordered table-hover" id="category-data-table" cellspacing="0" width="100%">
                            <thead>
                            
                               <tr>
                                <td>No</td>
                                <td>Name</td>
                                <th>Actions</th>
                               </tr>

                            </thead>
                                <tbody>
                                    @foreach($categories as $key=>$category)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                <form action="{{ route('category.destroy',$category->id) }}" method="Post">
                                                    <a href="{{route('category.edit',$category['id'])}}" class="btn btn-default btn-sm"> <i class="fa fa-edit text-success"></i> </a>
                                                    @CSRF
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-default btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                            <i class="fa fa-trash-o text-danger"></i>
                                                    </button>
                                                </form>
                                                {{--<a title="view this user" class="btn btn-default btn-sm "> <i class="fa fa-eye text-info"></i> </a>
                                                <a title="edit this user" class="btn btn-default btn-sm "> <i class="fa fa-edit text-success"></i> </a>
                                                <a title="delete this user" class="btn btn-default btn-sm "> <i class="fa fa-trash-o text-danger"></i> </a>--}}
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
