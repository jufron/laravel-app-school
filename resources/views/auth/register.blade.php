<x-partialsFrond.layout title="registrasi">
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
              Sign Up
            </h2>

            <form method="post" action="{{ route('register') }}">
              @csrf
              <x-auth.input
                label="Username"
                type="text"
                placeholder="Enter your Username"
                name="name"
              />
              <x-auth.input
                label="Email"
                type="email"
                placeholder="Enter your Email"
                name="email"
              />
              <x-auth.input
                label="Password"
                type="password"
                placeholder="Enter your Password"
                name="password"
              />
              <x-auth.input
                label="Password Confirmation"
                type="password"
                placeholder="Enter your Password Confirmation"
                name="password_confirmation"
              />

              <x-auth.button-submit label="Sign Up" />

              <x-auth.button-with-google />

              <div class="mt-6 text-center">
                <p class="font-medium">
                  You have account?
                  <a href="{{ route('login') }}" class="text-primary">Sign In</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </x-slot>
</x-partialsFrond.layout>
