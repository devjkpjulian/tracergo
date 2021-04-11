<x-app-layout>
@auth
<div class="lg:py-2">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            
        <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
        
            <hr class="mx-4 my-8 border-b-2 border-gray-400">

            <form method="post" action="{{route('users.search')}}">
            @csrf
            <div class="relative px-4 pt-2 mx-auto text-gray-600">
                <input class="w-full h-10 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none" type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute top-0 right-0 mt-5 mr-8">
                    <svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
                </div>
            </form>

            <hr class="mx-4 my-8 border-b-2 border-gray-400">

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
                                                    Email
                                                </th>
                                                <th class="px-2 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                                    TYPE
                                                </th>
                                                <th class="px-2 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                                    Options
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $user)
                                            <tr class="bg-white {{$user->trial == 'true' ? 'text-red-600' : 'text-gray-900'}}">
                                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                                    <p class="whitespace-no-wrap">{{$user->name}}</p>
                                                </td>
                                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                                    <p class="whitespace-no-wrap">{{$user->email}}</p>
                                                </td>
                                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                                    <p class="whitespace-no-wrap">{{$user->trial == 'true' ? 'TRIAL' : 'PRO'}}</p>
                                                </td>
                                                <td class="px-2 py-2 text-sm border-b border-gray-200">
                                                <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                    <button type="submit" class="{{$user->id < 4 ? 'hidden' :''}}">
                                                        <p class="text-xs whitespace-no-wrap"><i class="text-red-600 fa fa-trash"></i> DELETE</p>
                                                    </button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="px-5 py-5 bg-white border-t">
                                        {{$users->links()}}
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
                
                <hr class="mx-4 my-8 border-b-2 border-gray-400">
            </div>

        </div>
    </div>
</div>
@endauth
</x-app-layout>