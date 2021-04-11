<x-guest-layout>
<div class="py-12 lg:py-40">
    <div class="mx-auto max-w-7xl">
        <div class="overflow-hidden shadow-xl bg-gradient-to-r from-indigo-900 via-indigo-700 to-indigo-500 sm:rounded-lg">
            <div class="container mx-auto">
                <div class="grid h-full grid-cols-1 p-8 rounded-lg md:grid-cols-2">
                    <div class="flex items-center justify-center w-full h-full p-10 bg-gray-200">
                    {!! QrCode::size(250)->generate(config('app.url').'/visitors/3') !!}
                    </div>
                    <div class="flex p-10 bg-gray-200">
                        <div class="max-w-lg mt-auto mb-auto">
                            <h1 class="text-3xl text-gray-700 uppercase">TRACER<span class="text-indigo-600">GO</span>.PH</h1>
                            <p class="mb-5 font-semibold text-indigo-600">Contact Tracing Application</p>
                            <p class="mb-10 text-justify">Scan the QR code to access our demo or register free using the trial version of our application by clicking the button below.</p>
                            <p class="mb-10 text-justify">Demo Credentials:<br>Username: demo@tracergo.ph<br>Password: tracergoph</p>
                            <a href="{{route('register')}}" class="py-3 mt-6 text-white bg-indigo-600 rounded-md px-7">REGISTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>