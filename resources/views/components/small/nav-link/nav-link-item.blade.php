<li>
  <a
    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white transition duration-500"
    href="{{ $urlHref }}"
    :class="page === '{{ $linkName }}' && 'text-green-300'"
    >
    {{ $linkName }}
    </a>
</li>