<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('CT') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Cryptool') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug=='dashboard' ) class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Crypboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug=='dashboard' ) class="active " @endif>
                <a href="{{ route('pages.crypprofile') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ __('Profile') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <span class="nav-link-text">{{ __('Material') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug=='crypsocialacc' ) class="active " @endif>
                            <a href="{{ route('pages.crypsocialacc')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Social Account') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug=='crypadacc' ) class="active " @endif>
                            <a href="{{ route('pages.crypadacc')  }}">
                                <i class="tim-icons icon-vector"></i>
                                <p>{{ __('AD Account') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug=='crypfanpages' ) class="active " @endif>
                            <a href="{{ route('pages.crypfanpages')  }}">
                                <i class="tim-icons icon-paper"></i>
                                <p>{{ __('Fan Pages') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug=='dashboard' ) class="active " @endif>
                <a href="{{ route('pages.crypshare') }}">
                    <i class="tim-icons icon-send"></i>
                    <p>{{ __('Share') }}</p>
                </a>
            </li>

<!-- settings -->
<br><br><br><br><br><br><br>

            <li @if ($pageSlug=='dashboard' ) class="active " @endif>
                <a href="{{ route('pages.crypmembers') }}">
                    <i class="tim-icons icon-badge"></i>
                    <p>{{ __('Members') }}</p>
                </a>
            </li>
            <li @if ($pageSlug=='dashboard' ) class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-settings"></i>
                    <p>{{ __('Settings') }}</p>
                </a>
            </li>









            <!-- <br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br> -->
            <!-- <li @if ($pageSlug=='dashboard' ) class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel"></i>
                    <span class="nav-link-text">{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug=='profile' ) class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug=='users' ) class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug=='icons' ) class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug=='maps' ) class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug=='notifications' ) class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug=='tables' ) class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug=='typography' ) class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug=='rtl' ) class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>