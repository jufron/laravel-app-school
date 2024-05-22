<x-partialsFrond.layout title="daftar guru">
  <x-slot:content>
    <x-small.navbar />

    <div class="dark:bg-slate-900">
      <div class="container px-4 m-auto">
        <h1 class="py-10 text-4xl">Pengajar</h1>
      </div>

      <div class="flex px-10 pb-10 flex-wrap items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-5 gap-y-10">
          <x-small.card />
          <x-small.card />
          <x-small.card />
        </div>
      </div>
    </div>

    <x-small.footer />
  </x-slot>
</x-partialsFrond.layout>
