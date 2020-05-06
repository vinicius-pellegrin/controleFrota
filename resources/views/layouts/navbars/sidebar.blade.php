<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('CF') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Controle de Frota') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'home') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'veiculos') class="active " @endif>
                <a href="{{ route('veiculo.index') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Veiculos') }}</p>
                </a>
            </li>
            <li @if ($pageSlug  == 'manutencao') class="active " @endif>
                <a href="{{ route('manutencao.index') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Manutenções') }}</p>
                </a>
            </li>
            <li @if ($pageSlug  == 'pneu') class="active " @endif>
                <a href="{{ route('pneu.index') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Pneu') }}</p>
                </a>
            </li>
            <!-- painel administrativo-->

            <li>
                <a data-toggle="collapse" href="#controle-de-manutencoes" aria-expanded="false">
                    <i class="tim-icons icon-settings" ></i>
                    <span class="nav-link-text" >{{ __('Controle de Manutenções') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="controle-de-manutencoes" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug ?? '' == 'veiculoManutencao') class="active " @endif>
                            <a href="{{ route('veiculoManutencao.list')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Lista de Manuteções') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'veiculoManutencao') class="active " @endif>
                            <a href="{{ route('veiculoManutencao.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('index') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- painel administrativo -->

            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="false">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug ?? '' == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug ?? '' == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug ?? '' == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
