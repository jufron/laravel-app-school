<div
    x-show="{{$state}}"
    @isset($time)
    x-init="setTimeout(() => {{$state}} = false, {{$time}})"
    @endisset
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-4 translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-x-0 translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform translate-x-0 translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-x-4 translate-y-4"
    @props([
      'modalPositionX' => 'right',
      'modalPositionY' => 'bottom',
    ])
    @class([
      'fixed',
      'z-9999',
      'left-4'    => $modalPositionX == 'left',
      'right-4'   => $modalPositionX == 'right',
      'top-4'     => $modalPositionY == 'top',
      'bottom-4'  => $modalPositionY == 'bottom',
    ])>
    <!-- Konten Toast -->
    <div class="bg-white dark:bg-slate-900 dark:border dark:border-blue-900 rounded-lg py-6 px-15 shadow-lg">
      {{ $modalContent }}
    </div>
</div>



{{-- 
  
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


  --}}