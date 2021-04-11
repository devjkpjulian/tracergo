<x-guest-layout>
<div class="bg-gradient-to-r from-indigo-900 via-indigo-700 to-indigo-500">
    <div class="px-4 py-2">
      <div class="md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between">
        <div class="flex items-center justify-between">
          <a href="{{url('/')}}" class="inline-block py-2 text-xl font-bold text-white"><img class="w-auto h-20" src="{{asset('tg7.png')}}" alt=""></a>
          <button type="button" class="inline-block cursor-pointer md:hidden" onclick="toggleNavbar('sm-nav')">
            <div class="w-8 mb-2 bg-gray-400" style="height: 2px;"></div>
            <div class="w-8 mb-2 bg-gray-400" style="height: 2px;"></div>
            <div class="w-8 bg-gray-400" style="height: 2px;"></div>
          </button>
        </div>
        
        <div>
          <div class="hidden md:block">
            <a href="{{url('/')}}#about" class="inline-block py-1 mx-2 font-extrabold text-white hover:text-pink-400 md:py-4">Product</a>
            <a href="{{url('/')}}#features" class="inline-block py-1 mx-2 font-extrabold text-white hover:text-pink-400 text-white0 md:py-4">Features</a>
            <a href="{{url('/')}}#covid19" class="inline-block py-1 mx-2 font-extrabold text-white hover:text-pink-400 md:py-4">COVID-19</a>
            <a href="{{url('/')}}#contact" class="inline-block py-1 mx-2 font-extrabold text-white hover:text-pink-400 md:py-4">Support</a>
          </div>
        </div>
        <div class="hidden md:block">
        @auth
          <a href="{{route('dashboard')}}" class="inline-block px-4 py-2 font-extrabold text-indigo-600 bg-white rounded-lg hover:text-white hover:bg-pink-500">Dashboard</a>
        @else
          <a href="{{route('login')}}" class="inline-block py-1 mr-6 font-extrabold text-white md:py-4 hover:text-pink-400">Sign In</a>
          <a href="{{route('register')}}" class="inline-block px-4 py-2 font-extrabold text-indigo-600 bg-white rounded-lg hover:text-white hover:bg-pink-500">Sign Up</a>
        @endauth
        </div>
      </div>
    </div>

    <div id="sm-nav" class="absolute inset-x-0 top-0 z-50 hidden p-2 transition origin-top-right transform md:hidden">
      <div class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50">
        <div class="px-5 pt-5 pb-6">
          <div class="flex items-center justify-between">
            <div>
              <img class="w-auto h-24" src="{{asset('tg3.png')}}">
            </div>
            <div class="-mr-2">
              <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"  onclick="toggleNavbar('sm-nav')">
                <span class="sr-only">Close menu</span>
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="mt-6">
            <nav class="grid gap-y-8">
              <a href="{{url('/')}}#about" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                  <i class="text-indigo-600 fas fa-box"></i>
                <span class="ml-3 text-base font-medium text-gray-900">
                  Product
                </span>
              </a>

              <a href="{{url('/')}}#features" target="_blank" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                  <i class="text-indigo-600 fas fa-cogs"></i>
                <span class="ml-3 text-base font-medium text-gray-900">
                  Features
                </span>
              </a>

              <a href="{{url('/')}}#covid19" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
              <i class="text-indigo-600 fas fa-virus"></i>
                <span class="ml-3 text-base font-medium text-gray-900">
                  COVID-19
                </span>
              </a>

              <a href="{{url('/')}}#contact" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                  <i class="text-indigo-600 fas fa-phone-square-alt"></i>
                <span class="ml-3 text-base font-medium text-gray-900">
                  Support
                </span>
              </a>
            </nav>
          </div>
        </div>
        <div class="px-5 py-6 space-y-6">
          <div>
          @auth
            <a href="{{route('dashboard')}}" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
              Dashboard
            </a>
          @else
            <a href="{{route('register')}}" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
              Sign up
            </a>
            <p class="mt-6 text-base font-medium text-center text-gray-500">
              Existing client?
              <a href="{{route('login')}}" class="text-indigo-600 hover:text-indigo-500">
                Sign in
              </a>
            </p>
          @endauth
          </div>
        </div>
      </div>
    </div>

    <div class="bg-gradient-to-r from-indigo-900 via-indigo-700 to-indigo-500 md:overflow-hidden">
      <div class="px-6 py-6 md:pl-10 lg:pl-10">
        <div class="md:max-w-6xl md:mx-auto">
          <div class="md:flex md:flex-wrap">
            <div class="text-center md:w-1/2 md:text-left md:pt-10">
              <h1 class="mb-4 text-2xl font-bold leading-tight text-white md:text-5xl">
                <span class="text-pink-500">COVID-19</span> Contact Tracing Application
              </h1>

              <p class="text-indigo-200 md:text-xl md:pr-40">
                Let us help you stop the spread of COVID-19 by subscribing to TracerGo, our simple yet effective contact tracing application.
              </p>

              <a href="#about" class="inline-block px-8 py-3 mt-6 mb-12 text-indigo-600 bg-white rounded-lg shadow hover:text-white md:mb-0 md:mt-10 hover:bg-pink-500">Know More</a>
            </div>
            <div class="relative md:w-1/2">
              <div class="hidden md:block">
                <div class="absolute bottom-0 left-0 w-40 px-6 py-8 -mb-40 -ml-24 bg-white rounded-lg shadow-lg" style="transform: rotate(-8deg);">
                  
                  <i class="flex items-center justify-center py-10 text-6xl text-center text-pink-900 fas fa-chart-line"></i>

                  <div class="text-center text-gray-800">
                    Visual Reports
                  </div>
                </div>

                <div class="absolute bottom-0 left-0 w-40 px-6 py-8 mb-16 ml-24 bg-white rounded-lg shadow-lg" style="transform: rotate(-8deg); z-index: 2;">
                  
                  <i class="flex items-center justify-center py-10 text-6xl text-center text-pink-900 fas fa-clipboard-list"></i>

                  <div class="text-center text-gray-800">
                    Online Forms
                  </div>
                </div>

                <div class="absolute bottom-0 left-0 w-48 px-10 py-8 ml-32 bg-white rounded-lg shadow-lg" style="transform: rotate(-8deg); z-index: 2; margin-bottom: -220px;">
                  
                  <i class="flex items-center justify-center py-10 text-6xl text-center text-pink-900 fas fa-qrcode"></i>

                  <div class="text-center text-gray-800">
                    QR Code
                  </div>
                </div>

                <div class="absolute top-0 right-0 flex w-full mt-2 overflow-hidden bg-white rounded-lg shadow-lg" style="transform: rotate(-8deg); margin-right: -250px; z-index: 1;">
                  <div class="w-32 bg-gray-200" style="height: 560px;"></div>
                  <div class="flex-1 p-6">
                    <h2 class="mb-3 text-lg font-bold text-pink-900">
                      Live Dashboard
                    </h2>
                    <div class="flex mb-5">
                      <div class="w-16 px-4 py-2 mr-2 bg-gray-100 rounded-full">
                        <div class="p-1 bg-gray-300 rounded-full"></div>
                      </div>
                      <div class="w-16 px-4 py-2 mr-2 bg-gray-100 rounded-full">
                        <div class="p-1 bg-gray-300 rounded-full"></div>
                      </div>
                      <div class="w-16 px-4 py-2 mr-2 bg-gray-100 rounded-full">
                        <div class="p-1 bg-gray-300 rounded-full"></div>
                      </div>
                      <div class="w-16 px-4 py-2 bg-gray-100 rounded-full">
                        <div class="p-1 bg-gray-300 rounded-full"></div>
                      </div>
                    </div>

                    <div class="flex flex-wrap mb-5 -mx-4">
                      <div class="w-1/3 px-4">
                        <div class="h-40 p-6 bg-white rounded-lg shadow-lg">
                          <div class="w-16 h-16 mb-6 bg-gray-200 rounded-full"></div>
                          <div class="w-16 h-2 mb-2 bg-gray-200 rounded-full"></div>
                          <div class="w-10 h-2 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-4">
                        <div class="h-40 p-6 bg-white rounded-lg shadow-lg">
                          <div class="w-16 h-16 mb-6 bg-gray-200 rounded-full"></div>
                          <div class="w-16 h-2 mb-2 bg-gray-200 rounded-full"></div>
                          <div class="w-10 h-2 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-4">
                        <div class="h-40 p-6 bg-white rounded-lg shadow-lg">
                          <div class="w-16 h-16 mb-6 bg-gray-200 rounded-full"></div>
                          <div class="w-16 h-2 mb-2 bg-gray-200 rounded-full"></div>
                          <div class="w-10 h-2 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                    </div>

                    <h2 class="mb-3 text-lg font-bold text-pink-900">
                      Digital Logbook
                    </h2>

                    <div class="flex flex-wrap items-center justify-between w-full py-3 border-b-2 border-gray-100">
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="w-8 h-8 mr-4 bg-gray-200 rounded"></div>
                          <div>
                            <div class="w-16 h-2 mb-1 bg-gray-200 rounded-full"></div>
                            <div class="w-10 h-2 bg-gray-100 rounded-full"></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div class="w-16 px-4 py-2 mx-auto bg-green-100 rounded-full">
                          <div class="p-1 bg-green-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-10 h-2 mx-auto bg-gray-100 rounded-full"
                        ></div>
                      </div>
                    </div>

                    <div class="flex flex-wrap items-center justify-between py-3 border-b-2 border-gray-100">
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="w-8 h-8 mr-4 bg-gray-200 rounded"></div>
                          <div>
                            <div
                              class="w-16 h-2 mb-1 bg-gray-200 rounded-full"
                            ></div>
                            <div
                              class="w-10 h-2 bg-gray-100 rounded-full"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div class="w-16 px-4 py-2 mx-auto bg-orange-100 rounded-full">
                          <div class="p-1 bg-orange-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-16 h-2 mx-auto bg-gray-100 rounded-full"
                        ></div>
                      </div>
                    </div>

                    <div class="flex flex-wrap items-center justify-between py-3 border-b-2 border-gray-100">
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="w-8 h-8 mr-4 bg-gray-200 rounded"></div>
                          <div>
                            <div class="w-16 h-2 mb-1 bg-gray-200 rounded-full"></div>
                            <div class="w-10 h-2 bg-gray-100 rounded-full"></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div class="w-16 px-4 py-2 mx-auto bg-blue-100 rounded-full">
                          <div class="p-1 bg-blue-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-8 h-2 mx-auto bg-gray-100 rounded-full"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="absolute bottom-0 left-0 w-full ml-1"style="transform: rotate(-8deg); z-index: 1; margin-bottom: -360px;">
                  <div class="w-48 h-48 grid--gray"></div>
                </div>
              </div>

              <div class="absolute top-0 right-0 flex w-full overflow-hidden bg-white rounded-lg shadow md:hidden">
                <div class="absolute top-0 left-0 right-0 flex items-center h-4 bg-gray-200 rounded-t-lg">
                  <span class="inline-block w-2 h-2 ml-2 mr-1 bg-red-500 rounded-full"></span>
                  <span class="inline-block w-2 h-2 mr-1 bg-orange-400 rounded-full"></span>
                  <span class="inline-block w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                </div>
                <div class="w-32 px-2 py-8 bg-gray-100" style="height: 340px;">
                  <div class="w-16 h-2 mb-4 bg-gray-300 rounded-full"></div>
                  <div class="flex items-center mb-4">
                    <div class="flex-shrink-0 w-5 h-5 mr-3 bg-gray-300 rounded-full"></div>
                    <div>
                      <div class="w-10 h-2 bg-gray-300 rounded-full"></div>
                    </div>
                  </div>

                  <div class="w-16 h-2 mb-2 bg-gray-200 rounded-full"></div>
                  <div class="w-10 h-2 mb-2 bg-gray-200 rounded-full"></div>
                  <div class="w-20 h-2 mb-2 bg-gray-200 rounded-full"></div>
                  <div class="w-6 h-2 mb-2 bg-gray-200 rounded-full"></div>
                  <div class="w-16 h-2 mb-2 bg-gray-200 rounded-full"></div>
                  <div class="w-10 h-2 mb-2 bg-gray-200 rounded-full"></div>
                  <div class="w-20 h-2 mb-2 bg-gray-200 rounded-full"></div>
                  <div class="w-6 h-2 mb-2 bg-gray-200 rounded-full"></div>
                </div>
                <div class="flex-1 px-4 py-8">
                  <h2 class="mb-1 text-xs font-bold text-pink-900">
                    Live Dashboard
                  </h2>
                  <div class="flex mb-5">
                    <div class="w-12 p-2 mr-2 bg-gray-100 rounded-full"></div>
                    <div class="w-12 p-2 mr-2 bg-gray-100 rounded-full"></div>
                    <div class="w-12 p-2 mr-2 bg-gray-100 rounded-full"></div>
                    <div class="w-12 p-2 mr-2 bg-gray-100 rounded-full"></div>
                  </div>

                  <div class="flex flex-wrap mb-5 -mx-2">
                    <div class="w-1/3 px-2">
                      <div class="p-3 bg-white rounded-lg shadow">
                        <div class="w-6 h-6 mb-2 bg-gray-200 rounded-full"></div>
                        <div class="w-10 h-2 mb-1 bg-gray-200 rounded-full"></div>
                        <div class="w-6 h-2 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="p-3 bg-white rounded-lg shadow">
                        <div class="w-6 h-6 mb-2 bg-gray-200 rounded-full"></div>
                        <div class="w-10 h-2 mb-1 bg-gray-200 rounded-full"></div>
                        <div class="w-6 h-2 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="p-3 bg-white rounded-lg shadow">
                        <div class="w-6 h-6 mb-2 bg-gray-200 rounded-full"></div>
                        <div class="w-10 h-2 mb-1 bg-gray-200 rounded-full"></div>
                        <div class="w-6 h-2 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                  </div>

                  <h2 class="mb-1 text-xs font-bold text-pink-900">
                    Digital Logbook
                  </h2>

                  <div class="flex flex-wrap items-center justify-between w-full py-3 border-b-2 border-gray-100">
                    <div class="w-1/3">
                      <div class="flex">
                        <div class="flex-shrink-0 w-5 h-5 mr-3 bg-gray-200 rounded-full"></div>
                        <div>
                          <div class="w-16 h-2 mb-1 bg-gray-200 rounded-full"></div>
                          <div class="w-10 h-2 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div class="w-16 px-4 py-2 mx-auto bg-green-100 rounded-full">
                        <div class="p-1 bg-green-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div class="w-10 h-2 mx-auto bg-gray-100 rounded-full"></div>
                    </div>
                  </div>

                  <div class="flex flex-wrap items-center justify-between py-3">
                    <div class="w-1/3">
                      <div class="flex">
                        <div class="flex-shrink-0 w-5 h-5 mr-3 bg-gray-200 rounded-full"></div>
                        <div>
                          <div class="w-16 h-2 mb-1 bg-gray-200 rounded-full"></div>
                          <div class="w-10 h-2 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div class="w-16 px-4 py-2 mx-auto bg-orange-100 rounded-full">
                        <div class="p-1 bg-orange-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div class="w-16 h-2 mx-auto bg-gray-100 rounded-full"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="absolute bottom-0 right-0 w-40 px-10 py-6 mr-3 bg-white rounded-lg shadow-lg md:hidden" style="z-index: 2; margin-bottom: -380px;">
                <i class="flex items-center justify-center py-4 text-6xl text-center text-pink-900 fas fa-qrcode"></i>

                <div class="text-sm text-center text-gray-800">
                  Contact Tracer
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg class="hidden text-white fill-current lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill-opacity="1" d="M0,224L1440,32L1440,320L0,320Z"></path>
      </svg>

      <section id="about" class="bg-white pt-96 md:pt-40 md:pb-40 lg:pt-24 lg:pb-48">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base font-semibold tracking-wide text-indigo-600 uppercase">About Our Product</h2>
            <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">
              What is TRACER<span class="text-indigo-600">GO</span>.PH ?
            </p>
            <p class="max-w-5xl mt-4 text-xl text-justify text-gray-500 lg:mx-auto lg:text-center">
            Our product is an online application or service that allows you to trace your customers or visitors by gathering their health information and other details to help prevent the spread of COVID-19 via contact tracing.
            </p>
          </div>

          <div class="flex items-center justify-center py-10 text-center">
              <a href="{{route('register')}}" class="px-6 py-3 my-1 mr-1 text-sm font-bold text-white uppercase bg-indigo-600 rounded shadow outline-none active:bg-pink-700 hover:shadow-lg focus:outline-none">
                REGISTER NOW
              </a>
          </div>

          <div class="py-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
              
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-500 rounded-md">
                    <h2 class="text-xl font-extrabold tracking-wide text-white uppercase">S</h2>
                  </div>
                </div>
                <div class="ml-4">
                  <dt class="text-lg font-medium leading-6 text-gray-900">
                    Simple
                  </dt>
                  <dd class="mt-2 text-base text-gray-500">
                    We provide a simple and user-friendly design for an application to solve a modern day problem brought by the pandemic.
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-500 rounded-md">
                    <h2 class="text-xl font-extrabold tracking-wide text-white uppercase">A</h2>
                  </div>
                </div>
                <div class="ml-4">
                  <dt class="text-lg font-medium leading-6 text-gray-900">
                    Alternative
                  </dt>
                  <dd class="mt-2 text-base text-gray-500">
                    Our product is an alternative choice for the community, businesses or establishments who needs to utilize a digital contact tracing application.
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-500 rounded-md">
                    <h2 class="text-xl font-extrabold tracking-wide text-white uppercase">F</h2>
                  </div>
                </div>
                <div class="ml-4">
                  <dt class="text-lg font-medium leading-6 text-gray-900">
                    Flexible
                  </dt>
                  <dd class="mt-2 text-base text-gray-500">
                    We offer a flexible design layout for our application that would let our customers be able to customize the look and feel of the application.
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-500 rounded-md">
                    <h2 class="text-xl font-extrabold tracking-wide text-white uppercase">E</h2>
                  </div>
                </div>
                <div class="ml-4">
                  <dt class="text-lg font-medium leading-6 text-gray-900">
                    Efficient
                  </dt>
                  <dd class="mt-2 text-base text-gray-500">
                    Our goal is to help your business minimize the spread of the COVID-19 Virus by providing an effective contact tracing application.
                  </dd>
                </div>
              </div>

            </dl>
          </div>
        </div>
      </section>

      <section id="features" class="py-10 bg-white lg:py-40">
        <div class="container px-4 mx-auto">
          <div class="flex flex-wrap items-center">
            <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
              <div class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-indigo-600 bg-indigo-200 rounded-full shadow-lg">
                <i class="text-xl fas fa-rocket"></i>
              </div>
              <h3 class="mb-2 text-3xl font-semibold leading-normal">
                It's SAFE to work with us!
              </h3>
              <p class="mt-4 mb-4 text-lg font-light leading-relaxed text-justify text-gray-700">
                This application comes with the most simple function and that is to help businesses and establishments provide a faster way to follow protocol when it comes to contact tracing to detect and prevent the spread of COVID-19.
              </p>
              <p class="mt-0 mb-4 text-lg font-light leading-relaxed text-justify text-gray-700">
                By subscribing to our application, users will provided with a unique QR code, the said QR code can be scanned and thus start the process of data gathering for contact tracing.
              </p>
              <a href="{{route('demo')}}" class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none">
                Check Live Demo
              </a>
            </div>
            <div class="w-full px-4 pt-10 ml-auto mr-auto lg:py-0 md:w-4/12">
              <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white bg-indigo-600 rounded-lg shadow-lg">
                <img src="{{asset('mockup.png')}}" class="w-full mt-10 align-middle"/>
                <blockquote class="relative p-8 mb-4">
                  <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 block w-full" style="height: 95px; top: -94px;">
                    <polygon points="-30,95 583,95 583,65" class="text-indigo-600 fill-current"></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    SAFE Features
                  </h4>
                  <p class="mt-2 font-light text-white text-md">
                    TracerGO is a Simple, Alternative, Flexible and Effective Covid Tracing Application.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="covid19" class="py-10 bg-white lg:py-40">
        <div class="container px-4 mx-auto">
          <div class="flex flex-wrap items-center">
            <div class="w-full px-4 py-10 ml-auto mr-auto md:w-1/2">
                <div class="flex h-full max-w-full rounded-lg shadow-lg">
                    <div class="w-full h-full">
                        <div class="world-map"></div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 ml-auto mr-auto md:w-1/2">
              <div class="md:pr-12">
                <div class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-pink-600 bg-pink-300 rounded-full shadow-lg">
                  <i class="text-xl fas fa-virus"></i>
                </div>
                <h3 class="text-3xl font-semibold">What is COVID-19?</h3>
                <p class="mt-4 text-lg leading-relaxed text-justify text-gray-600">
                  COVID-19 is the infectious disease caused by the most recently discovered coronavirus, a disease that has been documented that may cause respiratory infections.
                </p>
                @livewire('covid')
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="py-10 bg-white">
        <div class="container px-4 mx-auto">
          <div class="flex flex-wrap justify-center py-24">
            <div class="w-full px-4 lg:w-6/12">
              <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 rounded-lg shadow-lg">
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Do you have any questions?</h4>
                  <p class="mt-1 mb-4 leading-relaxed text-gray-600">
                    Complete this form and we'll be happy to answer all of your inquiry.
                  </p>
                  @livewire('contact-form')
                </div>
              </div>
              <footer class="relative pt-4">
              <hr class="border-gray-400" />
              <div class="flex flex-wrap items-center justify-center">
                <div class="w-full px-4 mx-auto text-center md:w-4/12">
                  <div class="py-1 text-sm font-semibold text-gray-900">
                    © TRACER<span class="text-indigo-600">GO</span>.PH Powered by <a class="text-pink-600" href="http://icreate.live">iCreate Live</a>
                  </div>
                </div>
              </div>
            </footer>
            </div>
          </div>
        </div>
      </section>

    </div>

</div>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution=setup_tool page_id="103376738436931" theme_color="#E84A99" logged_in_greeting="Welcome to TracerGo, how can we help you?" logged_out_greeting="Welcome to TracerGo, how can we help you?"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v9.0'
      });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{{asset('js/worldmap.js')}}"></script>
</x-guest-layout>