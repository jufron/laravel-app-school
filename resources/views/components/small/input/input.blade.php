<div
  class="mb-4.5 {{ $className ?? null }}"
  @if ($type === 'password')
  x-data="{ showPassword: false }"
  @endif
  >
  <label
  @if (isset($forID))
  for="{{ $forID }}"
  @else
  for="{{ $label }}"
  @endif
  class="mb-3 block text-sm font-medium text-black dark:text-white">
    {{ $label }}
    <span class="text-meta-1">*</span>
  </label>
  <input
    type="{{ $type }}"
    @if ($type === 'password')
    x-bind:type="showPassword ? 'text' : 'password'"
    @endif
    placeholder="{{ $placeholder }}"
    name="{{ $name }}"
    @isset($value)
    value="{{ $value }}"
    @endisset
    @if (isset($forID))
    id="{{ $forID }}"
    @else
    id="{{ $label }}"
    @endif
    @isset($disable)
      @if ($disable == 'true')
        disabled
      @endif
    @endisset
    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
  >
  @if ($type === 'password')
  <p
    @click="showPassword = !showPassword"
    x-text="showPassword ? 'Hide Password' : 'Show Password'"
    class="text-sm mt-2 cursor-pointer"
  >
  </p>
  @endif
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
<x-small.input.input
  className=""
  label="Email"
  type="email"
  placeholder="Enter your email address"
  name="email"
  value=""
/>
--}}
