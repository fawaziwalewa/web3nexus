<form method="POST" wire:submit="save" class="w-full max-w-xl px-5 mx-auto mt-8">
    <div class="">
        <label for="name" class="font-semibold">Name</label>
        <input wire:model.live="name" type="text" name="name" id="name"
            class="block w-full mt-2 bg-gray-100 border-none drop-shadow @error('name') border-pink-500 text-pink-600
            focus:border-pink-500 focus:ring-pink-500 @enderror"
            placeholder="Your name goes here...">
        @error('name') <span class="text-pink-600 mt-1">{{ $message }}</span> @enderror
    </div>
    <div class="mt-3">
        <label for="email" class="font-semibold">Email</label>
        <input wire:model.live="email" type="email" name="email" id="email"
            class="block w-full mt-2 bg-gray-100 border-none drop-shadow @error('email') border-pink-500 text-pink-600
            focus:border-pink-500 focus:ring-pink-500 @enderror"
            placeholder="Your email goes here...">
        @error('email') <span class="text-pink-600 mt-1">{{ $message }}</span> @enderror
    </div>
    <div class="mt-3">
        <label for="purpose" class="font-semibold">Purpose</label>
        <select wire:model.live="purpose" name="purpose" id="purpose" class="block w-full mt-2 bg-gray-100 border-none drop-shadow @error('purpose') border-pink-500 text-pink-600
        focus:border-pink-500 focus:ring-pink-500 @enderror">
            <option value="">Select form purpose.</option>
            <option value="consultation">Consultation</option>
            <option value="development">Development</option>
            <option value="design">Design</option>
            <option value="maintenance">Maintenance</option>
            <option value="testing">Testing</option>
            <option value="bug">Bug Fixing</option>
            <option value="others">Others</option>
        </select>
        @error('purpose') <span class="text-pink-600 mt-1">{{ $message }}</span> @enderror
    </div>
    <div class="mt-3">
        <label for="message" class="font-semibold">Message</label>
        <textarea wire:model.live="message" name="message" id="message" cols="30" rows="5"
            class="block w-full mt-2 bg-gray-100 border-none drop-shadow @error('message') border-pink-500 text-pink-600
            focus:border-pink-500 focus:ring-pink-500 @enderror" placeholder="Your message goes here..."></textarea>
        @error('message') <span class="text-pink-600 mt-1">{{ $message }}</span> @enderror
    </div>
    <div class="flex justify-center mt-3">
        <x-button type="submit" wire:loading.class="opacity-50" wire:loading.attr="disabled" wire:target="save">get a free consultation</x-button>
    </div>
</form>
