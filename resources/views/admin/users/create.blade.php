@extends('admin.layouts.app')

@section('main')
    <div class="box box-primary box-half">
        <div class="box-header">
            <div class="table-icon">
                <a href="{{ route('admin.users.index') }}"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h5 class="box-title">添加用户</h5>
        </div>
        <div class="box-body">
            <form onsubmit="task(this)">
                <div class="form-group">
                    <label>名称</label>
                    <input type="text" name="name" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <label>邮箱</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>角色</label>
                    <div class="check-box">
                        @foreach($roles as $role)
                            <label>
                                <input type="checkbox" name="roles[]" value="{{ $role->name }}" class="form-control">{{ $role->alias }}
                            </label>
                        @endforeach
                    </div>
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
                action: '{{ route('admin.users.store') }}',
                jump: '{{ route('admin.users.index') }}'
            })
        }
    </script>
@stop