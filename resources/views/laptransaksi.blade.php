<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Obat</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
  <div class="flex h-screen">

    <!-- Sidebar -->
   <aside class="w-64 bg-[#76A9C5] text-white flex flex-col py-10 px-4 rounded-r-3xl">
      <nav class="space-y-4 font-semibold">
        <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2  py-2 px-4 hover:bg-sky-700 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Dashboard</span>
        </a>
        <a href="{{ url('/k_pendaftaran') }}" class="flex items-center space-x-2 hover:bg-sky-700 py-2 px-4 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Pendaftaran</span>
        </a>
        <a href="{{ url('/transaksi') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700 rounded-lg">
          <span class="material-icons">receipt</span>
          <span>Transaksi</span>
        </a>
        <a href="{{ url('/obatt') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg text-white hover:bg-sky-700 rounded-lg">
          <img src="../assets/img/daftar_obat.png" alt="Icon Obat" class="w-5 h-5">
          <span>Daftar Obat</span>
        </a>
        <a href="{{ url('/dlayanann') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700 rounded-lg">
          <span class="material-icons">person</span>
          <span>Daftar Layanan</span>
        </a>
        <a href="{{ url('/laptransaksi') }}" class="flex items-center space-x-2 py-2 px-4 text-white bg-sky-700 rounded-lg">
          <span class="material-icons">settings</span>
          <span>Laporan Transaksi</span>
        </a>
        <a href="" class="flex items-center space-x-2 py-2 px-4 text-white">
          <span class="material-icons">settings</span>
          <span>Kelola Akun</span>
        </a>
      </nav>
      <div class="mt-auto px-4">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <input type="submit" value="Logout" class="flex items-center space-x-2 py-2 px-4 text-white bg-red-500 rounded-lg hover:bg-red-600">
        </form>
      </div>
    </aside>

    <!-- Konten Kanan -->
    <main class="flex-1 p-8 overflow-auto">
      <h2 class="text-3xl font-bold text-sky-800 mb-6">Laporan Transaksi Kasir</h2>

        <!-- Input Pencarian -->
         <div class="flex items-center space-x-4 mt-4">
        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="border border-gray-300 rounded-lg px-3 py-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        <input type="date" id="tanggal_sampai" name="tanggal_sampai" class="border border-gray-300 rounded-lg px-3 py-2 shadow-sm focus:ring-blue-500 focus:border-blue-500">
        <button class=" text-black p-2 rounded-lg ">
            <span class="material-icons">search</span>
        </button>
        </div>



        <!-- Tabel Laporan Transaksi -->
         <!-- Data Pasien -->
<h2 class="text-lg font-semibold mb-2 text-sky-600">Ringkasan</h2>
<div class="bg-gray-100 p-6 rounded-xl shadow-md border w-fit mb-6">
  <div class="space-y-3">
    <div class="flex items-center">
      <label class="w-40 font-medium">Total Transaksi</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Pendapatan Obat</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Pendapatan Layanan</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Total Pendapatan</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
  </div>
</div>

    </main>
  </div>
</body>
</html>
