<x-partials.layout title="general" pageState="General">
    <element
    x-data="{
      modalToasStatus : false,
      route: '',
     }"
    @session("success")
      x-init="modalToasStatus = true"
    @endsession
    >
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <!-- Breadcrumb Start -->
      <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
          General
        </h2>
      </div>
      <!-- Breadcrumb End -->

      <!-- ====== Table Section Start -->
      <div class="flex flex-col gap-10">
        <!-- ====== Table One Start -->
        <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
          <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
            General
          </h4>

          <x-small.button.button-link
            className="inline-flex items-center justify-center rounded-md bg-blue-600 hover:bg-blue-700 px-8 py-3 text-center text-white hover:bg-opacity-90 lg:px-8 xl:px-10 transition duration-500"
            urlHref="{{ route('dashboard.general.edit') }}"
            label="Ubah data"
          />

          <dl class="divide-y divide-slate-300 dark:divide-slate-800">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Nama Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                <p>{{ $sekolah->nama }}</p>
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Logo Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                <div class="h-15 w-20 rounded-md overflow-hidden">
                  @if ($sekolah->logo)
                  <img src="{{ asset("storage/$sekolah->logo") }}" alt="banner" loading="lazy">
                  @else
                  <div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex justify-center items-center text-xs rounded-md">No Image</div>
                  @endif
                </div>
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Deskripsi Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->deskripsi }}
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Alamat/Lokasi Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->alamat }}
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">No Telepon Sekolah (resmi)</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->no_telepon }}
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Sejarah Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->sejarah_sekolah }}
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Visi Misi Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->visi_misi }}
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Nama Kepala Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->nama_kepala_sekolah }}
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Foto Kepala Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                <div class="h-15 w-20 rounded-md overflow-hidden">
                  @if ($sekolah->foto_kepala_sekolah)
                  <img src="{{ asset("storage/$sekolah->foto_kepala_sekolah") }}" alt="banner" loading="lazy">
                  @else
                  <div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex justify-center items-center text-xs rounded-md">No Image</div>
                  @endif
                </div>
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Periode Kepala Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->periode_kepala_sekolah }}
              </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Pesan Kepala Sekolah</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $sekolah->pesan_kepala_sekolah }}
              </dd>
            </div>
          </dl>

        </div>
        <!-- ====== Table One End -->
      </div>
      <!-- ====== Table Section End -->
    </div>

    {{-- ? modal toast notification success --}}
    <x-small.modal.modal-toast
      time="6000"
      state="modalToasStatus"
      >
        <x-slot:modalContent>
          <div class="flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM8.293 9.293a1 1 0 011.414 0l2 2a1 1 0 01-1.414 1.414L10 11.414l-1.293 1.293a1 1 0 01-1.414-1.414l2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <p class="text-lg text-green-500">{{ session('success') }}</p>
          </div>
            <div class="mt-4 text-center">
              <button @click="modalToasStatus = false " class="inline-block px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-md text-gray-700 font-semibold">Tutup</button>
            </div>
        </x-slot>
    </x-small.modal.modal-toast>
    {{-- ? end modal toast notification success --}}
  </element>

</x-partials.layout>
