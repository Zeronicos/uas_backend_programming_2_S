@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Coupon</h1>
        </div>

        <div class="card card-secondary">
            <div class="card-header">
                <h4>Create Coupon</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.coupon.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label>Coupon code</label>
                        <input type="text" class="form-control" name="code" value="{{ old('code') }}">
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}">
                    </div>

                    <div class="form-group">
                        <label>Minimum Purchase Price</label>
                        <input type="text" class="form-control" name="min_purchase_amount" value="{{ old('min_purchase_amount') }}">
                    </div>

                    <div class="form-group">
                        <label>Expire Date</label>
                        <input type="date" class="form-control" name="expire_date" value="{{ old('date') }}">
                    </div>

                    <div class="form-group">
                        <label>Discount Type</label>
                        <select type="text" class="form-control" name="discount_type">
                            <option value="percent">Percent</option>
                            <option value="amount">Amount ({{ config('setting.site_currency_icon') }})</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Discount</label>
                        <input type="text" class="form-control" name="discount" value="{{ old('discount') }}">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type="text" class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Create</button>
                </form>
            </div>
        </div>
    </section>
@endsection
