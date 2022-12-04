@extends('user.layouts.master')
@section('content')
     <section id="tamu" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="text-base text-center font-bold text-primary md:text-xl">
                       Tambah Data Tamu
                    </h1>
                    <form action="{{ route('tamu.store') }}" method="post">
                @csrf
                        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                            <div class="relative z-0 mb-6 w-full group">
                                <input type="text" name="nama_tamu" id="nama_tamu" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="nama_tamu" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama tamu</label>
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <input type="email" name="email_tamu" id="email_tamu" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="email_tamu" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email tamu</label>
                            </div>
                            <a href="{{ route('tamu.index') }}" class="bg-red-100 text-red-500 font-bold rounded-md py-3 px-5 mb-10 text-xs" >Kembali</a>
                            <button type="submit" class="bg-sky-100 text-sky-500 font-bold rounded-md py-3 px-5 mx-5 text-xs" >Tambah</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection