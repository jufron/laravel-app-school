<div class="w-full mx-auto">
  <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative h-100 md:h-115 lg:h-screen" data-carousel-inner>

          {{-- ? Item  --}}
          @foreach ($banner as $bnr)
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img
                src="{{ asset("storage/$bnr->image") }}"
                class="object-cover w-full h-full"
                alt="Slide 1"
                loading="lazy"
                >
              <div
                x-bind:class="{ 'opacity-50': darkMode, ' opacity-30': !darkMode }"
                class="absolute inset-0 bg-black opacity-30"
                >
              </div>
              <span class="absolute left-1/2 top-[30%] transform -translate-x-1/2">
                <img src="{{ asset('images/f12fe4e8-90d0-4815-ab6d-a45c8eba04eb-modified.png') }}" alt="brand logo" class="w-10 md:w-20 mx-auto mb-4" loading="lazy" />
                <p class="text-white sm:mb-1 md:mb-5 font-semibold text-center text-md md:text-2xl lg:text-3xl">Selamat Datang</p>
                <p class="text-white font-semibold text-center text-2xl md:text-4xl lg:text-5xl">SMK UYELINDO KUPANG</p>
              </span>
          </div>
          @endforeach
          {{-- ? Item  --}}
      </div>
      <!-- Slider indicators -->
      <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
          <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
      </div>
      <!-- Slider controls -->
      <button type="button"
          class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
          data-carousel-prev>
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
      </button>
      <button type="button"
          class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
          data-carousel-next>
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
      </button>
  </div>

  {{-- <p class="mt-5 text-center text-gray-700 dark:text-gray-300">
      This carousel slider component is part of a larger, open-source library of Tailwind CSS components. Learn more
      by going to the official
      <a class="text-blue-600 hover:underline" href="https://flowbite.com/docs/getting-started/introduction/"
          target="_blank">
          Flowbite Documentation
      </a>.
  </p> --}}
  <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>
