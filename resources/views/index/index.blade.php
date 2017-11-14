@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row search">
            <h1 class="logo"></h1>
            <p class="pull-left">{{ poem() }}</p>
            <input type="text" class="form-control search-card" placeholder="Please input keyword...">
            <a class="btn btn-link trigger" iframeurl="{{ route('triggers.show') }}"><i class="fa fa-gift"></i>我的盒子</a>
        </div>
        <div class="row index">
            @foreach($categorys as $category)
                <div class="col-md-3">
                    <a href="javascript:void(0);" class="trigger"
                       iframeurl="{{ route('category.index',['category' => $category->id]) }}">
                        <div class="card">
                            <img src="{{ $category->cover }}" class="card-header">
                            <div class="card-content">
                                <p class="category"><i class="fa fa-bookmark"></i>{{ $category->triggers_count }}</p>
                                <h3 class="card-title">{{ $category->name }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <p href="javascript:void(0);" class="subtitle">{{ $category->describe }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @include('layouts.footer')
    </div>
    @include('layouts.tools')
@stop