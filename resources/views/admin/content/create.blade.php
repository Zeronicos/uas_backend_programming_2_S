@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Content</h1>
        </div>

        <div class="card card-secondary">
            <div class="card-header">
                <h4>Create Slider</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Icon</label>
                        <br>
                        <button class="btn btn-dark" role="iconpicker" name="icon"></button>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="" cols="30" rows="10" class="form-control" name="description"></textarea>
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
