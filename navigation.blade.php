<nav class="main-navigation navbar navbar-light navbar-expand-md p-0" role="navigation">
    <div class="navbar-header d-flex justify-content-between align-items-center flex-grow-1 d-md-none">
        <div class="main-navigation__mobile-logo">
            <button type="button" class="navbar-toggle navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbar">
                <span class="navbar-toggler-icon">
                    <i class="bi bi-list"></i>
                </span>
            </button>

            <div class="nav-menu-title float-none m-0 p-0 me-5">
                <a class="d-inline-block" href="/">
                    <img class="w-100"
                        src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/grassroots-wellness-logo.jpg" />
                </a>
            </div>
        </div>

        <div class="main-navigation__mobile-cta">
            <a class="main-navigation__search" href="#">
                <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/icon-search-mobile.png" />
            </a>

            <a class="main-navigation__shopping-cart" href="/shopping-cart">
                <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/icon-cart.png" />
            </a>
        </div>

        @include('partials.header-search-form')
    </div>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
        <ul class="nav navbar-nav"> @if ($layout->hasMenu('main-menu-header')) @include('partials.navs.nav',
            ['menu' => $layout->getMenu('main-menu-header'), 'showNavSeparatorBefore' =>
            isset($showNavSeparatorBefore) ? $showNavSeparatorBefore : false]) @endif </ul>
    </div>
</nav>

@section('footer-js')
    @parent

    <script>
        $(document).ready(function() {
            /*---------- toggle search-form-mobile on click ----------*/
            $('.main-navigation__mobile-cta .main-navigation__search').click(function(event) {
                event.preventDefault();
                $('.main-navigation .header__search-form').addClass('active');
                $('.main-navigation .header__search-form>form>.form-group>input').focus();
            });
            $('.header__search-form-close-icon').click(function(event) {
                event.preventDefault();
                $('.main-navigation .header__search-form').removeClass('active');
                $('.main-navigation .header__search-form>form>.form-group>input').blur();
            });
        });
    </script>

@endsection
