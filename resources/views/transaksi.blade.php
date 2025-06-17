<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaksi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#76A9C5] text-white flex flex-col py-10 px-4 rounded-r-3xl">
      <nav class="space-y-4 font-semibold">
        <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2 py-2 px-4 hover:bg-sky-700 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Dashboard</span>
        </a>
        <a href="{{ url('/k_pendaftaran') }}" class="flex items-center space-x-2 hover:bg-sky-700 py-2 px-4 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Pendaftaran</span>
        </a>
        <a href="{{ url('/transaksi') }}" class="flex items-center space-x-2 py-2 px-4 text-white bg-sky-700 rounded-lg">
          <span class="material-icons">receipt</span>
          <span>Transaksi</span>
        </a>
        <a href="{{ url('/obatt') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg text-white hover:bg-sky-700 ">
          <img src="../assets/img/daftar_obat.png" alt="Icon Obat" class="w-5 h-5">
          <span>Daftar Obat</span>
        </a>
        <a href="{{ url('/dlayanann') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700 rounded-lg">
          <span class="material-icons">person</span>
          <span>Daftar Layanan</span>
        </a>
        <a href="{{ url('/laptransaksi') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700 rounded-lg">
          <span class="material-icons">settings</span>
          <span>Laporan Transaksi</span>
        </a>
        <a href="{{ url('/kelolaakun') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700 rounded-lg">
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

    <!-- Konten -->
    <main class="flex-1 p-8 overflow-y-auto">
      <h1 class="text-3xl font-bold text-sky-800 mb-6">Transaksi</h1>

      <!-- Input Nomor Pendaftaran -->
      <div class="mb-6">
        <label class="block font-semibold mb-2 text-sky-600">Masukkan Nomor Pendaftaran</label>
        <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 w-1/3 focus:outline-none focus:ring-2 focus:ring-[#76A9C5]" placeholder="Nomor Pendaftaran">
      </div>

      <!-- Data Pasien -->
<h2 class="text-lg font-semibold mb-2 text-sky-600">Data Pasien</h2>
<div class="bg-gray-100 p-6 rounded-xl shadow-md border w-fit mb-6">
  <div class="space-y-3">
    <div class="flex items-center">
      <label class="w-40 font-medium">RM</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Nama Dokter</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Unit</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Nama Pasien</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Jenis Kelamin</label>
      <span class="mr-2">:</span>
      <input type="text" class="border rounded-md px-3 py-1 w-56">
    </div>
    <div class="flex items-center">
      <label class="w-40 font-medium">Tanggal Kunjungan</label>
      <span class="mr-2">:</span>
      <input type="date" class="border rounded-md px-3 py-1 w-56">
    </div>
  </div>
</div>


      <!-- Daftar Obat dari Dokter -->
      <div class="mb-8">
        <h2 class="font-semibold text-lg mb-4 text-sky-500">Daftar Obat dari Dokter</h2>
        <div class="overflow-x-auto max-w-4xl">
          <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-blue-900 text-white">
              <tr>
                <th class="py-2 px-4 text-left">NO</th>
                <th class="py-2 px-4 text-left">Nama Obat</th>
                <th class="py-2 px-4 text-left">Jumlah</th>
                <th class="py-2 px-4 text-left">Harga</th>
              </tr>
            </thead>
            <tbody>
              <!-- Kosong -->
            </tbody>
          </table>
        </div>
      </div>

      <!-- Layanan yang Diterima -->
      <div class="mb-4">
        <h2 class="font-semibold text-lg mb-4 text-sky-500">Layanan yang diterima</h2>
        <div class="overflow-x-auto max-w-4xl">
          <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-blue-900 text-white">
              <tr>
                <th class="py-2 px-4 text-left">NO</th>
                <th class="py-2 px-4 text-left">Nama Layanan</th>
                <th class="py-2 px-4 text-left">Jumlah</th>
                <th class="py-2 px-4 text-left">Harga</th>
              </tr>
            </thead>
            <tbody>
              <!-- Kosong -->
            </tbody>
          </table>
        </div>
      </div>

      <!-- Total Keseluruhan -->
      <div class="mb-8 max-w-xs">
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
          <thead class="bg-blue-900 text-white">
            <tr>
              <th class="py-2 px-4 text-left">Total Keseluruhan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2 px-4">__________</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Metode Pembayaran -->
      <div class="mb-8">
        <h2 class="font-semibold text-lg mb-4">Metode Pembayaran</h2>
        <div class="space-x-6">
          <label><input type="radio" name="metode" class="mr-2">Cash</label>
          <label><input type="radio" name="metode" class="mr-2">Transfer</label>
          <label><input type="radio" name="metode" class="mr-2">Kartu Debit</label>
        </div>
      </div>

      <!-- Tombol -->
      <div class="fixed bottom-4 right-4 space-x-4"> 
        <button class="bg-red-200 text-sky-600 px-6 py-2 rounded-lg hover:bg-red-400">Batal</button>
        <button class="bg-stone-200 text-sky-600 px-6 py-2 rounded-lg hover:bg-green-300">Selesai</button>
      </div>
    </main>
  </div>
</body>
</html>
