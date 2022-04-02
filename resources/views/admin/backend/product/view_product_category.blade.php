@extends('admin.admin_master')
@section('admin')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">



                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Product Category List</h3>

                            <a href="{{ route('category.add') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">Add Product Category </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Product Category </th>
                                           
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $product_categories)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product_categories->category_name }}</td>
                                          
                                            <td>
                                                <a href="{{route('category.edit',$product_categories->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>
                                                <a href="{{route('category.delete',$product_categories->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
                                            </td>


                                        </tr>
                                        
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->












@endsection