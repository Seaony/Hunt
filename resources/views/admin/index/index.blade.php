@extends('admin.layouts.app')

@section('main')
    <br><br><br>
    <div class="row">
        @can('admin.categorys.index')
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>Category</h3>
                        <p>{{ $categorys_count }}</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-columns"></i>
                    </div>
                    <a href="{{ route('admin.categorys.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        @endcan
        @can('admin.tags.index')
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Tag</h3>
                        <p>{{ $tags_count }}</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-tag"></i>
                    </div>
                    <a href="{{ route('admin.tags.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        @endcan
        @can('admin.triggers.index')
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>Link</h3>
                        <p>{{ $triggers_count }}</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <a href="{{ route('admin.triggers.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        @endcan
        @can('admin.targets.index')
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>Target</h3>
                        <p>{{ $targets_count }}</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-paper-plane"></i>
                    </div>
                    <a href="{{ route('admin.targets.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        @endcan
    </div>
    <div class="row">
        <div class="col-md-6">
            @foreach($proposals as $proposal)
                <div class="callout callout-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="fa fa-ban" style="margin-right: 5px;"></i> New Proposal。</h4>
                    <br>
                    <p>{{ $proposal->content }}</p>
                    <p class="pull-right">by {{ $proposal->name }}</p>
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach($nominates as $nominate)
                <div class="callout callout-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="fa fa-ban" style="margin-right: 5px;"></i> New Nominate。</h4>
                    <br>
                    <p>「{{ $nominate->link }}」 - {{ $nominate->describe }}</p>
                    <p class="pull-right">by {{ $nominate->name }}</p>
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
    </div>
@stop