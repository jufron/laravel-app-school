<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', "SMK") }} | {{ $title ?? 'title' }}</title>

  <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16">
  <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ asset('favicon 48.ico') }}" sizes="48x48">

  {{-- ? fontawesome --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

  {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-BHveXFar.css') }}"> --}}

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{ $headerOptional ?? null }}

</head>
<body
  x-data="{
    'darkMode': false,
    'loaded': true,
    modalLogoutIsOpen: false,
  }"
  x-init="
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))
  "
  :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
>
  {{-- todo loader --}}
  <x-preloader />
  {{-- end todo loader --}}

  {{-- todo content --}}
  {{ $content }}
  {{-- end todo content --}}

  {{-- ? modal logout --}}
  @auth
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
  @endauth

  {{-- <script src="{{ asset('build/assets/app-CAl-FM9C.js') }}"></script> --}}

  {{-- ? fontawesome --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  {{-- ? your script --}}
  {{ $footerOptional ?? null }}
</body>
</html>
