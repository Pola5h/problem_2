@extends('admin.admin_master')
@section('admin')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update Data</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('productvariant.update',$editData->id)}}">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <h5>Gender<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="gender" class="form-control" required="true"
                                                    aria-invalid="false">
                                                   
                                                    <option value="" selected="" disabled="">Select Gender</option>
                                                    <option value="N/A" {{($editData->gender== "N/A" ?"selected":"")}} >N/A</option>

                                                    <option value="Man" {{($editData->gender== "Man" ?"selected":"")}} >Man</option>
                                                    <option value="Woman" {{($editData->gender== "Woman" ?"selected":"")}} >Woman</option>

                                                   




                                                </select>
                                            </div>
                                        </div>

										
                                        <div class="form-group">
                                            <h5> Color<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="color" class="form-control"
                                                    value="{{$editData->color}}" required="">

                                            </div>
                                        </div>
                                        

                                    </div>


                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <h5> Size<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="size" class="form-control"
                                                    value="{{$editData->size}}" required="">

                                            </div>
                                        </div>


										<div class="form-group">
                                            <h5>Price <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="price" class="form-control"
                                                    value="{{$editData->price}}" required="">

                                            </div>
                                        </div>
                                        








                                        <div class="text-xs-right">
                                            <input type="submit" value="Update" style="float: right"
                                                class="btn btn-outline btn-rounded btn-success mb-5">
                                        </div>

                                    </div>









                                </div>














                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>












    </div>
</div>
<!-- /.content-wrapper -->












@endsection