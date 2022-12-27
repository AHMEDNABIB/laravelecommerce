@extends('admin.layouts.app')

@section('content')
     <div >
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Order Details</h1>
                
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox invoice">
                    <div class="invoice-header">
                        <div class="row">
                           <div class="col-md-6">
                             <h5>Order Details</h5>
                             <hr>
                             <h6>Order Id: {{$order->id}}</h6>
                             <h6>Tracking No: {{$order->tracking_no}}</h6>
                             <h6>Order Created Date: {{ date('F d, Y', strtotime($order->created_at)) }}</h6>
                             <h6>Pyment Mode: {{$order->payment_mode}}</h6>
                             <h6 class="border p-2 text-success">Order Status Message:
                                <span class="text-uppercase">{{$order->status_message}}</span>
                                </h6>
                           </div>

                           <div class="col-md-6">
                             <h5>User Details</h5>
                             <hr>
                             <h6>Full Name: {{$order->fullname}}</h6>
                             <h6>Email Id: {{$order->email}}</h6>
                             <h6>Phone: {{$order->phone}}</h6>
                             <h6>Phone: {{$order->address}}</h6>
                             <h6>Phone: {{$order->pincode}}</h6>
                             
                           </div>
                        </div>
                    </div>

                  <table class="table table-striped table-bordered table-hover" id="order-data-table" cellspacing="0" width="100%">
                            <thead>
                            
                               <tr>
                                <td>Item ID</td>
                                <td>Image</td>
                                <td>Product Name</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <th>Total</th>
                               </tr>

                            </thead>
                                <tbody>
                                   {{-- @foreach ($order->orderItems as $orderItem)
                                   <tr>
                                    <td class="10%">{{$orderitem->id}}</td>
                                    <td class="10%"> <img src="{{url('image/products/',$product->image)}}" alt="Product Image" srcset="" width="80">
                                    </td>
                                    <td class="10%">{{$orderitem->price}}</td>
                                    <td class="10%">{{$orderitem->quantity}}</td>
                                    <td class="10%">{{$orderitem->quantity * $orderitem->price}}</td>
                                   </tr>
                                       
                                   @endforeach --}}
                                   @foreach($order->items as $item)
                                        <tr>
                                            <td width="10%">{{ $item->id }}</td>
                                            <td width="10%"> <img src="{{url('image/products/',$item->product->image)}}" alt="Product Image" srcset="" width="80">
                                            </td>
                                            <td width="10%">{{ $item->product->name }}</td>
                                            
                                            <td width="10%">{{ $item->price }}</td>
                                            <td width="10%">{{ $item->quantity }}</td>
                                            <td width="10%" class="fw-bold">{{ $item->quantity * $item->price}}</td>
                                           
                                        </tr>
                                    @endforeach
                
                                </tbody>
                        </table>
                </div>
                <style>
                    .invoice {
                        padding: 20px
                    }

                    .invoice-header {
                        margin-bottom: 50px
                    }

                    .invoice-logo {
                        margin-bottom: 50px;
                    }

                    .table-invoice tr td:last-child {
                        text-align: right;
                    }
                </style>
                
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
@endsection