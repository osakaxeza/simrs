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
        <a href="{{ url('/obatt') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg text-white bg-sky-700 rounded-lg">
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

    <!-- Konten Kanan -->
    <main class="flex-1 p-8 overflow-auto">
      <h2 class="text-3xl font-bold text-sky-800 mb-6">Daftar Obat</h2>

      <!-- Input Pencarian -->
      <div class="mb-4">
        <input type="text" placeholder="Cari Layanan" class="w-1/3 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500">
      </div>

      <!-- Tabel Layanan -->
      <div class="overflow-x-auto max-w-5xl">
        <table class="w-full bg-white border border-gray-300 rounded-xl overflow-hidden">
          <thead class="bg-[#76A9C5] text-white">
            <tr>
              <th class="py-2 px-4 text-left">ID Obat</th>
              <th class="py-2 px-4 text-left">Nama Obat</th>
              <th class="py-2 px-4 text-left">Kategori</th>
              <th class="py-2 px-4 text-left">Harga</th>
              <th class="py-2 px-4 text-left">Stok</th>
              <th class="py-2 px-4 text-left">Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Data akan dimasukkan di sini -->
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
