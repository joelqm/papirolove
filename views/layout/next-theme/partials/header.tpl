<header id="header-sticky" class="header-3 {if isset($header_style) && $header_style == 'dark'}header-dark{/if}">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="sticky-logo">
                    <a href="{$_layoutParams.root}">
                        {if isset($header_style) && $header_style == 'dark'}
                        <img src="{$_layoutParams.ruta_img}logo/white-logo.svg" alt="logo-white">
                        {else}
                        <img src="{$_layoutParams.ruta_img}logo/black-logo.svg" alt="logo-black">
                        {/if}
                    </a>
                </div>
                <div class="header-left">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="{$_layoutParams.root}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{$_layoutParams.root}about">About</a>
                                    </li>
                                    <li>
                                        <a href="{$_layoutParams.root}services">Services</a>
                                    </li>
                                    <li>
                                        <a href="{$_layoutParams.root}contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="header-button">
                        <a href="{$_layoutParams.root}contact" class="theme-btn bg-2">Get A Quote</a>
                    </div>
                    <div class="header__hamburger d-xl-block my-auto">
                        <div class="sidebar__toggle">
                            <i class="far fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>