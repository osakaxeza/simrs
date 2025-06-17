<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran</title>
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
        <a href="{{ url('/k_pendaftaran') }}" class="flex items-center space-x-2  py-2 px-4 bg-sky-700 rounded-lg text-white">
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
      <h2 class="text-3xl font-bold text-sky-800 mb-6">Pendaftaran</h2>

      <!-- Input Pencarian dan Dropdown Kategori -->
<div class="mb-4 flex justify-between items-center">
  <!-- Input Cari -->
  <input type="text" placeholder="Cari Layanan" class="w-1/3 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500">

  <!-- Dropdown Kategori -->
  <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500">
    <option value="">Semua Kategori</option>
    <option value="umum">Umum</option>
    <option value="gigi">Gigi</option>
    <option value="anak">Anak</option>
    <!-- Tambah opsi lain sesuai kebutuhan -->
  </select>
</div>


      <!-- Tabel Layanan -->
      <div class="overflow-x-auto max-w-7xl">
        <table class="w-full bg-white border border-gray-300 rounded-xl overflow-hidden">
          <thead class="bg-[#76A9C5] text-white">
            <tr>
              <th class="py-2 px-4 text-center">No Pendaftaran</th>
              <th class="py-2 px-4 text-center">Rekam Media</th>
              <th class="py-2 px-4 text-center">Nama Pasien</th>
              <th class="py-2 px-4 text-center">Unit</th>
              <th class="py-2 px-4 text-center">Status</th>
              <th class="py-2 px-4 text-center">Aksi</th>
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
<!DOCTYPE html>