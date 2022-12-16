@extends('user.layouts.master')
@section('content')
     <section id="undangan" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="text-base text-center font-bold text-primary md:text-xl">
                       Edit Data Undangan
                    </h1>
                    <form action="{{ route('undangan.update', $undangan->id) }}" method="post">
                @csrf
                @method('PUT')
                        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                            <div class="relative z-0 mb-6 w-full group">
                                <input type="text" value="{{ Auth::user()->id }}" name="user_id"  id="user_id" class="hidden cursor-not-allowed block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="{{ Auth::user()->name }}" required />
                                <label for="user_id" class="hidden peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Pemilik</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <label class="block mt-4 text-sm">
                                    <span class="text-gray-700">
                                    Pilih Kategori
                                    </span>
                                    <select
                                    class="block w-full mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                                    name="kategori_id" value="{{ $undangan->kategori_id }}">
                                    @foreach ($data_kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <input value="{{ $undangan->judul }}" type="text" name="judul" id="judul" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="judul" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <input value="{{ $undangan->deskripsi }}" type="text" name="deskripsi" id="deskripsi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="deskripsi" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <input value="{{ $undangan->waktu }}" type="date" name="waktu" id="waktu" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="waktu" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Waktu</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <input value="{{ $undangan->jam }}" type="time" name="jam" id="jam" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="jam" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jam</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <input value="{{ $undangan->tempat }}" type="text" name="tempat" id="tempat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="tempat" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat</label>
                            </div>
                            {{-- <div class="relative z-0 mb-6 w-full group">
                                <input value="{{ $undangan->susunan_acara }}" type="text" name="susunan_acara" id="susunan_acara" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="susunan_acara" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Susunan Acara</label>
                            </div> --}}
                            <a href="{{ route('undangan.index') }}" class="bg-red-100 text-red-500 font-bold rounded-md py-3 px-5 mb-10 text-xs" >Kembali</a>
                            <button type="submit" class="bg-yellow-100 text-yellow-500 font-bold rounded-md py-3 px-5 mx-5 text-xs" >Edit</button>
                        </div>
                  
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection