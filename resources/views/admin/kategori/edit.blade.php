@extends('admin.layouts.master')
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">Tambah Data Kategori</h2>
            <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                    <div class="relative z-0 mb-6 w-full group">
                        <input value="{{ $kategori->nama_kategori }}" type="nama_kategori" name="nama_kategori" id="nama_kategori" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="nama_kategori" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Kategori</label>
                    </div>
                    <a href="{{ route('kategori.index') }}" class="bg-red-100 text-red-500 font-bold rounded-md py-3 px-5 mb-10 text-xs" >Kembali</a>
                    <button type="submit" class="bg-sky-100 text-sky-500 font-bold rounded-md py-3 px-5 mx-5 text-xs" >Tambah</button>
                </div>
            </form>
        </div>
    </main>
@endsection