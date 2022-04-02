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
                            <h3 class="box-title">Product List</h3>

                            <a href="{{ route('product.add') }}" style="float: right"
                                class="btn btn-rounded btn-success mb-5 ">Add Product </a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                          
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alldata as $key => $products)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $products->product_name }}</td>
                                            <td>{{ $products->product_category }}</td>

                                            <td>
                                                <a href="{{route('productvariant.add',$products->id)}}" class="btn btn-info btn-flat mb-5">Add Varient</a>
                                                <a href="{{route('productvariant.details',$products->id)}}" class="btn btn-info btn-flat mb-5">Varient Details</a>


                                                <a href="{{route('product.edit',$products->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>

                                                <a href="{{route('product.delete',$products->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
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