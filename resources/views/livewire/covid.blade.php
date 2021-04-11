<div>
<ul class="mt-6 list-none">
    <li class="py-2">
    <div class="flex items-center">
        <div>
        <span class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-yellow-600 uppercase bg-yellow-200 rounded-full">
        <i class="fas fa-first-aid"></i>
        </span>
        </div>
        <div>
        <h4 class="text-gray-600">
            Total Cases: <span class="text-yellow-600">{{number_format($cases)}}</span>
        </h4>
        </div>
    </div>
    </li>
    <li class="py-2">
    <div class="flex items-center">
        <div>
        <span class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-red-600 uppercase bg-red-200 rounded-full">
            <i class="fas fa-skull"></i>
        </span>
        </div>
        <div>
        <h4 class="text-gray-600">
            Total Death: <span class="text-red-600">{{number_format($deaths)}}</span>
        </h4>
        </div>
    </div>
    </li>
    <li class="py-2">
    <div class="flex items-center">
        <div>
        <span
            class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-green-600 uppercase bg-green-200 rounded-full"
            ><i class="fas fa-heartbeat"></i
        ></span>
        </div>
        <div>
        <h4 class="text-gray-600">
            Total Recovered: <span class="text-green-600">{{number_format($recoveries)}}</span>
        </h4>
        </div>
    </div>
    </li>
</ul>
</div>
