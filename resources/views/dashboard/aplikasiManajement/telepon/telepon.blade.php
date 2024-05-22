<x-partials.layout title="telepon" pageState="Telepon">

  <element
    x-data="{
      modalCreateTeleponIsOpen : false,
      modalDeleteSocialMediaIsOpen : false,
      modalToasStatus : false,
      route: '',
     }"
    @error('no_telepon')
     x-init="modalCreateTeleponIsOpen = true"
    @enderror
    @session("success")
      x-init="modalToasStatus = true"
    @endsession
    >
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <!-- Breadcrumb Start -->
      <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
          Telepon
        </h2>
      </div>
      <!-- Breadcrumb End -->

      <!-- ====== Table Section Start -->
      <div class="flex flex-col gap-10">
        <!-- ====== Table One Start -->
        <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
          <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
            Daftar Nomor Telepon
          </h4>
          <x-small.button.button
            className="text-md my-4 font-medium bg-green-600 px-8 py-3 hover:bg-opacity-90 hover:bg-green-700 rounded-lg text-center transition duration-500 text-white"
            click="modalCreateTeleponIsOpen"
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
                    No Telepon
                  </th>
                  <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">
                    Link Url whatsapp
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
                @foreach ($telepon as $tlpn)
                <tr>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <h5 class="font-medium text-black dark:text-white">{{ $loop->iteration }}</h5>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <p class="text-black dark:text-white">{{ $tlpn->no_telepon }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <a
                      href="https://wa.me/+{{ $tlpn->no_telepon }}"
                      target="_blank"
                      >
                      <i class="fa-brands fa-whatsapp"></i>
                    </a>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <p class="text-black dark:text-white">{{ $tlpn->created_at }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                    <div class="flex items-center space-x-3.5">
                      <button @click="modalDeleteSocialMediaIsOpen = true; route = `{{ route('dashboard.telepon.destroy', $tlpn) }}` " class="hover:text-primary dark:bg-slate-800 bg-slate-100 rounded-lg w-10 h-10">
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

    {{-- ? modal create social media --}}
    <x-small.modal.modal state="modalCreateTeleponIsOpen">
      <x-slot:modalContent>
        <form action="{{ route('dashboard.telepon.store') }}" method="POST">
            @csrf
            <div class="bg-white dark:bg-slate-900 px-4 pb-4 pt-5 sm:p-6 sm:pb-4 sm:w-full">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 sm:mt-0 sm:text-left w-full">
                  <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">Tambah Nomor Telepon Baru</h3>
                  <div class="mt-6">

                    <div class="flex w-full border-l-6 border-sky-500 bg-sky-500 bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
                      <div class="mr-5 flex h-9 w-9 items-center justify-center rounded-lg bg-sky-500 bg-opacity-30">
                        <i class="fa-solid fa-circle-info"></i>
                      </div>
                      <div class="w-full">
                        <h5 class="mb-3 text-lg font-bold text-sky-500">
                          Info
                        </h5>
                        <p class="leading-relaxed text-sky-400">Nomor yang ditambahkan harus terikat dengan whatsapp</p>
                        <p class="leading-relaxed text-sky-400">Contoh : 6281234567890</p>
                      </div>
                    </div>

                    {{-- ? input --}}
                    <x-small.input.input
                      className=""
                      label="Nomor Telepon"
                      type="text"
                      placeholder="Nomor Telepon yang valid"
                      name="no_telepon"
                      value="628"
                    />
                    {{-- ? end input --}}

                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="submit" class="inline-flex w-full justify-center rounded-md bg-green-600 dark:bg-green-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-green-700 sm:ml-3 sm:w-auto">Save</button>
              <button
                @click="modalCreateTeleponIsOpen = false;" type="button"
                class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-slate-700 px-6 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                Cancel
              </button>
            </div>
        </form>
      </x-slot>
    </x-small.modal.modal>
    {{-- ? end modal media --}}

    {{-- ? modal delete social media --}}
    <x-small.modal.modal state="modalDeleteSocialMediaIsOpen" >
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
            <button @click="modalDeleteSocialMediaIsOpen = false; route = '' " type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-slate-700 px-6 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
          </div>
        </form>
      </x-slot>
    </x-small.modal.modal>
    {{-- ? modal delete end social media --}}

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
