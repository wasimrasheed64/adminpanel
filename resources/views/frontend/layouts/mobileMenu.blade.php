<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay">
    </div>
    <!-- End of Overlay -->
    <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
    <!-- End of CloseButton -->
    <div class="mobile-menu-container scrollable">
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off"
                   placeholder="Search your keyword..." required />
            <button class="btn btn-search" type="submit" title="submit-button">
                <i class="d-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <ul class="mobile-menu mmenu-anim">
            <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="">
                <a href="{{ route('dynamic.page', [$mainCategories[0]->categories()->where('is_menu',1)->first()->slug ])}}">Products</a>
            </li>
            <li class="{{ Request::is('blog') ? 'active' : '' }}">
                <a href="{{ route('dynamic.page', 'blog') }}">Blog</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'contact.form' ? 'active' : '' }}">
                <a href="{{ route('contact.form') }}">Contact Us</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'custom.quote' ? 'active' : '' }}">
                <a href="{{ route('custom.quote') }}">Request a Quote</a>
            </li>
        </ul>
    </div>
</div>
