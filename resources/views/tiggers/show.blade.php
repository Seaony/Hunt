@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row categorys">
            @forelse($triggers as $trigger)
                <div class="col-md-3">
                    <div class="card" data-toggle="{{ $trigger->form ? 'tooltip' : '' }}" title="From『 {{ $trigger['form'] }} 』">
                        <a href="{{ route('triggers.target',['trigger' => $trigger->id]) }}" target="_blank" class="incrment">
                            <div class="card-heading">
                            <span class="card-icon">
                                <img src="{{ $trigger->cover }}">
                            </span>
                                <span class="card-title">
                                <span>{{ $trigger->name }}</span>
                            </span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-body">
                                <span>{{ $trigger->describe }}</span>
                            </div>
                        </a>
                        <div class="card-footer">
                        <span class="read">
                            <i class="fa fa-eye"></i>
                            <span>{{ $trigger->read_count }}</span>
                        </span>
                            <a href="{{ route('triggers.favorite',['trigger' => $trigger->id]) }}"
                               class="favour active rm-favour">
                                <i class="fa fa-gift"></i>
                                <span class="count">{{ $trigger->favorite_count }}</span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="empty-box">
                    <span><i class="fa fa-gift"></i></span>
                    <span>你还没有在盒子里放糖果哦。</span>
                </p>
            @endforelse
        </div>
    </div>
@stop