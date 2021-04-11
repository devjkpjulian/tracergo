@if(auth()->user()->admin == true)
    @livewire('admin')
@else
    @livewire('client')
@endif