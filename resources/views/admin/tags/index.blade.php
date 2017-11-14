@extends('admin.layouts.app')

@section('main')
    <div class="box">
        <div class="box-header">
            <div class="table-icon">
                <i class="fa fa-table"></i>
            </div>
            <h5 class="box-title">标签管理</h5>
            @can('admin.tags.create')
                <a class="btn btn-info btn-sm pull-right" href="{{ route('admin.tags.create') }}"><i class="fa fa-plus"></i>添加</a>
            @endcan
            <div class="input-group pull-right">
                <input type="text" class="form-control" placeholder="Please enter keyword..." value="{{ $keyword }}">
                <span class="input-group-btn">
                      <button type="button" class="btn btn-link table-search"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>名称</th>
                    <th>图标</th>
                    <th>排序</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>
                            <label>
                                @can('admin.tags.batch')
                                    <input type="checkbox" value="{{ $tag->id }}" class="table-check">
                                @endcan
                                {{ $tag->id }}
                            </label>
                        </td>
                        <td>{{ $tag->name }}</td>
                        <td><i data-toggle="tooltip" title="{{ $tag->icon }}" class="fa {{ $tag->icon }}"/></td>
                        <td>{{ $tag->weight }}</td>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->updated_at }}</td>
                        <td>
                            @can('admin.tags.edit')
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.tags.edit',['tag' => $tag->id]) }}">
                                    <i class="fa fa-pencil-square-o"></i> 编辑
                                </a>
                            @endcan
                            @can('admin.tags.destroy')
                                <a href="{{ route('admin.tags.destroy',['tag' => $tag->id]) }}" class="btn btn-sm btn-danger destroy">
                                    <i class="fa fa-trash-o"></i>
                                    删除
                                </a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            @can('admin.tags.batch')
                <button class="btn btn-info btn-sm select-all"><i class="fa fa-check"></i> 全选</button>
                <a batch-url="{{ route('admin.tags.batch') }}" href="javascript:void(0);" class="btn btn-danger btn-sm btn-batch"><i class="fa fa-trash-o"></i> 删除</a>
            @endcan
            {{ $tags->appends(['keyword' => $keyword])->links() }}
            <p class="total">共计 {{ $tags->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
@stop