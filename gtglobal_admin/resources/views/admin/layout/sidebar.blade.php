<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.archite') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/tin-tuc') }}"><i
                        class="nav-icon icon-plane"></i>Tin tức</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/tuyen-dung') }}"><i
                        class="nav-icon icon-drop"></i>Tuyển dụng</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/danh-muc-du-an') }}"><i
                        class="nav-icon icon-tag"></i>Danh mục dự án</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/du-an-theo-danh-muc') }}"><i
                        class="nav-icon icon-graduation"></i>Dự án</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/bulk-actions') }}"><i
                        class="nav-icon icon-book-open"></i>Mẫu thiết kế</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/posts') }}"><i
                        class="nav-icon icon-globe"></i>Test</a></li>
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.technology') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/tin-tuc-tech') }}"><i
                        class="nav-icon icon-plane"></i>Tin tức</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/tuyen-dung') }}"><i
                        class="nav-icon icon-drop"></i>Tuyển dụng</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/danh-muc-du-an') }}"><i
                        class="nav-icon icon-tag"></i>Danh mục dự án</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/du-an-theo-danh-muc') }}"><i
                        class="nav-icon icon-graduation"></i>Dự án</a></li>
            {{-- Do not delete me :) I'm used for auto-generation menu items --}}
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i
                        class="nav-icon icon-user"></i> {{ __('Tài khoản') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i
                        class="nav-icon icon-location-pin"></i> {{ __('Ngôn ngữ') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li> --}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
