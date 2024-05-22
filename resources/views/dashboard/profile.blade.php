<x-partials.layout
  title="profile"
  pageState="Profile"
  >
  <div
    x-data="{
      modalDeletAcountIsOpen : false,
      modalToasStatus: false,
      dataMessage: ''
    }"
    x-init="
      window.flashMessage !== '' && window.flashMessage === 'password-updated'
        ? modalToasStatus = true
        : modalToasStatus = false;

        @if ($errors->userDeletion->isNotEmpty())
          modalDeletAcountIsOpen = true
        @endif
    "
    class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10"
    >
    <div class="mx-auto max-w-270">
      <!-- Breadcrumb Start -->
      <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
          Profile
        </h2>

        <nav>
          <ol class="flex items-center gap-2">
            <li>
              <a class="font-medium" href="#">Dashboard /</a>
            </li>
            <li class="font-medium text-primary">Profile</li>
          </ol>
        </nav>
      </div>

      {{-- ====== profile Section Start --}}
      <div class="grid grid-cols-5 gap-8">
        <div class="col-span-5 xl:col-span-3">
          <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
              <h3 class="font-medium text-black dark:text-white">
                Personal Information
              </h3>
            </div>
            <div class="p-7">
              <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
              </form>

              <form action="{{ route('profile.update') }}" method="post">
                @csrf
                @method('patch')

                <x-small.input.input
                  className=""
                  label="Username"
                  type="text"
                  placeholder="Enter your Username"
                  name="name"
                  disable="true"
                  value="{{ old('name', $user->name) }}"
                />

                <x-small.input.input
                  className=""
                  label="Email"
                  type="email"
                  placeholder="Enter your email address"
                  name="email"
                  disable="true"
                  value="{{ old('email', $user->email) }}"
                />
              </form>

              <form action="{{ route('password.update') }}" method="post">
                <h5 class="text-lg font-medium mt-10 dark:text-white">Update Password</h5>
                <p class="text-md mb-6 dark:text-white">Update your account's profile information and email address.</p>
                @csrf
                @method('put')

                <x-small.input.input
                  className=""
                  label="Current Password"
                  type="password"
                  placeholder="Enter your Current Password"
                  name="current_password"
                />
                <x-small.input.input
                  className=""
                  label="New Password"
                  type="password"
                  placeholder="Enter your New Password"
                  name="password"
                />

                <x-small.input.input
                  className=""
                  label="Confirmation Password"
                  type="password"
                  placeholder="Enter your Confirmation Password"
                  name="password_confirmation"
                />
                <x-small.button.button
                  className="text-md font-medium bg-green-600 px-8 py-3 hover:bg-opacity-90 hover:bg-green-700 rounded-lg text-center transition duration-500 text-white"
                  title="Update"
                />
              </form>

              <h5 class="text-lg font-medium mt-10 dark:text-white mb-2">Delete Account</h5>
              <p class="text-md mb-6 dark:text-white">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
              <x-small.button.button
                click="modalDeletAcountIsOpen"
                className="text-md font-medium bg-red-600 px-8 py-3 hover:bg-opacity-90 hover:bg-red-700 rounded-lg text-center transition duration-500 text-white"
                title="Delete Acount"
              />
            </div>
          </div>
        </div>
        <div class="col-span-5 xl:col-span-2">
          <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
              <h3 class="font-medium text-black dark:text-white">
                Your Photo
              </h3>
            </div>
            <div class="p-7">
              <form action="#">
                <div class="mb-4 flex items-center gap-3">
                  <div class="h-14 w-14 rounded-full">
                    <img src="src/images/user/user-03.png" alt="User">
                  </div>
                  <div>
                    <span class="mb-1.5 font-medium text-black dark:text-white">Edit your photo</span>
                    <span class="flex gap-2.5">
                      <button class="text-sm font-medium hover:text-primary">
                        Delete
                      </button>
                      <button class="text-sm font-medium hover:text-primary">
                        Update
                      </button>
                    </span>
                  </div>
                </div>

                <div id="FileUpload" class="relative mb-5.5 block w-full cursor-pointer appearance-none rounded border border-dashed border-primary bg-gray px-4 py-4 dark:bg-meta-4 sm:py-7.5">
                  <input type="file" accept="image/*" class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none">
                  <div class="flex flex-col items-center justify-center space-y-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-strokedark dark:bg-boxdark">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.99967 9.33337C2.36786 9.33337 2.66634 9.63185 2.66634 10V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H12.6663C12.8431 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V10C13.333 9.63185 13.6315 9.33337 13.9997 9.33337C14.3679 9.33337 14.6663 9.63185 14.6663 10V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V10C1.33301 9.63185 1.63148 9.33337 1.99967 9.33337Z" fill="#3C50E0"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5286 1.52864C7.78894 1.26829 8.21106 1.26829 8.4714 1.52864L11.8047 4.86197C12.0651 5.12232 12.0651 5.54443 11.8047 5.80478C11.5444 6.06513 11.1223 6.06513 10.8619 5.80478L8 2.94285L5.13807 5.80478C4.87772 6.06513 4.45561 6.06513 4.19526 5.80478C3.93491 5.54443 3.93491 5.12232 4.19526 4.86197L7.5286 1.52864Z" fill="#3C50E0"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 1.33337C8.36786 1.33337 8.66634 1.63185 8.66634 2.00004V10C8.66634 10.3682 8.36786 10.6667 7.99967 10.6667C7.63148 10.6667 7.33301 10.3682 7.33301 10V2.00004C7.33301 1.63185 7.63148 1.33337 7.99967 1.33337Z" fill="#3C50E0"></path>
                      </svg>
                    </span>
                    <p class="text-sm font-medium">
                      <span class="text-primary">Click to upload</span>
                      or drag and drop
                    </p>
                    <p class="mt-1.5 text-sm font-medium">
                      SVG, PNG, JPG or GIF
                    </p>
                    <p class="text-sm font-medium">
                      (max, 800 X 800px)
                    </p>
                  </div>
                </div>

                <div class="flex justify-end gap-4.5">
                  <button class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white" type="submit">
                    Cancel
                  </button>
                  <button class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90" type="submit">
                    Save
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {{-- ====== profile Section End --}}
    </div>

    {{-- ? modal delete acount --}}
      <x-small.modal.modal state="modalDeletAcountIsOpen">
        <x-slot:modalContent>
          <form action="{{ route('profile.destroy') }}" method="POST">
              @csrf
              @method('delete')
              <div class="bg-white dark:bg-slate-900 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mt-3 sm:mt-0 sm:text-left">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">Delete Acount</h3>
                    <div class="mt-6">
                      <h2 class="text-md font-medium text-gray-900 dark:text-gray-100">
                          {{ __('Are you sure you want to delete your account?') }}
                      </h2>

                      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                          {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                      </p>

                      <x-small.input.input
                        className="mt-6"
                        label="Password"
                        type="password"
                        placeholder="Enter your Password"
                        name="password"
                        forID="password_modal"
                      />

                      @if ($errors->userDeletion->isNotEmpty())
                        @foreach ((array) $errors->userDeletion->get('password') as $message)
                          <div class="my-4 flex w-full border-l-6 border-red-500 bg-red-600 bg-opacity-[15%] p-1 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 px-6 py-4 rounded-lg">
                            <div class="w-full">
                              <p class="leading-relaxed text-red-400">
                                <li>{{ $message }}</li>
                              </p>
                            </div>
                          </div>
                        @endforeach
                      @endif

                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="submit" class="inline-flex w-full justify-center rounded-md bg-red-600 dark:bg-red-800 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-500 dark:hover:bg-red-700 sm:ml-3 sm:w-auto">Delete Permanently</button>
                <button @click="modalDeletAcountIsOpen = false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-slate-700 px-6 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
              </div>
          </form>
        </x-slot>
      </x-small.modal.modal>
    {{-- ? end modal delete acount --}}

    {{-- ? modal toast notification success --}}
    <x-small.modal.modal-toast
      time="6000"
      state="modalToasStatus"
      >
        <x-slot:modalContent>
          <div class="flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM8.293 9.293a1 1 0 011.414 0l2 2a1 1 0 01-1.414 1.414L10 11.414l-1.293 1.293a1 1 0 01-1.414-1.414l2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <p class="text-lg text-green-500">Successfull Updated!</p>
          </div>
            <div class="mt-4 text-center">
              <button @click="modalToasStatus = false " class="inline-block px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-md text-gray-700 font-semibold">Tutup</button>
            </div>
        </x-slot>
    </x-small.modal.modal-toast>
    {{-- ? end modal toast notification success --}}
  </div>

  <x-slot:footerOption>
    <script>
      window.flashMessage = "{{ session('status') }}";

    </script>
  </x-slot>
</x-partials.layout>
