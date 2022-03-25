@extends('layouts.app')

@section('title')
    إضافة حساب
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>إضافة حساب موظف</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                        <li class="breadcrumb-item active">إضافة حساب موظف</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class='form-row'>

                                    <div class="form-group col-12">
                                        <label> الإسم </label>
                                        <input type='text' name="name" value="{{ old('name') }}" required
                                            class="form-control" />
                                    </div>

                                    <div class="form-group col-12">
                                        <label> البريد الالكتروني </label>
                                        <input type='email' name="email" required value="{{ old('email') }}"
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-12">
                                        <label>كلمة المرور</label>
                                        <input type='password' name="password" value="{{ old('password') }}"
                                            class="form-control" />
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                    </div>
                    <button type="submit" class='btn btn-primary btn-sm'>حفظ</button>
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.content -->
@endsection


@section('modal')
    <!-- Start Add new  customer    -->
    <div class="modal fade" id="exampleModal" aria-labelledby="newStLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <h4 class="text-center my-3 mt-2 bg-light py-3 text-white">
                            اضافة زبون
                        </h4>

                        <!-- create new student -->
                        <div class="card-body form-row">
                            <div class="from-group mb-3 col-12">
                                <label> الإسم </label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="from-group mb-3 col-12">
                                <label> البريد الإلأكترونى </label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="from-group mb-3 col-12">
                                <label> رقم الهوية </label>
                                <input type="number" class="form-control" />
                            </div>

                            <div class="from-group mb-3 col-12">
                                <label> مجموع الزبون </label>
                                <select class='custom-select'>
                                    <option>إختر</option>
                                    <option>المعرض</option>
                                    <option>المعرض</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-start">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">
                        حفظ
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                        الغاء
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--End  Add new  customer   -->

    <div class="modal fade" id="exampleModal2" aria-labelledby="newStLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <h4 class="text-center my-3 mt-2 bg-light py-3 text-white">
                            اضافة مجموعة
                        </h4>

                        <!-- create new student -->
                        <div class="card-body form-row">
                            <div class="from-group mb-3 col-12">
                                <label> اسم المجموعة </label>
                                <input type="text" placeholder="اسم المجموعة" class="form-control" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-start">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">
                        حفظ
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                        الغاء
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(function() {

            // Toggle Tables
            $(document).on("click", "#cust1", function() {
                $(this).prop("checked", function(ai, bol) {
                    bol ? $('.tb-per').addClass("d-none") : $('.tb-per').removeClass("d-none")
                });
                $('tb-per')
            });


            //make all rows checked
            $(document).on("click", "td a", function(a) {
                a.preventDefault();
                if ($(this).parents("tr").find(":checked").length == $(this).parents("tr").find(":checkbox")
                    .length) {
                    $(this).parents("tr").find(":checkbox").prop("checked", false);
                } else {
                    $(this).parents("tr").find(":checkbox").prop("checked", true);
                }
            });
        })

    </script>
@endsection
