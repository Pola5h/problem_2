@extends('admin.admin_master')
@section('admin')








<div class="content-wrapper">
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-primary-light rounded w-60 h-60">
                                <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Client</p>
                                <h4 class="text-white mb-0 font-weight-500"> </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-warning-light rounded w-60 h-60">
                                <i class="text-info mr-0 font-size-24 mdi mdi-car"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Vehicle Available</p>
                                <h4 class="text-white mb-0 font-weight-500">  </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-info-light rounded w-60 h-60">
                                <i class="text-info mr-0 font-size-24 mdi mdi-home-modern"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Resorts</p>
                                <h4 class="text-white mb-0 font-weight-500">  </h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-secondary-light rounded w-60 h-60">
                                <i class="text-black mr-0 font-size-24 mdi mdi-home-variant"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Resturent</p>
                                <h4 class="text-white mb-0 font-weight-500">  </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-primary-light rounded w-60 h-60">
                                <i class="text-black mr-0 font-size-24 mdi mdi-sale"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Total Booking</p>
                                <h4 class="text-white mb-0 font-weight-500"> </h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-2 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-warning-light rounded w-60 h-60">
                                <i class="text-black mr-0 font-size-24 mdi mdi-sale"></i>
                            </div>
                            <div>
                                <p class="text-white mt-20 mb-0 font-size-20">Booking Pending</p>
                                <h4 class="text-white mb-0 font-weight-500"> </h4>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection