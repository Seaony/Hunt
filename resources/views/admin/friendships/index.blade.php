@extends('admin.layouts.app')

@section('main')
    <div class="box">
        <div class="box-header">
            <div class="table-icon">
                <i class="fa fa-table"></i>
            </div>
            <h5 class="box-title">友情链接</h5>
            @can('admin.friendships.create')
                <a class="btn btn-info btn-sm pull-right" href="{{ route('admin.friendships.create') }}"><i class="fa fa-plus"></i>添加</a>
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
                    <th>图片</th>
                    <th>名称</th>
                    <th>链接</th>
                    <th>描述</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($friendships as $friendship)
                    <tr class="image">
                        <td>
                            <label>
                                @can('admin.friendships.batch')
                                    <input type="checkbox" value="{{ $friendship->id }}" class="table-check">
                                @endcan
                                {{ $friendship->id }}
                            </label>
                        </td>
                        <td>
                            <img src="{{ $friendship->cover }}" width="50" height="50">
                        </td>
                        <td>{{ $friendship->name }}</td>
                        <td>{{ $friendship->link }}</td>
                        <td>{{ $friendship->describe }}</td>
                        <td>
                            @if($friendship->is_active)
                                <small class="label label-success">启用</small>
                            @else
                                <small class="label label-danger">禁用</small>
                            @endif
                        </td>
                        <td>{{ $friendship->created_at }}</td>
                        <td>{{ $friendship->updated_at }}</td>
                        <td>
                            @can('admin.friendships.edit')
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.friendships.edit',['friendship' => $friendship->id]) }}">
                                    <i class="fa fa-pencil-square-o"></i> 编辑
                                </a>
                            @endcan
                            @can('admin.friendships.destroy')
                                <a href="{{ route('admin.friendships.destroy',['friendship' => $friendship->id]) }}"
                                   class="btn btn-sm btn-danger destroy">
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
            @can('admin.friendships.batch')
                <button class="btn btn-info btn-sm select-all"><i class="fa fa-check"></i> 全选</button>
                <a batch-url="{{ route('admin.friendships.batch') }}" href="javascript:void(0);"
                   class="btn btn-danger btn-sm btn-batch"><i class="fa fa-trash-o"></i> 删除</a>
            @endcan
            {{ $friendships->appends(['keyword' => $keyword])->links() }}
            <p class="total">共计 {{ $friendships->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
@stop