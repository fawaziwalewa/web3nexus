<button {{ $attributes->merge(['class' => 'hover:scale-105 bg-web3nexus rounded-full flex items-center w-max mx-auto sm:mx-0 cursor-pointer']) }}>
    <p class="px-4 text-sm font-semibold text-[#212121] uppercase">{{ $slot }}</p>
    <div class="p-1 border-2 border-white rounded-full w-max">
        <div class="flex items-center justify-center w-8 h-8 bg-white rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </div>
    </div>
</button>
