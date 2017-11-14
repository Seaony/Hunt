@extends('admin.layouts.app')

@section('main')
    <div class="box">
        <div class="box-header">
            <div class="table-icon">
                <i class="fa fa-table"></i>
            </div>
            <h5 class="box-title">角色管理</h5>
            @can('admin.roles.create')
                <a class="btn btn-info btn-sm pull-right" href="{{ route('admin.roles.create') }}"><i class="fa fa-plus"></i>添加</a>
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
                    <th>Slug</th>
                    <th>描述</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>
                            <label>
                                @can('admin.roles.batch')
                                    <input type="checkbox" value="{{ $role->id }}" class="table-check">
                                @endcan
                                {{ $role->id }}
                            </label>
                        </td>
                        <td>{{ $role->alias }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->describe }}</td>
                        <td>{{ hommization($role->created_at) }}</td>
                        <td>{{ hommization($role->updated_at) }}</td>
                        <td>
                            @can('admin.roles.edit')
                                <a class="btn btn-sm btn-info" href="{{ route('admin.roles.edit',['role' => $role->id]) }}">
                                    <i class="fa fa-pencil-square-o"></i> 编辑
                                </a>
                            @endcan
                            @can('admin.roles.destroy')
                                <a href="{{ route('admin.roles.destroy',['role' => $role->id]) }}" class="btn btn-sm btn-danger destroy">
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
            @can('admin.roles.batch')
                <button class="btn btn-info btn-sm select-all"><i class="fa fa-check"></i> 全选</button>
                <a batch-url="{{ route('admin.roles.batch') }}" href="javascript:void(0);" class="btn btn-danger btn-sm btn-batch"><i class="fa fa-trash-o"></i> 删除</a>
            @endcan
            {{ $roles->appends(['keyword' => $keyword])->links() }}
            <p class="total">共计 {{ $roles->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
@stop