<x-partials.layout title="banner" pageState="Banner">
  <element
    x-data="{
      modalCreateBannerIsOpen : false,
      modalDeleteBannerIsOpen : false,
      modalToasStatus: false,
      images: '',
      route: '',
     }"
    @error('image')
     x-init="modalCreateBannerIsOpen = true"
    @enderror
    @session("success")
      x-init="modalToasStatus = true"
    @endsession
    >
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <!-- Breadcrumb Start -->
      <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
          Banner
        </h2>
      </div>
      <!-- Breadcrumb End -->

      <!-- ====== Table Section Start -->
      <div class="flex flex-col gap-10">
        <!-- ====== Table One Start -->
        <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
          <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
            Daftar Banner
          </h4>

          <x-small.button.button
            className="text-md my-4 font-medium bg-green-600 px-8 py-3 hover:bg-opacity-90 hover:bg-green-700 rounded-lg text-center transition duration-500 text-white"
            click="modalCreateBannerIsOpen"
            title="Tambah"
          />

          {{-- ? table --}}
          <div class="max-w-full overflow-x-auto">
            <table class="w-full table-auto">
              <thead>
                <tr class="bg-gray-2 text-left dark:bg-meta-4">
                  <th class="min-w-[50px] px-4 py-4 font-medium text-black dark:text-white">
                    No
                  </th>
                  <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">
                    Gambar
                  </th>
                  <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">
                    Tggl Buat
                  </th>
                  <th class="px-4 py-4 font-medium text-black dark:text-white">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($banner as $bnr)
                <tr>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <h5 class="font-medium text-black dark:text-white">{{ $loop->iteration }}</h5>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                    <div class="h-12.5 w-15 rounded-md">
                      <img src="{{ asset("storage/$bnr->image") }}" alt="banner" loading="lazy">
                    </div>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <p class="text-black dark:text-white">{{ $bnr->created_at }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <div class="flex items-center space-x-3.5">
                      <a
                        href="{{ route('dashboard.banner.download', $bnr->id) }}"
                        target="_blank"
                        class="hover:text-primary dark:bg-slate-800 bg-slate-100 rounded-lg w-10 h-10 flex justify-center item-center items-center"
                        >
                        <i class="fa-solid fa-download"></i>
                      </a>
                      <button @click="modalDeleteBannerIsOpen = true; route = `{{ route('dashboard.banner.destroy', $bnr->id) }}` " class="hover:text-primary dark:bg-slate-800 bg-slate-100 rounded-lg w-10 h-10">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{-- ? talbe --}}
        </div>
        <!-- ====== Table One End -->
      </div>
      <!-- ====== Table Section End -->
    </div>

    {{-- ? modal create banner --}}
    <x-small.modal.modal state="modalCreateBannerIsOpen" >
      <x-slot:modalContent>
        <form action="{{ route('dashboard.banner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-white dark:bg-slate-900 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 sm:mt-0 sm:text-left">
                  <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">Tambah Banner</h3>
                  <div class="mt-6">

                    <div class="flex w-full border-l-6 border-sky-500 bg-sky-500 bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
                      <div class="mr-5 flex h-9 w-9 items-center justify-center rounded-lg bg-sky-500 bg-opacity-30">
                        <i class="fa-solid fa-circle-info"></i>
                      </div>
                      <div class="w-full">
                        <h5 class="mb-3 text-lg font-bold text-sky-500">
                          Info
                        </h5>
                        <p class="leading-relaxed text-sky-400 text-md">
                          File Gambar yang di Upload maximal 2 MB, untuk tipe file: Jpeg, jpg, png
                        </p>
                      </div>
                    </div>

                    {{-- ? preview images --}}
                    <div class="w-70 h-40 bg-gray-200 bg-slate-200 dark:bg-slate-800 mt-4 rounded-md flex items-center justify-center">
                      <template x-if="images">
                        <img x-bind:src="images" alt="Uploaded Image" class="object-cover w-full h-full rounded-md">
                      </template>
                      <template x-if="!images">
                        <span class="text-gray-500">Preview</span>
                      </template>
                    </div>

                    <x-small.input.input-file
                      className="my-4"
                      label="Foto"
                      name="image"
                      fileType="images"
                    />

                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="submit" class="inline-flex w-full justify-center rounded-md bg-green-600 dark:bg-green-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-green-700 sm:ml-3 sm:w-auto">Save</button>
              <button
                @click="modalCreateBannerIsOpen = false;" type="button"
                class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-slate-700 px-6 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                Cancel
              </button>
            </div>
        </form>
      </x-slot>
    </x-small.modal.modal>
    {{-- ? end modal create banner --}}

    {{-- ? modal delete banner --}}
    <x-small.modal.modal state="modalDeleteBannerIsOpen" >
      <x-slot:modalContent>
        <form method="post" x-bind:action="route" @keydown.escape.window="route = '' ">
          @csrf
          @method('delete')
          <div class="bg-white dark:bg-slate-900 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center sm:mx-0 sm:h-10 sm:w-10">
                <div class="w-6 h-6">
                  <i class="fa-solid fa-trash fa-xl"></i>
                </div>
              </div>
              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Delete</h3>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">Are you sure you want to permanently delete this important data?.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            <button type="submit" class="inline-flex w-full justify-center rounded-md bg-red-600 dark:bg-red-800 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-500 dark:hover:bg-red-700 sm:ml-3 sm:w-auto">Delete</button>
            <button @click="modalDeleteBannerIsOpen = false; route = '' " type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-slate-700 px-6 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
          </div>
        </form>
      </x-slot>
    </x-small.modal.modal>
    {{-- ? modal delete end banner --}}

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
