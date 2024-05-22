<x-partialsFrond.layout title="verify password">
  <x-slot:content>
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
      <div class="flex flex-wrap items-center">
        <div class="hidden w-full xl:block xl:w-1/2">
          <div class="px-26 py-17.5 text-center">
            <a class="mb-5.5 inline-block" href="#">
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
        <div
          x-data="{
            timeLimit: false,
            countdown: 60,
            timer: null
          }"
          class="w-full h-full border-stroke dark:border-strokedark xl:w-1/2 xl:border-l-2">
          <div class="w-full h-full py-4 px-10 sm:p-12.5 xl:p-17.5">
            <h2 class="mb-9 mt-15 xl:mt-0 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
              Ferify Email
            </h2>

            <p class="w-100 my-4 text-md">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
            </p>

            @session('status')
              <div
                x-init="timeLimit = true"
                x-show="timeLimit"
                class="my-4 flex w-100 border-l-6 border-green-700 bg-green-500 bg-opacity-[15%] p-1 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 px-6 py-4 rounded-lg">
                <div class="w-full">
                  <p class="leading-relaxed text-sm text-[#72d44e]">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
                  </p>
                </div>
            </div>
            @endsession

            <x-auth.session-status-error />

            <template x-if="timeLimit">
              <h1
                class="text-center text-md w-100"
                x-init="
                  timer = setInterval(() => {
                    if (countdown <= 0) {
                      timeLimit = false;
                      clearInterval(timer);
                      countdown = 0;
                    }
                    countdown--;
                  }, 1000);
                "
                x-text="countdown >= 0 ? countdown + ' Second' : 0 + ' Second'"
              >
              </h1>
            </template>

            <template x-if="!timeLimit">
              <form method="post" action="{{ route('verification.send') }}">
                @csrf
                <button
                  type="submit"
                  class="mt-6 mb-5 w-100 rounded-lg border bg-primary border-primary p-4 font-medium text-white transition hover:bg-opacity-90"
                  x-bind:class="{ 'cursor-pointer': !timeLimit, 'cursor-not-allowed': timeLimit }"
                  x-bind:disabled="timeLimit"
                >
                  Resend Verification Email
                </button>
              </form>
            </template>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-auth.button-submit class="bg-red-700 border-none" label="Log Out" />
            </form>
          </div>
        </div>
      </div>
    </div>

  </x-slot>
</x-partialsFrond.layout>
