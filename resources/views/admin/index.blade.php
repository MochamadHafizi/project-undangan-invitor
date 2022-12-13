@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
<main class="">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Dashboard
            </h2>
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full"
                >
                  <i class="bi bi-people-fill"></i>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600"
                  >
                    Total User
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700"
                  >
                    {{ $users }}
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs"
              >
                <div
                  class="p-3 mr-4 text-green-500 bg-green-100 rounded-full"
                >
                 <i class="bi bi-envelope-fill"></i>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600"
                  >
                    Total Undangan
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700"
                  >
                    {{ $invite }}
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs"
              >
                <div
                  class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full"
                >
                  <i class="bi bi-microsoft"></i>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600"
                  >
                    Total Kategori
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700"
                  >
                    {{ $kategori }}
                  </p>
                </div>
              </div> 
            </div>
          </div>
        </main>
        @endsection