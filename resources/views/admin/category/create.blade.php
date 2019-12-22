@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ADD NEW CATEGORY
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="">Category Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" name="name" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="image" name="image" class="form-control" >
                                </div>
                            </div>
                            <a href="{{route('admin.tag.index')}}" class="btn btn-danger m-t-0 waves-effect">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-0 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->
    </div>
@endsection

@push('js')
@endpush
