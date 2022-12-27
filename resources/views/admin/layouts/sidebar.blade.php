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
                                    <a class=" {{  Request::routeIs('category.index')  ? 'active' : '' }}" href="{{ route('category.index') }}">Category List</a>
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
                    
                  
                  
                 
        
                 
                 
                </ul>
            </div>
        </nav>