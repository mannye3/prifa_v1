@extends('layouts.master_agent')

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->
            <div class="row">


                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Properties</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 850px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Location</th>
                                            <th>bedroom</th>
                                            <th>Bathroom</th>
                                            <th>Date Posted</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="user/images/profile/small/pic1.jpg" alt="/"></td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect</td>
                                            <td>Male</td>
                                            <td>M.COM., P.H.D.</td>
                                            <td><a href="javascript:void(0);"><strong class="text-black">123 456
                                                        7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong
                                                        class="text-black">info@example.com</strong></a></td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
