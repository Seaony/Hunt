@extends('admin.layouts.app')

@section('main')
    <div class="box box-primary box-half">
        <div class="box-header">
            <div class="table-icon">
                <a href="{{ route('admin.friendships.index') }}"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h5 class="box-title">添加友情链接</h5>
        </div>
        <div class="box-body">
            <form onsubmit="task(this)">
                <div class="form-group">
                    <label>名称</label>
                    <input type="text" name="name" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <label>封面</label>
                    <div class="input-group">
                        <input type="text" name="cover" class="form-control" readonly required>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-link btn-file">
                                <i class="fa fa-cloud-upload"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label>链接</label>
                    <input type="text" name="link" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>状态</label>
                    <label class="radio-inline">
                        <input type="radio" name="is_active" value="1" checked>
                        启用
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="is_active" value="0">
                        禁用
                    </label>
                </div>
                <div class="form-group">
                    <label>描述</label>
                    <input type="text" name="describe" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-floppy-o"></i>保存
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function task(el) {
            window.event.preventDefault()
            return toSubmit({
                el: $(el),
                method: 'POST',
                action: '{{ route('admin.friendships.store') }}',
                jump: '{{ route('admin.friendships.index') }}'
            })
        }
    </script>
@stop