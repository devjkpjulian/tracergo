<x-guest-layout>
<div class="flex flex-wrap content-center py-12">
    <div class="mx-auto max-w-7xl">
        <div class="overflow-hidden shadow-xl bg-gradient-to-r from-indigo-900 via-indigo-700 to-indigo-500 sm:rounded-lg">
            <div class="container mx-auto">
                <div class="grid h-full grid-cols-1 p-8 rounded-lg md:grid-cols-2">
                    <div class="flex items-center justify-center w-full h-full p-10 bg-gray-200">
                        <img class="object-cover w-full h-full rounded-xl" src="{{is_null($visitor->user->profile_photo_path) ? asset('tg2.png') : asset($visitor->user->profile_photo_path)}}">
                    </div>
                    <div class="flex flex-col p-6 bg-gray-200 lg:p-10">
                        <div class="max-w-lg lg:mt-32">
                            <h1 class="font-extrabold text-xl text-center uppercase lg:text-3xl lg:text-justify  {{$visitor->symptoms == true ? 'text-red-600' : 'text-gray-900'}}">{{$visitor->name}}</h1>
                            <p class="text-sm text-center lg:text-justify lg:text-lg">You have completed TRACER<span class="text-indigo-600">GO</span>.PH's Covid Tracing Application with a timestamp of <span class="text-pink-600">{{$visitor->created_at}}</span>, please show this at the register. If you have inquiries about this application please click the Contact button below.</p>
                            <hr class="my-2">
                            <p class="text-sm text-gray-500">Temperature: {{$visitor->symptom->temperature}}</p>
                            @if($visitor->symptoms == 'true')
                            <p class="text-sm text-gray-500">Symptoms:</p>
                            <div class="flex items-center justify-center pt-4 lg:flex-row">
                                @if($visitor->symptom->fever == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/fever.png')}}" alt="Fever" />
                                @endif
                                @if($visitor->symptom->drycough == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/drycough.png')}}" alt="Dry Cough" />
                                @endif
                                @if($visitor->symptom->sorethroat == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/sorethroat.png')}}" alt="Sore Throat" />
                                @endif
                                @if($visitor->symptom->difficultbreathing == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/difficultbreathing.png')}}" alt="Difficulty Breathing" />
                                @endif
                                @if($visitor->symptom->lossofsenses == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/lossofsenses.png')}}" alt=" Loss of Taste/Smell" />
                                @endif
                                @if($visitor->symptom->fatigue == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/fatigue.png')}}" alt="Fatigue" />
                                @endif
                                @if($visitor->symptom->weakness == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/weakness.png')}}" alt="Aches of Pain" />
                                @endif
                                @if($visitor->symptom->sneezing == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/sneezing.png')}}" alt="Runny Nose" />
                                @endif
                                @if($visitor->symptom->diarrhoea == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/diarrhoea.png')}}" alt="Diarrhoea" />
                                @endif
                                @if($visitor->symptom->headache == true)
                                    <img class="w-6 h-6 lg:w-10 lg:h-10" src="{{asset('symptoms/headache.png')}}" alt="Headache" />
                                @endif
                            </div>
                            @endif
                            <div class="py-10">
                                <a href="{{url('/#contact')}}" class="py-3 mt-6 text-white bg-indigo-600 rounded-md px-7">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>