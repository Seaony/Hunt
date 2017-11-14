@extends('admin.layouts.app')

@section('main')
    <div class="box">
        <div class="box-header">
            <div class="table-icon">
                <i class="fa fa-table"></i>
            </div>
            <h5 class="box-title">建议反馈</h5>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>反馈内容</th>
                    <th>名称</th>
                    <th>邮箱</th>
                    <th>设备信息</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proposals as $proposal)
                    <tr>
                        <td>
                            {{ $proposal->id }}
                        </td>
                        <td>{{ $proposal->content }}</td>
                        <td>{{ $proposal->name }}</td>
                        <td>{{ $proposal->email }}</td>
                        <td>
                            <a href="javascript:void(0);" class="btn btn-info btn-sm btn-imodal"
                               modal-target="#proposal-{{ $proposal->id }}">
                                <i class="fa fa-user-secret"></i>点击查看
                            </a>
                        </td>
                        <td>{{ $proposal->created_at }}</td>
                        <td>{{ $proposal->updated_at }}</td>
                        <td>
                            @can('admin.proposals.destroy')
                                <a href="{{ route('admin.proposals.destroy',['proposal' => $proposal->id]) }}"
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
            {{ $proposals->links() }}
            <p class="total">共计 {{ $proposals->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
    @foreach($proposals as $proposal)
        <div id="proposal-{{ $proposal->id }}" class="imodal">
            <table class="table table-bordered no-margin">
                <tbody>
                <tr>
                    <th class="text-center">名称</th>
                    <th class="text-center">数据</th>
                </tr>
                @foreach($proposal->agents as $key => $value)
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