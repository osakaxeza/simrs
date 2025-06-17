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
        <a href="{{ url('/admin/dashboard') }}" class="flex items-center space-x-2 py-2 px-4 hover:bg-sky-700 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Dashboard</span>
        </a>
        <a href="{{ url('/a_pendaftaran') }}" class="flex items-center space-x-2 hover:bg-sky-700 py-2 px-4 rounded-lg text-white">
         <img src="../assets/img/transaksi1.png" alt="Icon Home" class="w-5 h-5">
          <span>Pendaftaran</span>
        </a>
        <a href="{{ url('/a_transaksi') }}" class="flex items-center space-x-2 py-2 px-4 text-white bg-sky-700 rounded-lg">
          <span class="material-icons">receipt</span>
          <span>Transaksi</span>
        </a>
        <a href="{{ url('/obat') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg text-white hover:bg-sky-700 ">
          <img src="../assets/img/daftar_obat.png" alt="Icon Obat" class="w-5 h-5">
          <span>Daftar Obat</span>
        </a>
        <a href="{{ url('/dlayanan') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700 rounded-lg">
          <span class="material-icons">person</span>
          <span>Daftar Layanan</span>
        </a>
        <a href="#" class="flex items-center space-x-2 py-2 px-4 text-white">
          <span class="material-icons">settings</span>
          <span>Riwayat Transaksi</span>
        </a>
        <a href="/a_kelolaakun" class="flex items-center space-x-2 py-2 px-4 text-white">
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
      <h2 class="text-3xl font-bold text-sky-800 mb-4">Akun Kasir</h2>

      <!-- Tombol Tambah -->
<div class="flex justify-end mb-2">
  <a href="{{ url('/akun/tambah') }}" class="bg-white hover:bg-stone-200 text-sky-800 px-4 py-1 rounded-lg shadow-md transition">
    Tambah +
  </a>
</div>


       <div class="overflow-x-auto max-w-full">
        <table class="w-full bg-white border border-gray-300 rounded-xl overflow-hidden">
          <thead class="bg-[#76A9C5] text-white">
            <tr>
              <th class="py-2 px-2 text-left">No</th>
              <th class="py-2 px-2 text-left">Nama Kasir</th>
              <th class="py-2 px-6 text-left">Username</th>
              <th class="py-2 px-2 text-left">Email</th>
              <th class="py-2 px-2 text-left">Aksi</th>
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
