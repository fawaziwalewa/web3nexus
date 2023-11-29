<button {{ $attributes->merge(['class' => 'bg-web3nexus rounded-full flex items-center w-max mx-auto sm:mx-0 cursor-pointer']) }}>
    <p class="uppercase px-4 text-white font-semibold">{{ $slot }}</p>
    <div class="border-2 border-white rounded-full w-max p-1">
        <div class="bg-white rounded-full w-10 h-10 flex items-center justify-center">
            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5 1.26074L19 8.76074M19 8.76074L11.5 16.2607M19 8.76074H1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</button>
