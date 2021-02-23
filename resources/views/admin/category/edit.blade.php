@extends('layouts.backend.app')

@section('title', 'Category')

    @push('css')

    @endpush
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{ trans('edit_cate') }}
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('categories.update', $cate->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name"
                                        placeholder="{{ trans('tag_name') }}" value="{{ $cate->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">{{ trans('upload_image') }}</label>
                                    <input id="img" type="file" name="image" class="form-control"
                                        onchange="loadFile(event)">
                                    <img id="avatar" class="thumbnail" width="300px"
                                        src="{{ asset('storage/image/' . $cate->image) }}">
                                </div>
                            </div>
                            <a class="btn btn-danger  waves-effect"
                                href="{{ route('categories.index') }}">{{ trans('back') }}</a>
                            <button type="submit" class="btn btn-primary waves-effect">{{ trans('submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/loadimage.js') }}"></script>
@endpush
