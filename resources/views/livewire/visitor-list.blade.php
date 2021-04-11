<div>
<div class="flex items-center justify-between">
                    
    <div class="container px-4 mx-auto">

            <div class="px-4 py-2 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    <table class="items-center justify-center w-full table-auto">
                        <thead class="text-center">
                            <tr>
                                <th class="px-2 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Name
                                </th>
                                <th class="px-2 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Contact
                                </th>
                                <th class="px-2 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Date
                                </th>
                                <th class="px-2 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    View
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($visitors as $visitor)
                            <tr class="bg-white {{$visitor->symptoms == 'true' ? 'text-red-600' : 'text-gray-900'}}">
                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                    <p class="whitespace-no-wrap">{{$visitor->name}}</p>
                                </td>
                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                    <p class="whitespace-no-wrap">{{$visitor->contact}}</p>
                                </td>
                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                    @php
                                        date_default_timezone_set('Asia/Manila');
                                        $timestamp = strtotime($visitor->created_at . "+8hours");
                                        $timestamp = date("Y/m/d H:i:s",$timestamp);
                                    @endphp
                                    <p class="whitespace-no-wrap">{{$timestamp}}</p>
                                </td>
                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                    <button type="button" onclick="toggleNavbar('visitor{{$visitor->id}}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>

                            <div id="visitor{{$visitor->id}}" class="fixed inset-0 z-10 hidden overflow-y-auto">
                                <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                    <div class="absolute inset-0 bg-gray-500 bg-opacity-50"></div>
                                    </div>

                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                    <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                        <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto rounded-full sm:mx-0 sm:h-10 sm:w-10 {{$visitor->symptoms == 'true' ? 'text-red-600 bg-red-100' : 'text-gray-900 bg-gray-300'}}">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-headline">
                                            {{$visitor->name}}
                                            </h3>
                                            <div class="mt-2">
                                            <p class="text-sm text-gray-500">Email Address: {{is_null($visitor->email) ? 'N/A' : $visitor->email}}</p>
                                            <p class="text-sm text-gray-500">Contact Number: {{$visitor->contact}}</p>
                                            <p class="text-sm text-gray-500">Age: {{is_null($visitor->age) ? 'N/A' : $visitor->age}}</p>
                                            <p class="text-sm text-gray-500">Gender: {{is_null($visitor->gender) ? 'N/A' : ($visitor->gender == 'true' ? 'Male' : 'Female')}}</p>
                                            <p class="text-sm text-gray-500">Street Address: {{is_null($visitor->address) ? 'N/A' : $visitor->address}}</p>
                                            <p class="text-sm text-gray-500">State/Province: {{$visitor->state}}</p>
                                            <p class="text-sm text-gray-500">City/Municipality: {{$visitor->city}}</p>
                                            <p class="text-sm text-gray-500">Temperature: {{$visitor->symptom->temperature}}</p>
                                            <hr class="my-2">
                                            @if($visitor->symptoms == 'true')
                                            <p class="pt-2 text-sm text-gray-500">Symptoms:</p>
                                            <div class="items-start justify-start w-full text-sm text-gray-500"><span class="pr-1 {{$visitor->symptom->fever == true ? '' : 'hidden'}}">FEVER</span> <span class="pr-1 {{$visitor->symptom->drycough == true ? '' : 'hidden'}}">DRY COUGH</span> <span class="pr-1 {{$visitor->symptom->sorethroat == true ? '' : 'hidden'}}">SORE THROAT</span> <span class="pr-1 {{$visitor->symptom->difficultbreathing == true ? '' : 'hidden'}}">DIFFICULTY BREATHING</span> <span class="pr-1 {{$visitor->symptom->lossofsenses == true ? '' : 'hidden'}}">LOSS OF TASTE OR SMELL</span> <span class="pr-1 {{$visitor->symptom->fatigue == true ? '' : 'hidden'}}">FATIGUE</span> <span class="p-2 {{$visitor->symptom->weakness == true ? '' : 'hidden'}}">ACHES OF PAIN</span> <span class="p-2 {{$visitor->symptom->sneezing == true ? '' : 'hidden'}}">RUNNY NOSE</span> <span class="p-2 {{$visitor->symptom->diarrhoea == true ? '' : 'hidden'}}">DIARRHOEA</span> <span class="p-2 {{$visitor->symptom->headache == true ? '' : 'hidden'}}">HEADACHE</span></div>
                                            <p class="py-2 text-sm text-gray-500">Notes:</p>
                                            <ul class="text-sm text-gray-500 list-inside">
                                                <li class="{{$visitor->symptom->q1 == 'true' ? '' : 'hidden'}}">Been in close proximity to anyone with COVID-19 symptoms.</li>
                                                <li class="{{$visitor->symptom->q2 == 'true' ? '' : 'hidden'}}">Been in close proximity to anyone tested positive for COVID-19.</li>
                                                <li class="{{$visitor->symptom->q3 == 'true' ? '' : 'hidden'}}">Been tested for COVID-19 and are waiting for the test results.</li>
                                            </ul>
                                            @endif
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"  onclick="toggleNavbar('visitor{{$visitor->id}}')">
                                        Close
                                        </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="px-5 py-5 bg-white border-t">
                        
                    </div>
                </div>
            </div>

    </div>

</div>
</div>
