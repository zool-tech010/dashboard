@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <a href="#">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-boxes"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text text-dark"> طلبيات مفتوحة</span>
                                <span class="info-box-number text-dark">
                                    {{ \App\User::count() }} </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-6 col-lg-3">
                    <a href="#">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-archive"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text text-dark"> طلبيات مغلقة </span>
                                <span
                                    class="info-box-number text-dark">33</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-6  col-lg-3">
                    <a href="#">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-coins"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text text-dark"> دخل اليوم</span>
                                <span
                                    class="info-box-number text-dark">20</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-6 col-lg-3">
                    <a href="#">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class='fas fa-users'></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text text-dark"> زبائن اليوم </span>
                                <span
                                    class="info-box-number text-dark">10</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

            <!-- Start btns dashboard  -->
            <div class="row btns-dashboard">
                <!-- Left col -->
                <section class="col-lg-6">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="row">
                        <div class="col-4 mb-3">
                            <a href="#" class="btns__card">
                                <div>
                                    <i class="fas fa-box-open"></i>
                                    <p>طلبية جديدة</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 mb-3">
                            <a href="#" class="btns__card">
                                <div>
                                    <i class="fas fa-user-plus"></i>
                                    <p>إضافة زبون</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 mb-3">
                            <a href="#" class="btns__card">
                                <div>
                                    <i class="fas fa-envelope"></i>
                                    <p>رسالة جديدة</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
                <section class="col-lg-6">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <a href="#" class="btns__card">
                                <div>
                                    <i class="fas fa-cubes"></i>
                                    <p>تحديث المخزون</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 mb-3">
                            <a href="#" class="btns__card">
                                <div>
                                    <i class="fas fa-pencil-ruler"></i>
                                    <p>الطلبيات المخصصة</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 mb-3">
                            <a href="#" class="btns__card">
                                <div>
                                    <i class="fas fa-file-invoice"></i>
                                    <p>التقارير</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End btns dashboard  -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.content -->0
@endsection
