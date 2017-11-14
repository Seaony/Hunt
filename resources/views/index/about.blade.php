@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <img src="http://ozd26c105.bkt.clouddn.com/boy.jpg" class="avatar">
                <ul class="links">
                    <h3>Seaony <i class="fa fa-heart"></i> Zrl</h3>
                    <p>{{ poem() }}</p>
                    <li>
                        <a href="javascript:void(0);" data-toggle="tooltip" title="seaony@outlook.com" class="email"><i class="fa fa-envelope"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="tooltip" title="1658529466" class="qq"><i class="fa fa-qq"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/Seaony" target="_blank" class="github"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@stop