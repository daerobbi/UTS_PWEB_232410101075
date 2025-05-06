@extends('Layout.app')
@section('content')
<section class="max-w-[1600px] mx-auto flex flex-col-reverse lg:flex-row items-center justify-center min-h-[80vh] -mt-8 px-6 py-16">
    <div class="lg:w-1/2 mt-10 lg:mt-0 text-center lg:text-left">
        <h1 class="text-4xl md:text-5xl font-light mb-4">Selamat Datang, <span class="font-bold">{{ request()->query('username', 'Rekan Tani') }}!</span></h1>
        <h2 class="text-4xl md:text-5xl font-bold text-green-700 mb-6">Di AgriHive</h2>
        <p class="text-gray-700 mb-8 text-base md:text-lg">
            <span class="font-bold">AgriHive</span> adalah platform web pengelolaan stok bibit yang dirancang khusus untuk membantu petani dalam memantau, mencatat, dan mengelola ketersediaan bibit secara efisien. Dengan AgriHive, petani dapat memastikan pasokan bibit selalu tersedia sesuai kebutuhan, mengurangi risiko kekurangan atau kelebihan stok, serta memperlancar proses distribusi bibit ke berbagai lokasi. Sistem ini juga memudahkan pencatatan keluar-masuk bibit, pemantauan stok secara real-time, dan pembuatan laporan yang membantu dalam pengambilan keputusan yang lebih baik dan tepat sasaran.</p>
        <a href="{{ route('pengelolaan') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black max-w-[250px] min-w-[150px] py-4 rounded-full flex items-center justify-center space-x-2 text-lg">
            <span>Lihat Stok Bibit Anda</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
<div class="lg:w-1/2 flex justify-center">
    <img src="img/foto_orang.png" alt="Rekan Tani" class="w-full h-auto rounded-lg">
</div>
@endsection
