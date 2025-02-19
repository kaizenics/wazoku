<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wazoku
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text sr-only"
            href="#primary"><?php esc_html_e('Skip to content', 'wazoku'); ?></a>

        <header class="bg-white shadow-lg fixed w-full top-0 z-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <?php
                    if (has_custom_logo()) :
                        the_custom_logo();
                    else :
                    ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold text-gray-900">
                            <?php bloginfo('name'); ?>
                        </a>
                        <?php endif; ?>
                    </div>

                    <!-- Desktop Navigation -->
                    <nav id="site-navigation" class="hidden md:flex items-center space-x-8">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200">
                                Home
                            </div>
                        </a>

                        <!-- About Us Dropdown -->
                        <div class="relative group">
                            <a href="#">
                                <div
                                    class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200 flex items-center">
                                    <span>About Us</span>
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </a>
                            <div
                                class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-200 z-50">
                                <div class="py-1">
                                    <a href="<?php echo esc_url(home_url('/about-us')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Our Story
                                    </a>
                                    <a href="<?php echo esc_url(home_url('/team')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Our Team
                                    </a>
                                    <a href="<?php echo esc_url(home_url('/careers')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Careers
                                    </a>
                                    <a href="<?php echo esc_url(home_url('/values')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Our Values
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Marketplace Dropdown -->
                        <div class="relative group">
                            <a href="#">
                                <div
                                    class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200 flex items-center">
                                    <span>Marketplace</span>
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </a>
                            <div
                                class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-200 z-50">
                                <div class="py-1">
                                    <a href="<?php echo esc_url(home_url('/products')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Products</a>
                                    <a href="<?php echo esc_url(home_url('/services')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Services</a>
                                    <a href="<?php echo esc_url(home_url('/pricing')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pricing</a>
                                    <a href="<?php echo esc_url(home_url('/support')); ?>"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Support</a>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo esc_url(home_url('/community')); ?>"
                            class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200">
                            Community
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>">
                            <div
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition-colors">
                                Contact Us</div>
                        </a>
                    </nav>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button"
                        class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="hidden md:hidden">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

                        <!-- Mobile About Us Section -->
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                                <span>About Us</span>
                                <svg class="w-4 h-4" :class="{ 'transform rotate-180': open }" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" class="pl-4 space-y-1" style="display: none;">
                                <a href="<?php echo esc_url(home_url('/about-us')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                                    Our Story
                                </a>
                                <a href="<?php echo esc_url(home_url('/team')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                                    Our Team
                                </a>
                                <a href="<?php echo esc_url(home_url('/careers')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                                    Careers
                                </a>
                                <a href="<?php echo esc_url(home_url('/values')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                                    Our Values
                                </a>
                            </div>
                        </div>

                        <!-- Mobile Marketplace Section -->
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                                <span>Marketplace</span>
                                <svg class="w-4 h-4" :class="{ 'transform rotate-180': open }" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" class="pl-4 space-y-1" style="display: none;">
                                <a href="<?php echo esc_url(home_url('/products')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Products</a>
                                <a href="<?php echo esc_url(home_url('/services')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Services</a>
                                <a href="<?php echo esc_url(home_url('/pricing')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Pricing</a>
                                <a href="<?php echo esc_url(home_url('/support')); ?>"
                                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Support</a>
                            </div>
                        </div>

                        <a href="<?php echo esc_url(home_url('/community')); ?>"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Community</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>"
                            class="block px-3 py-2 rounded-md text-base font-medium bg-red-600 text-white hover:bg-red-700">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Spacer to prevent content from hiding under fixed header -->
        <div class="h-20"></div>