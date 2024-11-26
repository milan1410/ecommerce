@extends('layouts.admin.admin_layout')
@section('title', trans('applang.show_product'))

@section('vendor-css')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/vendors/css/extensions/sweetalert2.min.css">
@endsection

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets')}}/css/plugins/extensions/toastr.css">
@endsection

@section('content')
    <div class="container">
        <div class="content-body">
            @livewire('erp.inventory.show-product', ['product' => $product])
        </div>
    </div>

    <!-- Warehouses Modals -->
    @include('erp.inventory.warehouses.modals')

@endsection
<!-- END: Content-->

@section('page-vendor-js')
    <script src="{{asset('app-assets')}}/vendors/js/extensions/toastr.min.js"></script>
    <script src="{{asset('app-assets')}}/vendors/js/extensions/sweetalert2.all.min.js"></script>
@endsection

@section('page-js')
    <script src="{{asset('app-assets')}}/js/scripts/modal/components-modal.js"></script>
    <script src="{{asset('app-assets')}}/js/scripts/extensions/toastr.js"></script>

    <script type="text/javascript">
/*        $(document).ready(function () {
            $('#formModalDeleteWarehouse').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var warehouse_id = button.data('warehouse_id')
                var name = button.data('name')
                var modal = $(this)
                modal.find('.modal-body #warehouse_id').val(warehouse_id)
                modal.find('.modal-body #name').val(name)
            });
        })*/

        @if (count($errors) > 0)
        $('#formModal').modal('show');
        @endif

        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true,
                "positionClass": "{{app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right'}}",
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if ($errors->any())
            @foreach($errors->all() as $error)
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true,
                    "positionClass": "{{app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right'}}",
                }
                toastr.error("{{$error}}");
            @endforeach
        @endif
    </script>
@endsection
