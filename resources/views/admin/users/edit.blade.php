@extends('admin.layouts.app')

@section('main')
    <div class="box box-half">
        <div class="box-header">
            <div class="table-icon">
                <a href="{{ route('admin.users.index') }}"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h5 class="box-title">更新用户: <strong>{{ $user->name }}</strong></h5>
        </div>
        <div class="box-body">
            <form onsubmit="task(this)">
                <div class="form-group">
                    <label>名称</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" autofocus required>
                </div>
                <div class="form-group">
                    <label>邮箱</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label>新密码</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>角色</label>
                    <div class="check-box">
                        @foreach($roles as $role)
                            <label>
                                <input type="checkbox" name="roles[]" value="{{ $role->name }}" class="form-control" {{ $user->hasRole($role) ? 'checked' : '' }}>{{ $role->alias }}
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
                method: 'PUT',
                action: '{{ route('admin.users.update',['user' => $user->id]) }}',
                jump: '{{ route('admin.users.index') }}'
            })
        }
    </script>
@stop