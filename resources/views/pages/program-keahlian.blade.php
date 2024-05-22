<x-partialsFrond.layout title="program keahlian">
  <x-slot:content>
    <x-small.navbar />

    <div class="dark:bg-slate-900">
      <div class="container px-4 m-auto mb-16">
        <h1 class="py-10 text-4xl">Program Keahlian</h1>

        <!-- table -->
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="min-w-full">
                  <thead class="bg-gray-200 border-b dark:border-slate-700">
                    <tr>
                      <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                        No
                      </th>
                      <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                        Program Keahlian
                      </th>
                      <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                        Lama
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-white dark:bg-slate-800 dark:border-slate-700 border-b transition duration-300 ease-in-out hover:bg-gray-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Teknik Komputer dan Jaringan (TKJ)
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        3 Tahun
                      </td>

                    </tr>
                    <tr class="bg-white dark:bg-slate-800 dark:border-slate-700 border-b transition duration-300 ease-in-out hover:bg-gray-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Rekayasa Perangkat Lunak (RPL)
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        3 Tahun
                      </td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 dark:border-slate-700 border-b transition duration-300 ease-in-out hover:bg-gray-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Akuntansi
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        3 Tahun
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <x-small.footer />
    </div>

  </x-slot>
</x-partialsFrond.layout>
