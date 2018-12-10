<?php
include 'dbconfig.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Shop with blankdib">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blankdib.com</title>

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link href="dist/default/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="dist/default/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="dist/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

</head>

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <div id="app" class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default m-scroll-top--shown">
        <header id="m_header" class="m-grid__item m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">

                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="index.html" class="m-brand__logo-wrapper">
                                    <!--<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png">-->
                                    Blankdib.com
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">

                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>

                                <!-- END -->

                                <!-- BEGIN: Responsive Header Menu Toggler -->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>

                                <!-- END -->

                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>

                                <!-- BEGIN: Topbar Toggler -->
                            </div>
                        </div>
                    </div>

                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                            id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click"
                                    m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle"
                                        title="Non functional dummy link"><i class="m-menu__link-icon flaticon-add"></i><span
                                            class="m-menu__link-text">Hjem</span><i class="m-menu__hor-arrow la la-angle-down"></i><i
                                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span
                                            class="m-menu__arrow m-menu__arrow--adjust" style="left: 71px;"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a href="header/actions.html"
                                                    class="m-menu__link "><i class="m-menu__link-icon flaticon-file"></i><span
                                                        class="m-menu__link-text">Link</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
                                    <span class="m-menu__link-text">Dagens deals</span>
                                </li>
                                <li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
                                    <span class="m-menu__link-text">Sidste chance</span>
                                </li>
                                <li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
                                    <span class="m-menu__link-text">Support</span>
                                </li>
                                <li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
                                    <span class="m-menu__link-text">Log af</span>
                                </li>


                            </ul>
                        </div>

                        <!-- END: Horizontal Menu -->

                        <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light"
                                        m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown"
                                        m-dropdown-persistent="1">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-nav__link-icon"><i class="flaticon-search-1"></i></span>
                                        </a>
                                        <div class="m-dropdown__wrapper" style="z-index: 101;">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                            <div class="m-dropdown__inner ">
                                                <div class="m-dropdown__header">
                                                    <form class="m-list-search__form">
                                                        <div class="m-list-search__form-wrapper">
                                                            <span class="m-list-search__form-input-wrapper">
                                                                <input id="m_quicksearch_input" autocomplete="off" type="text"
                                                                    name="q" class="m-list-search__form-input" value=""
                                                                    placeholder="Search...">
                                                            </span>
                                                            <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
                                                                <i class="la la-remove"></i>
                                                            </span>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__scrollable m-scrollable m-scroller ps"
                                                        data-scrollable="true" data-height="300" data-mobile-height="200"
                                                        style="height: 300px; overflow: hidden;">
                                                        <div class="m-dropdown__content">
                                                        </div>
                                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                        </div>
                                                        <div class="ps__rail-y" style="top: 0px; right: 4px;">
                                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width"
                                        m-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-nav__link-text">
                                                <img class="m-topbar__language-selected-img" src="/dist/default/assets/app/media/img/flags/020-flag.svg">
                                            </span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                    <span class="m-dropdown__header-subtitle">Select your language</span>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__item m-nav__item--active">
                                                                <a href="#" class="m-nav__link m-nav__link--active">
                                                                    <span class="m-nav__link-icon"><img class="m-topbar__language-img"
                                                                            src="assets/app/media/img/flags/020-flag.svg"></span>
                                                                    <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">USA</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <!-- END: Topbar -->
                    </div>
                </div>
            </div>
        </header>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            <button class="m-aside-left-close  m-aside-left-close--skin-dark" id="m_aside_left_close_btn"><i class="la la-close"></i></button>

            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                    m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                        <li class="m-menu__section ">
                            <h4 class="m-menu__section-text">Kategorier</h4>
                            <i class="m-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-computer"></i><span
                                    class="m-menu__link-text">Computere og tilbehør</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Computere og tilbehør</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Computere</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tablets og tilbehør</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-photo-camera"></i><span
                                    class="m-menu__link-text">Elektronik og foto</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Elektronik og foto</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Biler og MC</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Biler og MC</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Tøj og mode</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Tøj og mode</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Ure og smykker</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Ure og smykker</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Til boligen</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Til boligen</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Til børn</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Til børn</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Sport og fritid</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Sport og fritid</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Både</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Både</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Cykler</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Cykler</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                                href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Boliger</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Boliger</span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 1</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="components/base/state.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Link 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>



            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <div class="m-content">

                        <? require_once 'facebook.php'; ?>

                        <div class="row" v-for="(row, category) in records">
                            <h4>{{category}}</h4>
                            <div>

                                <div class="col-xl-4" v-for="col in row">
                                    <div class="card">
                                        <img class="card-img-top" src="https://via.placeholder.com/318x180" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                {{col.name}} {{col.test}}
                                            </h4>
                                            <p class="card-text">
                                                {{col.price}}
                                            </p>
                                            <a :href="col.url" class="btn btn-login">Meld dit dibs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

        </div>








    </div>




</body>

<!--begin::Global Theme Bundle -->
<script src="dist/default/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="dist/default/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="dist/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="dist/default/assets/app/js/dashboard.js" type="text/javascript"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js" integrity="sha256-mpnrJ5DpEZZkwkE1ZgkEQQJW/46CSEh/STrZKOB/qoM="
    crossorigin="anonymous"></script>
<script src="/js/vue.min.js" integrity="sha256-FtWfRI+thWlNz2sB3SJbwKx5PgMyKIVgwHCTwa3biXc=" crossorigin="anonymous"></script>
<script src="/js/vue-router.min.js" integrity="sha256-yEB9jUlD51i5kxJZlzgzfR6XmVKI76Nl1WRA1aqIilU=" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
    


<style>
    .row-categories {
        margin-bottom: 1rem;
        -webkit-box-shadow: 0px 1px 15px 1px rgba(81, 77, 92, 0.08);
        box-shadow: 0px 1px 15px 1px rgba(81, 77, 92, 0.08);
        padding: 1rem;
    }

    .f-button {
        color: #fff !important;
        border: 1px solid #161718;
        background: #365195 !important;
        width: 100%;
        font-weight: 600;
        color: #fff;
        padding: 8px 25px;
    }

    .login-or {
        position: relative;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }

    .hr-or {
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    @media (min-width: 768px) {

        .col-md-20 {
            flex: 0 0 20%;
            max-width: 20%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
    }
</style>

</html>