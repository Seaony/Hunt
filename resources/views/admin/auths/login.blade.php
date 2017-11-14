@extends('admin.layouts.basic')

@section('title','Sign')

@section('body')
    <div class="auth-box">
        <h1></h1>
        <p>{{ poem() }}</p>
        <form class="form-horizontal" onsubmit="task(this)">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Please enter your email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Please enter your password" required>
            </div>
            <div class="form-group">
                <a href="javascript:void(0);" class="pull-right" onclick="failed('who care?')">Forget Password?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block">Sign to</button>
            </div>
        </form>
    </div>
    <script>
        function task(el) {
            window.event.preventDefault()
            return toSubmit({
                el: $(el),
                method: 'POST',
                action: '{{ route('admin.auth.login') }}',
                callback: () => window.location.href = '{{ route('admin.index') }}'
            })
        }
    </script>
    @include('admin.layouts.footer')
@stop