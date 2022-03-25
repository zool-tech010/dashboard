@extends('layouts.app')
@section('title')
    الموظفين
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="card">
                <div class="card-body">

                    <div class="position-absolute tb-control tb-control--emp">
                        <a href='{{ route('user.create') }}' class='btn btn-outline-danger btn-sm rounded-0'> موظف جديد
                            <i class="fas fa-plus"></i></a>
                    </div>

                    <div class="table-wrapper mt-4">
                        <table id="empls" class="
                            table table-bordered table-hover table-striped
                          ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الإسم</th>
                                    <th>البريد الالكتروني</th>
                                    <th>الحالة</th>
                                    <th>الأدوات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach ($data as $user)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $user->name ?? '-' }}</td>
                                        <td>{{ $user->email ?? '-' }}</td>
                                        <td>
                                            @if (!$user->status)
                                                <span class="bg-success text-white px-1 rounded-lg"><i
                                                        class="fas fa-check"></i>
                                                    مفعل</span>
                                            @else
                                                <span class="bg-danger text-white px-1 rounded-lg"><i
                                                        class="fas fa-check"></i>
                                                    غير مفعل</span>
                                            @endif
                                        </td>
                                        <td class="noWrap">
                                            <a href='{{ route('user.edit',$user->id) }}' class='btn'> <i class="fas fa-edit text-primary"></i></a>
                                            @if ($user->id != auth()-> id())
                                                <button class="btn"
                                                    type="button"
                                                    onclick="DeleteUser(this)" element_id="{{ $user->id }}"
                                                    >
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>

                                                <form id="delete_user_{{ $user->id }}"
                                                    action="{{ route('user.delete') }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                                </form>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.content -->
@endsection


@section('script')
<script src="{{ asset('script/user.js') }}"></script>
    <script>
        $(function() {
            setTimeout(() => {
                $("#empls").DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    info: true,
                    lengthChange: false,
                    autoWidth: false,
                    responsive: true,
                    language: {
                        info: "_END_ of _TOTAL_",
                        infoFiltered: "",
                        infoEmpty: "لايوجد نتيجة",
                        search: "بحث:",
                        zeroRecords: "لا يوجد نتائج",
                        paginate: {
                            previous: "السابق",
                            next: "التالي",
                        },
                    },
                });
                $("#empls2").DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    info: true,
                    lengthChange: false,
                    autoWidth: false,
                    responsive: true,
                    language: {
                        info: "_END_ of _TOTAL_",
                        infoFiltered: "",
                        infoEmpty: "لايوجد نتيجة",
                        search: "بحث:",
                        zeroRecords: "لا يوجد نتائج",
                        paginate: {
                            previous: "السابق",
                            next: "التالي",
                        },
                    },
                });
                $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
                    $($.fn.dataTable.tables(true))
                        .DataTable()
                        .columns.adjust()
                        .responsive.recalc();
                });
            }, );




        });

    </script>
@endsection
