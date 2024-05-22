<button
  class="{{ $className ?? null }}"
  @isset($click)
  @click="{{ $click }} = true"
  @endisset
  >
  {{ $title }}
</button>
