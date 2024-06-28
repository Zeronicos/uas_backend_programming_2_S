@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Content</h1>
        </div>

        <div class="card card-secondary">
            <div class="card-header">
                <h4>Update Slider</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.content.update', $content->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Icon</label>
                        <br>
                        <button data-icon="{{ $content->icon }}" class="btn btn-dark" role="iconpicker" name="icon"></button>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $content->title }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="" cols="30" rows="10" class="form-control" name="description">{{ $content->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select type="text" class="form-control" name="status">
                            <option @selected($content->status === 1) value="1">Active</option>
                            <option @selected($content->status === 0) value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
