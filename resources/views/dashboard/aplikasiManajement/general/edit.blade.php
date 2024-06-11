<x-partials.layout title="general edit" pageState="General">
  <x-slot:headerOptional>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}
  </x-slot>

  <element
    id="data_testimoni"
    x-data="{
      images: '',
    }"
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
            Edit General
          </h4>
          <form
            id="form_general"
            action="{{ route('dashboard.general.update') }}"
            method="post"
            enctype="multipart/form-data"
            data-url-upload="{{ route('dashboard.general.upload.image') }}"
            data-url-delete="{{ route('dashboard.general.destroy.image') }}"
            >
            @csrf
            @method('patch')

            {{-- ? preview images --}}
            <div class="w-20 h-20 bg-gray-200 bg-slate-200 dark:bg-slate-800 mt-4 rounded-md flex items-center justify-center">
              <template x-if="images">
                <img x-bind:src="images" alt="Uploaded Image" class="object-cover w-full h-full rounded-md">
              </template>
              <template x-if="!images">
                @if ($sekolah->logo)
                <img src="{{ asset('storage/' . $sekolah->logo) }}" alt="Uploaded Image" class="object-cover w-full h-full rounded-md">
                @else
                <div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex justify-center items-center text-xs rounded-md">No Image</div>
                @endif
              </template>
            </div>
            {{-- ? end preview images --}}

            {{--? input file --}}
            <x-small.input.input-file
              className="my-4"
              label="Logo Sekolah"
              name="logo"
              fileType="logo"
            />
            {{--? end input file --}}

            {{-- ? input --}}
            <x-small.input.input
              label="Nama Sekolah"
              type="text"
              placeholder="Masukan Nama Seolah"
              name="nama"
              value="{{ old('nama', $sekolah->nama) }}"
            />
            {{-- ? end input --}}

            {{-- ? input textarea --}}
            <x-small.input.input-textarea
              placeholder="Masukan Pesan Deskripsi tentang Sekolah"
              value="{{ old('deskripsi', $sekolah->deskripsi) }}"
              label="Deskripsi"
              name="deskripsi"
            />
            {{-- ? end input textarea --}}

            {{-- ? input --}}
            <x-small.input.input
              label="Alamat Sekolah"
              type="text"
              placeholder="Masukan Alamat Seolah"
              name="alamat"
              value="{{ old('alamat', $sekolah->alamat) }}"
            />
            {{-- ? end input --}}

            {{-- ? input --}}
            <x-small.input.input
              label="No Telepon Sekolah"
              type="text"
              placeholder="Masukan No Telepon Sekolah"
              name="no_telepon"
              value="{{ old('no_telepon', $sekolah->no_telepon) }}"
            />
            {{-- ? end input --}}

            {{-- ? input textarea --}}
            <x-small.input.input-textarea
              className="ck-content"
              placeholder="Sejarah Sekolah"
              value="{{ old('sejarah_sekolah', $sekolah->sejarah_sekolah) }}"
              label="Sejarah Sekolah"
              name="sejarah_sekolah"
            />
            {{-- ? end input textarea --}}

            {{-- ? input textarea --}}

            <x-small.input.input-textarea
              placeholder="Visi Misi Sekolah"
              value="{{ old('visi_misi', $sekolah->visi_misi) }}"
              label="Visi Misi Sekolah"
              name="visi_misi"
            />
            {{-- ? end input textarea --}}

            {{-- ? input --}}
            <x-small.input.input
              label="Nama Kepala Sekolah"
              type="text"
              placeholder="Masukan Nama Kepala Sekolah"
              name="nama_kepala_sekolah"
              value="{{ old('nama_kepala_sekolah', $sekolah->nama_kepala_sekolah) }}"
            />
            {{-- ? end input --}}

            {{-- ? preview images --}}
            <div class="w-20 h-20 bg-gray-200 bg-slate-200 dark:bg-slate-800 mt-4 rounded-md flex items-center justify-center">
              <template x-if="images">
                <img x-bind:src="images" alt="Uploaded Image" class="object-cover w-full h-full rounded-md">
              </template>
              <template x-if="!images">
                @if ($sekolah->foto_kepala_sekolah)
                <img src="{{ asset('storage/' . $sekolah->foto_kepala_sekolah) }}" alt="Uploaded Image" class="object-cover w-full h-full rounded-md">
                @else
                <div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex justify-center items-center text-xs rounded-md">No Image</div>
                @endif
              </template>
            </div>
            {{-- ? end preview images --}}

            <div class="lg:grid lg:grid-cols-2 lg:gap-4">
              {{--? input file --}}
              <x-small.input.input-file
                label="foto-kepala-sekolah"
                name="logo"
                fileType="logo"
              />
              {{--? end input file --}}

              {{-- ? input --}}
              <x-small.input.input
                className="mt-3 lg:mt-0"
                label="Periode Kepala Sekolah"
                type="text"
                placeholder="Masukan Periode Kepala Sekolah"
                name="periode_kepala_sekolah"
                value="{{ old('periode_kepala_sekolah', $sekolah->periode_kepala_sekolah) }}"
              />
              {{-- ? end input --}}
            </div>

            {{-- ? input textarea --}}
            <x-small.input.input-textarea
              placeholder="Pesan Kepala Sekolah"
              value="{{ old('pesan_kepala_sekolah', $sekolah->pesan_kepala_sekolah) }}"
              label="Pesan Kepala Sekolah"
              name="pesan_kepala_sekolah"
            />
            {{-- ? end input textarea --}}

            <x-small.button.button
              className="text-md my-4 font-medium bg-green-600 px-8 py-3 hover:bg-opacity-90 hover:bg-green-700 rounded-lg text-center transition duration-500 text-white"
              title="Perbaharui"
            />
          </form>
        </div>
        <!-- ====== Table One End -->
      </div>
      <!-- ====== Table Section End -->
    </div>
  </element>

  <x-slot:footerOption>
    {{-- <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}
    <script>

    </script>
  </x-slot>
</x-partials.layout>
