<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    @include('admin.layout.logo')
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
        {{-- Do not delete me :) I'm used for auto-generation menu items --}}

        <li class="c-sidebar-nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
        {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
        {{--<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ url('admin/configuration') }}"><i class="c-sidebar-nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
    </ul>
    
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
