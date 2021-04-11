<x-app-layout>

@php
$trialctr = false;
if(strtotime(auth()->user()->created_at) < strtotime('-30 days'))
{
    $trialctr = true;
}
@endphp

@if(auth()->user()->trial == true && $trialctr == true)
    @include('trial')
@else
    @if(auth()->user()->trial == true)
        @include('offer')
    @endif
    <div class="lg:py-2">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
@endif
</x-app-layout>
