@extends('layouts.app')

@section('body')
    <div class="row categorys">
        <div class="col-md-2 tag-nav" id="tag-list">
            <ul class="nav">
                @foreach($tags as $tag)
                    <li>
                        <a href="#box-tag-{{ $tag->id }}" class="to-link">
                            <i class="fa {{ $tag->icon }}"></i> {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-10">
            @foreach($tags as $tag)
                <div id="box-tag-{{ $tag->id }}" class="box-tag">
                    <div class="box-tag-head">
                        <span class="tag-tips"><i class="fa {{ $tag->icon }}"></i> {{ $tag->name }}</span>
                        <span class="tag-tips pull-right"><i class="fa fa-quote-right"></i> {{ $tag->describe }}</span>
                    </div>
                    @foreach($triggers[$tag->id] as $trigger)
                        <div class="col-md-3">
                            <div class="card" data-toggle="{{ $trigger['form'] ? 'tooltip' : '' }}" title="Form『 {{ $trigger['form'] }} 』">
                                <a href="{{ route('triggers.target',['trigger' => $trigger['id']]) }}" target="_blank"
                                   class="incrment">
                                    <div class="card-heading">
                                    <span class="card-icon">
                                        <img src="{{ $trigger['cover'] }}">
                                    </span>
                                        <span class="card-title">
                                            <span>{{ $trigger['name'] }}</span>
                                        </span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $trigger['describe'] }}</span>
                                    </div>
                                </a>
                                <div class="card-footer">
                                    <span class="read">
                                        <i class="fa fa-eye"></i>
                                        <span>{{ $trigger['read_count'] }}</span>
                                    </span>
                                    <a href="{{ route('triggers.favorite',['trigger' => $trigger['id']]) }}" class="favour {{ favorite($trigger['id']) ? 'active' : '' }}">
                                        <i class="fa fa-gift"></i>
                                        <span class="count">{{ $trigger['favorite_count'] }}</span>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
    </div>
@stop