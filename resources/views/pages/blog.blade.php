<x-partialsFrond.layout title="blog">
  <x-slot:content>
    <x-small.navbar />

    <div class="dark:bg-slate-900">
      <div class="container px-4 m-auto">
        <h1 class="py-10 font-bold text-4xl">Blog</h1>

        <p class="text-lg font-semibold">Kategory :</p>
        {{-- kategory --}}
        <div class="flex mt-5 mb-10 gap-3 overflow-auto">
          <a href="" class="p-4 bg-slate-50 dark:bg-slate-800 rounded-2xl hover:bg-red-900 dark:hover:bg-slate-700 transition duration-400 text-slate-800 dark:text-slate-300 hover:text-white">Teknologi</a>
          <a href="" class="p-4 bg-slate-50 dark:bg-slate-800 rounded-2xl hover:bg-red-900 dark:hover:bg-slate-700 transition duration-440 text-slate-800 dark:text-slate-300 hover:text-white">Programing</a>
          <a href="" class="p-4 bg-slate-50 dark:bg-slate-800 rounded-2xl hover:bg-red-900 dark:hover:bg-slate-700 transition duration-440 text-slate-800 dark:text-slate-300 hover:text-white">Materi</a>
          <a href="" class="p-4 bg-slate-50 dark:bg-slate-800 rounded-2xl hover:bg-red-900 dark:hover:bg-slate-700 transition duration-440 text-slate-800 dark:text-slate-300 hover:text-white">Umum</a>
          <a href="" class="p-4 bg-slate-50 dark:bg-slate-800 rounded-2xl hover:bg-red-900 dark:hover:bg-slate-700 transition duration-440 text-slate-800 dark:text-slate-300 hover:text-white">Kegiatan</a>
          <a href="" class="p-4 bg-slate-50 dark:bg-slate-800 rounded-2xl hover:bg-red-900 dark:hover:bg-slate-700 transition duration-440 text-slate-800 dark:text-slate-300 hover:text-white">Design</a>
        </div>
        {{-- kategory --}}

        {{-- blog --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 gap-y-4 mb-10">

          <a href="" class="bg-slate-50 dark:bg-slate-800 rounded-3xl overflow-hidden group hover:bg-slate-100 transition duration-500">
            <div class="flex-shrink-0">
              <img class="w-full h-full object-cover bg-center bg-cover rounded-3xl" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="cover_blog" loading="lazy">
            </div>
            <div class="py-4 px-6">
              <div class="flex gap-x-3 justify-between items-center">
                <div class="flex items-center">
                  <img class="rounded-2xl w-10 h-10 object-cover bg-center bg-cover" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="avatar_image" loading="lazy">
                  <h5 class="text-sm ml-4">nama penulis</h5>
                </div>
                <div class="text-sm px-2 py-1 rounded-lg bg-red-900/80 dark:bg-slate-700 text-slate-300 group-hover:border-solid group-hover:bg-slate-100 dark:group-hover:bg-slate-700 group-hover:border-2 group-hover:border-red-900 dark:group-hover:border-slate-600 group-hover:text-red-900 dark:group-hover:text-slate-400 transition duration-500">Programming</div>
              </div>
              <h1 class="text-xl font-semibold my-3 group-hover:text-red-900 dark:group-hover:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. sequi?</h1>
              <p class="leading-6 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nostrum reprehenderit cumque adipisci quod officiis consequuntur
              </p>
              <p class="text-sm mt-3">1 Mount Ago</p>
            </div>
          </a>
          <a href="" class="bg-slate-50 dark:bg-slate-800 rounded-3xl overflow-hidden group hover:bg-slate-100 transition duration-500">
            <div class="flex-shrink-0">
              <img class="w-full h-full object-cover bg-center bg-cover rounded-3xl" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="cover_blog" loading="lazy">
            </div>
            <div class="py-4 px-6">
              <div class="flex gap-x-3 justify-between items-center">
                <div class="flex items-center">
                  <img class="rounded-2xl w-10 h-10 object-cover bg-center bg-cover" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="avatar_image" loading="lazy">
                  <h5 class="text-sm ml-4">nama penulis</h5>
                </div>
                <div class="text-sm px-2 py-1 rounded-lg bg-red-900/80 dark:bg-slate-700 text-slate-300 group-hover:border-solid group-hover:bg-slate-100 dark:group-hover:bg-slate-700 group-hover:border-2 group-hover:border-red-900 dark:group-hover:border-slate-600 group-hover:text-red-900 dark:group-hover:text-slate-400 transition duration-500">Programming</div>
              </div>
              <h1 class="text-xl font-semibold my-3 group-hover:text-red-900 dark:group-hover:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. sequi?</h1>
              <p class="leading-6 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nostrum reprehenderit cumque adipisci quod officiis consequuntur
              </p>
              <p class="text-sm mt-3">1 Mount Ago</p>
            </div>
          </a>
          <a href="" class="bg-slate-50 dark:bg-slate-800 rounded-3xl overflow-hidden group hover:bg-slate-100 transition duration-500">
            <div class="flex-shrink-0">
              <img class="w-full h-full object-cover bg-center bg-cover rounded-3xl" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="cover_blog" loading="lazy">
            </div>
            <div class="py-4 px-6">
              <div class="flex gap-x-3 justify-between items-center">
                <div class="flex items-center">
                  <img class="rounded-2xl w-10 h-10 object-cover bg-center bg-cover" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="avatar_image" loading="lazy">
                  <h5 class="text-sm ml-4">nama penulis</h5>
                </div>
                <div class="text-sm px-2 py-1 rounded-lg bg-red-900/80 dark:bg-slate-700 text-slate-300 group-hover:border-solid group-hover:bg-slate-100 dark:group-hover:bg-slate-700 group-hover:border-2 group-hover:border-red-900 dark:group-hover:border-slate-600 group-hover:text-red-900 dark:group-hover:text-slate-400 transition duration-500">Programming</div>
              </div>
              <h1 class="text-xl font-semibold my-3 group-hover:text-red-900 dark:group-hover:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. sequi?</h1>
              <p class="leading-6 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nostrum reprehenderit cumque adipisci quod officiis consequuntur
              </p>
              <p class="text-sm mt-3">1 Mount Ago</p>
            </div>
          </a>
          <a href="" class="bg-slate-50 dark:bg-slate-800 rounded-3xl overflow-hidden group hover:bg-slate-100 transition duration-500">
            <div class="flex-shrink-0">
              <img class="w-full h-full object-cover bg-center bg-cover rounded-3xl" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="cover_blog" loading="lazy">
            </div>
            <div class="py-4 px-6">
              <div class="flex gap-x-3 justify-between items-center">
                <div class="flex items-center">
                  <img class="rounded-2xl w-10 h-10 object-cover bg-center bg-cover" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="avatar_image" loading="lazy">
                  <h5 class="text-sm ml-4">nama penulis</h5>
                </div>
                <div class="text-sm px-2 py-1 rounded-lg bg-red-900/80 dark:bg-slate-700 text-slate-300 group-hover:border-solid group-hover:bg-slate-100 dark:group-hover:bg-slate-700 group-hover:border-2 group-hover:border-red-900 dark:group-hover:border-slate-600 group-hover:text-red-900 dark:group-hover:text-slate-400 transition duration-500">Programming</div>
              </div>
              <h1 class="text-xl font-semibold my-3 group-hover:text-red-900 dark:group-hover:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. sequi?</h1>
              <p class="leading-6 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nostrum reprehenderit cumque adipisci quod officiis consequuntur
              </p>
              <p class="text-sm mt-3">1 Mount Ago</p>
            </div>
          </a>
          <a href="" class="bg-slate-50 dark:bg-slate-800 rounded-3xl overflow-hidden group hover:bg-slate-100 transition duration-500">
            <div class="flex-shrink-0">
              <img class="w-full h-full object-cover bg-center bg-cover rounded-3xl" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="cover_blog" loading="lazy">
            </div>
            <div class="py-4 px-6">
              <div class="flex gap-x-3 justify-between items-center">
                <div class="flex items-center">
                  <img class="rounded-2xl w-10 h-10 object-cover bg-center bg-cover" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="avatar_image" loading="lazy">
                  <h5 class="text-sm ml-4">nama penulis</h5>
                </div>
                <div class="text-sm px-2 py-1 rounded-lg bg-red-900/80 dark:bg-slate-700 text-slate-300 group-hover:border-solid group-hover:bg-slate-100 dark:group-hover:bg-slate-700 group-hover:border-2 group-hover:border-red-900 dark:group-hover:border-slate-600 group-hover:text-red-900 dark:group-hover:text-slate-400 transition duration-500">Programming</div>
              </div>
              <h1 class="text-xl font-semibold my-3 group-hover:text-red-900 dark:group-hover:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. sequi?</h1>
              <p class="leading-6 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nostrum reprehenderit cumque adipisci quod officiis consequuntur
              </p>
              <p class="text-sm mt-3">1 Mount Ago</p>
            </div>
          </a>
          <a href="" class="bg-slate-50 dark:bg-slate-800 rounded-3xl overflow-hidden group hover:bg-slate-100 transition duration-500">
            <div class="flex-shrink-0">
              <img class="w-full h-full object-cover bg-center bg-cover rounded-3xl" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="cover_blog" loading="lazy">
            </div>
            <div class="py-4 px-6">
              <div class="flex gap-x-3 justify-between items-center">
                <div class="flex items-center">
                  <img class="rounded-2xl w-10 h-10 object-cover bg-center bg-cover" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="avatar_image" loading="lazy">
                  <h5 class="text-sm ml-4">nama penulis</h5>
                </div>
                <div class="text-sm px-2 py-1 rounded-lg bg-red-900/80 dark:bg-slate-700 text-slate-300 group-hover:border-solid group-hover:bg-slate-100 dark:group-hover:bg-slate-700 group-hover:border-2 group-hover:border-red-900 dark:group-hover:border-slate-600 group-hover:text-red-900 dark:group-hover:text-slate-400 transition duration-500">Programming</div>
              </div>
              <h1 class="text-xl font-semibold my-3 group-hover:text-red-900 dark:group-hover:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. sequi?</h1>
              <p class="leading-6 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nostrum reprehenderit cumque adipisci quod officiis consequuntur
              </p>
              <p class="text-sm mt-3">1 Mount Ago</p>
            </div>
          </a>
        </div>
        {{-- blog --}}

      </div>

      <x-small.footer />
    </div>

  </x-slot>
</x-partialsFrond.layout>
