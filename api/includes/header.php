<?php
$current = $_SERVER['REQUEST_URI'];

// anggap root sebagai index.php
if ($current === '/' || $current === '') {
    $current = '/index.php';
}

function active($path) {
    global $current;
    return strpos($current, $path) !== false ? 'current-menu-item' : '';
}
?>
    
    <header id="_header-94-11" class="oxy-header-wrapper oxy-overlay-header oxy-header">
        <div id="_header_row-102-11" class="oxy-header-row">
            <div class="oxy-header-container">
                <div id="_header_left-103-11" class="oxy-header-left">
                    <img id="image-105-11" alt="" src="../assets/img/LOGOispyn.png" class="ct-image" />
                </div>
                <div id="_header_center-106-11" class="oxy-header-center">
                    <div id="-pro-menu-111-11" class="oxy-pro-menu ">
                        <div class="oxy-pro-menu-mobile-open-icon  oxy-pro-menu-off-canvas-trigger oxy-pro-menu-off-canvas-right"
                            data-off-canvas-alignment="right">
                            <svg id="-pro-menu-111-11-open-icon">
                                <use xlink:href="#FontAwesomeicon-bars"></use>
                            </svg>
                        </div>

                        <div class="oxy-pro-menu-container  oxy-pro-menu-dropdown-links-visible-on-mobile oxy-pro-menu-dropdown-links-toggle oxy-pro-menu-show-dropdown"
                            data-aos-duration="400" data-oxy-pro-menu-dropdown-animation="flip-down"
                            data-oxy-pro-menu-dropdown-animation-duration="0.4"
                            data-entire-parent-toggles-dropdown="true"
                            data-oxy-pro-menu-off-canvas-animation="zoom-in-left"
                            data-oxy-pro-menu-dropdown-animation-duration="0.4"
                            data-oxy-pro-menu-dropdown-links-on-mobile="toggle">

                            <div class="menu-menu1-container">
                                <ul id="menu-menu1" class="oxy-pro-menu-list">
                                    <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-50 <?= active('index.php') ?> ">
                                        <a href="/" aria-current="page">Home</a>
                                    </li>
                                    <li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67 <?= active('about-us') ?>">
                                        <a href="about-us">About Us</a>
                                    </li>
                                    <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60 <?= active('marketing-plan') ?>">
                                        <a href="marketing-plan">Marketing Plan</a>
                                    </li>
                                    <li id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76 <?= active('product') ?>">
                                        <a href="product">Product</a>
                                    </li>
                                    <li id="menu-item-123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123 <?= active('kode-etik') ?>">
                                        <a href="kode-etik">Kode Etik</a>
                                    </li>
                                    <li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129 <?= active('contact-us') ?>">
                                        <a href="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="oxy-pro-menu-mobile-close-icon">
                                <svg id="svg--pro-menu-111-11">
                                    <use xlink:href="#FontAwesomeicon-close"></use>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        jQuery('#-pro-menu-111-11 .oxy-pro-menu-show-dropdown .menu-item-has-children > a', 'body').each(function () {
                            jQuery(this).append('<div class="oxy-pro-menu-dropdown-icon-click-area"><svg class="oxy-pro-menu-dropdown-icon"><use xlink:href="#FontAwesomeicon-angle-double-down"></use></svg></div>');
                        });
                        jQuery('#-pro-menu-111-11 .oxy-pro-menu-show-dropdown .menu-item:not(.menu-item-has-children) > a', 'body').each(function () {
                            jQuery(this).append('<div class="oxy-pro-menu-dropdown-icon-click-area"></div>');
                        });			</script>
                </div>
                <div id="_header_right-107-11" class="oxy-header-right">
                    <div id="div_block-114-11" class="ct-div-block">
                        <a id="link_text-115-11" class="ct-link-text atomic-medium-button" href="login-area">LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
