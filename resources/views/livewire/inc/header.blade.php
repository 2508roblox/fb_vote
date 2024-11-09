<sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-scheme-1 gradient">
    <header class="header header--middle-left header--mobile-center page-width header--has-menu header--has-social header--has-account">

        <header-drawer data-breakpoint="tablet">
            <details id="Details-menu-drawer-container" class="menu-drawer-container">
                <summary class="header__icon header__icon--menu header__icon--summary link focus-inset" aria-label="Menu">
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-hamburger" viewBox="0 0 18 16">
                            <path fill="currentColor" d="M1 .5a.5.5 0 1 0 0 1h15.71a.5.5 0 0 0 0-1zM.5 8a.5.5 0 0 1 .5-.5h15.71a.5.5 0 0 1 0 1H1A.5.5 0 0 1 .5 8m0 7a.5.5 0 0 1 .5-.5h15.71a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5" /></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                            <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                    </span>
                </summary>
                <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-scheme-1">
                    <div class="menu-drawer__inner-container">
                        <div class="menu-drawer__navigation-container">
                            <nav class="menu-drawer__navigation">
                                <ul class="menu-drawer__menu has-submenu list-menu" role="list">
                                    <li><a id="HeaderDrawer-home" href="/" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                            Trang chủ
                                        </a></li>
                                    <li><a id="HeaderDrawer-about" href="/about" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                            Giới thiệu
                                        </a></li>
                                    <li><a id="HeaderDrawer-about"  href="/blogs" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                            Danh mục
                                        </a></li>

                                        @php
                                        use App\Models\BlogCategory;

                    $categories = BlogCategory::all();
                                    @endphp
                                    @foreach($categories as $category)
                                    <li><a id="HeaderMenu-category-{{ $category->id }}" href="/blog-categories/{{ $category->slug }}" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                        <span>{{ $category->name }}</span>
                                    </a></li>
                                @endforeach
                                </ul>

                            </nav>
                            {{-- <div class="menu-drawer__utility-links"><a href="https://account.picklefox.com?locale=en&region_country=MY" class="menu-drawer__account link focus-inset h5 medium-hide large-up-hide" rel="nofollow">
                                    <account-icon><span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-account" viewBox="0 0 18 19">
                                                <path fill="currentColor" fill-rule="evenodd" d="M6 4.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8m5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15M9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35" clip-rule="evenodd" /></svg>
                                        </span></account-icon>Log in
                                </a>
                                <div class="menu-drawer__localization header-localization">
                                </div>
                                <ul class="list list-social list-unstyled" role="list">
                                    <li class="list-social__item">
                                        <a href="https://www.instagram.com/picklefox_com/" class="list-social__link link">
                                            <span class="svg-wrapper"><svg class="icon icon-instagram" viewBox="0 0 20 20">
                                                    <path fill="currentColor" fill-rule="evenodd" d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.4 2.4 0 0 0-.912.593 2.5 2.5 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23s.01 2.39.046 3.229c.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046s2.39-.01 3.23-.046c.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23s-.01-2.39-.055-3.229c-.027-.784-.164-1.204-.274-1.495a2.4 2.4 0 0 0-.593-.913 2.6 2.6 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045a63 63 0 0 1 3.302.045c.664.014 1.321.14 1.943.374a4 4 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.9 3.9 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.15 4.15 0 0 1-1.414-.922 4.1 4.1 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.4 4.4 0 0 1 .92-1.414 4.2 4.2 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805m1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93m5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355" clip-rule="evenodd" /></svg>
                                            </span>
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </details>
        </header-drawer>
        <h1 class="header__heading"><a href="/" class="header__heading-link link link--text focus-inset">
                <div class="header__heading-logo-wrapper">
                    @php
                    $settings = App\Models\Setting::first(); // Truy vấn model Settings
                    @endphp
                    <img src=" {{ Storage::url($settings->logo)}}" alt="Picklefox.com"   width="200" height="30.666666666666668" loading="eager" class="header__heading-logo motion-reduce" sizes="(max-width: 400px) 50vw, 200px">
                </div>
            </a></h1>

        <nav class="header__inline-menu">
            <ul class="list-menu list-menu--inline" role="list">
                <li><a id="HeaderMenu-home" href="/" class="header__menu-item list-menu__item link link--text focus-inset">
                    <span>Trang chủ</span>
                </a></li>
            <li><a id="HeaderMenu-about" href="/about" class="header__menu-item list-menu__item link link--text focus-inset">
                    <span>Giới thiệu</span>
                </a></li>
            <li><a id="HeaderMenu-about" href="/blogs" class="header__menu-item list-menu__item link link--text focus-inset">
                    <span>Danh mục</span>
                </a></li>
                @php


$categories = BlogCategory::all();
                @endphp
                @foreach($categories as $category)
                <li><a id="HeaderMenu-category-{{ $category->id }}" href="/blog-categories/{{ $category->slug }}" class="header__menu-item list-menu__item link link--text focus-inset">
                    <span>{{ $category->name }}</span>
                </a></li>
            @endforeach

            </ul>
        </nav>

        <div class="header__icons header__icons--localization header-localization">
            <div class="desktop-localization-wrapper">
            </div>


            <details-modal class="header__search">
                <details>
                    <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
                        <span>
                            <span class="svg-wrapper"><svg fill="none" class="icon icon-search" viewBox="0 0 18 19">
                                    <path fill="currentColor" fill-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 1 1 2.85 3.5a5.784 5.784 0 0 1 8.18 8.18m.26 1.12a6.78 6.78 0 1 1 .72-.7l5.4 5.4a.5.5 0 1 1-.71.7z" clip-rule="evenodd" /></svg>
                            </span>
                            <span class="svg-wrapper header__icon-close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                    <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                            </span>
                        </span>
                    </summary>
                    <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
                        <div class="modal-overlay"></div>
                        <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                            <predictive-search class="search-modal__form" data-loading-text="Loading...">
                                <form action="#" method="get" role="search" class="search search-modal__form">
                                    <div class="field">
                                        <input class="search__input field__input" id="Search-In-Modal" type="search" name="q" value="" placeholder="Search" role="combobox" aria-expanded="false" aria-owns="predictive-search-results" aria-controls="predictive-search-results" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false">
                                        <label class="field__label" for="Search-In-Modal">Search</label>
                                        <input type="hidden" name="options[prefix]" value="last">
                                        <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                                            <span class="svg-wrapper"><svg fill="none" stroke="currentColor" class="icon icon-close" viewBox="0 0 18 18">
                                                    <circle cx="9" cy="9" r="8.5" stroke-opacity=".2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.83 11.83 6.172 6.17M6.229 11.885l5.544-5.77" /></svg>
                                            </span>
                                        </button>
                                        <button class="search__button field__button" aria-label="Search">
                                            <span class="svg-wrapper"><svg fill="none" class="icon icon-search" viewBox="0 0 18 19">
                                                    <path fill="currentColor" fill-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 1 1 2.85 3.5a5.784 5.784 0 0 1 8.18 8.18m.26 1.12a6.78 6.78 0 1 1 .72-.7l5.4 5.4a.5.5 0 1 1-.71.7z" clip-rule="evenodd" /></svg>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>


                                    </div>

                                    <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                                </form>
                            </predictive-search><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                                <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                        <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </details>
            </details-modal>

            {{-- <a href="https://account.picklefox.com?locale=en&region_country=MY" class="header__icon header__icon--account link focus-inset small-hide" rel="nofollow">
                <account-icon><span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-account" viewBox="0 0 18 19">
                            <path fill="currentColor" fill-rule="evenodd" d="M6 4.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8m5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15M9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35" clip-rule="evenodd" /></svg>
                    </span></account-icon><span class="visually-hidden">Log in</span>
            </a><a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">

                <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-cart-empty" viewBox="0 0 40 40">
                        <path fill="currentColor" fill-rule="evenodd" d="M15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33L28.4 11.8zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1-9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" /></svg>
                </span>

                <span class="visually-hidden">Cart</span></a> --}}
        </div>
    </header>
</sticky-header>
