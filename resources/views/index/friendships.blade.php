@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row categorys">
            @foreach($friendships as $friendship)
                <div class="col-md-3">
                    <div class="card">
                        <a href="{{ $friendship->link }}" target="_blank">
                            <div class="card-heading">
                            <span class="card-icon">
                                <img src="{{ $friendship->cover }}">
                            </span>
                                <span class="card-title">
                                <span>{{ $friendship->name }}</span>
                            </span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-body">
                                <span>{{ $friendship->describe }}</span>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop