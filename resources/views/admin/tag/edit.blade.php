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
                            Update
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{route('admin.tag.update', $tag->id)}}" method="post">
                            @csrf
                            @method('put')
                            <label for="email_address">Tag Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" name="name" class="form-control" value="{{$tag->name}}">
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
