<div>
<form wire:submit.prevent="submitForm">
@csrf
<div class="relative w-full mt-8 mb-3">
<label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="full-name">Full Name</label>
<input wire:model="name" id="name" name="name" type="text" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline" placeholder="Full Name" style="transition: all 0.15s ease 0s;"/>
</div>
<div class="relative w-full mb-3">
<label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="email">Email</label>
<input wire:model="email" id="email" name="email" type="email" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline" placeholder="Email" style="transition: all 0.15s ease 0s;"/>
</div>
<div class="relative w-full mb-3">
<label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="message">Message</label>
<textarea wire:model="message" id="message" name="message" rows="4" cols="80" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white rounded shadow focus:outline-none focus:shadow-outline" placeholder="Type a message..."></textarea>
</div>
<div class="mt-6 text-center">
<x-jet-button class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none">
    {{ __('SEND MESSAGE') }}
</x-jet-button>
</div>
</form>
</div>
