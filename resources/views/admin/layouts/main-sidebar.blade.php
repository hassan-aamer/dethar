<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <!-- <li class="menu-title">Navigation</li> -->

                {{-- @can('dashboard dashboard') --}}
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span> {{ __('attributes.dashboard') }} </span>
                    </a>
                </li>
                {{-- @endcan --}}

                <li class="menu-title mt-2"></li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i data-feather="menu"></i>
                        <span> {{ __('attributes.products') }} </span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li><a class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}"
                                    href="{{ route('admin.products.index') }}">{{ __('attributes.products') }}</a></li>
                            <li><a class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}"
                                    href="{{ route('admin.categories.index') }}"> {{ __('attributes.categories') }} </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#what_we_do" data-bs-toggle="collapse">
                        <i data-feather="menu"></i>
                        <span> {{ __('attributes.what_we_do') }} </span>
                    </a>
                    <div class="collapse" id="what_we_do">
                        <ul class="nav-second-level">
                            <li><a class="{{ request()->routeIs('admin.what_we_do.*') ? 'active' : '' }}"
                                    href="{{ route('admin.what_we_do.index') }}">{{ __('attributes.what_we_do') }}</a>
                            </li>
                            <li><a class="{{ request()->routeIs('admin.what_we_do_category.*') ? 'active' : '' }}"
                                    href="{{ route('admin.what_we_do_category.index') }}">
                                    {{ __('attributes.categories') }} </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#value_add" data-bs-toggle="collapse">
                        <i data-feather="menu"></i>
                        <span> {{ __('attributes.value_add') }} </span>
                    </a>
                    <div class="collapse" id="value_add">
                        <ul class="nav-second-level">
                            <li><a class="{{ request()->routeIs('admin.value_add.*') ? 'active' : '' }}"
                                    href="{{ route('admin.value_add.index') }}">{{ __('attributes.value_add') }}</a>
                            </li>
                            <li><a class="{{ request()->routeIs('admin.value_add_category.*') ? 'active' : '' }}"
                                    href="{{ route('admin.value_add_category.index') }}">
                                    {{ __('attributes.categories') }} </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#blogs" data-bs-toggle="collapse">
                        <i data-feather="menu"></i>
                        <span> {{ __('attributes.blogs') }} </span>
                    </a>
                    <div class="collapse" id="blogs">
                        <ul class="nav-second-level">
                            <li><a class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}"
                                    href="{{ route('admin.blogs.index') }}">{{ __('attributes.blogs') }}</a></li>
                            <li><a class="{{ request()->routeIs('admin.blogs_category.*') ? 'active' : '' }}"
                                    href="{{ route('admin.blogs_category.index') }}">
                                    {{ __('attributes.categories') }} </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('admin.technical_data_sheets.index') }}">
                        <i data-feather="file"></i>
                        <span> {{ __('attributes.technical_data_sheets') }} </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pages.index') }}">
                        <i data-feather="file-text"></i>
                        <span> {{ __('attributes.pages') }} </span>
                    </a>
                </li>

                {{-- @can('list contacts') --}}
                <li>
                    <a class="{{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}"
                        href="{{ route('admin.contacts.index') }}">
                        <i data-feather="message-circle"></i>
                        @if (App\Models\Contact::where('active', 0)->count())
                            <span
                                class="badge bg-danger float-end">{{ App\Models\Contact::where('active', 0)->count() ?? 0 }}</span>
                        @endif
                        <span> {{ __('attributes.contacts') }} </span>
                    </a>
                </li>
                {{-- @endcan --}}



                {{-- @can('list settings') --}}
                <li>
                    <a class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}"
                        href="{{ route('admin.settings.edit') }}">
                        <i data-feather="settings"></i>
                        <span>{{ __('attributes.settings') }}</span>
                    </a>
                </li>
                {{-- @endcan --}}

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
