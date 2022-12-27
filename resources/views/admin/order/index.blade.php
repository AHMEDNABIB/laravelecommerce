@extends('admin.layouts.app')

@section('content')
    <div class="page-content fade-in-up">

        <div class="ibox">
            <div class=col-md-12>

                <div class="ibox-head">
                        <div class="ibox-title">List of order
                        </div>
                </div>


                <div class="ibox-body">
                   
                        <span>
                            @if($message = Session::get('success'))
                                <br>
                                <div class="alert alert-success alert-dismissible">{{ $message }}</div>
                            @endif
                        </span>

                        <table class="table table-striped table-bordered table-hover" id="order-data-table" cellspacing="0" width="100%">
                            <thead>
                            
                               <tr>
                                <td>No</td>
                                <td>Name</td>
                                <td>Tracking No</td>
                                <td>Phone</td>
                                <td>Status</td>
                                <th>Actions</th>
                               </tr>

                            </thead>
                                <tbody>
                                    @foreach($orders as $key=>$order)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$order->fullname}}</td>
                                            <td>{{$order->tracking_no}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td>{{$order->status_message}}</td>
                                            <td>
                                                
                                                    <a href="{{route('order.show',$order['id'])}}" class="btn btn-default btn-sm"> <i class="fa fa-eye text-success"></i> </a>
                                                    @CSRF
                                                   
                                           
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