<div class="header__search-form">
    <form action="{{ route('search', 'products') }}" method="post">
        @csrf

        <button class="header__search-form-close-icon" type="button">
            <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/icon-close-white.png" />
        </button>

        <div class="form-group">
            <label class="sr-only" for="search">Search</label>
            <input class="form-control" name="search" placeholder="Search" type="text" />
        </div>

        <button class="header__search-form-search-icon btn btn-form" type="submit">
            <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/icon-search-mobile-white.png" />
            <img src="https://media.cmsmax.com/ztbt091wxhonpjbuddiao/icon-search.png" />
        </button>
    </form>
</div>
