@extends('Layout.app')
@section('content')

<section class="bg-green-100 py-8">
<div class="max-w-5xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold text-center">Pengelolaan Bibit</h2>
</div>
</section>

<!-- Table -->
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
            <tr class="border-black">
                <td class="p-3">1.</td>
                <td class="p-3">22/04/2025</td>
                <td class="p-3">30/04/2025</td>
                <td class="p-3">Cabe Rawit</td>
                <td class="p-3 font-bold">125</td>
                <td class="p-3 font-bold">125</td>
            </tr>
            <tr class="border-black">
                <td class="p-3">2.</td>
                <td class="p-3">22/04/2025</td>
                <td class="p-3">1/05/2025</td>
                <td class="p-3">Terong Hijau</td>
                <td class="p-3 font-bold">125</td>
                <td class="p-3 font-bold">125</td>
            </tr>
            <tr>
                <td class="p-3">3.</td>
                <td class="p-3">22/04/2025</td>
                <td class="p-3">1/05/2025</td>
                <td class="p-3">Sawi</td>
                <td class="p-3 font-bold">125</td>
                <td class="p-3 font-bold">125</td>
            </tr>
        </tbody>
    </table>
</div>
</section>
@endsection
