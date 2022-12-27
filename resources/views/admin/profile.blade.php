@extends('admin.layouts.app')

@section('content')



            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Profile</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Profile</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle" src="/users/image/{{Auth::user()->image}}"  />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10">{{Auth::user()->name}}</h5>
                                <div class="m-b-20 text-muted">Web Developer</div>
                                <div class="profile-social m-b-20">
                                    <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                                    <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                                </div>
                                <div>
                                    <button class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Follow</button>
                                    <button class="btn btn-default btn-rounded m-b-5">Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="row text-center m-b-20">
                                    <div class="col-4">
                                        <div class="font-24 profile-stat-count">140</div>
                                        <div class="text-muted">Followers</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-24 profile-stat-count">$780</div>
                                        <div class="text-muted">Sales</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-24 profile-stat-count">15</div>
                                        <div class="text-muted">Projects</div>
                                    </div>
                                </div>
                                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Settings</a>
                                    </li>
                                 
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                       
                                        <h4 class="text-info m-b-20 m-t-20"><i class="fa fa-shopping-basket"></i> Latest Orders</h4>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Customer</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th width="91px">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>11</td>
                                                    <td>@Jack</td>
                                                    <td>$564.00</td>
                                                    <td>
                                                        <span class="badge badge-success">Shipped</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>@Amalia</td>
                                                    <td>$220.60</td>
                                                    <td>
                                                        <span class="badge badge-success">Shipped</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>@Emma</td>
                                                    <td>$760.00</td>
                                                    <td>
                                                        <span class="badge badge-default">Pending</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>@James</td>
                                                    <td>$87.60</td>
                                                    <td>
                                                        <span class="badge badge-warning">Expired</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>@Ava</td>
                                                    <td>$430.50</td>
                                                    <td>
                                                        <span class="badge badge-default">Pending</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>@Noah</td>
                                                    <td>$64.00</td>
                                                    <td>
                                                        <span class="badge badge-success">Shipped</span>
                                                    </td>
                                                    <td>10/07/2017</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if($errors)
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                        <form action="{{ route('profile.update', Auth::user()->id)}}" method="post" enctype="multipart/form-data" >

                                            @csrf

                                            @method('PUT')
                                           
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" type="text" name="name" placeholder="First Name" value="{{ Auth::user()->name }}">
                                            </div>
                                                
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" placeholder="Email address" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                            <div class="form-group ">
                                                <label >Image</label>
                                                 <div class="">
                                                    <input class="form-control" name="image" type="file" >

                                                    <img src="/users/image/{{Auth::user()->image}}" class="mt-2" alt="" srcset="" width="120"></br>
                                                    </div>
                                                    @if ($errors->has('image'))
                                                        <span class="text-danger error-text mt-1">{{ $errors->first('image') }}</span>
                                                    @endif
                                            </div>
                                         
                                            
                                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                            <label for="new-password" class="">Current Password</label>

                                            <div class="">
                                                <input id="current-password" type="password" class="form-control" name="current-password">

                                                @if ($errors->has('current-password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('current-password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                            <label for="new-password" class="">New Password</label>

                                            <div class="">
                                                <input id="new-password" type="password" class="form-control" name="new-password" >

                                                @if ($errors->has('new-password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('new-password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="new-password-confirm" class="">Confirm New Password</label>

                                            <div class="">
                                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" >
                                            </div>
                                        </div>
                                         
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                   Update User
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .profile-social a {
                        font-size: 16px;
                        margin: 0 10px;
                        color: #999;
                    }

                    .profile-social a:hover {
                        color: #485b6f;
                    }

                    .profile-stat-count {
                        font-size: 22px
                    }
                </style>
                
            </div>
          
  

@endsection