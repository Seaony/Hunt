@inject('menus','App\Services\MenuService')

<ul class="sidebar-menu" data-widget="tree">
    @foreach($menus->menus as $menu)
        @menu($menu)
        <li class="{{ $menu->childers->count() ? 'treeview' : 'loon' }}">
            <a href="{{ linker($menu->slug) }}" class="{{ $menu->childers->count() ? : 'loon' }}">
                <i class="fa {{ $menu->icon }}"></i> <span>{{ $menu->name }}</span>
                @if($menu->childers->count())
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                @endif
            </a>
            @if($menu->childers->count())
                <ul class="treeview-menu">
                    @foreach($menu->childers as $childer)
                        @menu($childer)
                        <li><a href="{{ linker($childer->slug) }}" class="loon"><i class="fa {{ $childer->icon }}"></i> {{ $childer->name }}</a></li>
                        @endmenu
                    @endforeach
                </ul>
            @endif
        </li>
        @endmenu
    @endforeach
</ul>