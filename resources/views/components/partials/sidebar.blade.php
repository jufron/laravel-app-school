<aside
  :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false">
  <!-- SIDEBAR HEADER -->
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="index.html">
      <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo" loading="lazy" />
    </a>

    <button
      class="block lg:hidden"
      @click.stop="sidebarToggle = !sidebarToggle"
     >
      <svg
        class="fill-current"
        width="20"
        height="18"
        viewBox="0 0 20 18"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
          fill=""
        />
      </svg>
    </button>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
    >
    <!-- Sidebar Menu -->
    <nav
      class="mt-5 px-4 py-4 lg:mt-9 lg:px-6">
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

        {{-- ? dashboard --}}
        <ul class="mb-6 flex flex-col gap-1.5">
          <x-small.nav-link.nav-link
            linkName="Dashboard"
            urlHref="{{ route('dashboard.home') }}"
          />

          {{-- ? aplikasi manajement --}}
          <x-small.nav-link.nav-link-dropdown
            title="Aplikasi manejement"
            pages="General | Banner | Galeri | Testimoni | Social Media | Telepon"
            >
            <x-small.nav-link.nav-link-item
            linkName="General"
            urlHref="{{ route('dashboard.general') }}"
            />
            <x-small.nav-link.nav-link-item
            linkName="Banner"
            urlHref="{{ route('dashboard.banner') }}"
            />
            <x-small.nav-link.nav-link-item
            linkName="Galeri"
            urlHref="{{ route('dashboard.galeri') }}"
            />
            <x-small.nav-link.nav-link-item
            linkName="Testimoni"
            urlHref="{{ route('dashboard.testimoni') }}"
            />
            <x-small.nav-link.nav-link-item
            linkName="Social Media"
            urlHref="{{ route('dashboard.social-media') }}"
            />
            <x-small.nav-link.nav-link-item
            linkName="Telepon"
            urlHref="{{ route('dashboard.telepon') }}"
            />
          </x-small.nav-link.nav-link-dropdown>

          {{-- ? blog manajement --}}
          <x-small.nav-link.nav-link-dropdown
            title="Blog manejement"
            pages="Blog | Kategory | Publish"
            >
            <x-small.nav-link.nav-link-item
              linkName="Kategory"
              urlHref="{{ route('dashboard.kategory') }}"
              />
            <x-small.nav-link.nav-link-item
              linkName="Blog"
              urlHref="{{ route('dashboard.blog') }}"
              />
            <x-small.nav-link.nav-link-item
            linkName="Publish"
            urlHref="{{ route('dashboard.publish') }}"
            />
          </x-small.nav-link.nav-link-dropdown>

          {{-- ? akademik --}}
          <x-small.nav-link.nav-link-dropdown
            title="Akademik"
            pages="Mata Pelajaran | Guru | Siswa"
            >
            <x-small.nav-link.nav-link-item
              linkName="Mata Pelajaran"
              urlHref="{{ route('dashboard.mata_pelajaran') }}"
            />
            <x-small.nav-link.nav-link-item
              linkName="Guru"
              urlHref="{{ route('dashboard.guru') }}"
            />
            <x-small.nav-link.nav-link-item
              linkName="Siswa"
              urlHref="{{ route('dashboard.siswa') }}"
            />
          </x-small.nav-link.nav-link-dropdown>

        </ul>
      </div>

      <!-- Others Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">OTHERS</h3>

        <ul class="mb-6 flex flex-col gap-1.5">

        </ul>
      </div>
    </nav>
    <!-- Sidebar Menu -->

  </div>
</aside>
