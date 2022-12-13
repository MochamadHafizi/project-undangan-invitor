@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
              Data User </h2>
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <a href="{{ route('dataUser.create') }}" class="flex items-center px-2 py-2 w-20 text-sm font-medium leading-5 text-sky-500 bg-sky-100 mb-5 rounded-lg focus:outline-none focus:shadow-outline-gray">Tambah User+</a>
                 @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-100"
                    >
                      <th class="px-4 py-3">Nama</th>
                      <th class="px-4 py-3">Email</th>
                      <th class="px-4 py-3">Tanggal Verifikasi</th>
                      <th class="px-4 py-3">Role</th>
                      <th class="px-4 py-3">Tanggal Dibuat</th>
                      <th class="px-4 py-3">Tanggal Diedit</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  @foreach ($dataUser as $item)
                  <tbody
                    class="bg-white divide-y"
                  >
                    <tr class="text-gray-700">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{ $item->name }}</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">{{ $item->email }}</td>
                      <td class="px-4 py-3 text-xs">{{ $item->email_verified_at }}</td>
                      <td class="px-4 py-3 text-sm">
                        <?php
                        if($item->is_admin == 0){?>
                         <span class="text-green-500 bg-green-100 px-3 rounded-md font-semibold">User</span>
                        <?php }else{ ?>
                          <span class="text-sky-500 bg-sky-100 px-3 rounded-md font-semibold">Admin</span>
                          <?php
                        }
                        ?>
                      </td>
                      <td class="px-4 py-3 text-sm">{{ $item->created_at }}</td>
                      <td class="px-4 py-3 text-sm">{{ $item->updated_at }}</td>
                      <td class="px-4 py-3">
                        <form action="{{ route('dataUser.destroy',$item->id) }}" method="Post">
                        <div class="flex items-center space-x-4 text-sm">
                          <a
                            href="{{ route('dataUser.edit',$item->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-yellow-500 bg-yellow-100 rounded-lg focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </a>
                          @csrf
                                @method('DELETE')
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-500 bg-red-100 rounded-lg focus:outline-none focus:shadow-outline-gray show_confirm"
                            aria-label="Delete" data-toggle="tooltip" title='Delete'
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </td>
                      </form>
                    </tr>
                  </tbody>
                   @endforeach
                </table>
              </div>
              
            </div>
        </div>
    </main>
@endsection