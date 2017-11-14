@foreach($menus as $menu)
    @if($menu->childers->count())
        <div class="modal fade" id="childers{{ $menu->id }}">
            <div class="modal-dialog modal-lg" style="margin-top: 7%">
                <div class="modal-content modal-lg">
                    <div class="modal-body">
                        <div class="box" style="border: none;box-shadow: none;margin: 0;">
                            <div class="box-header" style="padding: 5px 10px">
                                <h5 class="box-title"><i class="fa {{ $menu->icon }}"></i>&nbsp;{{ $menu->name }}&nbsp;&nbsp;的子栏目</h5>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>名称</th>
                                        <th>图标</th>
                                        <th>Slug</th>
                                        <th>排序</th>
                                        <th>添加时间</th>
                                        <th>更新时间</th>
                                        <th width="200px">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($menu->childers as $childer)
                                        <tr>
                                            <td>{{ $childer->id }}</td>
                                            <td>{{ $childer->name }}</td>
                                            <td><i data-toggle="tooltip" title="{{ $childer->icon }}" class="fa {{ $childer->icon }}"/></td>
                                            <td>{{ $childer->slug }}</td>
                                            <td>{{ $childer->weight }}</td>
                                            <td>{{ $childer->created_at }}</td>
                                            <td>{{ $childer->updated_at }}</td>
                                            <td>
                                                @can('admin.menus.edit')
                                                    <a class="btn btn-info btn-sm" href="{{ route('admin.menus.edit',['menu' => $childer->id]) }}" onclick="hideModal('childers{{ $menu->id }}')">
                                                        <i class="fa fa-pencil-square-o"></i> 编辑
                                                    </a>
                                                @endcan
                                                @can('admin.menus.destroy')
                                                    <a href="{{ route('admin.menus.destroy',['menu' => $childer->id]) }}" class="btn btn-danger btn-sm destroy" onclick="hideModal('childers{{ $menu->id }}')">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

<script>
    function hideModal(modal) {
        $('#'+modal).modal('hide')
    }
</script>