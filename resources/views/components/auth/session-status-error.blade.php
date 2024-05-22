@if ($errors->any())
<div
  class="my-4 flex w-100 border-l-6 border-red-700 bg-red-500 bg-opacity-[15%] p-1 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 px-6 py-4 rounded-lg">
  <div class="w-full">
    <p class="leading-relaxed text-sm text-[#d52d25]">
      @foreach ($errors as $error)
        {{ $error }}
      @endforeach
    </p>
  </div>
</div>
@endif
