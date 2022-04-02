@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add {{$ProductData->product_name}}'s Variant</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{route('productvariant.store')}}">
                                @csrf
                                <div class="row">








                                    <div class="col-12">
                                        <div class="add_item">


                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="hidden" name="product_id" value="{{$ProductData->id}}"
                                                        readonly="true" class="form-control" required="true">
                                                </div>
                                            </div>
    
                              
                                            <!-- // end form group -->



                                            <div class="row">

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Gender </h5>
                                                        <div class="controls">
                                                            <select name="gender[]" class="form-control"
                                                                 aria-invalid="false">



                                                                 <option value="" selected="" disabled="">Select Gender</option>

                                                                 <option value="N/A" >N/A</option>

                                                                 <option value="Male" >Man</option>
                                                                 <option value="Female">Woman</option>


                                                            </select>
                                                        </div>
                                                    </div> <!-- // end form group -->
                                                </div> <!-- End col-md-5 -->






                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Color </h5>
                                                        <div class="controls">
                                                            <input type="text" name="color[]"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div><!-- End col-md-5 -->




                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Size </h5>
                                                        <div class="controls">
                                                            <input type="text" name="size[]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div><!-- End col-md-5 -->









                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Price </h5>
                                                        <div class="controls">
                                                            <input type="text" name="price[]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div><!-- End col-md-5 -->


                                                <div class="col-md-2" style="padding-top: 25px;">
                                                    <span class="btn btn-success addeventmore"><i
                                                            class="fa fa-plus-circle"></i> </span>
                                                </div><!-- End col-md-5 -->

                                            </div> <!-- end Row -->

                                        </div> <!-- // End add_item -->

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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


<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">

                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Gender</h5>
                        <div class="controls">
                            <select name="gender[]" class="form-control"
                                 aria-invalid="false">



                                 <option value="" selected="" disabled="">Select Gender</option>
                                 <option value="N/A" >N/A</option>

                                 <option value="Male" >Man</option>
                                 <option value="Female">Woman</option>


                            </select>
                        </div>
                    </div> <!-- // end form group -->
                </div> <!-- End col-md-5 -->






                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Color </h5>
                        <div class="controls">
                            <input type="text" name="color[]"
                                class="form-control">
                        </div>
                    </div>
                </div><!-- End col-md-5 -->




                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Size </h5>
                        <div class="controls">
                            <input type="text" name="size[]" class="form-control">
                        </div>
                    </div>
                </div><!-- End col-md-5 -->









                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Price </h5>
                        <div class="controls">
                            <input type="text" name="price[]" class="form-control">
                        </div>
                    </div>
                </div><!-- End col-md-5 -->


                <div class="col-md-2" style="padding-top: 25px;">
                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                    <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                </div><!-- End col-md-2 -->


            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
 		var counter = 0;
 		$(document).on("click",".addeventmore",function(){
 			var whole_extra_item_add = $('#whole_extra_item_add').html();
 			$(this).closest(".add_item").append(whole_extra_item_add);
 			counter++;
 		});
 		$(document).on("click",'.removeeventmore',function(event){
 			$(this).closest(".delete_whole_extra_item_add").remove();
 			counter -= 1
 		});

 	});
</script>


@endsection