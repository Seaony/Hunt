@extends('admin.layouts.app')

@section('main')
    <div class="error-page">
        <h2 class="headline text-yellow"> 401</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i>&nbsp;&nbsp;你无权进行此操作。</h3>
            <br>
            <br>
            <a href="javascript:history.go(-1);" class="btn btn-sm btn-info btn-lg">
                <i class="fa fa-reply"></i>
                返回上一页
            </a>
        </div>
    </div>
@stop