@extends('layouts.app')

@section('title', 'Product')

@section('style')
<link href="{{ asset('metronic/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
    type="text/css" />
@endsection()

@section('sidebar')
@parent

@include('layouts.sidebar')
@endsection

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader" style="padding:0px;margin-bottom:20px;">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Product</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ url('/product') }}" class="m-nav__link">
                                <span class="m-nav__link-text">Product</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="{!! route('product.create') !!}"
                                class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Create</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Datatable -->
                <table class="table table-striped table-bordered table-hover table-checkable" id="table_data">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Brand</th>
                            <th>Images</th>
                            <th>No Product</th>
                            <th>Price Piece</th>
                            <th>Price Box</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('metronic/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript">
</script>
<script src="{{ asset('metronic/assets/default/custom/crud/datatables/basic/pagination_user.js') }}"
    type="text/javascript"></script>


<script>
    $(document).ready(function(){
                var myVar = 1;
               $('#table_data').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url:'{{ route('datatable_product') }}',
                    },
                    columnDefs: [
                            {
                               targets: 0 ,
                               className: 'title'
                            },
                            {
                               targets: 1 ,
                               className: 'product_brands_name'
                            },
                            {
                                targets: 2 ,
                                className: 'photo'
                             },
                            {
                               targets: 3 ,
                               className: 'no_product'
                            },
                            {
                               targets: 4 ,
                               className: 'price_piece'
                            },
                            {
                                targets: 5 ,
                                className: 'price_box'
                             },
                            {
                               targets: 6 ,
                               className: 'is_active'
                            },
                            {
                                targets: 7 ,
                                className: 'center'
                             },


                          ],
                    columns: [
                      {data: 'title', name: 'title'},
                      {data: 'product_brands_name', name: 'product_brands_name'},
                      {data: 'photo_highlight', name: 'photo_highlight' , render: function( data, type, full, meta ) {
                        return '<img src="images/'+ data + '" width="150px" height="150px">';

                    }},
                      {data: 'no_product', name: 'no_product'},
                      {data: 'price_piece', name: 'price_piece'},
                      {data: 'price_box', name: 'price_box'},
                      {data: 'is_active', name: 'is_active',  render: function( data, type, row) {
                        if (data === '1') {
                            return 'Active';
                            } else {
                            return 'No';
                            }

                    }},
                      {data: 'aksi', name: 'aksi'}
                    ]
              });
            });
</script>
@endsection
