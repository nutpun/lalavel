@extends('admin.layout.adminmaster')
@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">ผู้ใช้งาน</h1>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    รายการผู้
                                    <span class="float-right"><a href="../user/create.html" class="btn btn-sm btn-primary"><i
                                                class="fa fa-plus"></i> เพิ่ม</a></span>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ชื่อ - สกุล</th>
                                            <th>สิทธ์</th>
                                            <th>อีเมล์</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bundit Nuntates</td>

                                            <td>Admin</td>
                                            <td>bundit@gmail.com</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                @endsection