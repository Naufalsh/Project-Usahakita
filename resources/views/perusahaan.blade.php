<x-navbar></x-navbar>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Perusahaan</title>
</head>

<body class="bg-gray-100">

    <!-- Container utama -->
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Bagian Header -->
            <div class="bg-blue-900 rounded-lg shadow-lg overflow-hidden p-8 flex items-center justify-between">
                <div class="text-white">
                    <h1 class="text-3xl font-semibold">Temukan perusahaan yang tepat untuk Anda</h1>
                    <p class="mt-2 text-lg">Semua yang perlu diketahui tentang perusahaan, di satu tempat</p>
                </div>
                <img src="https://via.placeholder.com/150" alt="Person" class="h-32 w-32 rounded-full">
            </div>

            <!-- Form Pencarian -->
            <div class="mt-6 flex justify-center">
                <div class="flex w-full max-w-md">
                    <input type="text" placeholder="Cari perusahaan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-l-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded-r-lg hover:bg-blue-800">
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contoh Hasil Pencarian -->
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
            <!-- Card 1 -->
            <a href="#">
                <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="https://via.placeholder.com/100" alt="Danone Logo" class="w-16 h-16 mb-2">
                    <h2 class="text-lg font-semibold">Danone</h2>
                    <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                    <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                </div>
            </a>

            <!-- Card 2 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">20 Pekerjaan</button>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                <img src="https://via.placeholder.com/100" alt="Abbott Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Abbott</h2>
                <p class="text-gray-600">⭐ 4.3 • 40 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">4 Pekerjaan</button>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                <img src="https://via.placeholder.com/100" alt="IBM Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">IBM</h2>
                <p class="text-gray-600">⭐ 4.3 • 77 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">16 Pekerjaan</button>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                <img src="https://via.placeholder.com/100" alt="General Electric Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">General Electric</h2>
                <p class="text-gray-600">⭐ 4.4 • 7 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">4 Pekerjaan</button>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                <img src="https://via.placeholder.com/100" alt="General Electric Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">General Electric</h2>
                <p class="text-gray-600">⭐ 4.4 • 7 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">4 Pekerjaan</button>
            </div>
        </div>
    </div>

</body>

</html>
