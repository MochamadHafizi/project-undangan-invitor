@extends('user.layouts.master')
@section('content')
    <section id="undangan" class="pt-36 mb-40">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="text-base text-center font-bold text-primary md:text-xl">
                        Data Undangan
                    </h1>
                        <div class="w-full overflow-x-auto">
                    <a href="{{ route('undangan.create') }}" class="flex items-center px-2 py-2 w-20 text-sm font-medium leading-5 text-sky-500 bg-sky-100 mb-5 rounded-lg focus:outline-none focus:shadow-outline-gray">Tambah</a>
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
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Pemilik</th>
                        <th class="px-4 py-3">Nama Tamu</th>
                        <th class="px-4 py-3">Kategori Undangan</th>
                        <th class="px-4 py-3">Judul</th>
                        <th class="px-4 py-3">Deskripsi</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Jam</th>
                        <th class="px-4 py-3">Tempat</th>
                        <th class="px-4 py-3">Susunan Acara</th>
                        <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    @foreach ($undangan as $item)
                    <tbody
                        class="bg-white divide-y"
                    >
                        <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">{{ ++$i }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->user->name }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->tamu->nama_tamu }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->kategori->nama_kategori }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->judul }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->deskripsi }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->waktu }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->jam }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->tempat }}</td>
                        <td class="px-4 py-3 text-sm">{{ $item->susunan_acara }}</td>
                        <td class="px-4 py-3">
                            <form action="{{ route('undangan.destroy',$item->id) }}" method="Post">
                            <div class="flex items-center space-x-4 text-sm">
                            <a
                                href="{{ route('undangan.edit',$item->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-yellow-500 bg-yellow-100 rounded-lg focus:outline-none focus:shadow-outline-gray"
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
                            <a
                                href="{{ route('undangan.show',$item->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-500 bg-green-100 rounded-lg focus:outline-none focus:shadow-outline-gray"
                                aria-label="Edit"
                            >
                                <i class="bi bi-eye-fill"></i>
                            </a>
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
        </div>
    </section>
@endsection