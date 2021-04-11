<div>
<div class="flex flex-wrap">
    <div class="w-full p-3 md:w-1/2 xl:w-1/3">
        <!--Metric Card-->
        <div class="p-2 bg-white border rounded shadow">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="p-3 bg-green-600 rounded"><i class="fas fa-user fa-2x fa-fw fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold text-gray-500 uppercase">Total Users</h5>
                    <h3 class="text-3xl font-bold">{{$users}} <span class="text-green-500"></span></h3>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full p-3 md:w-1/2 xl:w-1/3">
        <!--Metric Card-->
        <div class="p-2 bg-white border rounded shadow">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="p-3 bg-pink-600 rounded"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold text-gray-500 uppercase">Total Visitors</h5>
                    <h3 class="text-3xl font-bold">{{$visitors}} <span class="text-pink-500"><i class="fas fa-exchange-alt  {{$visitors == 0 ? 'hidden' : ''}}"></i></span></h3>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full p-3 md:w-1/2 xl:w-1/3">
        <!--Metric Card-->
        <div class="p-2 bg-white border rounded shadow">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="p-3 bg-red-600 rounded"><i class="fas fa-virus fa-2x fa-fw fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold text-gray-500 uppercase">Visitors With Symptoms</h5>
                    <h3 class="text-3xl font-bold">{{$symptoms}} <span class="text-red-600"><i class="fas fa-caret-up {{$symptoms == 0 ? 'hidden' : ''}}"></i></span></h3>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
</div>
</div>
