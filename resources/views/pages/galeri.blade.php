<x-partialsFrond.layout title="galeri">
  <x-slot:content>
    <x-small.navbar  alt="profile-image" loading="lazy" />

    <div class="dark:bg-slate-900">
      <div class="container px-4 m-auto">
        <h1 class="py-10 text-4xl">Galeri</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae harum a ea aperiam suscipit, maiores quas voluptate totam ratione assumenda quam perferendis modi recusandae tempore. Libero autem fugit vero.</p>

        <div class="p-5 sm:p-8">
          <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 lg:columns-4 [&>img:not(:first-child)]:mt-8" alt="profile-image">
            @foreach ($galery as $gal)
            <img class="rounded-lg" src='{{ asset("storage/$gal->image") }}' alt="profile-image" loading="lazy" />
            @endforeach
          </div>
        </div>

      </div>
    </div>

    <x-small.footer />
  </x-slot>
</x-partialsFrond.layout>
