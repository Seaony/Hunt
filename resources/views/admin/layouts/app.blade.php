@extends('admin.layouts.basic')

@section('title','Admin')

@section('body')
    <div class="wrapper">
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="image">
                        <h1 class="logo"></h1>
                    </div>
                </div>
                @include('admin.layouts.menus')
            </section>
        </aside>
        <div class="content-wrapper" id="main">
            <section class="content">
                <ul class="nav navbar-nav">
                    <li class="pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="http://owst2hgsv.bkt.clouddn.com/boy.jpg" class="user-image">
                        </a>
                        <ul class="dropdown-menu">
                            @can('admin.users.edit')
                                <li><a href="{{ route('admin.users.edit',['user' => auth()->user()->id]) }}"><i
                                                class="fa fa-cog"></i>设置</a></li>
                            @endcan
                            @can('admin.auth.logout')
                                <li><a href="{{ route('admin.auth.logout') }}" id="logout"><i class="fa fa-sign-out"></i> 注销</a></li>
                            @endcan
                        </ul>
                    </li>
                    @can('admin.clear')
                        <li class="pull-right">
                            <a href="{{ route('admin.clear') }}" id="cache-clear"><i class="fa fa-bolt"></i></a>
                        </li>
                    @endcan
                    <li class="pull-right">
                        <a href="{{ route('admin.examples') }}" id="cache-clear"><i class="fa fa-bookmark"></i></a>
                    </li>

                </ul>
                @yield('main')
            </section>
        </div>
        @include('admin.layouts.footer')
    </div>
@stop