@extends('dashboard.home', ['title' => __('dashboard.dashboard.keywords.Products')])

@section('content')
    <div>
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">{{__('dashboard.keywords.Products')}}</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <a href="{{route('dashboard.product.create')}}" class="btn btn-outline-primary"><i class="fas fa-plus mx-2"></i>{{__('dashboard.keywords.Create :item', ['item' => __('dashboard.keywords.Product')])}}</a>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
                <div class="card-body">

                </div>
            <!--end::Form-->
        </div>
    </div>
@endsection
