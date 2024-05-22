<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Dashboard | {{ $title }}
    </title>

    {{-- ? link fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-DZ7ZCe2E.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-sc0KGFtf.css') }}">

    <script src="{{ asset('build/assets/app-BrdtU7_F.js') }}" defer></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- ? style optional --}}
    {{ $headerOptional ?? null }}
  </head>

  <body
    x-data="{
      page: '{{ $pageState }}',
      selected: $persist('{{ $pageState }}'),
      modalLogoutIsOpen : false,
      'loaded': true,
      'darkMode': false,
      'stickyMenu': false,
      'sidebarToggle': false,
      'scrollTop': false,
      offlineState: false
    }"
    x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))

          const handleNetworkChange = () => {
            if (!navigator.onLine) {
              offlineState = true;
            } else {
              offlineState = false;
            }
          };

          handleNetworkChange();

        "
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >

  {{-- todo | prealoader --}}
    <x-preloader />
    {{-- todo | end prealoader --}}

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      {{-- todo | sidebar --}}
      <x-partials.sidebar />
      {{-- todo | end sidebar --}}

      {{-- * content area start --}}
      <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
      >
        {{-- todo | header --}}
        <x-partials.header />
        {{-- todo | end header --}}

        {{-- todo | main content --}}
        <main>
          {{ $slot }}
        </main>
        {{-- todo | end main content --}}
      </div>
      {{-- * content area end --}}

    </div>
    <!-- ===== Page Wrapper End ===== -->

    {{-- ? modal logout --}}
    <x-small.modal.modal state="modalLogoutIsOpen" >
      <x-slot:modalContent>
        <form method="post" action="{{ route('logout') }}">
          @csrf
          <div class="bg-white dark:bg-slate-900 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center sm:mx-0 sm:h-10 sm:w-10">
                <div class="w-6 h-6">
                  <i class="fa-solid fa-right-from-bracket fa-xl"></i>
                </div>
              </div>
              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Logout</h3>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">Before you proceed, please confirm if you would like to log out. Logging out will terminate your current session and require you to sign in again the next time you access the platform.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            <button type="submit" class="inline-flex w-full justify-center rounded-md bg-red-600 dark:bg-red-800 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-500 dark:hover:bg-red-700 sm:ml-3 sm:w-auto">Log Out</button>
            <button @click="modalLogoutIsOpen = false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-slate-700 px-6 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
          </div>
        </form>
      </x-slot>
    </x-small.modal.modal>
    {{-- ? end modal logout --}}

    {{-- ? modal offline  --}}
    <x-small.modal.modal-toast
      state="offlineState"
      modalPositionX="left"
      modalPositionY="bottom"
      >
        <x-slot:modalContent>
          <div class="flex items-center justify-center">
             <div class="w-10 h-6">
                <i class="fa-solid fa-wifi fa-xl"></i>
              </div>
            <p class="text-xl">Anda sedang offline!</p>
          </div>
        </x-slot>
    </x-small.modal.modal-toast>

    {{-- ? script fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- ? script optional --}}
    {{ $footerOption ?? null }}
  </body>
</html>
