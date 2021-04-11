<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{route('visitors.store')}}">
            @csrf

            <input type="hidden" name="user_id" value="{{$user->id}}">

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" required autofocus />
            </div>

            @if($user->cform->email == true)
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" />
            </div>
            @endif

            <div class="mt-4">
                <x-jet-label for="contact" value="{{ __('Contact Number') }}" />
                <x-jet-input id="contact" class="block w-full mt-1" type="number" name="contact" required />
            </div>

            @if($user->cform->age == true)
            <div class="mt-4">
                <x-jet-label for="age" value="{{ __('Age') }}" />
                <x-jet-input id="age" class="block w-full mt-1" type="number" name="age" min="18" max="999" />
            </div>
            @endif

            @if($user->cform->gender == true)
            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <select name="gender" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option name="gender" value="true">Male</option>
                    <option name="gender" value="false">Female</option>
                </select>
            </div>
            @endif

            @if($user->cform->address == true)
            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Street Address') }}" />
                <x-jet-input id="address" class="block w-full mt-1" type="text" name="address" />
            </div>
            @endif

            <div class="mt-4">
                <x-jet-label for="state" value="{{ __('State/Province') }}" />
                <select id="state" name="state" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City/Municipality') }}" />
                <select id="city" name="city" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="symptoms" value="{{ __('Have you experienced any of the following related COVID-19 symptoms stated below in the past 14 days?') }}" />
                <select name="symptoms" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" onchange="toggleSymptoms()">
                    <option name="symptoms" value="true">Yes</option>
                    <option name="symptoms" value="false">No</option>
                </select>
            </div>

            <div id="checklist" class="mt-4">
                <div class="mt-4">
                    <x-jet-label value="{{ __('Please check all applicable symptoms.') }}" />
                    <div class="flex flex-col mt-4">
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="fever" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Fever
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="drycough" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Dry Cough
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="sorethroat" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Sore Throat
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="difficultbreathing" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Difficulty Breathing
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="lossofsenses" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Loss of Taste/Smell
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="fatigue" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Fatigue
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="weakness" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Muscle Pain
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="sneezing" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Runny Nose
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="diarrhoea" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Diarrhoea
                            </span>
                        </label>
                        <label class="inline-flex block mb-2 mr-2 font-bold text-gray-500">
                            <input name="headache" class="mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Headache
                            </span>
                        </label>
                    </div>
                </div>
                <div class="mt-4">
                    <x-jet-label for="q1" value="{{ __('Have you been in close proximity to anyone with the symptoms stated above in the past 14 days?') }}" />
                    <select name="q1" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option name="q1" value="true">Yes</option>
                        <option name="q1" value="false">No</option>
                    </select>
                </div>
                <div class="mt-4">
                    <x-jet-label for="q2" value="{{ __('Have you been in close proximity to anyone who has tested positive for COVID-19 in the past 14 days?') }}" />
                    <select name="q2" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option name="q2" value="true">Yes</option>
                        <option name="q2" value="false">No</option>
                    </select>
                </div>
                <div class="mt-4">
                    <x-jet-label for="q3" value="{{ __('Have you been tested for COVID-19 and are waiting for the test results?') }}" />
                    <select name="q3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option name="q3" value="true">Yes</option>
                        <option name="q3" value="false">No</option>
                    </select>
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Temperature') }}" />
                <x-jet-input id="temperature" class="block w-full mt-1" type="number" name="temperature" placeholder="37.8 °C" step="any" required/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <script src="{{asset('js/city.js')}}"></script>
    <script>
        window.onload = function() {

            var $ = new City();
            $.showProvinces("#state");
            $.showCities("#city");

        }

        function toggleSymptoms() {
            document.getElementById('checklist').classList.toggle("hidden");
            document.getElementById('checklist').classList.toggle("block");
        }
    </script>
</x-guest-layout>
