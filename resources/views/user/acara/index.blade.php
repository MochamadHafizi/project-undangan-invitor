@extends('user.layouts.master')
@section('content')
@include('sweetalert::alert')
    <section id="tamu" class="pt-36 mb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="text-base text-center font-bold text-primary md:text-xl">
                        Data Acara
                    </h1>
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                
                <a href="{{ route('create_acara', $id) }}" class="flex items-center px-2 py-2 w-20 text-sm font-medium leading-5 text-sky-500 bg-sky-100 mb-5 rounded-lg focus:outline-none focus:shadow-outline-gray">Tambah Acara+</a>
                 @if ($message = Session::get('success'))
                   
                @endif
                <table class="w-full whitespace-no-wrap mb-30">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-100"
                    >
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">Id Undangan</th>
                      <th class="px-4 py-3">Nama Acara</th>
                      <th class="px-4 py-3">Jam</th>
                      <th class="px-4 py-3">Tanggal Dibuat</th>
                      <th class="px-4 py-3">Tanggal Diedit</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  @foreach ($acara as $item)
                  <tbody
                    class="bg-white divide-y"
                  >
                    <tr class="text-gray-700">
                      <td class="px-4 py-3 text-sm" scope="row">{{ ++$i }}</td>
                      <td class="px-4 py-3 text-sm">{{ $item->undangan_id }}</td>
                      <td class="px-4 py-3 text-sm">{{ $item->nama_acara }}</td>
                      <td class="px-4 py-3 text-sm">{{ $item->jam }}</td>
                      <td class="px-4 py-3 text-sm">{{ $item->created_at }}</td>
                      <td class="px-4 py-3 text-sm">{{ $item->updated_at }}</td>
                      <td class="px-4 py-3">
                        <form action="{{ route('delete_acara',['id_acara' => $item->id, 'id' => $id]) }}" method="Post">
                        <div class="flex items-center space-x-4 text-sm">
                          
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
                <a href="{{ route('undangan.index') }}" class="flex items-center px-2 py-2 w-20 text-sm font-medium leading-5 text-red-500 bg-red-100 mb-5 rounded-lg focus:outline-none focus:shadow-outline-gray mt-10">Kembali</a>
              </div>
            </div>             
            </div>
        </div>
    </section>
@endsection