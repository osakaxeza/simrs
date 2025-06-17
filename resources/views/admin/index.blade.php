<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#76A9C5] text-white flex flex-col py-10 px-4 rounded-r-3xl">
      <nav class="space-y-4 font-semibold">
        <a href="{{ url('/admin/dashboard') }}" class="flex items-center space-x-2 bg-sky-700 py-2 px-4 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Dashboard</span>
        </a>
        <a href="{{ url('/a_pendaftaran') }}" class="flex items-center space-x-2  py-2 px-4 hover:bg-sky-700 rounded-lg text-white">
          <img src="../assets/img/transaksi1.png" alt="Icon Home" class="w-5 h-5">
          <span>Pendaftaran</span>
        </a>
        <a href="{{ url('/a_transaksi') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700 rounded-lg">
          <span class="material-icons">receipt</span>
          <span>Transaksi</span>
        </a>
        <a href="{{ url('obat') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg text-white hover:bg-sky-700 ">
          <img src="../assets/img/daftar_obat.png" alt="Icon Obat" class="w-5 h-5">
          <span>Daftar Obat</span>
        </a>
        <a href="{{ url('dlayanan') }}" class="flex items-center space-x-2 py-2 px-4 text-white hover:bg-sky-700">
          <span class="material-icons">medical_services</span>
          <span>Daftar Layanan</span>
        </a>
        <a href="" class="flex items-center space-x-2 py-2 px-4 text-white">
          <span class="material-icons">receipt</span>
          <span>Riwayat Transaksi</span>
        </a>
        <a href="{{ url('/a_kelolaakun') }}" class="flex items-center space-x-2 py-2 px-4 text-white">
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

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <h1 class="text-2xl font-bold text-gray-800 mb-6">Selamat Datang, Admin Kasir</h1>

      <!-- Rekap Card -->
      <h1 class="text-lg font-bold text-gray-700 mb-2">Rekap Hari Ini</h1>

      <!-- Rekap Hari Ini -->
<div class="flex flex-wrap gap-4 mb-6">
  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64 flex wrap mt-3">
    <div>
      <p class="text-sm text-blue-900 font-medium">Pemasukan Hari Ini</p>
      <p class="text-2xl text-blue-900 font-semibold">RP</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/duit.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>

  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64">
    <div>
      <p class="text-sm text-blue-900 font-medium">Transaksi Hari Ini</p>
      <p class="text-2xl text-blue-900 font-semibold">RP</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/transaksi.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>

  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64">
    <div>
      <p class="text-sm text-blue-900 font-medium">Pasien Hari Ini</p>
      <p class="text-2xl text-blue-900 font-semibold">RP</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/pasien.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>
</div>


      <h1 class="text-lg font-bold text-gray-700 mb-2">Rekap Bulan Ini</h1>
      <!-- Rekap Bulan Ini -->
<div class="flex flex-wrap gap-4">
  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64 flex-wrap mt-3">
    <div>
      <p class="text-sm text-blue-900 font-medium">Pemasukan Bulan Ini</p>
      <p class="text-2xl text-blue-900 font-semibold">RP</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/duit.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>

  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64">
    <div>
      <p class="text-sm text-blue-900 font-medium">Transaksi Bulan Ini</p>
      <p class="text-2xl text-blue-900 font-semibold">RP</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/transaksi.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>
</div>


      <!-- Table Obat -->
      <section class="w-2/3 text-left flex flex-col mt-5">
        <h2 class="text-lg font-bold text-gray-700 mb-2">Obat & Stok</h2>
        <div class="bg-white rounded-xl shadow overflow-x-auto">
          <table class="min-w-full text-sm text-left border-collapse">
            <thead class="bg-blue-100 text-blue-900 rounded-t-xl">
              <tr>
                <th class="px-4 py-2">ID Obat</th>
                <th class="px-4 py-2">Nama Obat</th>
                <th class="px-4 py-2">Kategori</th>
                <th class="px-4 py-2">Harga</th>
                <th class="px-4 py-2">Stok</th>
              </tr>
            </thead>
            <tbody>
              <!-- Isi akan diisi oleh JavaScript -->
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

  <!-- Script untuk mengambil data obat -->
  <script>
    fetch('../backend/get_obat.php')
      .then(response => response.json())
      .then(data => {
        const tbody = document.querySelector("tbody");
        tbody.innerHTML = "";
        data.forEach(obat => {
          const tr = document.createElement("tr");
          tr.className = "border-t";
          tr.innerHTML = `
            <td class="px-4 py-2">${obat.id_obat}</td>
            <td class="px-4 py-2">${obat.nama_obat}</td>
            <td class="px-4 py-2">${obat.kategori}</td>
            <td class="px-4 py-2">${obat.harga}</td>
            <td class="px-4 py-2">${obat.stok}</td>
          `;
          tbody.appendChild(tr);
        });
      })
      .catch(error => {
        console.error("Gagal mengambil data obat:", error);
      });
  </script>
</body>
</html>
