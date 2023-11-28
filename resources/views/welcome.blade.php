<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="max-w-screen-xl mx-auto font-sans antialiased text-gray-900">
    <header class="relative py-3 bg-black lg:py-6 min-h-[500px]" x-data="{ isFixed: false, dropdownMenu: false }"
        @scroll.window="isFixed = window.scrollY > 60">
        <div id="particles-js" class="absolute w-full h-full"></div>
        <nav
            :class="[
                isFixed ? 'max-w-screen-xl mx-auto fixed top-0 w-full z-50 bg-white py-2' : 'relative'
            ]">
            <div class="flex items-center justify-between px-4 transition-all duration-300 ease-in-out sm:px-6">
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
                        <a href="/" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">About
                            Us</a>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <a href="/" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">Services</a>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <a href="/" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">Why
                            Choose
                            Us?</a>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <a href="/" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">Portfolio</a>
                    </div>
                    <div class="px-4 py-1 hover:border-b-4 hover:border-web3nexus">
                        <a href="/" class="font-semibold"
                            :class="[
                                isFixed ? 'text-black' : 'text-white'
                            ]">FAQs</a>
                    </div>
                    <x-button href="#" class="ml-3">Get a quote</x-button>
                </div>
                {{-- Mobile Menu --}}
                {{-- Hamburger --}}
                <div class="block lg:hidden">
                    <button class="relative group" @click="dropdownMenu = true">
                        <div
                            class="flex flex-col justify-between w-[20px] h-[20px] transform transition-all duration-300 origin-center overflow-hidden">
                            <div class="h-[2px] w-7 transform transition-all duration-300 origin-left"
                                :class="[
                                    isFixed ? 'bg-black' : 'bg-white',
                                    dropdownMenu ? 'group-focus:rotate-[42deg]' : ''
                                ]">
                            </div>
                            <div class="h-[2px] w-1/2 rounded ml-auto transform transition-all duration-300"
                                :class="[
                                    isFixed ? 'bg-black' : 'bg-white',
                                    dropdownMenu ? 'group-focus:-translate-x-10' : ''
                                ]">
                            </div>
                            <div class="h-[2px] w-7 transform transition-all duration-300 origin-left"
                                :class="[
                                    isFixed ? 'bg-black' : 'bg-white',
                                    dropdownMenu ? 'group-focus:-rotate-[42deg]' : ''
                                ]">
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            {{-- Dropdown --}}
            <div @click.away="dropdownMenu = !dropdownMenu"
                :class="[
                    isFixed ? 'absolute z-50 w-full top-full' : 'absolute z-50 w-full top-full py-2'
                ]"
                x-show.transition="dropdownMenu" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full" @click.self="dropdownMenu = !dropdownMenu" x-clock>
                <div class="bg-white">
                    <div class="px-4 py-2 border-b sm:px-6">
                        <a href="#" class="block">Home</a>
                    </div>
                    <div class="px-4 py-2 border-b sm:px-6">
                        <a href="#" class="block">About us</a>
                    </div>
                    <div class="px-4 py-2 border-b sm:px-6">
                        <a href="#" class="block">Services</a>
                    </div>
                    <div class="px-4 py-2 border-b sm:px-6">
                        <a href="#" class="block">Why Choose Us?</a>
                    </div>
                    <div class="px-4 py-2 border-b sm:px-6">
                        <a href="#" class="block">Portfolio</a>
                    </div>
                    <div class="px-4 py-2 sm:px-6">
                        <a href="#" class="block">FAQs</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex items-center justify-between px-4 mt-10 sm:px-10">
            <div class="z-30 text-white">
                <p class="text-sm font-semibold">Elevate Your Brand with Creative Excellence</p>
                <h1 class="max-w-xl text-5xl italic font-bold"><span id="type">We Provide Cutting Edge</span></h1>
                <h2 class="mt-2 text-4xl italic font-bold text-web3nexus">Web Solutions</h2>
                <p class="text-sm font-semibold">For excellent brand like yours</p>
                <x-button href="#" class="mt-10 mb-3 text-sm lg:text-base">Get a free consultation</x-button>
            </div>
            <div class="z-30 hidden lg:block">
                <img src="{{ Vite::asset('resources/images/hero-image.png') }}" alt="Hero" class="h-[400px]">
            </div>
        </div>
    </header>

    {{-- About Us --}}
    <div class="mt-12" id="about-us">
        <h3 class="text-3xl font-bold leading-none text-center">
            About
            <span
                class="relative inline-block before:block before:absolute before:-inset-1 before:-skew-y-12 before:bg-web3nexus">
                <span class="relative text-white">Us</span>
            </span>
        </h3>
        <div class="grid gap-5 px-5 mt-8 lg:grid-cols-2 md:gap-10">
            <div class="z-20 border-[13px] rounded-3xl border-web3nexus relative overflow-clip">
                <img class="w-full h-full" src="{{ Vite::asset('resources/images/about-us.jpg') }}" alt="About us">
            </div>
            <div class="flex flex-col items-start justify-between gap-4">
                <h3 class="font-bold text-3xl border-l-[6px] border-web3nexus pl-2">Crafting Digital Excellence, One Pixel at a Time</h3>
                <p class="font-semibold">
                    Welcome to Web3Nexus:  Where Creative Innovation Merges Seamlessly with Cutting-Edge Technology to Revolutionize Your Online Presence
                </p>
                <p class="font-semibold">
                    At Web3Nexus, your ultimate gateway to the boundless possibilities of the digital universe, we are a dynamic web development agency driven by an unwavering commitment to craft bespoke digital solutions that transcend conventional boundaries. Here, we don't just navigate the web; we meticulously shape it, harnessing the power of creativity and technology to breathe new life into your online identity.
                </p>
                <x-button class="ml-0">Learn More</x-button>
            </div>
        </div>
    </div>
</body>

</html>
