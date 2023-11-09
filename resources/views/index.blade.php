@extends('frontend.app')

@section('content')
    <div class="min-h-screen py-20 lg:py-32 bg-gradient-to-br from-blue-100 via-white to-sky-100" id="home">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-center font-extrabold text-4xl lg:text-6xl mb-6">Catat <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-blue-700">Amplop</span>
                Kondanganmu
            </h1>
            <p class="mx-auto text-center text-lg 2xl:text-xl max-w-3xl font-normal leading-relaxed mb-8 lg:mb-12">
                Atur
                pengeluaran
                kondanganmu
                dengan
                lebih
                praktis dan simpel dengan Ngamplop
                otomatis di manage dan
                tertata untuk setiap orang yg kamu datangi</p>
            <div class="text-center mb-8">
                <a href="{{ route('register') }}"
                    class="py-4 2xl:px-20 px-12 bg-blue-500 border border-white rounded-lg text-lg text-white text-center font-semibold hover:bg-blue-400 hover:text-white">Mulai</a>
            </div>
            <div>
                <img src="{{ asset('img/amplop.png') }}" alt="amplop"
                    class="w-full h-full lg:max-w-lg 2xl:max-w-3xl mx-auto">
            </div>
        </div>
    </div>
    <div class="max-w-[1440px] py-32 mx-auto px-4 sm:px-6 lg:px-8" id="feature">
        <h3 class="text-center font-medium text-lg mb-4">Our Feature</h3>
        <p class="text-center font-bold text-xl lg:text-2xl mb-4 lg:mb-8">berbagai macam fitur menarik</p>
        <div class="w-full lg:flex justify-around">
            <div class="w-full py-4">
                <div class=" mx-auto mb-4 h-20 w-20 flex justify-center items-center bg-blue-50 rounded-full">
                    <span>
                        <i class="bi bi-hand-index" style="font-size: 2rem; color: #3b82f6"></i>
                    </span>
                </div>
                <h3 class="font-bold text-xl text-black text-center mb-2">Mudah Digunakan</h3>
                <p class="font-normal text-base text-gray-700 text-center">Mudah digunakan bagi pengguna</p>
            </div>
            <div class="w-full py-4">
                <div class=" mx-auto mb-4 h-20 w-20 flex justify-center items-center bg-blue-50 rounded-full">
                    <span>
                        <i class="bi bi-alarm" style="font-size: 2rem; color: #3b82f6"></i>
                    </span>
                </div>
                <h3 class="font-bold text-xl text-black text-center mb-2">Efisien Waktu</h3>
                <p class="font-normal text-base text-gray-700 text-center">Dapatkan penggunaan waktu yg singkat</p>
            </div>
            <div class="w-full py-4">
                <div class=" mx-auto mb-4 h-20 w-20 flex justify-center items-center bg-blue-50 rounded-full">
                    <span>
                        <i class="bi bi-people-fill" style="font-size: 2rem; color: #3b82f6"></i>
                    </span>
                </div>
                <h3 class="font-bold text-xl text-black text-center mb-2">Kelola User</h3>
                <p class="font-normal text-base text-gray-700 text-center">Dengan mudah mengatur dan mengelola user
                </p>
            </div>
        </div>
    </div>
@endsection
