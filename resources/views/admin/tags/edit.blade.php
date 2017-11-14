@extends('admin.layouts.app')

@section('main')
    <div class="box box-primary box-half">
        <div class="box-header">
            <div class="table-icon">
                <a href="{{ route('admin.tags.index') }}"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h5 class="box-title">更新权限: <strong>{{ $tag->name }}</strong></h5>
        </div>
        <div class="box-body">
            <form onsubmit="task(this)">
                <div class="form-group">
                    <label>名称</label>
                    <input type="text" name="name" class="form-control" value="{{ $tag->name }}" autofocus required>
                </div>
                <div class="form-group">
                    <label>图标</label>
                    <input type="text" name="icon" class="form-control iconpicker" value="{{ $tag->icon }}">
                </div>
                <div class="form-group">
                    <label>描述</label>
                    <input type="text" name="describe" class="form-control" value="{{ $tag->describe }}" required>
                </div>
                <div class="form-group">
                    <label>排序</label>
                    <input type="number" name="weight" class="form-control" value="{{ $tag->weight }}" required>
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
                action: '{{ route('admin.tags.update',['tag' => $tag->id]) }}',
                jump: '{{ route('admin.tags.index') }}'
            })
        }
    </script>
@stop