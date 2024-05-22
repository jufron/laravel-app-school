<x-partials.layout title="testimoni" pageState="Testimoni">
  <element
    id="data_testimoni"
    x-data="{
      images: '',
    }"
  >
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <!-- Breadcrumb Start -->
      <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
          Testimoni
        </h2>
      </div>
      <!-- Breadcrumb End -->

      <!-- ====== Table Section Start -->
      <div class="flex flex-col gap-10">
        <!-- ====== Table One Start -->
        <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
          <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
            Edit Testimoni
          </h4>
          <form action="{{ route('dashboard.testimoni.update', $testimonial) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            {{-- ? preview images --}}
            <div class="w-20 h-20 bg-gray-200 bg-slate-200 dark:bg-slate-800 mt-4 rounded-md flex items-center justify-center">
              <template x-if="images">
                <img x-bind:src="images" alt="Uploaded Image" class="object-cover w-full h-full rounded-md">
              </template>
              <template x-if="!images">
                @if ($testimonial->image)
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Uploaded Image" class="object-cover w-full h-full rounded-md">
                @else
                <div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex justify-center items-center text-xs rounded-md">No Image</div>
                @endif
              </template>
            </div>
            {{-- ? end preview images --}}

            {{--? input file --}}
            <x-small.input.input-file
              className="my-4"
              label="Foto Profil"
              name="image"
              fileType="images"
            />
            {{--? end input file --}}

            {{-- ? input --}}
            <x-small.input.input
              className=""
              label="Nama Lengkap"
              type="text"
              placeholder="Masukan Nama Lengkap"
              name="name"
              value="{{ old('name', $testimonial->name) }}"
            />
            {{-- ? end input --}}

            {{-- ? input textarea --}}
            <x-small.input.input-textarea
              placeholder="Masukan Pesan Testimoni"
              value="{{ old('message', $testimonial->message) }}"
              label="Pesan Testimoni"
              name="message"
            />
            {{-- ? end input textarea --}}

            <x-small.button.button
              className="text-md my-4 font-medium bg-green-600 px-8 py-3 hover:bg-opacity-90 hover:bg-green-700 rounded-lg text-center transition duration-500 text-white"
              title="Perbaharui"
            />
          </form>
        </div>
        <!-- ====== Table One End -->
      </div>
      <!-- ====== Table Section End -->
    </div>
  </element>
</x-partials.layout>
