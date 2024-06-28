@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Coupon</h1>
        </div>

        <div class="card card-secondary">
            <div class="card-header">
                <h4>Coupon List</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.coupon.create') }}" class="btn btn-dark">Create New</a>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
