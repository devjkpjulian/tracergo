<div>

<div class="p-6 bg-white border-b border-gray-200 sm:px-20">
    
    <hr class="mx-4 my-8 border-b-2 border-gray-400">

    @livewire('metric-card')

    <hr class="mx-4 my-8 border-b-2 border-gray-400">
    
    <div class="flex flex-row flex-wrap flex-grow mt-2">

    <div class="w-full p-3 md:w-1/2">
            <!--Graph Card-->
            <div class="bg-white border rounded shadow">
                <div class="p-3 border-b">
                    <h5 class="font-bold text-gray-600 uppercase">TEMPERATURE</h5>
                </div>
                @livewire('covid-activity')
            </div>
            <!--/Graph Card-->
        </div>

        <div class="w-full p-3 md:w-1/2">
            <!--Graph Card-->
            <div class="bg-white border rounded shadow">
                <div class="p-3 border-b">
                    <h5 class="font-bold text-gray-600 uppercase">Symptoms</h5>
                </div>
                @livewire('symptoms')
            </div>
            <!--/Graph Card-->
        </div>

    </div>

    <hr class="mx-4 my-8 border-b-2 border-gray-400">
</div>

</div>
