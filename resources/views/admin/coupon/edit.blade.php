@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Coupon</h1>
        </div>

        <div class="card card-secondary">
            <div class="card-header">
                <h4>Update Coupon</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.coupon.update', $coupon->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $coupon->name }}"">
                    </div>

                    <div class="form-group">
                        <label>Coupon code</label>
                        <input type="text" class="form-control" name="code" value="{{ $coupon->code }}">
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="{{ $coupon->quantity }}">
                    </div>

                    <div class="form-group">
                        <label>Minimum Purchase Price</label>
                        <input type="text" class="form-control" name="min_purchase_amount" value="{{ $coupon->min_purchase_price }}">
                    </div>

                    <div class="form-group">
                        <label>Expire Date</label>
                        <input type="date" class="form-control" name="expire_date" value="{{ $coupon->expire_date }}">
                    </div>

                    <div class="form-group">
                        <label>Discount Type</label>
                        <select type="text" class="form-control" name="discount_type">
                            <option @selected($coupon->discount_type === 1) value="percent">Percent</option>
                            <option @selected($coupon->discount_type === 0) value="amount">Amount ({{ config('setting.site_currency_icon') }})</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Discount</label>
                        <input type="text" class="form-control" name="discount" value="{{ $coupon->discount }}">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type="text" class="form-control" name="status">
                            <option @selected($coupon->status === 1) value="1">Active</option>
                            <option @selected($coupon->status === 0) value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
