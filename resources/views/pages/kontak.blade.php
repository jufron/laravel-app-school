<x-partialsFrond.layout title="home">
  <x-slot:content>
    <x-small.navbar />

    <div class="dark:bg-slate-900">
      <div class="container px-4 m-auto">
        <h1 class="py-10 text-4xl">Kontak</h1>

        <div class="grid grid-cols-1 gap-4 lg:gap-10 md:grid-cols-2 mt-10 mb-16">
          <div class="">
            <div class="bg-slate-50 px-5 py-4 rounded-2xl mb-5 dark:bg-slate-800">
              <h4 class="text-xl md:text-2xl mb-2 font-semibold">Alamat</h4>
              <p class="leading-relaxed text-md md:text-lg">
                Jl. Perintis Kemerdekaan I No.9, Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur
              </p>
            </div>

            <div class="bg-slate-50 px-5 py-4 rounded-2xl my-5 dark:bg-slate-800">
              <p class="text-lg md:text-2xl mb-2 font-semibold">Social Media</p>
              <div class="flex flex-wrap gap-x-5 gap-y-5 md:gap-x-3 sm:gap-y-3 mt-4">
                @foreach ($socialMedia as $sosmed)
                <a href="{{ $sosmed->url }}" target="_blank" class="w-13 h-13 flex justify-center items-center bg-slate-200 dark:bg-slate-700 rounded-lg dark:hover:bg-slate-600 transition duration-500">
                   {!! $sosmed->platfrom->icon !!}.
                </a>
                @endforeach
              </div>
            </div>

            <div class="bg-slate-50 px-5 py-4 rounded-2xl my-5 dark:bg-slate-800">
              <p class="mb-5 text-lg md:text-2xl font-semibold">Whatsapp</p>

              <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-y-3 sm:gap-x-0 md:gap-x-4 lg:gap-x-10">
                @foreach ($telepon as $tlpn)
                <div class="p-3 bg-slate-100 hover:bg-green-500 hover:text-white rounded-xl transition duration-500 dark:hover:border-slate-600 dark:bg-slate-700">
                  <i class="fa-brands fa-whatsapp fa-lg"></i>
                  <a target="_blank" class="md:ml-3 text-sm md:text-md" href="https://wa.me/+{{ $tlpn->no_telepon }}">+{{$tlpn->no_telepon}}</a>
                </div>
                @endforeach
              </div>
            </div>

          </div>
          <div class="overflow-auto rounded-2xl">
            <div class="mapouter" id="g-maps">
              <div class="gmap_canvas">
                <iframe x-bind:style="darkMode ? 'filter: invert(90%);' : '' " class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=480&amp;hl=en&amp;q=smk uyelindo&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.gachacute.com/">Gacha Cute</a>
              </div>
              <style>.mapouter{position:relative;text-align:right;width:100%;height:480px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:480px;}.gmap_iframe {height:480px!important;}</style>
            </div>
          </div>

        </div>
      </div>
      <x-small.footer />
    </div>
  </x-slot>

</x-partialsFrond.layout>
