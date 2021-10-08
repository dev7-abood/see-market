@extends('dashboard.home', ['title' => __('dashboard.keywords.Create :item', ['item' => __('dashboard.keywords.Product')])])

@section('content')
    <div>
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">{{__('dashboard.keywords.Product')}}</h3>
                <div class="card-toolbar">
                    {{--                    <div class="example-tools justify-content-center">--}}
                    {{--                        <a href="" class="btn btn-outline-primary"><i class="fas fa-plus mx-2"></i>{{__('dashboard.keywords.Create :item', ['item' => __('dashboard.keywords.Product')])}}</a>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <!--begin::Form-->
            <div class="card-body">
                <form action="{{route('dashboard.product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">

                            @error('product_name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="product_name">Product name<span class="text-danger">*</span></label>
                            <input required id="product_name" type="text" class="form-control" name="product_name"
                                   placeholder="Product name">
                        </div>
                        <div class="form-group">

                            @error('product_url')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="product_url">Partner url<span class="text-danger">*</span></label>
                            <input required type="url" class="form-control" id="product_url" name="product_url"
                                   placeholder="product url">
                        </div>
                        <div class="form-group">

                            @error('partner_name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="partner_name">Partner name</label>
                            <select required name="partner_name" class="form-control" id="partner_name">
                                <option>ebay</option>
                            </select>
                        </div>

                        <div class="form-group">

                            @error('price')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                        </div>

                        <div class="form-group">

                            @error('discount_percent')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="price">Discount percent</label>
                            <input type="text" class="form-control" id="price" name="discount_percent"
                                   placeholder="Discount percent">
                        </div>

                        <div class="form-group">

                            @error('discount_price')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="discount_price">Discount price</label>
                            <input type="text" class="form-control" id="discount_price" name="discount_price"
                                   placeholder="Discount price">
                        </div>

                        <div class="form-group">
                            @error('desc')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror

                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" class="form-control"></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                @error('main_image')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror

                                <label for="main_image">Main image<span class="text-danger">*</span></label>
                                <div>
                                    <input required type="file" id="main_image" name="main_image">
                                </div>
                            </div>

                            <div class="form-group">
                                @error('sub_images')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <label for="main_image">Sub images</label>
                                <div>
                                    <input multiple type="file" id="sub_images" name="sub_images[]">
                                </div>
                            </div>

                            <div class="form-group">
                                @error('qr_image')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror

                                <label for="main_image">QR image</label>
                                <div>
                                    <input type="file" id="qr_image" name="qr_image">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                @error('product_activity')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror

                            <label>Product activity</label>
                            <div class="radio-inline">
                                <label class="radio">
                                    <input type="radio" value="1" name="product_activity">
                                    <span></span>Active</label>
                                <label class="radio">
                                    <input type="radio" value="0" name="product_activity">
                                    <span></span>Deactivate</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                    </div>
                </form>
            </div>
            <!--end::Form-->
        </div>
    </div>
@endsection
