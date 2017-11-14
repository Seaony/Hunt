@extends('admin.layouts.app')

@section('main')
    <div class="box">
        <div class="box-header">
            <div class="table-icon">
                <i class="fa fa-table"></i>
            </div>
            <h5 class="box-title">跳转记录</h5>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>站点名称</th>
                    <th>站点链接</th>
                    <th>设备信息</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($targets as $target)
                    <tr>
                        <td>
                            {{ $target->id }}
                        </td>
                        <td>
                            <a href="{{ $target->trigger->link }}" target="_blank">{{ $target->trigger->name }}</a>
                        </td>
                        <td><a href="{{ $target->trigger->link }}" target="_blank">{{ $target->trigger->link }}</a></td>
                        <td>
                            <a href="javascript:void(0);" class="btn btn-info btn-sm btn-imodal"
                               modal-target="#target-{{ $target->id }}">
                                <i class="fa fa-user-secret"></i>点击查看
                            </a>
                        </td>
                        <td>{{ $target->created_at }}</td>
                        <td>{{ $target->updated_at }}</td>
                        <td>
                            @can('admin.targets.destroy')
                                <a href="{{ route('admin.targets.destroy',['target' => $target->id]) }}"
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
            {{ $targets->links() }}
            <p class="total">共计 {{ $targets->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
    @foreach($targets as $target)
        <div id="target-{{ $target->id }}" class="imodal">
            <table class="table table-bordered no-margin">
                <tbody>
                <tr>
                    <th class="text-center">名称</th>
                    <th class="text-center">数据</th>
                </tr>
                @foreach($target->agents as $key => $value)
                    <tr>
                        <td><strong>{{ $key }}</strong></td>
                        <td>{{ is_array($value) ? implode($value,' - ') : $value  }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
@stop