<!-- HEADER -->
<header class="header">
    <div class="wrapper">
        <!-- LOGO -->
        <a
            href="/"
            class="header__logo-box">
            <img
                src="/images/logo-header.png"
                alt="Threadly Logo"
                class="header__logo" />
        </a>

        <!-- SEARCH BAR -->
        <form
            action="#"
            class="search"
            role="search">
            <button
                type="submit"
                class="btn btn--icon"
                aria-label="Search products">
                <svg
                    class="icon icon--search"
                    aria-hidden="true">
                    <use
                        xlink:href="/images/sprite.svg#icon-search"></use>
                </svg>
            </button>
            <label
                for="formInput#search"
                class="visually-hidden">
                Search products
            </label>
            <input
                type="text"
                name="search"
                id="formInput#search"
                class="input input--search"
                placeholder="Search products"
                aria-label="Search products"
                aria-autocomplete="list"
                aria-controls="search-suggestions"
                aria-haspopup="listbox" />
        </form>

        <!-- MAIN NAVIGATION -->
        <nav
            class="navigation"
            aria-label="Main navigation">
            <!-- NAVIGATION LIST -->
            <ul class="navigation__list">
                <!-- NAVIGATION ITEM: 01 -->
                <li class="navigation__item">
                    <!-- USER BUTTON -->
                    <button
                        type="button"
                        id="user-button"
                        class="btn btn--icon"
                        aria-haspopup="true"
                        aria-expanded="false"
                        aria-controls="user-popover"
                        aria-label="Open user menu">
                        <svg
                            class="icon icon--user"
                            aria-hidden="true">
                            <use
                                xlink:href="/images/sprite.svg#icon-user"></use>
                        </svg>
                    </button>
                </li>

                <!-- NAVIGATION ITEM: 02 -->
                <li class="navigation__item">
                    <!-- CART BUTTON -->
                    <button
                        type="button"
                        id="cart-button"
                        class="btn btn--icon"
                        aria-haspopup="true"
                        aria-expanded="false"
                        aria-controls="cart-popover"
                        aria-label="Open cart">
                        <svg
                            class="icon icon--cart"
                            aria-hidden="true">
                            <use
                                xlink:href="/images/sprite.svg#icon-cart"></use>
                        </svg>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</header>