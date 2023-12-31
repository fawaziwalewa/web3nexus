<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" media="all" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @filamentStyles

    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.webp') }}" type="image/x-icon">

    <!-- Meta Description -->
    <meta name="description" content="Elevate your online presence with Web3Nexus! Experts in web & app development for impactful digital experiences. Best web dev 2023">

    <!-- Keywords -->
    <meta name="keywords" content="Web Development, Mobile App Design, Custom Websites, Responsive Web, Innovative Apps, UI/UX Design, E-commerce Dev, SEO-friendly, Web3Nexus, User-Centric, Cross-Platform, Digital Solutions, Professional Developers, Mobile App Strategy, Impactful Experiences">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web3Nexus">
    <meta name="twitter:description" content="Elevate your online presence with Web3Nexus! Experts in web & app development for impactful digital experiences. Best web dev 2023">
    <meta name="twitter:image" content="{{ Vite::asset('resources/images/Logo.png') }}">

    <!-- Open Graph/Facebook Meta Tags -->
    <meta property="og:title" content="Web3Nexus">
    <meta property="og:description" content="Elevate your online presence with Web3Nexus! Experts in web & app development for impactful digital experiences. Best web dev 2023">
    <meta property="og:image" content="{{ Vite::asset('resources/images/Logo.png') }}">
    <meta property="og:url" content="{{ config('app.name') }}">
    <meta property="og:type" content="website">

    <!-- WhatsApp Meta Tags -->
    <meta property="og:site_name" content="Web3Nexus">
    <meta property="og:title" content="Web3Nexus">
    <meta property="og:description" content="Elevate your online presence with Web3Nexus! Experts in web & app development for impactful digital experiences. Best web dev 2023">
    <meta property="og:image" content="{{ Vite::asset('resources/images/Logo.png') }}">

    <!-- Other Meta Tags (if needed) -->
    <meta name="author" content="Web3Nexus">
    <meta name="robots" content="index, follow">
</head>

