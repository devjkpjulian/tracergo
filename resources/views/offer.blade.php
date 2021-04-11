<div id="offer" class="bg-indigo-600">
  <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="flex flex-wrap items-center justify-between">
      <div class="flex items-center flex-1 w-0">
        <span class="flex p-2 bg-indigo-800 rounded-lg">
          <!-- Heroicon name: speakerphone -->
          <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
          </svg>
        </span>
        <p class="ml-3 font-medium text-white truncate">
          @php
            $date = date_create(auth()->user()->created_at);
            date_add($date, date_interval_create_from_date_string('30 days'));
          @endphp
          <span class="hidden md:inline lg:inline">
            Your 30 days TracerGo trial account will end on {{date_format($date, 'F j, Y')}}, to enjoy all features and future updates please subscribe!
          </span>
          <span class="inline md:hidden lg:hidden">
            Trial will end on {{date_format($date, 'F j, Y')}}
          </span>
        </p>
      </div>
      <div class="flex-shrink-0 order-3 w-full mt-2 sm:order-2 sm:mt-0 sm:w-auto">
        <a href="{{route('subscribe')}}" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-indigo-600 bg-white border border-transparent rounded-md shadow-sm hover:bg-indigo-50">
          Subscribe Now
        </a>
      </div>
      <div class="flex-shrink-0 order-2 sm:order-3 sm:ml-3">
        <button type="button" class="flex p-2 -mr-1 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2" onclick="toggleNavbar('offer')">
          <span class="sr-only">Dismiss</span>
          <!-- Heroicon name: x -->
          <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>