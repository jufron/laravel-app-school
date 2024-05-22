<x-partialsFrond.layout title="home">
  <x-slot:content>
    <x-small.navbar />

    {{-- ? corousel --}}
    <x-small.corousel.corousel />
    {{-- ? end corousel --}}

    <section class="bg-white dark:bg-slate-900">
      <div class="container px-6 py-15 mx-auto">
          <div class="lg:-mx-6 lg:flex lg:items-center">
              <img class="object-cover object-center lg:w-1/2 lg:mx-6 w-full h-96 rounded-lg lg:h-[36rem] shadow-2xl" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="" loading="lazy">

              <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">
                <p class="text-xl sm:text-lg mt-4 font-semibold text-gray-800 lg:w-96">
                    Kepala Sekolah
                </p>
                <h1 class="text-3xl md:text-4xl sm:text-2xl font-bold">Suryani Benga Tokan S.Kom</h1>
                  <p class="max-w-lg mt-6 text-gray-500 dark:text-gray-400 leading-7">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem aut placeat veritatis temporibus voluptatem, aliquam provident neque asperiores possimus ab nulla! Sapiente eos at rem blanditiis eius expedita quis in voluptatibus earum optio soluta temporibus odio cumque, voluptates unde a?
                  </p>
                  <p class="max-w-lg mt-6 text-gray-500 dark:text-gray-400 leading-7">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem aut placeat veritatis temporibus voluptatem, aliquam provident neque asperiores possimus ab nulla! Sapiente eos at rem blanditiis eius expedita quis in voluptatibus earum optio soluta temporibus odio cumque, voluptates unde a?
                  </p>
              </div>
          </div>
      </div>
    </section>

    <div class="bg-slate-50 dark:bg-slate-900">
      <div class="container px-4 m-auto py-10">
        <div class="grid md:grid-cols-2 gap-x-4 gap-y-5 pb-10">
          <div class="py-5 md:px-10 flex items-center">
            <p class="leading-7">
              Selamat Datang di website resmi Sekolah Menengah Kejuruan (SMK) Uyelindo Kupang website ini dibangun sebagai sarana atau media informasi dan komunikasi sekolah, karena sejalan dengan perkembangan industri 4.0 yang berguna untuk memudahkan mencari informasi tentang SMK Uyelindo Kupang. Kualitas layanan menjadi salah satu misi sekolah. Semoga dengan adanaya website sekolah dapat mendatangkan manfaat bagi semua pihak.
            </p>
          </div>
          <div class="lg:p-10 flex">
            <div class="bg-red-200 rounded-2xl overflow-hidden shadow-2xl my-auto">
              <img class="bg-center bg-cover object-cover w-full h-full" src="{{ asset('images/IMG_20220930_100345.jpg') }}" alt="image" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dark:bg-slate-900">
      <div class="container pt-10 pb-20 px-4 m-auto">
        <h1 class="pt-10 pb-5 text-4xl">Program Keahlian</h1>
        <p class="pb-10">Jurusan yang ada di SMK Uyelindo memiliki 3 jurusan berikut selengkapnya </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-5">

          <div class="bg-slate-50 rounded-2xl overflow-hidden hover:bg-slate-100 transition duration-500 dark:bg-slate-800 dark:hover:bg-slate-700">
            <img class="object-cover w-full bg-cover bg-center rounded-2xl" src="{{ asset('images/IMG_20220905_083536.jpg') }}" alt="poster-jurusan" loading="lazy">
            <div class="py-5 px-7">
              <div class="mb-3">
                <h1 class="text-lg font-semibold">Teknik Komputer & Jaringan (TKJ)</h1>
                <span class="text-sm">Network & Computer</span>
              </div>
              <p class="leading-9">
                Program keahlian Teknik Komputer & Jaringan mampu menghasilkan tenaga terampil siap kerja yang berintegrasi tinggi, semangat dalam memberikan kontribusi pada bidang Teknik Komputer & Jaringan
              </p>
            </div>
          </div>
          <div class="bg-slate-50 overflow-hidden rounded-2xl hover:bg-slate-100 transition duration-500 dark:bg-slate-800 dark:hover:bg-slate-700">
            <img class="object-cover bg-cover bg-center rounded-2xl" src="{{ asset('images/IMG_20220907_212219.jpg') }}" alt="poster-jurusan" loading="lazy">
            <div class="py-5 px-7">
              <div class="mb-3">
                <h1 class="text-lg font-semibold">Rekayasa Perangkat Lunak (RPL)</h1>
                <span class="text-sm">Software Engineer</span>
              </div>
              <p class="leading-9">
                Program keahlian Rekayasa Perangkat Lunak menghasilkan tenaga ahli yang berkompeten di bidang Software, mempunyai etos kerja yang tinggi disiplin inovatif dan kreatif.
              </p>
            </div>
          </div>
          <div class="bg-slate-50 overflow-hidden rounded-2xl hover:bg-slate-100 transition duration-500 dark:bg-slate-800 dark:hover:bg-slate-700">
            <img class="object-cover rounded-2xl bg-cover bg-center" src="{{ asset('images/IMG_20220907_125303.jpg') }}" alt="poster-jurusan" loading="lazy">
            <div class="py-5 px-7">
              <div class="mb-3">
                <h1 class="text-lg font-semibold">Akuntansi & Keuangan Lembaga</h1>
                <span class="text-sm">Finance Acounting Public </span>
              </div>
              <p class="leading-9">
                Program keahlian Akuntansi mampu menghasilkan tenaga terampil siap kerja, mempunyai etos kerja yang tinggi disiplin inofatif dan kreatif.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ? new testimoni --}}
    <section class="dark:bg-slate-900">
      <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          Apa pendapat mereka tentang SMK Uyelindo
        </h2>

        <div class="mt-8 [column-fill:_balance] sm:columns-2 sm:gap-3 lg:columns-3 lg:gap-6">
          @foreach ($testimonial as $testimoni)
          <div class="mb-8 sm:break-inside-avoid">
            <blockquote class="dark:bg-slate-950 bg-white p-6 rounded-xl shadow-sm sm:p-8">
              <div class="flex items-center gap-4">
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                  class="size-14 rounded-full object-cover"
                  loading="lazy"
                />
                <div>
                  <p class="mt-0.5 text-lg font-medium text-gray-900">{{ $testimoni->name }}</p>
                </div>
              </div>

              <p class="mt-4 text-gray-700">
                {{ $testimoni->message }}
              </p>
            </blockquote>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    {{-- ? new testimoni --}}

    <div class="dark:bg-slate-900">
      <div class="container m-auto">
        <p class="text-center py-10 text-xl">SMK Uyelindo memiliki tenaga Pengajar berkualitas dan ahli di bidangnya</p>
        <div class="flex px-10 py-10 flex-wrap items-center justify-center">
          <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5">
            <x-small.card />
          </div>
        </div>
      </div>
    </div>

    <div class="dark:bg-slate-900">
      <div class="container px-4 m-auto py-10 flex justify-center items-center">
        <a href="{{ route('daftar_guru') }}" class="inline-block py-3 px-5 rounded-xl text-pink-100 transition-colors duration-150 bg-red-800 focus:shadow-outline hover:bg-red-800">
          Lebih Detail
        </a>
      </div>
    </div>

  </x-slot>
</x-partialsFrond.layout>
