@session('status')
<div
    x-init="{{ $state }} = true"
    x-show="{{ $state }}"
    class="my-4 flex w-100 border-l-6 border-green-700 bg-green-500 bg-opacity-[15%] p-1 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 px-6 py-4 rounded-lg">
    <div class="w-full">
      <p class="leading-relaxed text-sm text-[#72d44e]">
        {{ session('status') }}
      </p>
    </div>
</div>
@endsession
