<x-guest-layout>
    @push('addedCss')
  <style>
    /* Gradasi latar belakang animasi */
    @keyframes gradient-fade {
      0%, 100% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
    }

    .animated-gradient {
      background: linear-gradient(-45deg, #76A9C5, #5a8ca7, #88cde0, #a0d2e7);
      background-size: 400% 400%;
      animation: gradient-fade 12s ease infinite;
    }
  </style>
    @endpush('addedCss')
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden w-[90%] max-w-4xl flex">
    
    <!-- Gambar Kiri -->
    <div class="w-1/2 hidden md:block">
      <img src="https://ti054a03.agussbn.my.id/img/rumahsakit.jpg" alt="Hospital" class="h-full w-full object-cover"/>
    </div>

    <!-- Form Login Kanan -->
    <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
      <h2 class="text-2xl font-bold text-[#76A9C5] mb-6 text-center">Selamat Datang di SIMRS</h2>

      @if (Route::has('login'))
        @auth
          <a href="{{ url('/dashboard') }}"
            class="block text-center px-5 py-2 text-white bg-[#76A9C5] hover:bg-[#5a8ca7] rounded-full text-sm transition font-medium">
            Dashboard
          </a>
        @else
          <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" name="email" id="email" required
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-[#76A9C5] focus:border-[#76A9C5]"/>
            </div>

            <div>
              <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
              <input type="password" name="password" id="password" required
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-[#76A9C5] focus:border-[#76A9C5]"/>
            </div>

            <button type="submit"
              class="w-full px-4 py-2 bg-[#76A9C5] text-white rounded-full hover:bg-[#5a8ca7] transition font-medium">
              Masuk
            </button>
          </form>

          @if (Route::has('register'))
            <p class="text-center mt-4 text-sm">
              Belum punya akun?
              <a href="{{ route('register') }}" class="text-[#76A9C5] hover:underline">Daftar</a>
            </p>
          @endif
        @endauth
      @endif
    </div>

  </div>
</x-guest-layout>
