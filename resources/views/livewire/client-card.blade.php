<div>
<div class="flex flex-wrap">
    <div class="w-full p-3 lg:w-1/3">
        <!--Metric Card-->
        <div class="p-2">
            <div class="flex flex-col items-center justify-center py-2">
                @php
                    $qrlink = '../public/qrcodes/'.auth()->user()->id.'_'.auth()->user()->name.'.svg';
                    $assetlink = 'qrcodes/'.auth()->user()->id.'_'.auth()->user()->name.'.svg';
                @endphp
                {{QrCode::format('svg')->size(300)->generate(config('app.url').'/visitors/'.auth()->user()->id, strval($qrlink))}}
                <div class="p-2 bg-gray-300 rounded-xl">
                    <button type="button" onclick="toggleNavbar('qrfetch')">{!! QrCode::size(150)->generate(config('app.url').'/visitors/'.auth()->user()->id) !!}</button>
                </div>
                <div class="py-3">
                    <a class="w-full h-full px-4 py-2 mt-4 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none" href="{{asset(strval($assetlink))}}" download>DOWNLOAD</a>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full p-3 lg:w-2/3">
        <div class="p-2 bg-white border rounded shadow">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="p-3 bg-indigo-600 rounded"><i class="fas fa-user fa-2x fa-fw fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold text-gray-500 uppercase">Account Type</h5>
                    <h3 class="text-3xl font-bold">{{auth()->user()->trial == true ? 'TRIAL' : (auth()->user()->id == 3 ? 'DEMO' : 'PRO')}}</h3>
                </div>
            </div>
        </div>
        <div class="p-2 bg-white border rounded shadow">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="p-3 bg-pink-600 rounded"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold text-gray-500 uppercase">Total Visitors</h5>
                    <h3 class="text-3xl font-bold">{{$visitors}} <span class="text-green-500"><i class="fas fa-exchange-alt  {{$visitors == 0 ? 'hidden' : ''}}"></i></span></h3>
                </div>
            </div>
        </div>
        <div class="p-2 bg-white border rounded shadow">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="p-3 bg-yellow-600 rounded"><i class="fas fa-virus fa-2x fa-fw fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold text-gray-500 uppercase">Visitors With Symptoms</h5>
                    <h3 class="text-3xl font-bold">{{$symptoms}} <span class="text-red-600"><i class="fas fa-caret-up {{$symptoms == 0 ? 'hidden' : ''}}"></i></span></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="qrfetch" class="fixed inset-0 z-10 hidden overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-500 bg-opacity-50"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
            <div class="flex flex-col items-center justify-center text-center">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900 uppercase" id="modal-headline">
                    {{auth()->user()->name}}
                </h3>
                <hr class="mx-2 my-2 border-b-2 border-gray-400">
                <div class="flex flex-row items-center justify-center w-full my-2">
                    @php
                        $qrlink = '../public/qrcodes/'.auth()->user()->id.'_'.auth()->user()->name.'.svg';
                        $assetlink = 'qrcodes/'.auth()->user()->id.'_'.auth()->user()->name.'.svg';
                    @endphp
                    {{QrCode::format('svg')->size(300)->generate(config('app.url').'/visitors/'.auth()->user()->id, strval($qrlink))}}
                    <div class="p-3 bg-gray-300 rounded">
                    <a class="w-full h-full" href="{{asset(strval($assetlink))}}" download>{!! QrCode::size(350)->generate(config('app.url').'/visitors/'.auth()->user()->id) !!}</a>
                    </div>
                </div>
                <hr class="mx-2 my-2 border-b-2 border-gray-400">
                @if(auth()->user()->trial == false)
                <h3 class="text-sm font-medium leading-6 text-gray-900" id="modal-headline">
                    Check the boxes below to toggle the form visibility options.
                </h3>
                @livewire('form-options')
                @endif
            </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleNavbar('qrfetch')">
            Close
            </button>
        </div>
        </div>
    </div>
</div>
</div>
