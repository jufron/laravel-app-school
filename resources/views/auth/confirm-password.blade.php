{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-partialsFrond.layout title="reset password">
  <x-slot:content>
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
      <div class="flex flex-wrap items-center">
        <div class="hidden w-full xl:block xl:w-1/2">
          <div class="px-26 py-17.5 text-center">
            <a class="mb-5.5 inline-block" href="index.html">
              <img class="hidden dark:block" src="{{ asset('images/logo/logo.svg') }}" alt="Logo">
              <img class="dark:hidden" src="{{ asset('images/logo/logo-dark.svg') }}" alt="Logo">
            </a>

            <p class="font-medium 2xl:px-20">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit
              suspendisse.
            </p>

            <span class="mt-15 inline-block">
              <img src="{{ asset('images/illustration/illustration-03.svg') }}" alt="illustration">
            </span>
          </div>
        </div>
        <div class="w-full h-full border-stroke dark:border-strokedark xl:w-1/2 xl:border-l-2">
          <div class="w-full h-full py-4 px-10 sm:p-12.5 xl:p-17.5">
            <h2 class="mb-9 mt-15 xl:mt-0 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
              Confirm Password
            </h2>

            <p class="w-100 my-4 text-md">
              This is a secure area of the application. Please confirm your password before continuing.
            </p>

            <form method="post" action="{{ route('password.confirm')}}">
              @csrf

              <x-auth.input
                label="Password"
                type="password"
                placeholder="Enter your Current Password"
                name="password"
              />

              <x-auth.button-submit label="Confirm" />

            </form>
          </div>
        </div>
      </div>
    </div>
  </x-slot>
</x-partialsFrond.layout>
