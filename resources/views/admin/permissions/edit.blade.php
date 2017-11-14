@extends('admin.layouts.app')

@section('main')
    <div class="box box-primary box-half">
        <div class="box-header">
            <div class="table-icon">
                <a href="{{ route('admin.permissions.index') }}"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h5 class="box-title">更新权限: <strong>{{ $permission->name }}</strong></h5>
        </div>
        <div class="box-body">
            <form onsubmit="task(this)">
                <div class="form-group">
                    <label>名称</label>
                    <input type="text" name="alias" class="form-control" value="{{ $permission->alias }}" autofocus required>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="name" class="form-control" value="{{ $permission->name }}" required>
                </div>
                <div class="form-group">
                    <label>描述</label>
                    <textarea name="describe" rows="2" class="form-control">{{ $permission->describe }}</textarea>
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
                method: 'PUT',
                action: '{{ route('admin.permissions.update',['permission' => $permission->id]) }}',
                jump: '{{ route('admin.permissions.index') }}'
            })
        }
    </script>
@stop