<nav
  x-data="{
    mobileMenuIsOpen: false,
    isSticky: false
  }"
  x-init="window.addEventListener('scroll', () => { isSticky = window.pageYOffset > 0 })"
  @click.away="mobileMenuIsOpen = false"
  :class="{ 'sticky top-0 shadow-md z-50': isSticky, '': !isSticky }"
  class="flex items-center justify-between px-6 py-6 dark:bg-slate-950 bg-slate-300"
  aria-label="penguin ui menu"
  >
  {{-- ? brand logo --}}
	<a
    href="{{ route('beranda') }}"
    class="text-2xl font-bold text-black dark:text-white">
		<img src="{{ asset('images/f12fe4e8-90d0-4815-ab6d-a45c8eba04eb-modified.png') }}" alt="brand-logo" class="w-10" loading="lazy" />
	</a>
  {{-- ? desktop menu --}}
	<ul class="hidden items-center gap-4 sm:flex">
		<li><a href="{{ route('beranda') }}" class="lg:px-4 @requestRoute('beranda') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline dark:hover:text-blue-600" aria-current="page">Beranda</a></li>

    <div
      x-data="{ isOpen: false, openedWithKeyboard: false }"
      class="relative" @keydown.esc.window="isOpen = false, openedWithKeyboard = false"
      >
      <!-- Toggle Button -->
      <button
        type="button"
        @click="isOpen = ! isOpen"
        class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap lg:px-4 py-2 font-medium tracking-wide transition hover:text-blue-700 @requestIs('profil/*') text-blue-700 @endrequestIs"
        aria-haspopup="true"
        @keydown.space.prevent="openedWithKeyboard = true"
        @keydown.enter.prevent="openedWithKeyboard = true"
        @keydown.down.prevent="openedWithKeyboard = true"
        :aria-expanded="isOpen || openedWithKeyboard">
          Profil
          <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 rotate-0">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
          </svg>
      </button>
      <!-- Dropdown Menu -->
      <div
        x-cloak x-show="isOpen || openedWithKeyboard"
        x-transition @click.outside="isOpen = false, openedWithKeyboard = false"
        @keydown.down.prevent="$focus.wrap().next()"
        @keydown.up.prevent="$focus.wrap().previous()"
        class="absolute top-11 left-0 flex w-full min-w-[12rem] flex-col overflow-hidden rounded-xl border border-slate-300 bg-slate-100 py-1.5 dark:border-slate-700 dark:bg-slate-800 z-99"
        role="menu"
        >
        <a href="{{ route('sejarah') }}" class="bg-slate-100 px-4 py-2 text-sm hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 @requestIs('profil/sejarah') font-bold text-blue-700 dark:text-blue-600 @endrequestIs dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem">Sejarah</a>
        <a href="{{ route('visiMisi') }}" class="bg-slate-100 px-4 py-2 text-sm hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 @requestIs('profil/visi-misi') font-bold text-blue-700 dark:text-blue-600 @endrequestIs dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem">Visi-Misi</a>
        <a href="{{ route('programKeahlian') }}" class="bg-slate-100 px-4 py-2 text-sm hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 @requestIs('profil/programKeahlian') font-bold text-blue-700 dark:text-blue-600 @endrequestIs dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem">Program Keahlian</a>
      </div>
    </div>

		<li><a href="{{ route('galeri') }}" class="lg:px-4 @requestIs('galeri') font-bold text-blue-700 dark:text-blue-600 @endrequestIs underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline dark:hover:text-blue-600">Galeri</a></li>
		<li><a href="{{ route('ppdb') }}" class="lg:px-4 @requestIs('ppdb') font-bold text-blue-700 dark:text-blue-600 @endrequestIs underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline dark:hover:text-blue-600">PPDB</a></li>
		<li><a href="{{ route('blog') }}" class="lg:px-4 @requestIs('blog') font-bold text-blue-700 dark:text-blue-600 @endrequestIs underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline dark:hover:text-blue-600">Blog</a></li>
		<li><a href="{{ route('kontak') }}" class="lg:px-4 @requestIs('kontak') font-bold text-blue-700 dark:text-blue-600 @endrequestIs underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline dark:hover:text-blue-600">Kontak</a></li>
    <x-small.toggle-dark-mode />
    {{-- ? user pic --}}
    @auth
		<li
      x-data="{ userDropDownIsOpen: false, openWithKeyboard: false }"
      @keydown.esc.window="userDropDownIsOpen = false, openWithKeyboard = false"
      class="relative flex items-center">
			<button
        @click="userDropDownIsOpen = ! userDropDownIsOpen"
        :aria-expanded="userDropDownIsOpen"
        @keydown.space.prevent="openWithKeyboard = true"
        @keydown.enter.prevent="openWithKeyboard = true"
        @keydown.down.prevent="openWithKeyboard = true"
        class="rounded-full focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 dark:focus-visible:outline-blue-600"
        aria-controls="userMenu">
				<img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-8.webp" alt="User Profile" class="size-10 rounded-full object-cover" />
			</button>
			<!-- User Dropdown -->
			<ul
        x-cloak
        x-show="userDropDownIsOpen || openWithKeyboard"
        x-transition.opacity
        @click.outside="userDropDownIsOpen = false, openWithKeyboard = false"
        @keydown.down.prevent="$focus.wrap().next()"
        @keydown.up.prevent="$focus.wrap().previous()"
        id="userMenu"
        class="absolute right-0 top-12 flex w-full min-w-[12rem] flex-col overflow-hidden rounded-xl border border-slate-300 bg-slate-100 py-1.5 dark:border-slate-700 dark:bg-slate-800 z-99">
				<li class="border-b border-slate-300 dark:border-slate-700">
					<div class="flex flex-col px-4 py-2">
						<span class="text-sm font-medium text-black dark:text-white">{{ auth()->user()->name }}</span>
						<p class="text-xs">{{ auth()->user()->email }}</p>
					</div>
				</li>
        {{-- todo dashboard --}}
				<li><a href="{{ route('dashboard.home') }}" class="block bg-slate-100 px-4 py-2 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white">Dashboard</a></li>

        {{-- todo logout --}}
        <button @click="modalLogoutIsOpen = true" class="block bg-slate-100 px-4 py-2 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white text-left">
          Log Out
        </button>
        {{-- <li><a href="#" class="block bg-slate-100 px-4 py-2 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white">Log Out</a></li> --}}
			</ul>
		</li>
    @endauth
	</ul>

  {{-- ? mobile menu button --}}
  <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button" class="flex text-slate-700 dark:text-slate-300 sm:hidden z-999" aria-label="mobile menu" aria-controls="mobileMenu">
		<svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
		</svg>
		<svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
		</svg>
	</button>

  {{-- ? mobile menu --}}
	<ul
    x-cloak x-show="mobileMenuIsOpen"
    x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
    x-transition:enter-start="-translate-y-full"
    x-transition:enter-end="translate-y-0"
    x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="-translate-y-full"
    class="fixed max-h-svh overflow-y-auto inset-x-0 top-0  flex flex-col rounded-b-xl border-b border-slate-300 bg-slate-100 px-8 pb-6 pt-10 dark:border-slate-700 dark:bg-slate-800 sm:hidden z-99">
		@auth
    <li class="mb-4 border-none">
			<div class="flex items-center gap-2 py-2">
				<img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-8.webp" alt="User Profile" class="size-12 rounded-full object-cover"  />
				<div>
					<span class="lg:px-4 font-medium text-black dark:text-white">{{ auth()->user()->name }}</span>
					<p class="text-sm">{{ auth()->user()->email }}</p>
				</div>
			</div>
		</li>
    @endauth
		<li class="p-2"><a href="{{ route('beranda') }}" class="w-full text-lg @requestRoute('beranda') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline" aria-current="page">Beranda</a></li>
		<li class="p-2"><a href="{{ route('sejarah') }}" class="w-full text-lg @requestRoute('sejarah') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline">Sejarah</a></li>
		<li class="p-2"><a href="{{ route('visiMisi') }}" class="w-full text-lg @requestRoute('visiMisi') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline">Visi Misi</a></li>
		<li class="p-2"><a href="{{ route('programKeahlian') }}" class="w-full text-lg @requestRoute('programKeahlian') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline">Program Keahlian</a></li>
		<li class="p-2"><a href="{{ route('galeri') }}" class="w-full text-lg @requestRoute('galeri') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline">Galeri</a></li>
		<li class="p-2"><a href="{{ route('ppdb') }}" class="w-full text-lg @requestRoute('ppdb') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline">PPDB</a></li>
		<li class="p-2"><a href="{{ route('blog') }}" class="w-full text-lg @requestRoute('blog') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline">Blog</a></li>
		<li class="p-2"><a href="{{ route('kontak') }}" class="w-full text-lg @requestRoute('kontak') font-bold text-blue-700 dark:text-blue-600 @endrequestRoute focus:underline">Kontak</a></li>
    <li class="p-2">
      <x-small.toggle-dark-mode />
    </li>
    @auth
    <hr role="none" class="my-2 border-outline dark:border-slate-700">
    {{-- todo dashboard --}}
		<li class="p-2"><a href="{{ route('dashboard.home') }}" class="w-full text-slate-700 focus:underline dark:text-slate-300">Dashboard</a></li>
    {{-- todo logout --}}
    <button @click="modalLogoutIsOpen = true" class="mt-4 w-full border-none rounded-xl bg-blue-700 py-2 block text-center px-4 font-medium tracking-wide text-slate-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">
      Log Out
    </button>
    @endauth
	</ul>
</nav>