<body class="relative mx-auto font-sans antialiased text-gray-900">
    <header class="relative py-3 bg-black lg:py-6 min-h-[400px] md:min-h-[500px]" x-data="{ isFixed: false, dropdownMenu: false }"
        @scroll.window="isFixed = window.scrollY > 60" id="header">
        <div id="particles-js" class="absolute w-full h-full"></div>
        <nav
            :class="[
                isFixed ? 'fixed top-0 w-full z-50 bg-white py-2' : 'relative top-0'
            ]">
            <div class="max-w-screen-xl mx-auto flex items-center justify-between px-4 transition-all duration-300 ease-in-out sm:px-6">
                <x-application-logo class="h-[60px] z-30" />
                {{-- Desktop Menu --}}
                <div class="z-30 items-center hidden lg:flex">
                    <div class="px-4 py-1 border-b-4 border-web3nexus">
                        <a href="/" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">Home</a>
                    </div>
                    <div
                        class="px-4 py-1 transition duration-150 ease-out hover:border-b-4 hover:border-web3nexus hover:ease-in">
                        <button type="button" @click="scrollToSection('about-us')" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">About
                            Us</button>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <button type="button" @click="scrollToSection('our-services')" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">Services</button>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <button type="button" @click="scrollToSection('why-choose-us')" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">Why
                            Choose
                            Us?</button>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <button type="button" @click="scrollToSection('our-portfolio')" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">Portfolio</button>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <button type="button" @click="scrollToSection('faqs')" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">FAQs</button>
                    </div>
                    <x-button type="button" @click="scrollToSection('reach-out')" class="ml-3">Get a quote</x-button>
                </div>
                {{-- Mobile Menu --}}
                {{-- Hamburger --}}
                <div class="block lg:hidden">
                    <button class="relative group" @click="dropdownMenu = true">
                        <span class="sr-only">Hamburger</span>
                        <div
                            class="flex flex-col justify-between w-[20px] h-[20px] transform transition-all duration-300 origin-center overflow-hidden">
                            <div class="h-[2px] w-7 transform transition-all duration-300 origin-left"
                                :class="[
                                    isFixed ? 'bg-black' : 'bg-white',
                                    dropdownMenu ? 'rotate-[42deg]' : ''
                                ]">
                            </div>
                            <div class="h-[2px] w-1/2 rounded ml-auto transform transition-all duration-300"
                                :class="[
                                    isFixed ? 'bg-black' : 'bg-white',
                                    dropdownMenu ? '-translate-x-10' : ''
                                ]">
                            </div>
                            <div class="h-[2px] w-7 transform transition-all duration-300 origin-left"
                                :class="[
                                    isFixed ? 'bg-black' : 'bg-white',
                                    dropdownMenu ? '-rotate-[42deg]' : ''
                                ]">
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            {{-- Dropdown --}}
            <div @click.away="dropdownMenu = !dropdownMenu"
                :class="[
                    isFixed ? 'absolute z-50 w-full top-full md:hidden' : 'absolute z-50 w-full top-full py-2 md:hidden'
                ]"
                x-show.transition="dropdownMenu" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full" @click.self="dropdownMenu = !dropdownMenu" x-cloak>
                <div class="bg-white">
                    <div class="px-4 py-2 border-b sm:px-6">
                        <a href="/" class="block">Home</a>
                    </div>
                    <div class="px-4 py-2 text-left border-b sm:px-6">
                        <button type="button" @click="scrollToSection('about-us'); dropdownMenu = false"
                            class="block w-full text-left">About
                            us</button>
                    </div>
                    <div class="px-4 py-2 text-left border-b sm:px-6">
                        <button type="button" @click="scrollToSection('our-services'); dropdownMenu = false"
                            class="block w-full text-left">Services</button>
                    </div>
                    <div class="px-4 py-2 text-left border-b sm:px-6">
                        <button type="button" @click="scrollToSection('why-choose-us'); dropdownMenu = false"
                            class="block w-full text-left">Why Choose Us?</button>
                    </div>
                    <div class="px-4 py-2 text-left border-b sm:px-6">
                        <button type="button" @click="scrollToSection('our-portfolio'); dropdownMenu = false"
                            class="block w-full text-left">Portfolio</button>
                    </div>
                    <div class="px-4 py-2 text-left border-b sm:px-6">
                        <button type="button" @click="scrollToSection('faqs'); dropdownMenu = false"
                            class="block w-full text-left">FAQs</button>
                    </div>
                    <div class="px-4 py-2 text-left sm:px-6">
                        <button type="button" @click="scrollToSection('reach-out'); dropdownMenu = false"
                            class="block w-full text-left">Get
                            a quote</button>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex items-center justify-between px-4 mt-10 sm:px-10 max-w-screen-xl mx-auto">
            <div class="z-30 text-white">
                <p class="text-sm font-semibold">Elevate Your Brand with Creative Excellence</p>
                <h1 class="max-w-xl text-5xl italic font-bold"><span id="type">We Provide Cutting Edge</span></h1>
                <h2 class="mt-2 text-4xl italic font-bold text-web3nexus">Web Solutions</h2>
                <p class="text-sm font-semibold">For excellent brand like yours</p>
                <x-button type="button" onclick="scrollToSection('reach-out')"
                    class="mt-10 mb-3 text-sm text-black lg:text-base">Get a free consultation</x-button>
            </div>
            <div class="z-30 hidden lg:block">
                <img src="{{ Vite::asset('resources/images/hero-image.webp') }}" alt="Hero" width="100%" height="400px" class="lazyload">
            </div>
        </div>
    </header>

    {{-- About Us --}}
    <section class="max-w-screen-xl mx-auto mt-12" id="about-us">
        <h3 class="text-3xl font-bold leading-none text-center">
            About
            <span
                class="relative inline-block before:block before:absolute before:-inset-1 before:-skew-y-12 before:bg-web3nexus">
                <span class="relative text-white">Us</span>
            </span>
        </h3>
        <div class="grid gap-5 px-5 mt-8 lg:grid-cols-2 md:gap-10">
            <div class="border-[13px] rounded-3xl shadow border-web3nexus relative overflow-clip">
                <img class="w-full h-full lazyload" src="{{ Vite::asset('resources/images/about-us.webp') }}" alt="About us">
            </div>
            <div class="flex flex-col items-start justify-between gap-4">
                <h3 class="font-bold text-3xl border-l-[6px] border-web3nexus pl-2">Crafting Digital Excellence, One
                    Pixel at a Time</h3>
                <p class="font-semibold">
                    Welcome to Web3Nexus: Where Creative Innovation Merges Seamlessly with Cutting-Edge Technology to
                    Revolutionize Your Online Presence
                </p>
                <p class="font-semibold">
                    At Web3Nexus, your ultimate gateway to the boundless possibilities of the digital universe, we are a
                    dynamic web development agency driven by an unwavering commitment to craft bespoke digital solutions
                    that transcend conventional boundaries. Here, we don't just navigate the web; we meticulously shape
                    it, harnessing the power of creativity and technology to breathe new life into your online identity.
                </p>
                <x-button type="button" onclick="scrollToSection('reach-out')" class="">get a free
                    consultation</x-button>
            </div>
        </div>
    </section>

    {{-- Our Services --}}
    <section class="max-w-screen-xl mx-auto px-5 mt-12" id="our-services">
        <h3 class="text-3xl font-bold leading-none text-center">
            Our
            <span
                class="relative inline-block before:block before:absolute before:-inset-1 before:-skew-y-6 before:bg-web3nexus">
                <span class="relative text-white">Services</span>
            </span>
        </h3>
        <div class="grid gap-5 p-5 mt-8 bg-gray-200 rounded-lg lg:grid-cols-3">
            {{-- App development --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M44.6429 0.676788H5.35714C2.39955 0.676788 0 3.07634 0 6.03393V45.3196C0 48.2772 2.39955 50.6768 5.35714 50.6768H44.6429C47.6004 50.6768 50 48.2772 50 45.3196V6.03393C50 3.07634 47.6004 0.676788 44.6429 0.676788ZM14.1741 40.0183C13.5603 41.0897 12.1875 41.4469 11.1272 40.833C10.0558 40.2192 9.69866 38.8464 10.3125 37.7862L11.9085 35.0295C13.7054 34.4826 15.1786 34.9067 16.3281 36.3018L14.1741 40.0183ZM29.6763 34.0027H9.375C8.14732 34.0027 7.14286 32.9982 7.14286 31.7705C7.14286 30.5429 8.14732 29.5384 9.375 29.5384H15.067L22.3661 16.9045L20.0781 12.9536C19.4643 11.8821 19.8326 10.5205 20.8929 9.9067C21.9643 9.29286 23.3259 9.66116 23.9397 10.7214L24.933 12.4402L25.9263 10.7214C26.5402 9.65 27.9129 9.29286 28.9732 9.9067C30.0446 10.5205 30.4018 11.8933 29.7879 12.9536L20.2121 29.5384H27.1429C29.3973 29.5384 30.6585 32.1835 29.6763 34.0027ZM40.625 34.0027H37.3884L39.5759 37.7862C40.1897 38.8576 39.8214 40.2192 38.7612 40.833C37.6897 41.4469 36.3281 41.0786 35.7143 40.0183C32.0424 33.6679 29.2969 28.8911 27.4554 25.7214C25.5915 22.4848 26.9196 19.2482 28.2478 18.1545C29.7098 20.688 31.8973 24.4826 34.8214 29.5384H40.625C41.8527 29.5384 42.8571 30.5429 42.8571 31.7705C42.8571 33.0094 41.8527 34.0027 40.625 34.0027Z"
                        fill="#22C55E" />
                </svg>
                <h3 class="text-2xl font-bold">App development</h3>
                <p class="font-semibold">This refers to the process of creating software applications (apps) that run
                    on various platforms, such as mobile devices, desktop computers, or the web.</p>
            </div>
            {{-- Custom Web Dev --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M34.0527 31.9268C34.2578 29.9346 34.375 27.8447 34.375 25.6768C34.375 25.5699 34.3747 25.4632 34.3742 25.3567L33.3671 26.3634C32.9604 26.7701 32.456 27.0673 31.9046 27.2315L27.2003 28.6158C26.8718 28.7097 26.5159 28.6197 26.2735 28.3773C26.031 28.1348 25.9411 27.779 26.0388 27.4466L27.4232 22.7423C27.5874 22.1909 27.8846 21.6864 28.2913 21.2797L30.1435 19.4268H15.9473C15.7422 21.4189 15.625 23.5088 15.625 25.6768C15.625 27.8447 15.7324 29.9346 15.9473 31.9268H34.0527Z"
                        fill="#22C55E" />
                    <path
                        d="M33.5713 15.9975L33.2671 16.3018H16.377C16.9727 12.7471 17.8906 9.60254 19.0137 7.05371C20.0391 4.74902 21.1816 3.0791 22.2852 2.02441C23.3789 0.989258 24.2871 0.676758 25 0.676758C25.7129 0.676758 26.6211 0.989258 27.7148 2.02441C28.8184 3.0791 29.9609 4.74902 30.9863 7.05371C32.0868 9.52028 32.9753 12.5582 33.5713 15.9975Z"
                        fill="#22C55E" />
                    <path
                        d="M41.548 16.3018L37.4067 12.1604L36.2346 13.333C35.165 8.40727 33.4708 4.29214 31.3867 1.49707C36.8686 2.9463 41.6177 6.20747 44.9431 10.6041L43.726 9.38398C42.7484 8.40635 41.1647 8.40635 40.187 9.38398H40.1831L38.2904 11.2767L43.3155 16.3018H41.548Z"
                        fill="#22C55E" />
                    <path
                        d="M37.4114 22.3209L40.3067 19.4268H49.209C49.7266 21.4287 50 23.5186 50 25.6768C50 27.835 49.7266 29.9248 49.209 31.9268H37.1875C37.3926 29.915 37.5 27.8252 37.5 25.6768C37.5 24.5408 37.47 23.4212 37.4114 22.3209Z"
                        fill="#22C55E" />
                    <path
                        d="M43.4327 16.3018H48.1738C47.5525 14.7619 46.7817 13.2986 45.8795 11.9294C46.158 12.7944 45.9538 13.7807 45.2668 14.4676L43.4327 16.3018Z"
                        fill="#22C55E" />
                    <path
                        d="M1.81641 16.3018H13.2129C14.1895 10.0615 16.123 4.83691 18.6133 1.49707C10.957 3.51855 4.74609 9.06543 1.81641 16.3018Z"
                        fill="#22C55E" />
                    <path
                        d="M12.8125 19.4268H0.791016C0.273438 21.4287 0 23.5186 0 25.6768C0 27.835 0.273438 29.9248 0.791016 31.9268H12.8125C12.6074 29.915 12.5 27.8252 12.5 25.6768C12.5 23.5283 12.6074 21.4385 12.8125 19.4268Z"
                        fill="#22C55E" />
                    <path
                        d="M16.377 35.0518C16.9727 38.6064 17.8809 41.751 19.0137 44.29V44.2998C20.0391 46.6045 21.1816 48.2744 22.2852 49.3291C23.3789 50.3643 24.2871 50.6768 25 50.6768C25.7129 50.6768 26.6211 50.3643 27.7148 49.3193C28.8184 48.2646 29.9609 46.5947 30.9863 44.29C32.1094 41.751 33.0273 38.6064 33.623 35.0518H16.377Z"
                        fill="#22C55E" />
                    <path
                        d="M18.6133 49.8564C16.123 46.5166 14.1895 41.292 13.2129 35.0518H1.81641C4.74609 42.2881 10.957 47.835 18.6133 49.8564Z"
                        fill="#22C55E" />
                    <path
                        d="M31.3965 49.8564C39.043 47.835 45.2539 42.2881 48.1836 35.0518H36.7969C35.8105 41.292 33.8867 46.5166 31.3965 49.8564Z"
                        fill="#22C55E" />
                </svg>

                <h3 class="text-2xl font-bold">Custom Web Dev</h3>
                <p class="font-semibold">Tailored web development services to create unique, responsive, and
                    user-friendly websites that meet your client's specific needs and objectives.</p>
            </div>
            {{-- E-Commerce Development --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="45" viewBox="0 0 50 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="Frame" clip-path="url(#clip0_21_1600)">
                        <path id="Vector"
                            d="M47.5348 9.35963L42.5609 1.48637C42.1182 0.78324 41.3282 0.349213 40.4862 0.349213H9.514C8.67198 0.349213 7.88205 0.78324 7.43934 1.48637L2.4567 9.35963C-0.112741 13.4221 2.16156 19.0732 6.96191 19.7242C7.30913 19.7676 7.66504 19.7937 8.01226 19.7937C10.2779 19.7937 12.2918 18.8041 13.672 17.2763C15.0522 18.8041 17.0661 19.7937 19.3317 19.7937C21.5973 19.7937 23.6112 18.8041 24.9914 17.2763C26.3716 18.8041 28.3855 19.7937 30.6511 19.7937C32.9255 19.7937 34.9307 18.8041 36.3109 17.2763C37.6998 18.8041 39.705 19.7937 41.9706 19.7937C42.3265 19.7937 42.6737 19.7676 43.0209 19.7242C47.8386 19.0819 50.1216 13.4308 47.5435 9.35963H47.5348ZM43.3768 22.4759H43.3682C42.9081 22.5367 42.4393 22.5714 41.9619 22.5714C40.8855 22.5714 39.8525 22.4065 38.889 22.1114V33.6825H11.1112V22.1027C10.139 22.4065 9.09733 22.5714 8.02094 22.5714C7.54351 22.5714 7.06608 22.5367 6.60601 22.4759H6.59733C6.24143 22.4239 5.8942 22.3631 5.55566 22.2763V33.6825V39.2381C5.55566 42.3023 8.04698 44.7937 11.1112 44.7937H38.889C41.9532 44.7937 44.4445 42.3023 44.4445 39.2381V33.6825V22.2763C44.0973 22.3631 43.7501 22.4325 43.3768 22.4759Z"
                            fill="#22C55E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_21_1600">
                            <rect width="50" height="44.4444" fill="white"
                                transform="translate(0 0.349213)" />
                        </clipPath>
                    </defs>
                </svg>
                <h3 class="text-2xl font-bold">E-Commerce Development</h3>
                <p class="font-semibold">Building and optimizing online stores and e-commerce platforms with secure
                    payment gateways, product catalog management, and conversion-focused design.</p>
            </div>
            {{-- Web App Dev --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_21_1585)">
                        <path
                            d="M34.375 25.1429C34.375 27.3108 34.2578 29.4007 34.0527 31.3929H15.9473C15.7324 29.4007 15.625 27.3108 15.625 25.1429C15.625 22.9749 15.7422 20.885 15.9473 18.8929H34.0527C34.2676 20.885 34.375 22.9749 34.375 25.1429ZM37.1875 18.8929H49.209C49.7266 20.8948 50 22.9846 50 25.1429C50 27.3011 49.7266 29.3909 49.209 31.3929H37.1875C37.3926 29.3811 37.5 27.2913 37.5 25.1429C37.5 22.9944 37.3926 20.9046 37.1875 18.8929ZM48.1836 15.7679H36.7871C35.8105 9.52762 33.877 4.30301 31.3867 0.963165C39.0332 2.98465 45.2539 8.53152 48.1738 15.7679H48.1836ZM33.623 15.7679H16.377C16.9727 12.2132 17.8906 9.06863 19.0137 6.51981C20.0391 4.21512 21.1816 2.5452 22.2852 1.49051C23.3789 0.455353 24.2871 0.142853 25 0.142853C25.7129 0.142853 26.6211 0.455353 27.7148 1.49051C28.8184 2.5452 29.9609 4.21512 30.9863 6.51981C32.1191 9.05887 33.0273 12.2034 33.623 15.7679ZM13.2129 15.7679H1.81641C4.74609 8.53152 10.957 2.98465 18.6133 0.963165C16.123 4.30301 14.1895 9.52762 13.2129 15.7679ZM0.791016 18.8929H12.8125C12.6074 20.9046 12.5 22.9944 12.5 25.1429C12.5 27.2913 12.6074 29.3811 12.8125 31.3929H0.791016C0.273438 29.3909 0 27.3011 0 25.1429C0 22.9846 0.273438 20.8948 0.791016 18.8929ZM19.0137 43.7561C17.8809 41.2171 16.9727 38.0725 16.377 34.5179H33.623C33.0273 38.0725 32.1094 41.2171 30.9863 43.7561C29.9609 46.0608 28.8184 47.7307 27.7148 48.7854C26.6211 49.8304 25.7129 50.1429 25 50.1429C24.2871 50.1429 23.3789 49.8304 22.2852 48.7952C21.1816 47.7405 20.0391 46.0706 19.0137 43.7659V43.7561ZM13.2129 34.5179C14.1895 40.7581 16.123 45.9827 18.6133 49.3225C10.957 47.3011 4.74609 41.7542 1.81641 34.5179H13.2129ZM48.1836 34.5179C45.2539 41.7542 39.043 47.3011 31.3965 49.3225C33.8867 45.9827 35.8105 40.7581 36.7969 34.5179H48.1836Z"
                            fill="#22C55E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_21_1585">
                            <rect width="50" height="50" fill="white" transform="translate(0 0.142853)" />
                        </clipPath>
                    </defs>
                </svg>
                <h3 class="text-2xl font-bold">Web App Dev</h3>
                <p class="font-semibold">Designing and developing web applications, including customer portals, booking
                    systems, or data-driven applications that enhance user engagement and streamline business processes.
                </p>
            </div>
            {{-- Blockchain Dev --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.4251 25.0333L12.8455 3.37527C12.8265 3.34243 12.7992 3.31517 12.7663 3.29625C12.7335 3.27733 12.6962 3.26741 12.6583 3.2675C12.6203 3.26759 12.5831 3.27768 12.5503 3.29676C12.5175 3.31583 12.4904 3.34322 12.4715 3.37615L0.0292566 25.0342C0.0100906 25.0673 0 25.105 0 25.1433C0 25.1816 0.0100906 25.2192 0.0292566 25.2524L12.6089 46.9104C12.6279 46.9433 12.6552 46.9706 12.6881 46.9895C12.721 47.0084 12.7583 47.0184 12.7962 47.0183C12.8342 47.0182 12.8714 47.0081 12.9042 46.989C12.937 46.9699 12.9642 46.9425 12.983 46.9095L25.4255 25.2515C25.4446 25.2183 25.4546 25.1806 25.4545 25.1423C25.4544 25.104 25.4442 25.0664 25.4251 25.0333ZM29.2413 22.5222C29.2599 22.5551 29.2868 22.5824 29.3194 22.6015C29.352 22.6206 29.3891 22.6306 29.4268 22.6307H35.9218C35.9598 22.6303 35.997 22.6199 36.0297 22.6006C36.0624 22.5813 36.0894 22.5538 36.1082 22.5208C36.127 22.4878 36.1368 22.4505 36.1366 22.4125C36.1365 22.3746 36.1264 22.3373 36.1074 22.3045L25.3042 3.37634C25.2856 3.34347 25.2586 3.31611 25.226 3.29705C25.1934 3.27799 25.1564 3.26792 25.1186 3.26785H18.6237C18.5857 3.2683 18.5486 3.27868 18.5159 3.29797C18.4832 3.31725 18.4561 3.34476 18.4373 3.37775C18.4186 3.41075 18.4088 3.44809 18.4089 3.48604C18.409 3.524 18.4191 3.56126 18.4381 3.59412L29.2413 22.5222ZM49.9707 25.0341L37.5878 3.37644C37.5691 3.34349 37.542 3.31609 37.5092 3.29702C37.4765 3.27795 37.4392 3.26788 37.4013 3.26785H30.8974C30.8594 3.26821 30.8222 3.27852 30.7894 3.29776C30.7567 3.31699 30.7295 3.34448 30.7107 3.37748C30.6918 3.41048 30.682 3.44783 30.6821 3.48583C30.6822 3.52382 30.6923 3.56113 30.7113 3.59402L43.0324 25.1428L30.711 46.6917C30.692 46.7246 30.6819 46.7619 30.6818 46.7999C30.6817 46.8379 30.6916 46.8752 30.7104 46.9082C30.7292 46.9412 30.7564 46.9687 30.7891 46.9879C30.8219 47.0072 30.8591 47.0175 30.8971 47.0178H37.401C37.4389 47.0177 37.476 47.0076 37.5087 46.9886C37.5414 46.9695 37.5685 46.9421 37.5872 46.9093L49.9707 25.2516C49.9896 25.2185 49.9996 25.181 49.9996 25.1428C49.9996 25.1047 49.9896 25.0672 49.9707 25.0341ZM35.7437 27.9668H29.2488C29.211 27.9668 29.174 27.9769 29.1414 27.996C29.1088 28.015 29.0818 28.0424 29.0632 28.0753L18.4382 46.6916C18.4192 46.7244 18.4091 46.7617 18.409 46.7996C18.4089 46.8376 18.4186 46.8749 18.4374 46.9079C18.4562 46.9409 18.4833 46.9684 18.516 46.9877C18.5487 47.007 18.5858 47.0174 18.6238 47.0178H25.1188C25.1566 47.0178 25.1936 47.0077 25.2262 46.9886C25.2588 46.9696 25.2858 46.9422 25.3044 46.9094L35.9294 28.293C35.9484 28.2602 35.9585 28.2229 35.9586 28.1849C35.9587 28.147 35.9489 28.1096 35.9302 28.0766C35.9114 28.0436 35.8843 28.0161 35.8516 27.9969C35.8189 27.9776 35.7817 27.9672 35.7437 27.9668Z"
                        fill="#22C55E" />
                </svg>
                <h3 class="text-2xl font-bold">Blockchain Dev</h3>
                <p class="font-semibold">This is the specialized field of creating and maintaining blockchain-based
                    applications and systems. It involves programming, designing, and implementing blockchain technology
                    to build secure, transparent, and decentralized solutions.</p>
            </div>
            {{-- NFT Development --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="56" viewBox="0 0 50 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.6434 0.573544C22.4637 0.855854 21.0421 1.47089 19.7112 2.28756C19.4088 2.47913 19.066 2.68078 18.955 2.74128C18.8441 2.80177 18.6223 2.93284 18.4509 3.03367C18.2896 3.14457 17.9266 3.35631 17.6443 3.50754C16.7974 3.97134 16.6562 4.052 16.132 4.36455C15.8597 4.52587 15.3758 4.7981 15.0733 4.9695C14.7708 5.13082 14.2667 5.42321 13.9642 5.61478C13.6617 5.80635 13.3189 6.008 13.198 6.05841C13.077 6.10882 12.7342 6.31047 12.4418 6.50204C12.1393 6.6936 11.5343 7.03641 11.0907 7.2683C10.6471 7.5002 10.2236 7.75226 10.1329 7.82284C10.0522 7.9035 9.70942 8.10515 9.3767 8.27655C9.04397 8.44795 8.64068 8.67985 8.46927 8.79076C8.30795 8.89158 7.96515 9.09323 7.71309 9.2243C7.46103 9.36546 7.11822 9.55703 6.93674 9.65785C6.76534 9.76876 6.10998 10.1418 5.48486 10.5048C3.42804 11.6945 2.94408 12.0272 2.16773 12.8137C1.48212 13.4993 0.85701 14.3462 0.85701 14.5781C0.85701 14.6588 0.786433 14.7697 0.705773 14.8402C0.625113 14.9108 0.554536 15.052 0.554536 15.1427C0.554536 15.2435 0.494041 15.4553 0.413381 15.6166C0 16.4333 0 16.3324 0 28.1995C0 40.0867 0 39.9758 0.413381 40.7723C0.494041 40.9135 0.554536 41.1051 0.554536 41.1958C0.554536 41.6495 1.86526 43.414 2.65169 44.0088C3.15581 44.392 5.72684 45.9951 5.84783 45.9951C5.868 45.9951 6.08981 46.1261 6.33179 46.2975C6.58385 46.4589 6.81575 46.6 6.846 46.6C6.88633 46.6 7.58202 47.0033 8.40878 47.5074C9.23554 48.0116 9.94131 48.4149 9.97156 48.4149C10.0119 48.4149 10.2236 48.556 10.4555 48.7173C10.6773 48.8887 10.9193 49.0198 10.9899 49.0198C11.0605 49.0198 11.2924 49.1509 11.5041 49.3021C11.7158 49.4634 12.3309 49.8264 12.8551 50.1188C14.176 50.8447 14.6599 51.117 15.0733 51.3892C15.2649 51.5102 15.8396 51.8429 16.3336 52.1353C16.8377 52.4176 17.3116 52.6999 17.3923 52.7503C17.4729 52.8007 17.7653 52.9621 18.0275 53.1032C18.2896 53.2444 18.7433 53.5166 19.0357 53.6981C19.3281 53.8796 19.7919 54.1518 20.0641 54.303C20.3464 54.4442 20.6388 54.6156 20.7195 54.666C21.1429 54.9382 22.5646 55.5532 22.9074 55.6137C24.6315 55.9061 25.5792 55.9061 26.9605 55.6137C27.7066 55.4625 29.3602 54.666 30.681 53.8191C30.9229 53.6678 31.1952 53.5166 31.2859 53.4863C31.3766 53.4561 31.5985 53.325 31.7598 53.204C31.9312 53.083 32.2639 52.8713 32.5059 52.7402C33.6754 52.095 33.9174 51.9538 34.3711 51.6614C34.6534 51.4799 34.9055 51.3388 34.9458 51.3388C34.9862 51.3388 35.6617 50.9556 36.4582 50.4818C37.2446 50.0079 37.9101 49.6248 37.9504 49.6248C37.9807 49.6248 38.263 49.4534 38.5755 49.2416C38.8982 49.04 39.372 48.7476 39.6342 48.5863C39.9064 48.435 40.2895 48.2132 40.4811 48.1023C40.6727 47.9813 41.0659 47.7696 41.3381 47.6284C41.6204 47.4873 42.0641 47.215 42.3363 47.0336C42.5984 46.8521 42.8707 46.7008 42.9312 46.7008C42.9916 46.7008 43.1126 46.6403 43.1933 46.5597C43.284 46.4891 43.5563 46.3177 43.8083 46.1866C44.0604 46.0556 44.4435 45.8237 44.6553 45.6724C44.867 45.5111 45.0989 45.3901 45.1594 45.3901C45.3711 45.3901 47.2969 44.0189 47.7707 43.5249C48.3656 42.9098 49.2428 41.6092 49.3234 41.2261C49.3537 41.0748 49.4243 40.9236 49.4646 40.8933C49.515 40.8631 49.5553 40.7119 49.5553 40.5606C49.5553 40.4094 49.6057 40.238 49.6763 40.1674C49.9486 39.8952 50.009 37.6468 49.999 28.0987C49.9889 18.5708 49.9284 16.4837 49.6864 16.2316C49.6158 16.1711 49.5553 15.9997 49.5553 15.8687C49.5553 15.7376 49.4948 15.5057 49.4142 15.3645C49.3436 15.2133 49.1319 14.7797 48.9403 14.3865C48.4362 13.348 46.6516 11.6542 45.6333 11.2307C45.5425 11.1904 45.2905 11.0391 45.0686 10.898C44.8468 10.7468 44.3528 10.4544 43.9697 10.2426C43.5865 10.0208 43.1328 9.75867 42.9614 9.65785C42.79 9.55703 42.3565 9.30496 41.9935 9.1134C41.6305 8.92183 41.2675 8.7101 41.1869 8.63952C41.1062 8.56894 40.7231 8.34713 40.3299 8.14548C39.9467 7.94383 39.5535 7.7321 39.4729 7.6716C39.3922 7.62119 38.7066 7.21789 37.9605 6.78435C37.2144 6.34072 36.4078 5.86684 36.186 5.72569C35.9541 5.58453 35.7121 5.46354 35.6516 5.46354C35.581 5.46354 35.3794 5.35263 35.208 5.22156C35.0265 5.09049 34.6232 4.84851 34.3106 4.67711C33.988 4.50571 33.6049 4.28389 33.4536 4.18307C33.0705 3.92093 32.8487 3.79993 32.2639 3.49746C31.9917 3.35631 31.669 3.18491 31.5581 3.11433C31.4472 3.05383 31.0843 2.8421 30.7515 2.65053C30.4188 2.45897 29.9248 2.16658 29.6425 1.98509C29.3702 1.8036 28.977 1.58179 28.7754 1.50113C28.5737 1.42047 28.3721 1.29948 28.3418 1.23899C28.3015 1.17849 28.1805 1.12808 28.0696 1.12808C27.9688 1.12808 27.7974 1.08775 27.6965 1.03734C26.6278 0.502968 24.8331 0.301319 23.6434 0.573544ZM24.0669 8.54878C24.4702 8.74035 24.9239 8.98232 25.0751 9.07307C26.0229 9.66793 26.5976 10.0007 26.6883 10.0007C26.7488 10.0007 26.9605 10.1216 27.1622 10.2729C27.3537 10.4241 27.7268 10.6661 27.9889 10.8073C28.2511 10.9484 28.6544 11.1702 28.8964 11.3013C29.1383 11.4324 29.5215 11.6844 29.7534 11.876C30.0962 12.1482 30.1869 12.2995 30.2676 12.7229C30.4188 13.469 30.2676 14.0941 29.8139 14.5579C29.0274 15.3847 28.1301 15.3343 26.5169 14.3865C26.1842 14.195 25.8414 14.0034 25.7607 13.9731C25.68 13.9328 25.5288 13.832 25.428 13.7412C25.2969 13.6404 25.1961 13.6203 25.0953 13.6808C24.9642 13.7715 24.944 14.5882 24.9541 19.9823C24.9541 24.7614 24.9844 26.1931 25.0852 26.2536C25.1457 26.2939 26.0027 26.3343 26.9706 26.3343C29.0678 26.3443 29.461 26.4552 29.9449 27.1409C30.2172 27.524 30.2474 27.6248 30.2172 28.2701C30.197 28.8549 30.1466 29.0364 29.9147 29.3287C29.4307 29.974 29.0879 30.0648 26.9605 30.0648C25.2868 30.0648 25.065 30.0849 25.0146 30.2362C24.9743 30.3269 24.944 33.5331 24.9541 37.3544C24.9541 42.1436 24.9239 44.4222 24.8432 44.7146C24.45 46.2068 22.6755 46.6908 21.6773 45.5817C21.4958 45.37 21.2942 45.0272 21.2337 44.8154C21.153 44.5533 21.1228 38.9978 21.1228 27.0602C21.1228 10.2124 21.1329 9.67801 21.3143 9.31504C21.5462 8.85125 21.758 8.66977 22.3327 8.40762C22.9779 8.11523 23.2401 8.1354 24.0669 8.54878ZM16.4848 13.8118C17.1301 14.1244 17.3923 14.3563 17.5838 14.7797C17.7552 15.183 17.7653 15.7981 17.7754 28.1995V41.1958L17.5637 41.5689C17.4427 41.7806 17.12 42.0932 16.8377 42.2746C16.4243 42.5569 16.2328 42.6074 15.7791 42.6174C14.6599 42.6174 14.055 41.831 13.571 39.7439C13.5206 39.5524 13.4097 39.2499 13.3189 39.0886C13.2282 38.9172 13.1576 38.7155 13.1576 38.6248C13.1576 38.5441 13.1173 38.4332 13.077 38.3727C13.0266 38.3223 12.9358 38.1005 12.8753 37.8787C12.5829 36.8099 12.2099 35.7009 12.1292 35.6505C12.0889 35.6202 12.0486 35.4488 12.0486 35.2673C12.0486 35.0758 11.9881 34.8741 11.9074 34.8136C11.8267 34.7531 11.7461 34.5716 11.7158 34.4204C11.5948 33.8457 11.3226 32.9383 11.2319 32.8475C11.1815 32.787 11.1411 32.656 11.1411 32.5551C11.1411 32.4442 11.0403 32.2023 10.9294 32.0107C10.7681 31.7485 10.6874 31.6981 10.6269 31.799C10.5765 31.8695 10.5362 33.2811 10.5362 34.9245C10.5362 37.8585 10.5362 37.919 10.3144 38.2618C10.1732 38.4735 9.86065 38.7256 9.53802 38.8869C9.09439 39.1188 8.92299 39.1592 8.49952 39.1087C7.89457 39.0382 7.29971 38.5945 6.97707 37.9896L6.76534 37.5762L6.79558 28.1995C6.82583 19.1858 6.83591 18.8027 7.0174 18.3691C7.15855 18.0364 7.35012 17.8146 7.71309 17.5827C8.3382 17.1693 8.94315 17.1491 9.51785 17.502C9.90098 17.7541 10.5362 18.4598 10.5362 18.6514C10.5362 18.7119 10.5967 18.8833 10.6773 19.0446C10.8588 19.4076 11.1411 20.2848 11.1411 20.4864C11.1411 20.5671 11.2016 20.7486 11.2722 20.8897C11.3529 21.0309 11.4436 21.293 11.4739 21.4745C11.5142 21.656 11.6553 22.0391 11.7965 22.3416C11.9376 22.634 12.0486 22.9465 12.0486 23.0373C12.0486 23.128 12.0889 23.2994 12.1393 23.4305C12.1998 23.5616 12.3611 24.0556 12.5023 24.5396C12.6535 25.0336 12.8148 25.447 12.8652 25.4873C12.9156 25.5176 12.956 25.6688 12.956 25.8301C12.956 25.9914 13.0165 26.2435 13.0971 26.4048C13.3694 26.9392 13.4601 27.1913 13.5408 27.5845C13.6517 28.1592 13.813 28.1289 13.9541 27.524C14.0449 27.1409 14.065 26.4452 14.0146 25.1244C13.9541 23.0474 13.9441 18.5506 13.9945 16.4534C14.0348 14.8907 14.1659 14.4974 14.7507 14.1042C15.5573 13.5698 15.8799 13.5094 16.4848 13.8118ZM35.0567 14.7999C35.2987 14.9511 35.6314 15.1528 35.7928 15.2435C36.8413 15.8082 37.3253 16.0905 37.4564 16.2014C37.537 16.2719 37.8193 16.4434 38.0714 16.5744C38.7671 16.9172 39.4729 17.3004 39.8762 17.5423C40.0677 17.6633 40.3299 17.8045 40.4609 17.865C40.5819 17.9154 40.9247 18.117 41.2171 18.2985C41.4994 18.48 41.9431 18.7321 42.1851 18.8631C42.8202 19.1858 43.2437 19.5286 43.5462 19.9722C43.7982 20.3251 43.8083 20.4058 43.7478 21.0611C43.6873 21.6862 43.6369 21.8173 43.3345 22.1399C42.6488 22.8659 41.8019 23.0877 41.1163 22.7247C39.9064 22.0795 39.4426 21.8879 39.362 22.019C39.2611 22.1601 39.2309 26.1629 39.2611 34.0473L39.2813 39.2902L38.999 39.7943C38.5957 40.5102 38.0613 40.8429 37.3253 40.853C36.8212 40.853 36.68 40.8127 36.2969 40.5203C35.8331 40.1775 35.5205 39.6431 35.4802 39.1087C35.45 38.7054 35.4096 20.1739 35.4399 20.0327C35.5004 19.7504 35.4197 19.4681 35.2685 19.4076C35.1677 19.3673 34.8349 19.1656 34.5123 18.9539C34.1997 18.7422 33.8771 18.5708 33.7964 18.5708C33.5545 18.5708 32.3748 17.7137 32.1429 17.3609C31.9513 17.0886 31.911 16.887 31.911 16.282C31.911 15.546 31.9211 15.5359 32.3345 15.0822C32.889 14.4874 33.0201 14.4269 33.8973 14.4773C34.5022 14.4974 34.7039 14.5579 35.0567 14.7999Z"
                        fill="#22C55E" />
                </svg>
                <h3 class="text-2xl font-bold">NFT Development</h3>
                <p class="font-semibold">This refers to the process of creating software applications (apps) that run
                    on various platforms, such as mobile devices, desktop computers, or the web.</p>
            </div>
            {{-- Business Strategy --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_35_5)">
                        <path
                            d="M43.75 25.7142C43.75 23.252 43.265 20.8138 42.3227 18.5389C41.3805 16.2641 39.9994 14.1971 38.2583 12.456C36.5172 10.7149 34.4502 9.33378 32.1753 8.39151C29.9005 7.44923 27.4623 6.96425 25 6.96425C22.5377 6.96425 20.0995 7.44923 17.8247 8.39151C15.5498 9.33378 13.4828 10.7149 11.7417 12.456C10.0006 14.1971 8.61953 16.2641 7.67726 18.5389C6.73498 20.8138 6.25 23.252 6.25 25.7142C6.25 28.1765 6.73498 30.6147 7.67726 32.8896C8.61953 35.1644 10.0006 37.2314 11.7417 38.9725C13.4828 40.7136 15.5498 42.0947 17.8247 43.037C20.0995 43.9793 22.5377 44.4642 25 44.4642C27.4623 44.4642 29.9005 43.9793 32.1753 43.037C34.4502 42.0947 36.5172 40.7136 38.2583 38.9725C39.9994 37.2314 41.3805 35.1644 42.3227 32.8896C43.265 30.6147 43.75 28.1765 43.75 25.7142ZM0 25.7142C0 19.0838 2.63392 12.725 7.32233 8.03658C12.0107 3.34817 18.3696 0.714249 25 0.714249C31.6304 0.714249 37.9893 3.34817 42.6777 8.03658C47.3661 12.725 50 19.0838 50 25.7142C50 32.3447 47.3661 38.7035 42.6777 43.3919C37.9893 48.0803 31.6304 50.7142 25 50.7142C18.3696 50.7142 12.0107 48.0803 7.32233 43.3919C2.63392 38.7035 0 32.3447 0 25.7142ZM25 33.5267C27.072 33.5267 29.0591 32.7036 30.5243 31.2385C31.9894 29.7734 32.8125 27.7863 32.8125 25.7142C32.8125 23.6422 31.9894 21.6551 30.5243 20.19C29.0591 18.7248 27.072 17.9017 25 17.9017C22.928 17.9017 20.9409 18.7248 19.4757 20.19C18.0106 21.6551 17.1875 23.6422 17.1875 25.7142C17.1875 27.7863 18.0106 29.7734 19.4757 31.2385C20.9409 32.7036 22.928 33.5267 25 33.5267ZM25 11.6517C28.7296 11.6517 32.3065 13.1333 34.9437 15.7706C37.5809 18.4078 39.0625 21.9846 39.0625 25.7142C39.0625 29.4439 37.5809 33.0207 34.9437 35.6579C32.3065 38.2952 28.7296 39.7767 25 39.7767C21.2704 39.7767 17.6935 38.2952 15.0563 35.6579C12.4191 33.0207 10.9375 29.4439 10.9375 25.7142C10.9375 21.9846 12.4191 18.4078 15.0563 15.7706C17.6935 13.1333 21.2704 11.6517 25 11.6517ZM21.875 25.7142C21.875 24.8854 22.2042 24.0906 22.7903 23.5045C23.3763 22.9185 24.1712 22.5892 25 22.5892C25.8288 22.5892 26.6237 22.9185 27.2097 23.5045C27.7958 24.0906 28.125 24.8854 28.125 25.7142C28.125 26.5431 27.7958 27.3379 27.2097 27.924C26.6237 28.51 25.8288 28.8392 25 28.8392C24.1712 28.8392 23.3763 28.51 22.7903 27.924C22.2042 27.3379 21.875 26.5431 21.875 25.7142Z"
                            fill="#22C55E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_35_5">
                            <rect width="50" height="50" fill="white" transform="translate(0 0.714249)" />
                        </clipPath>
                    </defs>
                </svg>
                <h3 class="text-2xl font-bold">Business Strategy</h3>
                <p class="font-semibold">Designing and developing web applications, including customer portals, booking
                    systems, or data-driven applications that enhance user engagement and streamline business processes.
                </p>
            </div>
            {{-- Audit & Report --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="58" viewBox="0 0 50 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_35_15)">
                        <path
                            d="M5.35714 2.82139C5.35714 1.33702 4.16295 0.142822 2.67857 0.142822C1.1942 0.142822 0 1.33702 0 2.82139V7.28568V39.2611V44.7857V54.6071C0 56.0915 1.1942 57.2857 2.67857 57.2857C4.16295 57.2857 5.35714 56.0915 5.35714 54.6071V43.4464L14.3192 41.2031C18.9062 40.0535 23.7612 40.5892 27.9911 42.6986C32.9241 45.1651 38.6496 45.4665 43.8058 43.5245L47.6786 42.0736C49.0737 41.5491 50 40.2209 50 38.7254V7.52005C50 4.95309 47.2991 3.27898 45 4.42854L43.9286 4.96425C38.7612 7.55354 32.6786 7.55354 27.5112 4.96425C23.5938 2.99997 19.096 2.50889 14.8438 3.56916L5.35714 5.94639V2.82139ZM5.35714 11.4709L16.1384 8.77005C19.1518 8.02229 22.3326 8.36827 25.1116 9.7522C31.2388 12.8102 38.3594 13.0669 44.6429 10.5111V37.4977L41.9196 38.5134C38.1585 39.9196 33.9732 39.7076 30.3795 37.9107C25 35.2209 18.8504 34.5513 13.0134 36.0022L5.35714 37.9218V11.4709Z"
                            fill="#22C55E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_35_15">
                            <rect width="50" height="57.1429" fill="white"
                                transform="translate(0 0.142822)" />
                        </clipPath>
                    </defs>
                </svg>
                <h3 class="text-2xl font-bold">Audit & Report</h3>
                <p class="font-semibold">This is the specialized field of creating and maintaining blockchain-based
                    applications and systems. It involves programming, designing, and implementing blockchain technology
                    to build secure, transparent, and decentralized solutions.</p>
            </div>
            {{-- Sales & Marketing --}}
            <div class="flex flex-col items-center gap-3 p-2 text-center border-4 rounded-lg md:p-5 border-web3nexus">
                <svg width="50" height="58" viewBox="0 0 50 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_36_20)">
                        <path
                            d="M39.442 3.71426H10.5692C4.75446 3.71426 0 8.46873 0 14.2723V43.1451C0 48.9598 4.75446 53.7143 10.5692 53.7143H39.442C45.2567 53.7143 50.0112 48.9598 50.0112 43.1562V14.2723C50.0112 8.46873 45.2567 3.71426 39.442 3.71426ZM33.8616 39.0268C30.7478 44.4062 23.8281 46.2701 18.4375 43.1786C15.8817 47.6205 12.3103 44.1384 13.7165 41.7053L15.4688 38.6696C16.1272 37.5201 17.6116 37.1183 18.7612 37.7879C20.8371 38.9933 18.75 37.7768 20.8259 38.9821C23.9062 40.7567 27.9018 39.6852 29.6875 36.6049C31.4621 33.5245 30.3906 29.529 27.3103 27.7433C25.3237 26.6049 27.2433 27.6986 25.2344 26.5602C22.4888 24.9754 24.8549 20.7678 27.6451 22.375C29.721 23.5803 27.6339 22.3638 29.7098 23.5692C35.1116 26.6942 36.9754 33.6473 33.8616 39.0268ZM36.2946 15.7232C34.3973 19.0156 34.4754 18.9375 34.1741 19.2388C33.4487 19.9643 32.3549 20.2098 31.2165 19.6406C29.1406 18.4352 31.2277 19.6518 29.1518 18.4464C26.0714 16.6719 22.0759 17.7433 20.2902 20.8236C18.5045 23.904 19.5871 27.8995 22.6674 29.6852C22.6674 29.6852 24.7321 30.8683 24.7433 30.8683C27.4888 32.4531 25.1228 36.6607 22.3326 35.0535C20.2567 33.8482 22.3438 35.0647 20.2679 33.8594C14.8884 30.7567 13.0246 23.8035 16.1272 18.4129C19.2411 13.0335 26.1607 11.1696 31.5513 14.2611L32.0871 13.3236C33.683 10.5446 37.8906 12.9553 36.2946 15.7232Z"
                            fill="#22C55E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_36_20">
                            <rect width="50" height="57.1429" fill="white"
                                transform="translate(0 0.142822)" />
                        </clipPath>
                    </defs>
                </svg>
                <h3 class="text-2xl font-bold">Sales & Marketing</h3>
                <p class="font-semibold">This refers to the process of creating software applications (apps) that run
                    on various platforms, such as mobile devices, desktop computers, or the web.</p>
            </div>
        </div>
    </section>

    {{-- Why choose us? --}}
    <section class="max-w-screen-xl mx-auto mt-12" id="why-choose-us">
        <h3 class="text-3xl font-bold leading-none text-center">
            Why
            <span
                class="relative inline-block before:block before:absolute before:-inset-1 before:-skew-y-6 before:bg-web3nexus">
                <span class="relative text-white">Choose</span>
            </span>
            Us?
        </h3>
        {{-- Unparalleled Expertise --}}
        <div class="grid gap-5 px-5 mt-8 md:grid-cols-2">
            <div>
                <img class="rounded-xl h-[350px] w-full shadow lazyload"
                    src="{{ Vite::asset('resources/images/wcu-first.webp') }}" alt="Unparalleled Expertise">
            </div>
            <div class="flex flex-col justify-between gap-3">
                <h3 class="font-bold text-3xl border-l-[6px] border-web3nexus pl-2">Unparalleled Expertise</h3>
                <h4 class="font-bold">Your Vision, Our Expertise</h4>
                <p>At Web3Nexus, we bring years of industry experience and technical know-how to the table. Our team of
                    skilled professionals is well-versed in the latest web technologies and design trends.</p>
                <p>Whether you're looking to create a stunning website, optimize your online presence, or explore the
                    possibilities of web3 technologies, our expertise is your advantage.</p>
                <x-button type="button" onclick="scrollToSection('reach-out')" class="">get a free
                    consultation</x-button>
            </div>
        </div>
        {{-- Tailored Solutions --}}
        <div class="grid flex-row-reverse gap-5 px-5 mt-8 md:flex">
            <div class="md:w-1/2">
                <img class="rounded-xl h-[300px] w-full shadow object-cover lazyload"
                    src="{{ Vite::asset('resources/images/wcu-second.webp') }}" alt="Tailored Solutions">
            </div>
            <div class="flex flex-col justify-between gap-3 md:w-1/2">
                <h3 class="font-bold text-3xl border-l-[6px] border-web3nexus pl-2">Tailored Solutions</h3>
                <h4 class="font-bold">Your Needs, Our Solutions</h4>
                <p>We understand that one size doesn't fit all. That's why we take a personalized approach to every
                    project. Our solutions are tailored to your specific goals and requirements.</p>
                <p>From custom web development to strategic digital marketing, we craft solutions that resonate with
                    your audience and drive results.</p>
                <x-button type="button" onclick="scrollToSection('reach-out')" class="">get a free
                    consultation</x-button>
            </div>
        </div>
        {{-- Creative Innovation --}}
        <div class="grid gap-5 px-5 mt-8 md:grid-cols-2">
            <div>
                <img class="rounded-xl h-[300px] w-full shadow object-cover lazyload"
                    src="{{ Vite::asset('resources/images/wcu-third.webp') }}" alt="Creative Innovation">
            </div>
            <div class="flex flex-col justify-between gap-3">
                <h3 class="font-bold text-3xl border-l-[6px] border-web3nexus pl-2">Creative Innovation</h3>
                <h4 class="font-bold">Your Imagination, Our Innovation</h4>
                <p>Innovation is at the heart of everything we do. We thrive on pushing boundaries and exploring new
                    horizons in web design and development.</p>
                <p> Our creative team combines cutting-edge design with innovative technology to deliver captivating,
                    user-friendly, and future-ready digital experiences.</p>
                <x-button type="button" onclick="scrollToSection('reach-out')" class="">get a free
                    consultation</x-button>
            </div>
        </div>
        {{-- Client-Centric Approach --}}
        <div class="grid flex-row-reverse gap-5 px-5 mt-8 md:flex">
            <div class="md:w-1/2">
                <img class="rounded-xl h-[300px] w-full shadow object-cover lazyload"
                    src="{{ Vite::asset('resources/images/wcu-fourth.webp') }}" alt="Client-Centric Approach">
            </div>
            <div class="flex flex-col justify-between gap-3 md:w-1/2">
                <h3 class="font-bold text-3xl border-l-[6px] border-web3nexus pl-2">Client-Centric Approach</h3>
                <h4 class="font-bold">Your Success, Our Priority</h4>
                <p>Your success is our ultimate goal. We prioritize open communication, transparency, and collaboration
                    throughout the project lifecycle.</p>
                <p>Our client-centric approach ensures that your voice is heard, your vision is realized, and your
                    project is delivered on time and within budget. Your satisfaction is our measure of success.</p>
                <x-button type="button" onclick="scrollToSection('reach-out')" class="">get a free
                    consultation</x-button>
            </div>
        </div>
    </section>

    {{-- Our Portfolio --}}
    <section class="max-w-screen-xl mx-auto mt-12" id="our-portfolio">
        <h3 class="text-3xl font-bold leading-none text-center">
            Our
            <span
                class="relative inline-block before:block before:absolute before:-inset-1 before:-skew-y-6 before:bg-web3nexus">
                <span class="relative text-white">Portfolio</span>
            </span>
        </h3>
        <div class="grid gap-4 px-5 mt-8 lg:gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($portfolios as $portfolio)
                {{-- Portfolio item --}}
                <a href="{{ $portfolio->url }}" target="_black" rel="noopener"
                    class="p-4 transition-all bg-white border-2 cursor-pointer hover:border-black hover:bg-web3nexus group drop-shadow-xl">
                    <img class="object-cover w-full h-56 border-2 group-hover:border-black lazyload"
                        src="{{ rtrim(env('APP_URL'), '/') . '/storage/' . $portfolio->image }}"
                        alt="{{ $portfolio->title }} Portfolio">
                    <div class="flex items-center justify-between mt-3">
                        <p class="font-semibold underline group-hover:text-white">{{ $portfolio->title }}</p>
                        <div class="bg-web3nexus group-hover:bg-white rounded-full p-[2px]">
                            <div class="p-1 border border-white rounded-full group-hover:border-web3nexus">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor"
                                    class="w-4 h-4 text-white group-hover:text-web3nexus">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        @if ($portfolios->isEmpty())
            <p class="text-2xl font-bold text-center text-gray-800 md:text-4xl">No items to display.</p>
        @endif
    </section>

    {{-- Reach Out --}}
    <section class="max-w-screen-xl mx-auto mt-12" id="reach-out">
        <h3 class="text-3xl font-bold leading-none text-center">
            Reach
            <span
                class="relative inline-block before:block before:absolute before:-inset-1 before:-skew-y-6 before:bg-web3nexus">
                <span class="relative text-white">Out</span>
            </span>
        </h3>
        @livewire('contact')
    </section>

    {{-- Frequently Asked Questions --}}
    <section class="max-w-screen-xl mx-auto mt-12" id="faqs">
        <h3 class="text-3xl font-bold leading-none text-center">
            Frequently
            <span
                class="relative inline-block before:block before:absolute before:-inset-1 before:-skew-y-6 before:bg-web3nexus">
                <span class="relative text-white">Asked</span>
            </span>
            Questions
        </h3>
        <div class="w-full max-w-2xl mx-auto mt-8" x-data="{ selected: 0 }">
            {{-- Faqs item --}}
            @foreach ($faqs as $i => $faq)
                <div class="px-5 py-2 @if (!$loop->last) border-b border-web3nexus @endif">
                    {{-- Question --}}
                    <div class="flex items-center justify-between cursor-pointer text-[#0C5F2D]"
                        @click="selected !== {{ $i }} ? selected = {{ $i }} : selected = null">
                        <h4 class="text-xl font-semibold">{{ $faq->question }}</h4>
                        {{-- active --}}
                        <svg x-show="selected !== {{ $i }} ? true : false"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 min-w-min">
                            <path fill-rule="evenodd"
                                d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z"
                                clip-rule="evenodd" />
                        </svg>
                        {{-- inactive --}}
                        <svg x-show="selected !== {{ $i }} ? false : true"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 min-w-min">
                            <path fill-rule="evenodd"
                                d="M5.25 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    @php
                        $html = \Illuminate\Support\Str::of($faq->answer)->markdown();
                    @endphp
                    {{-- Answer --}}
                    <div class="mt-2 prose text-gray-500" x-show="selected !== {{ $i }} ? false : true"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        {!! $html !!}
                    </div>
                </div>
            @endforeach

            @if ($faqs->isEmpty())
                <p class="text-2xl font-bold text-center text-gray-800 md:text-4xl">No items to display.</p>
            @endif
        </div>
    </section>

    {{-- Footer --}}
    <footer class="relative flex flex-col items-center gap-3 py-5 mt-12 text-white bg-black" id="footer">
        <div id="particles-js-f" class="absolute inset-x-0 inset-y-0 w-full"></div>
        <div class="z-20 w-36">
            <x-application-logo />
        </div>
        <p class="z-20 font-semibold">Turning Ideas into Digital Reality</p>
        {{-- Social links --}}
        <div class="z-20 flex flex-wrap justify-center gap-3 px-8">
            @foreach ($social_links as $social_link)
                {{-- Facebook --}}
                @if ($social_link->name == 'facebook')
                    <a href="{{ $social_link->page_handle }}"
                        class="block p-1 border-2 border-blue-600 rounded-full w-max">
                        <span class="flex items-center justify-center w-10 h-10 bg-blue-600 rounded-full">
                            <svg width="13" height="25" viewBox="0 0 16 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_40_164)">
                                    <path
                                        d="M13.957 15.1397L14.668 10.5067H10.2225V7.50025C10.2225 6.23275 10.8435 4.99725 12.8345 4.99725H14.8555V1.05275C14.8555 1.05275 13.0215 0.739746 11.268 0.739746C7.60703 0.739746 5.21403 2.95875 5.21403 6.97575V10.5067H1.14453V15.1397H5.21403V26.3397H10.2225V15.1397H13.957Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_40_164">
                                        <rect width="16" height="25.6" fill="white"
                                            transform="translate(0 0.739746)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                @endif

                {{-- WhatsApp --}}
                @if ($social_link->name == 'whatsapp')
                    <a href="{{ $social_link->page_handle }}"
                        class="block p-1 border-2 border-green-500 rounded-full w-max">
                        <span class="flex items-center justify-center w-10 h-10 bg-green-500 rounded-full">
                            <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.539551" width="50" height="50" rx="25" fill="#25D366" />
                                <g clip-path="url(#clip0_40_179)">
                                    <path
                                        d="M33.7556 16.6724C31.4174 14.3286 28.3036 13.0396 24.9944 13.0396C18.1641 13.0396 12.606 18.5976 12.606 25.4279C12.606 27.6099 13.1752 29.7416 14.2578 31.6221L12.5 38.0396L19.0681 36.3152C20.8761 37.3029 22.9129 37.8219 24.9888 37.8219H24.9944C31.8192 37.8219 37.5 32.2639 37.5 25.4335C37.5 22.1244 36.0938 19.0161 33.7556 16.6724ZM24.9944 35.7349C23.1417 35.7349 21.3281 35.2382 19.7489 34.3007L19.375 34.0775L15.4799 35.0987L16.5179 31.2985L16.2723 30.9079C15.24 29.2672 14.6987 27.3755 14.6987 25.4279C14.6987 19.7527 19.3192 15.1322 25 15.1322C27.7511 15.1322 30.3348 16.2036 32.2768 18.1512C34.2188 20.0987 35.4129 22.6824 35.4074 25.4335C35.4074 31.1143 30.6696 35.7349 24.9944 35.7349ZM30.6417 28.0228C30.3348 27.8666 28.8114 27.1188 28.5268 27.0183C28.2422 26.9123 28.0357 26.8621 27.8292 27.1746C27.6228 27.4871 27.0312 28.1791 26.8471 28.3911C26.6685 28.5976 26.4844 28.6255 26.1775 28.4692C24.3583 27.5596 23.1641 26.8454 21.9643 24.7862C21.6462 24.2393 22.2824 24.2784 22.8739 23.0954C22.9743 22.8889 22.9241 22.7103 22.846 22.5541C22.7679 22.3978 22.1484 20.8744 21.8917 20.255C21.6406 19.6523 21.3839 19.736 21.1942 19.7248C21.0156 19.7137 20.8092 19.7137 20.6027 19.7137C20.3962 19.7137 20.0614 19.7918 19.7768 20.0987C19.4922 20.4112 18.6942 21.159 18.6942 22.6824C18.6942 24.2058 19.8047 25.6791 19.9554 25.8855C20.1116 26.092 22.1373 29.217 25.2455 30.5619C27.2098 31.4101 27.9799 31.4826 28.9621 31.3375C29.5592 31.2483 30.7924 30.5898 31.0491 29.8643C31.3058 29.1389 31.3058 28.5195 31.2277 28.3911C31.1551 28.2516 30.9487 28.1735 30.6417 28.0228Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_40_179">
                                        <rect width="25" height="28.5714" fill="white"
                                            transform="translate(12.5 11.2539)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                @endif

                {{-- Telegram --}}
                @if ($social_link->name == 'telegram')
                    <a href="{{ $social_link->page_handle }}"
                        class="block p-1 border-2 border-blue-600 rounded-full w-max">
                        <span class="flex items-center justify-center w-10 h-10 bg-blue-600 rounded-full">
                            <svg width="50" height="51" viewBox="0 0 50 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.539551" width="50" height="50" rx="25" fill="#1877F2" />
                                <g clip-path="url(#clip0_40_168)">
                                    <path
                                        d="M25 10.5396C16.7157 10.5396 10 17.2553 10 25.5396C10 33.8238 16.7157 40.5396 25 40.5396C33.2843 40.5396 40 33.8238 40 25.5396C40 17.2553 33.2843 10.5396 25 10.5396ZM31.9527 20.7408C31.727 23.1126 30.7503 28.8685 30.2531 31.525C30.0429 32.6491 29.6288 33.026 29.2281 33.0628C28.3571 33.143 27.6955 32.4872 26.8518 31.9341C25.5317 31.0687 24.7858 30.53 23.5043 29.6855C22.0233 28.7096 22.9834 28.1734 23.8274 27.2964C24.0483 27.067 27.8863 23.5761 27.9606 23.2594C27.9698 23.2198 27.9787 23.0719 27.8908 22.9942C27.8028 22.9165 27.6736 22.9429 27.5802 22.964C27.4478 22.994 25.3388 24.388 21.2531 27.1459C20.6545 27.557 20.1123 27.7573 19.6264 27.7468C19.0908 27.7352 18.0606 27.444 17.2947 27.195C16.3553 26.8897 15.6087 26.7282 15.6737 26.2097C15.7076 25.9395 16.0796 25.6633 16.7897 25.381C21.1625 23.4759 24.0784 22.2198 25.5373 21.6129C29.703 19.8802 30.5686 19.5792 31.1328 19.5692C31.2569 19.5671 31.5343 19.5979 31.714 19.7437C31.8335 19.8476 31.9097 19.9925 31.9275 20.1499C31.958 20.3453 31.9664 20.5435 31.9527 20.7408Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_40_168">
                                        <rect width="30" height="30.9677" fill="white"
                                            transform="translate(10 10.0557)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                @endif

                {{-- Youtube --}}
                @if ($social_link->name == 'youtube')
                    <a href="{{ $social_link->page_handle }}"
                        class="block p-1 border-2 border-red-600 rounded-full w-max">
                        <span class="flex items-center justify-center w-10 h-10 bg-red-600 rounded-full">
                            <svg width="30" height="27" viewBox="0 0 30 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.6279 6.66887C28.3008 5.4371 27.3369 4.467 26.1131 4.13778C23.8949 3.53955 15.0001 3.53955 15.0001 3.53955C15.0001 3.53955 6.10528 3.53955 3.887 4.13778C2.6632 4.46705 1.69934 5.4371 1.37221 6.66887C0.777832 8.90153 0.777832 13.5598 0.777832 13.5598C0.777832 13.5598 0.777832 18.218 1.37221 20.4506C1.69934 21.6824 2.6632 22.6121 3.887 22.9413C6.10528 23.5396 15.0001 23.5396 15.0001 23.5396C15.0001 23.5396 23.8949 23.5396 26.1131 22.9413C27.3369 22.6121 28.3008 21.6824 28.6279 20.4506C29.2223 18.218 29.2223 13.5598 29.2223 13.5598C29.2223 13.5598 29.2223 8.90153 28.6279 6.66887ZM12.091 17.7891V9.33044L19.5253 13.5599L12.091 17.7891Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </a>
                @endif

                {{-- Tiktok --}}
                @if ($social_link->name == 'tiktok')
                    <a href="{{ $social_link->page_handle }}"
                        class="block p-1 border-2 border-white rounded-full w-max">
                        <span class="flex items-center justify-center w-10 h-10 bg-white rounded-full">
                            <svg width="26" height="29" viewBox="0 0 26 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_40_205)">
                                    <path
                                        d="M25.5001 11.9676C23.0433 11.9735 20.6468 11.2073 18.6491 9.77734V19.7506C18.6484 21.5977 18.0838 23.4006 17.0308 24.9182C15.9778 26.4359 14.4866 27.5958 12.7565 28.243C11.0265 28.8903 9.14009 28.9939 7.34956 28.5401C5.55903 28.0862 3.94972 27.0966 2.73683 25.7034C1.52394 24.3103 0.765273 22.5801 0.562275 20.7441C0.359278 18.9081 0.721626 17.054 1.60087 15.4295C2.48011 13.805 3.83434 12.4877 5.48247 11.6537C7.13061 10.8196 8.99409 10.5086 10.8237 10.7623V15.7785C9.98649 15.5151 9.08743 15.523 8.25495 15.8011C7.42248 16.0792 6.69916 16.6132 6.18829 17.3269C5.67743 18.0406 5.40514 18.8975 5.41031 19.7752C5.41548 20.6529 5.69784 21.5065 6.21708 22.2141C6.73632 22.9217 7.46588 23.4472 8.30157 23.7154C9.13726 23.9837 10.0364 23.9811 10.8704 23.7078C11.7045 23.4347 12.431 22.9049 12.946 22.1942C13.4611 21.4835 13.7384 20.6283 13.7384 19.7506V0.253906H18.6491C18.6457 0.668605 18.6804 1.08274 18.7529 1.49107C18.9235 2.40261 19.2783 3.26976 19.7956 4.03947C20.3129 4.80919 20.9817 5.46528 21.7612 5.96763C22.8703 6.70094 24.1705 7.0918 25.5001 7.09152V11.9676Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_40_205">
                                        <rect width="25" height="28.5714" fill="white"
                                            transform="translate(0.5 0.253906)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                @endif

                {{-- XTwitter --}}
                @if ($social_link->name == 'twitter')
                    <a href="{{ $social_link->page_handle }}"
                        class="block p-1 border-2 rounded-full border-sky-500 w-max">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-sky-500">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_40_214)">
                                    <path
                                        d="M22.9302 7.5998C22.946 7.82188 22.946 8.04399 22.946 8.26606C22.946 15.0395 17.7906 22.8441 8.36802 22.8441C5.46509 22.8441 2.76841 22.0033 0.5 20.544C0.912451 20.5916 1.30898 20.6074 1.7373 20.6074C4.13257 20.6074 6.33755 19.7984 8.09834 18.4184C5.8458 18.3708 3.95811 16.8955 3.30771 14.865C3.625 14.9126 3.94224 14.9443 4.27539 14.9443C4.7354 14.9443 5.19546 14.8809 5.62373 14.7699C3.27603 14.2939 1.51519 12.2318 1.51519 9.74131V9.67788C2.19727 10.0586 2.99048 10.2965 3.83115 10.3282C2.45107 9.40815 1.54692 7.83774 1.54692 6.06108C1.54692 5.10933 1.80068 4.23687 2.24487 3.47544C4.76709 6.58457 8.55835 8.61499 12.8096 8.83711C12.7303 8.4564 12.6827 8.05986 12.6827 7.66328C12.6827 4.83965 14.9669 2.53955 17.8064 2.53955C19.2816 2.53955 20.6141 3.1582 21.55 4.15757C22.708 3.9355 23.8184 3.50718 24.802 2.92026C24.4212 4.11001 23.6122 5.10938 22.5494 5.74385C23.5805 5.63286 24.5799 5.34727 25.4999 4.95073C24.802 5.96592 23.9295 6.87007 22.9302 7.5998Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_40_214">
                                        <rect width="25" height="25" fill="white"
                                            transform="translate(0.5 0.0395508)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                @endif
            @endforeach
            {{-- Mail --}}
            {{-- <a href="#" class="block p-1 border-2 border-red-500 rounded-full w-max">
                <span class="flex items-center justify-center w-10 h-10 bg-red-500 rounded-full">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_40_203)">
                            <path
                                d="M3.625 5.5083C3.19531 5.5083 2.84375 5.85986 2.84375 6.28955V7.36865L11.2666 14.2827C12.2773 15.1128 13.7275 15.1128 14.7383 14.2827L23.1562 7.36865V6.28955C23.1562 5.85986 22.8047 5.5083 22.375 5.5083H3.625ZM2.84375 10.4009V18.7896C2.84375 19.2192 3.19531 19.5708 3.625 19.5708H22.375C22.8047 19.5708 23.1562 19.2192 23.1562 18.7896V10.4009L16.2227 16.0942C14.3477 17.6323 11.6475 17.6323 9.77734 16.0942L2.84375 10.4009ZM0.5 6.28955C0.5 4.56592 1.90137 3.16455 3.625 3.16455H22.375C24.0986 3.16455 25.5 4.56592 25.5 6.28955V18.7896C25.5 20.5132 24.0986 21.9146 22.375 21.9146H3.625C1.90137 21.9146 0.5 20.5132 0.5 18.7896V6.28955Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_40_203">
                                <rect width="25" height="25" fill="white"
                                    transform="translate(0.5 0.0395508)" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </a> --}}
        </div>
        <p class="z-20 font-semibold">&copy; 2023 <a href="/" class="hover:text-web3nexus">Web3Nexus</a>. All
            right reserved</p>
    </footer>

    {{-- Back to top --}}
    <a href="#header" id="backToTopBtn" class="fixed z-50 hidden p-1 border-2 rounded-full cursor-pointer bottom-3 right-3 border-web3nexus w-max">
        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-web3nexus min-w-max">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 fill-white">
                <path fill-rule="evenodd" d="M12 20.25a.75.75 0 01-.75-.75V6.31l-5.47 5.47a.75.75 0 01-1.06-1.06l6.75-6.75a.75.75 0 011.06 0l6.75 6.75a.75.75 0 11-1.06 1.06l-5.47-5.47V19.5a.75.75 0 01-.75.75z" clip-rule="evenodd" />
            </svg>
        </div>
    </a>

    <script type="text/javascript">
        function scrollToSection(sectionId) {
            var targetSection = document.getElementById(sectionId);

            var menuHeight = 100;

            var targetScrollPosition = targetSection.offsetTop - menuHeight;

            window.scrollTo({
                top: targetScrollPosition,
                behavior: 'smooth'
            });
        }

        var mybutton = document.getElementById("backToTopBtn");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    @livewire('notifications')
    @filamentScripts
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>

</html>
