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
                    <th>站点链接</th>
                    <th>站点简述</th>
                    <th>名称</th>
                    <th>设备信息</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th width="200px">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nominates as $nominate)
                    <tr>
                        <td>
                            {{ $nominate->id }}
                        </td>
                        <td>
                            <a href="{{ $nominate->link }}" target="_blank">{{ $nominate->link }}</a>
                        </td>
                        <td>{{ $nominate->describe }}</td>
                        <td>{{ $nominate->name }}</td>
                        <td>
                            <a href="javascript:void(0);" class="btn btn-info btn-sm btn-imodal"
                               modal-target="#nominate-{{ $nominate->id }}">
                                <i class="fa fa-user-secret"></i>点击查看
                            </a>
                        </td>
                        <td>{{ $nominate->created_at }}</td>
                        <td>{{ $nominate->updated_at }}</td>
                        <td>
                            @can('admin.nominates.destroy')
                                <a href="{{ route('admin.nominates.destroy',['nominate' => $nominate->id]) }}"
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
            {{ $nominates->links() }}
            <p class="total">共计 {{ $nominates->total() }} 条数据，每页显示 10 条。</p>
        </div>
    </div>
    @foreach($nominates as $nominate)
        <div id="nominate-{{ $nominate->id }}" class="imodal">
            <table class="table table-bordered no-margin">
                <tbody>
                <tr>
                    <th class="text-center">名称</th>
                    <th class="text-center">数据</th>
                </tr>
                @foreach($nominate->agents as $key => $value)
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