@extends('admin.layouts.app')

@section('main')
    <div class="box box-primary box-half">
        <div class="box-header">
            <div class="table-icon">
                <a href="{{ route('admin.triggers.index') }}"><i class="fa fa-arrow-left"></i></a>
            </div>
            <h5 class="box-title">更新链接: <strong>{{ $trigger->name }}</strong></h5>
        </div>
        <div class="box-body">
            <form onsubmit="task(this)">
                <div class="form-group">
                    <label>名称</label>
                    <input type="text" name="name" class="form-control" value="{{ $trigger->name }}" autofocus required>
                </div>
                <div class="form-group">
                    <label>封面</label>
                    <div class="input-group">
                        <input type="text" name="cover" class="form-control" value="{{ $trigger->cover }}" readonly required>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-link btn-file">
                                <i class="fa fa-cloud-upload"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label>链接</label>
                    <input type="text" name="link" class="form-control" value="{{ $trigger->link }}" required>
                </div>
                <div class="form-group">
                    <label>推荐人名称 (选填)</label>
                    <input type="text" name="form" class="form-control" value="{{ $trigger->form }}">
                </div>
                <div class="form-group">
                    <label>状态</label>
                    <label class="radio-inline">
                        <input type="radio" name="is_active" value="1" {{ $trigger->is_active ? 'checked' : '' }}>
                        启用
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="is_active" value="0" {{ $trigger->is_active ? '' : 'checked' }}>
                        禁用
                    </label>
                </div>
                <div class="form-group">
                    <label>分类</label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categorys as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $trigger->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>分类</label>
                    <select name="tag_id" class="form-control" required>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}" {{ $tag->id == $trigger->tag_id ? 'selected' : '' }}>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>描述</label>
                    <input type="text" name="describe" class="form-control" value="{{ $trigger->describe }}" required>
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
                action: '{{ route('admin.triggers.update',['trigger' => $trigger->id]) }}',
                jump: '{{ route('admin.triggers.index') }}'
            })
        }
    </script>
@stop