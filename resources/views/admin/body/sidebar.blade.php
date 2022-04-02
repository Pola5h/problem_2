





<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{route('d') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- <img src="" alt=""> -->
                        <h3>Welcome</h3>






                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>

                <a href="{{route('d') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>




 






            <li class="treeview">
                <a href="#">
                    <i data-feather="home"></i>
                    <span>Manage Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('product.add')}}"><i class="ti-more"></i>Add Product</a></li>
                    <li><a href="{{route('product.view')}}"><i class="ti-more"></i>View Product</a></li>

                    <li><a href="{{route('category.view')}}"><i class="ti-more"></i>View Product Category</a></li>


                </ul>
            </li>














        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a class="link" data-toggle="tooltip" title="" data-original-title=""><i class=""></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="ti-lock"></i></a>
    </div>
</aside>