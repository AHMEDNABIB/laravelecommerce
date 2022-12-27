 <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="/users/image/{{Auth::user()->image}}" width="45px"  style="border-radius:50%"/>
                       
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">{{Auth::user()->name}}</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                  
                    <li class="heading">FEATURES</li>
                      
                    
                      <li class=" {{  Request::routeIs('category.index') || Request::routeIs('category.create')  ? 'active' : '' }} ">
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-columns"></i>
                                <span class="nav-label">Category </span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                
                                 <li>
                                     {{-- @can('categoryList',\Illuminate\Support\Facades\Auth::user()) --}}
                                    <a class=" {{  Request::routeIs('category.index')  ? 'active' : '' }}" href="{{ route('category.index') }}">Category List</a> 
                                     {{-- @endcan --}}
                                    
                                    <a  class=" {{  Request::routeIs('category.create')  ? 'active' : '' }}"      href="{{ route('category.create') }}">Create Category</a>
                                  
                                </li>
                        
                             

                        
                            
                            
                            </ul>
                        </li>
                 
                    
                      

                        <li class=" {{  Request::routeIs('product.index') || Request::routeIs('product.create')  ? 'active' : '' }} ">
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-cart"></i>
                                <span class="nav-label">Product </span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li>
                                    <a  class=" {{  Request::routeIs('product.index')  ? 'active' : '' }}" href="{{ route('product.index') }}">Product List</a>
                                    <a  class=" {{  Request::routeIs('product.create')  ? 'active' : '' }}" href="{{ route('product.create') }}">Create Product</a>
                                </li>
                            
                            
                            </ul>
                        </li>

                        <li class=" {{  Request::routeIs('order.index')  }} ">
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-cart"></i>
                                <span class="nav-label">Order </span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li>
                                    <a  class=" {{  Request::routeIs('order.index')  ? 'active' : '' }}" href="{{ route('order.index') }}">Order List</a>
                                  
                                </li>
                            
                            
                            </ul>
                        </li>


                        
                        <li class=" {{  Request::routeIs('user.index') || Request::routeIs('user.create')  ? 'active' : '' }} ">
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-columns"></i>
                                <span class="nav-label">User </span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li>
                                    <a class=" {{  Request::routeIs('user.index')  ? 'active' : '' }}" href="{{ route('user.index') }}">User List</a>
                                 
                                      <a  class=" {{  Request::routeIs('user.create')  ? 'active' : '' }}" href="{{ route('user.create') }}">Create User</a>
                                </li>
                            </ul>
                        </li>

                        <li class=" {{  Request::routeIs('role.index') || Request::routeIs('role.create')  ? 'active' : '' }} ">
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-columns"></i>
                                <span class="nav-label">Role </span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li>
                                    <a class=" {{  Request::routeIs('role.index')  ? 'active' : '' }}" href="{{ route('role.index') }}">Role List</a>
                                 
                                      <a  class=" {{  Request::routeIs('role.create')  ? 'active' : '' }}" href="{{ route('role.create') }}">Create Role</a>
                                </li>
                            </ul>
                        </li>

                        <li class=" {{  Request::routeIs('permission.index') || Request::routeIs('permission.create')  ? 'active' : '' }} ">
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-columns"></i>
                                <span class="nav-label">Permission </span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li>
                                    <a class=" {{  Request::routeIs('permission.index')  ? 'active' : '' }}" href="{{ route('permission.index') }}">Permission List</a>
                                 
                                      <a  class=" {{  Request::routeIs('permission.create')  ? 'active' : '' }}" href="{{ route('permission.create') }}">Create Permission</a>
                                </li>
                            </ul>
                        </li>
                </ul>
            </div>
        </nav>