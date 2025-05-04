@extends('Layout.app')
@section('content')

<section class="bg-green-100 py-8">
<div class="max-w-5xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold text-center">Pengelolaan Bibit</h2>
</div>
</section>

<section class="py-6">
<div class="max-w-6xl mx-auto px-4 overflow-x-auto">
    <table class="min-w-full bg-green-200 border border-black text-sm md:text-base">
        <thead class="bg-green-300 border-black">
            <tr>
                <th class="text-left p-3">No</th>
                <th class="text-left p-3">Tanggal Tanam</th>
                <th class="text-left p-3">Tanggal Panen</th>
                <th class="text-left p-3">Nama Bibit</th>
                <th class="text-left p-3">Jumlah Tanam</th>
                <th class="text-left p-3">Jumlah Panen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bibitData as $index => $bibit)
            <tr class="border-black">
                <td class="p-3">{{ $index + 1 }}.</td>
                <td class="p-3">{{ $bibit['tanggal_tanam'] }}</td>
                <td class="p-3">{{ $bibit['tanggal_panen'] }}</td>
                <td class="p-3">{{ $bibit['nama_bibit'] }}</td>
                <td class="p-3 font-bold">{{ $bibit['jumlah_tanam'] }}</td>
                <td class="p-3 font-bold">{{ $bibit['jumlah_panen'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
@endsection
