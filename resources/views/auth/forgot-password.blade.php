<x-partialsFrond.layout title="forgot password">
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
          <div
            x-data="{
              timeLimit: false,
              countdown: 60,
              timer: false
            }"
            class="w-full h-full py-4 px-10 sm:p-12.5 xl:p-17.5">
            <h2 class="mb-9 mt-15 xl:mt-0 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
              Forget Password
            </h2>

            <p class="w-100 my-4 text-md">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </p>

            <x-auth.session-status-success
              state="timeLimit"
            />
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
              <form method="post" action="{{ route('password.email') }}">
                @csrf
                <x-auth.input
                  label="Email"
                  type="email"
                  placeholder="Enter your email"
                  name="email"
                />
                <x-auth.button-submit label="Email Password Reset Link" />
              </form>
            </template>

          </div>
        </div>
      </div>
    </div>

  </x-slot>
</x-partialsFrond.layout>
