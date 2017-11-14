@extends('admin.layouts.app')

@section('main')
    <div class="box box-primary box-half">
        <div class="box-header">
            <div class="table-icon">
                <a href="{{ route('admin.menus.index') }}"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h5 class="box-title">更新菜单: <strong>{{ $menu->name }}</strong></h5>
        </div>
        <div class="box-body">
            <form onsubmit="task(this)">
                <div class="form-group">
                    <label>名称</label>
                    <input type="text" name="name" class="form-control" value="{{ $menu->name }}" autofocus required>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $menu->slug }}" required>
                </div>
                <div class="form-group">
                    <label>图标</label>
                    <input type="text" name="icon" class="form-control iconpicker" value="{{ $menu->icon }}">
                </div>
                <div class="form-group">
                    <label>排序</label>
                    <input type="number" name="weight" class="form-control" value="{{ $menu->weight }}" required>
                </div>
                <div class="form-group">
                    <label>父级</label>
                    <select name="top_id" class="form-control" required>
                        <option value="0" {{ $menu->top_id == 0 ? 'selected' : '' }}>顶级菜单</option>
                        @foreach($menus as $m)
                            <option value="{{ $m->id }}" {{ $menu->top_id == $m->id ? 'selected' : '' }}>{{ $m->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>描述</label>
                    <textarea name="describe" rows="2" class="form-control">{{ $menu->describe }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-floppy-o"></i>保存
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('.iconpicker').iconpicker({title: '请选择一个图标', placement: 'right'})
        $('.iconpicker-search').attr('placeholder', 'Search...')

        function task(el) {
            window.event.preventDefault()
            return toSubmit({
                el: $(el),
                method: 'PUT',
                action: '{{ route('admin.menus.update',['menu' => $menu->id]) }}',
                jump: '{{ route('admin.menus.index') }}'
            })
        }
    </script>
@stop