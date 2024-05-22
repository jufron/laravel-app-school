<div class="{{ $className ?? null }}">
  <label
    for="{{ $name }}"
    class="mb-3 block text-sm font-medium text-black dark:text-white">
    {{ $label }}
  </label>
  <textarea
    rows="6"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    id="{{ $name }}"
    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $value ?? null }}</textarea>
  @error($name)
  <div class="my-4 flex w-full border-l-6 border-red-500 bg-red-600 bg-opacity-[15%] p-1 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 px-6 py-4 rounded-lg">
    <div class="w-full">
      <p class="leading-relaxed text-red-400">
        {{ $message ?? null }}
      </p>
    </div>
  </div>
  @enderror
</div>


{{--
<x-small.input.input-textarea
  placeholder="Masukan data deskripsi"
  class=""
  value=""
  label="Deskripsi"
  name="deskripsi"
/>
 --}}
