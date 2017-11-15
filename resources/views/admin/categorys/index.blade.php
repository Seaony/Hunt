@extends('admin.layouts.app')

@section('main')
    <div class="box">
        <div class="box-header">
            <div class="table-icon">
                <i class="fa fa-table"></i>
            </div>
            <h5 class="box-title">分类设置</h5>
            @can('admin.categorys.create')
                <a class="btn btn-info btn-sm pull-right" href="{{ route('admin.categorys.create') }}"><i class="fa fa-plus"></i>添加</a>
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
                    <th>描述</th>
                    <th>状态</th>
                    <th>排序</th>
                    <th>链接数</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorys as $category)
                    <tr class="image">
                        <td>
                            <label>
                                @can('admin.categorys.batch')
                                    <input type="checkbox" value="{{ $category->id }}" class="table-check">
                                @endcan
                                {{ $category->id }}
                            </label>
                        </td>
                        <td>
                            <img src="{{ $category->cover }}" width="50" height="50">
                        </td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->describe }}</td>
                        <td>
                            @if($category->is_active)
                                <small class="label label-success">启用</small>
                            @else
                                <small class="label label-danger">禁用</small>
                            @endif
                        </td>
                        <td>{{ $category->weight }}</td>
                        <td>{{ $category->triggers_count }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            @can('admin.categorys.edit')
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.categorys.edit',['category' => $category->id]) }}">
                                    <i class="fa fa-pencil-square-o"></i> 编辑
                                </a>
                            @endcan
                            @can('admin.categorys.destroy')
                                <a href="{{ route('admin.categorys.destroy',['category' => $category->id]) }}"
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
            @can('admin.categorys.batch')
                <button class="btn btn-info btn-sm select-all"><i class="fa fa-check"></i> 全选</button>
                <a batch-url="{{ route('admin.categorys.batch') }}" href="javascript:void(0);"
                   class="btn btn-danger btn-sm btn-batch"><i class="fa fa-trash-o"></i> 删除</a>
            @endcan
            {{ $categorys->appends(['keyword' => $keyword])->links() }}
            <p class="total">共计 {{ $categorys->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
@stop