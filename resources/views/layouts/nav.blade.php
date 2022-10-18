<nav class="bg-white border-b border-gray-100 py-2 shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
    <div class="pt-2">
      <img class="object-contain h-20 w-20" src="{{ url('/images/logo.jpg') }}" alt="Company Logo" />
    </div>

    <div class="hidden md:flex space-x-3 font-bold text-xl">
      <a href="{{ route('dashboard.index') }}"
        class="inline-flex w-full justify-center rounded-none border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100 {{ Route::is('dashboard*') ? 'bg-blue-500 text-gray-100' : '' }}">Dashboard</a>
      <a href="{{ route('map.index') }}"
        class="inline-flex w-full justify-center rounded-none border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100 {{ Route::is('map*') ? 'bg-blue-500 text-gray-100' : '' }}">Map</a>
      <a href="{{ route('database.index') }}"
        class="inline-flex w-full justify-center rounded-none border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100 {{ Route::is('database*') ? 'bg-blue-500 text-gray-100' : '' }}">Database</a>
      <a href="{{ route('settings.index') }}"
        class="inline-flex w-full justify-center rounded-none border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100 {{ Route::is('settings*') ? 'bg-blue-500 text-gray-100' : '' }}">Settings</a>
    </div>


    <div class="hidden md:flex space-x-3 font-bold text-xl font-montserrat">
      <div class="flex justify-center z-50">
        <div class="dropdown relative">
          <button
            class="
              inline-flex 
              w-full 
              justify-center 
              rounded-none 
              border 
              border-gray-300 
              bg-white px-4 
              py-3 
              text-sm 
              font-medium 
              text-gray-900 
              shadow-sm 
              hover:bg-gray-50 
              focus:bg-purple-500 
              focus:text-gray-100
              focus:outline-none 
              focus:ring-2 
              focus:ring-indigo-500 
              focus:ring-offset-2 
              focus:ring-offset-gray-100"
            type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
            Account
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
              aria-hidden="true">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <ul
            class="
              dropdown-menu
              min-w-max
              absolute
              hidden
              bg-white
              text-base
              z-50
              float-left
              py-2
              list-none
              text-left
              rounded-lg
              shadow-lg
              mt-1
              hidden
              m-0
              bg-clip-padding
              border-none
            "
            aria-labelledby="dropdownMenuButton4">
            <li>
              <div class="py-3 px-4 text-sm text-gray-900 dark:text-white border-b border-gray-100">
                <div>{{ Auth::user()->name }}</div>
                <div class="font-medium truncate">{{ Auth::user()->email }}</div>
              </div>
            </li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                  onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('Log Out') }}
                </x-responsive-nav-link>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</nav>
