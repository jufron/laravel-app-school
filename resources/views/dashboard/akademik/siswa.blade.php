<x-partials.layout title="siswa" pageState="Siswa">
	 <div
    x-data="{ 
      modalTest : false ,
      modalToasStatus: false
    }"
    x-init="
      window.flashMessage !== '' 
        ? modalToasStatus = true 
        : modalToasStatus = false;
      "
    id="modalState"
    class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
     <h1>hello halaman siswa</h1>
     <x-small.input.input-file
       className="my-4"
       label="Foto"
       name="picture"
       value=""
     />
      <a
        href="#"
        class="border-primary px-8 py-3 text-primary hover:bg-opacity-90 hover:border-indigo-300 inline-flex items-center justify-center gap-2.5 rounded-full border text-center font-medium transition duration-500"
        @click.prevent="offlineState = true"
        x-html="offlineState"
      >
      testing
      </a>

      <x-small.modal.modal-toast 
        time="6000" 
        state="modalToasStatus" 
        >
        <x-slot:modalContent>
        <div class="flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM8.293 9.293a1 1 0 011.414 0l2 2a1 1 0 01-1.414 1.414L10 11.414l-1.293 1.293a1 1 0 01-1.414-1.414l2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
          <p class="text-lg text-green-500">Data berhasil disimpan!</p>
        </div>
          <div class="mt-4 text-center">
              <button @click="modalToasStatus = false " class="inline-block px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-md text-gray-700 font-semibold">Tutup</button>
          </div>
        </x-slot>
      </x-small.modal.modal-toast>

  </div>
  <x-slot:footerOption>
    <script>
      window.flashMessage = "{{ session('status') }}";
    </script>
  </x-slot>
</x-partials.layout>
