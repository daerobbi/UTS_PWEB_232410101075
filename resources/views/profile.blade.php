@extends('Layout.app')

@section('content')
<div class="max-w-screen-xl mx-auto flex flex-col items-center justify-center px-6 py-16 space-y-12">
    <div class="flex flex-col items-center space-y-6 w-full">
        <img src="img/foto_profile.png" alt="Profil Image" class="w-80 h-80 rounded-full border-4 border-green-300 object-cover">

        <div class="text-center">
            <h1 class="text-3xl font-bold text-green-800">{{ $user['username'] }}</h1>
            <p class="text-lg text-green-600">Email : {{ $user['email'] }}</p>
            <p class="text-lg text-green-600">Lokasi : {{ $user['lokasi'] }}</p>
        </div>
    </div>

    <div class="w-full text-center">
        <h2 class="text-2xl font-semibold text-green-700">Tentang Saya</h2>
        <p class="mt-2 text-green-700">{{ $user['tentang'] }}</p>
    </div>

    <div class="w-full bg-green-100 p-6 rounded-lg">
        <h3 class="text-xl font-semibold text-green-700 text-center">Informasi Profil</h3>
        <ul class="list-disc list-inside mt-4 text-green-600 text-center">
            <li>Bidang : {{ $user['bidang'] }}</li>
            <li>Pengalaman : {{ $user['pengalaman'] }}</li>
            <li>Spesialisasi : {{ $user['spesialisasi'] }}</li>
        </ul>
    </div>

    <div class="w-full flex justify-center">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="px-8 py-3 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection
