@extends('admin.layouts.app')

@section('main')
    <div class="box">
        <div class="box-header">
            <div class="table-icon">
                <i class="fa fa-table"></i>
            </div>
            <h5 class="box-title">链接设置</h5>
            @can('admin.triggers.create')
                <a class="btn btn-info btn-sm pull-right" href="{{ route('admin.triggers.create') }}"><i class="fa fa-plus"></i>添加</a>
            @endcan
            <div class="input-group pull-right">
                <input type="text" class="form-control" placeholder="Please enter keyword..." value="{{ $keyword }}">
                <span class="input-group-btn">
                      <button type="button" class="btn btn-link table-search"><i class="fa fa-search"></i></button>
                </span>
            </div>
            <select name="tag_id" class="form-control pull-right table-select">
                <option value="" {{ $tag_id == '' ? 'selected' : '' }}>请选择标签</option>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" {{ $tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>
            <select name="category_id" class="form-control pull-right table-select">
                <option value=""  {{ $category_id == '' ? 'selected' : '' }}>请选择分类</option>
                @foreach($categorys as $category)
                    <option value="{{ $category->id }}" {{ $category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>图片</th>
                    <th>名称</th>
                    <th>链接</th>
                    <th>分类</th>
                    <th>标签</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($triggers as $trigger)
                    <tr class="image">
                        <td>
                            <label>
                                @can('admin.triggers.batch')
                                    <input type="checkbox" value="{{ $trigger->id }}" class="table-check">
                                @endcan
                                {{ $trigger->id }}
                            </label>
                        </td>
                        <td>
                            <img src="{{ $trigger->cover }}" width="50" height="50">
                        </td>
                        <td>{{ $trigger->name }}</td>
                        <td>{{ $trigger->link }}</td>
                        <td>{{ $trigger->category->name }}</td>
                        <td>{{ $trigger->tag->name }}</td>
                        <td>
                            @if($trigger->is_active)
                                <small class="label label-success">启用</small>
                            @else
                                <small class="label label-danger">禁用</small>
                            @endif
                        </td>
                        <td>{{ $trigger->created_at }}</td>
                        <td>{{ $trigger->updated_at }}</td>
                        <td>
                            @can('admin.triggers.edit')
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.triggers.edit',['trigger' => $trigger->id]) }}">
                                    <i class="fa fa-pencil-square-o"></i> 编辑
                                </a>
                            @endcan
                            @can('admin.triggers.destroy')
                                <a href="{{ route('admin.triggers.destroy',['trigger' => $trigger->id]) }}"
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
            @can('admin.triggers.batch')
                <button class="btn btn-info btn-sm select-all"><i class="fa fa-check"></i> 全选</button>
                <a batch-url="{{ route('admin.triggers.batch') }}" href="javascript:void(0);" class="btn btn-danger btn-sm btn-batch"><i class="fa fa-trash-o"></i> 删除</a>
            @endcan
            {{ $triggers->appends(['keyword' => $keyword,'category_id' => $category_id,'tag_id' => $tag_id])->links() }}
            <p class="total">共计 {{ $triggers->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
@stop