<div
  class="{{ $class ?? 'mb-4' }}"
  @if ($type === 'password')
  x-data="{ showPassword: false }"
  @endif>
  <label
    for="{{ $name }}"
    class="mb-2.5 block font-medium text-black dark:text-white">{{ $label }}</label>
  <div class="relative">
    <input
      type="{{ $type }}"
      @if ($type === 'password')
      x-bind:type="showPassword ? 'text' : 'password'"
      @endif
      id="{{ $name }}"
      name="{{ $name }}"
      @isset($value)
      value="{{ $value }}"
      @endisset
      placeholder="{{ $placeHolder ?? 'none' }}"
      class="w-100 rounded-lg border @error($name) border-red-300 dark:border-red-300 @enderror border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
  </div>
  @if ($type === 'password')
  <p
    @click="showPassword = !showPassword"
    x-text="showPassword ? 'Hide Password' : 'Show Password'"
    class="text-blue-500 text-sm mt-2 cursor-pointer"
  >
  </p>
  @endif
  @error($name)
  <p class="text-red-300 text-sm mt-4 italic">{{ $message ?? null }}</p>
  @enderror
</div>
