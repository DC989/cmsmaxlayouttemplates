<nav class="main-navigation navbar navbar-light navbar-expand-md p-0" role="navigation">
    <div class="navbar-header d-flex justify-content-between align-items-center flex-grow-1 d-md-none">
        <div class="nav-menu-title float-none m-0 p-0 me-5">
            <a class="d-inline-block" href="/">
                <img class="w-100"
                    src="https://media.cmsmax.com/rrvd1c9ggiiynb4gpswug/clearchoice-hearing-and-balance-logo.png" />
            </a>
        </div>

        <button type="button" class="navbar-toggle navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon">
                <i class="bi bi-list"></i>
            </span>
        </button>
    </div>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
        <ul class="nav navbar-nav"> @if ($layout->hasMenu('main-menu-header')) @include('partials.navs.nav',
            ['menu' => $layout->getMenu('main-menu-header'), 'showNavSeparatorBefore' =>
            isset($showNavSeparatorBefore) ? $showNavSeparatorBefore : false]) @endif </ul>
    </div>
</nav>
