<div class="{{ $className ?? null }}">
  <label
    for="{{ $name }}"
    class="mb-3 block text-sm font-medium text-black dark:text-white">
    {{ $label }}
  </label>
  <input
  @isset($fileType)
    @if ($fileType === 'images')
    @change="images = URL.createObjectURL($event.target.files[0])"
    @endif
    @endisset
    name="{{ $name }}"
    type="file"
    @isset($value)
    value="{{ $value }}"
    @endisset
    id="{{ $name }}"
    class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary">
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
<x-small.input.input-file
  className="my-4"
  label="Foto"
  name="picture"
  value=""
/>
 --}}
