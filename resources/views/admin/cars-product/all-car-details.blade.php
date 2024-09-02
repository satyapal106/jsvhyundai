@extends('layout.admin-master')

@section('body')

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="example3_length"><label>Show <div
                                            class="dropdown bootstrap-select"><select name="example3_length"
                                                aria-controls="example3" class="" tabindex="-98">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-light"
                                                data-toggle="dropdown" role="button" title="10">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner">
                                                        <div class="filter-option-inner-inner">10</div>
                                                    </div>
                                                </div>
                                            </button>
                                            <div class="dropdown-menu " role="combobox">
                                                <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                                    <ul class="dropdown-menu inner show"></ul>
                                                </div>
                                            </div>
                                        </div> entries</label></div>
                                <div id="example3_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="" placeholder="" aria-controls="example3"></label></div>
                                <table id="example3" class="display dataTable no-footer" style="min-width: 845px"
                                    role="grid" aria-describedby="example3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label=": activate to sort column descending" style="width: 35px;"></th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 81px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Department: activate to sort column ascending"
                                                style="width: 99.3438px;">Department</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 48.9531px;">Gender</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Education: activate to sort column ascending"
                                                style="width: 73.4375px;">Education</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Mobile: activate to sort column ascending"
                                                style="width: 54.1406px;">Mobile</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Email: activate to sort column ascending"
                                                style="width: 130.531px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1"
                                                aria-label="Joining Date: activate to sort column ascending"
                                                style="width: 80.4062px;">Joining Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 47.1875px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic1.jpg" alt=""></td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect</td>
                                            <td>Male</td>
                                            <td>M.COM., P.H.D.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic2.jpg" alt=""></td>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Female</td>
                                            <td>M.COM., P.H.D.</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic3.jpg" alt=""></td>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2009/01/12</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic4.jpg" alt=""></td>
                                            <td>Cedric Kelly</td>
                                            <td>Developer</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2012/03/29</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic5.jpg" alt=""></td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic6.jpg" alt=""></td>
                                            <td>Brielle Williamson</td>
                                            <td>Specialist</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2012/12/02</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic7.jpg" alt=""></td>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2012/08/06</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic8.jpg" alt=""></td>
                                            <td>Rhona Davidson</td>
                                            <td>Integration</td>
                                            <td>Male</td>
                                            <td>B.TACH, M.TACH</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2010/10/14</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic9.jpg" alt=""></td>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>Female</td>
                                            <td>B.A, B.C.A</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2009/09/15</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic10.jpg" alt=""></td>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Male</td>
                                            <td>B.COM., M.COM.</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2008/12/13</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="example3_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 30 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="example3_paginate"><a
                                        class="paginate_button previous disabled" aria-controls="example3"
                                        data-dt-idx="0" tabindex="0" id="example3_previous">Previous</a><span><a
                                            class="paginate_button current" aria-controls="example3" data-dt-idx="1"
                                            tabindex="0">1</a><a class="paginate_button " aria-controls="example3"
                                            data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                            aria-controls="example3" data-dt-idx="3" tabindex="0">3</a></span><a
                                        class="paginate_button next" aria-controls="example3" data-dt-idx="4"
                                        tabindex="0" id="example3_next">Next</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
