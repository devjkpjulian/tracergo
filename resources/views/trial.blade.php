<x-guest-layout>
<div class="py-6">
    <div class="mx-auto max-w-7xl">
        <div class="overflow-hidden shadow-xl bg-gradient-to-r from-indigo-900 via-indigo-700 to-indigo-500 sm:rounded-lg">
            <div class="container mx-auto">
                <div class="grid h-full grid-cols-1 p-8 rounded-lg md:grid-cols-2">
                    <div class="flex items-center justify-center w-full h-full p-10 bg-gray-200">
                        <img class="object-cover w-full h-full" src="{{asset('tg2.png')}}">
                    </div>
                    <div class="flex p-10 bg-gray-200">
                        <div class="max-w-lg mt-auto mb-auto">
                            <h1 class="text-3xl text-gray-700 uppercase">TRIAL ENDED</h1>
                            <p class="mb-10 text-justify">Your 30 day trial period has ended, if you'd like to continue the using this service/application please subscribe by clicking the button below.</p>
                            <a href="{{route('subscribe')}}" class="py-3 mt-6 text-white bg-indigo-600 rounded-md px-7">SUBSCRIBE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>