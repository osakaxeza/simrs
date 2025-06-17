<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Kasir</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#76A9C5] text-white flex flex-col py-10 px-4 rounded-r-3xl">
      <nav class="space-y-4 font-semibold">
        <a href="{{ url('/dashboard') }}" class="flex items-center space-x-2 bg-sky-700 py-2 px-4 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Dashboard</span>
        </a>
        <a href="{{ url('/k_pendaftaran') }}" class="flex items-center space-x-2 hover:bg-sky-700 py-2 px-4 rounded-lg text-white">
          <img src="../assets/img/dashboard.png" alt="Icon Home" class="w-5 h-5">
          <span>Pendaftaran</span>
        </a>
        <a href="{{ url('/transaksi') }}" class="flex items-center space-x-2 py-2 px-4 text-white  hover:bg-sky-700 rounded-lg">
          <span class="material-icons">receipt</span>
          <span>Transaksi</span>
        </a>
        <a href="{{ url('/obatt') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg text-white hover:bg-sky-700">
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

    <!-- Profile Top Right -->
<div class="absolute top-4 right-6 flex items-center space-x-2">
  <img src="../assets/img/profile.png" alt="Profil" class="w-10 h-10 rounded-full border-2 border-white shadow">
</div>


    <!-- Main Content -->
    <main class="flex-1 p-10">
  <h1 class="text-3xl font-bold text-sky-800 mb-8">Selamat Datang, Kasir</h1>

  <!-- Rekap Card -->
  <h2 class="text-lg font-bold text-gray-700 mb-2">Aktivitas Hari Ini</h2>
  <div class="flex gap-4">
  <!-- Card 1 -->
  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64">
    <div>
      <p class="text-sm text-blue-900 font-medium">Total Pemasukan</p>
      <p class="text-2xl text-blue-900 font-semibold">RP</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/duit.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>

  <!-- Card 2 -->
  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64">
    <div>
      <p class="text-sm text-blue-900 font-medium">Transaksi Hari ini</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/transaksi.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>

  <!-- Card 3 -->
  <div class="flex justify-between items-center bg-white rounded-2xl shadow-md px-4 py-3 w-64">
    <div>
      <p class="text-sm text-blue-900 font-medium">Pasien Hari ini</p>
    </div>
    <div class="bg-gradient-to-br from-yellow-200 to-blue-400 rounded-xl p-[6px] flex items-center justify-center">
      <img src="../assets/img/pasien.png" alt="Icon" class="w-7 h-7">
    </div>
  </div>
</div>



<!-- Card Kecil -->
<div class="flex flex-row gap-10 flex-wrap mt-8">
    <div class="flex flex-col items-center bg-white rounded-2xl shadow-md p-4 w-28 mb-8">
    <div class="bg-gray-400 p-4 rounded-xl mb-2">
      <img src="../assets/img/daftar_obat.png" alt="Icon" class="w-8 h-8">
    </div>
    <p class="text-blue-700 text-sm text-center font-medium leading-tight">
      Transaksi Obat
    </p>
  </div>
  
  <div class="flex flex-col items-center bg-white rounded-2xl shadow-md p-4 w-28 mb-8">
    <div class="bg-gray-400 p-4 rounded-xl mb-2">
      <img src="../assets/img/transaksi1.png" alt="Icon" class="w-8 h-8">
    </div>
    <p class="text-blue-700 text-sm text-center font-medium leading-tight">
      Transaksi Layanan
    </p>
  </div>
  
  <div class="flex flex-col items-center bg-white rounded-2xl shadow-md p-4 w-28 mb-8">
    <div class="bg-gray-400 p-4 rounded-xl mb-2">
      <img src="../assets/img/daftar_obat.png" alt="Icon" class="w-8 h-8">
    </div>
    <p class="text-blue-700 text-sm text-center font-medium leading-tight">
      Daftar Obat
    </p>
  </div>
  
  <div class="flex flex-col items-center bg-white rounded-2xl shadow-md p-4 w-28 mb-8">
    <div class="bg-gray-400 p-4 rounded-xl mb-2">
      <img src="../assets/img/transaksi1.png" alt="Icon" class="w-8 h-8">
    </div>
    <p class="text-blue-700 text-sm text-center font-medium leading-tight">
      Daftar Layanan
    </p>
  </div>
  </div>



  <!-- Table Obat -->
  <section class="w-2/3 text-left">
        <h2 class="text-lg font-bold text-gray-700 mb-2">Transaksi Hari Ini</h2>
        <div class="bg-white rounded-xl shadow overflow-x-auto">
          <table class="min-w-full text-sm text-left border-collapse">
            <thead class="bg-blue-100 text-blue-900">
              <tr>
                <th class="px-4 py-2">NO Regis</th>
                <th class="px-4 py-2">RM</th>
                <th class="px-4 py-2">Nama Pasien</th>
                <th class="px-4 py-2">Jenis Kelamin</th>
                <th class="px-4 py-2">Layanan/Obat</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Jam</th>
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
