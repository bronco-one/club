<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SendIt</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer=""></script>
  <link rel="icon" type="image/x-icon" href="./imgs/favico.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <style>
    .inter {
      font-family: "Inter", serif;
      font-weight: 400;
      font-style: normal;
    }
  </style>
</head>
<body class="inter antialiased bg-[#0C0F17]">
 <header class="px-8 py-4 bg-[#0C0F17] border-b border-gray-800 relative z-40">
    <div class="flex items-center text-white justify-between mx-auto w-full max-w-7xl">
      <!-- Logo -->
      <a href="/" class="flex items-center gap-2">
        <i class="bi bi-send-fill text-xl text-[#cff245]"></i> <span>SendIt</span>
      </a>

      <!-- Menu dla komputerów (desktop) -->
      <nav class="hidden md:flex items-center text-sm gap-8">
        <a href="{{ route('home') }}" class="underline">Home</a>
        <a href="{{ route('features') }}" class="hover:underline text-gray-300 hover:text-white transition-colors">Features</a>
        <a href="{{ route('pricing') }}" class="hover:underline text-gray-300 hover:text-white transition-colors">Pricing</a>
        <div class="flex items-center space-x-4">
          @auth
              <a href="{{ url('/dashboard') }}" class="text-green-400 font-medium">Panel Członka</a>
          @else
              <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors">Login</a>
              <!-- WERSJA 1: Neonowy przycisk dopasowany do logo -->
              <a href="{{ route('register') }}" class="bg-[#cff245] px-4 py-2 rounded text-[#0C0F17] font-semibold hover:bg-[#bce036] transition-colors">Registration</a>
          @endauth
        </div>
      </nav>

      <!-- Prawy przycisk Contact (na desktopie) / Hamburger (na mobile) -->
      <div class="flex items-center gap-4">
        <a href="" class="text-sm py-1 px-4 border border-gray-700 rounded-xl hidden md:inline-block hover:bg-white hover:text-black hover:border-white transition-colors">
          Contact
        </a>
        
        <!-- Przycisk Hamburger (widoczny tylko na mobile) -->
        <button id="open-menu-btn" class="text-white text-2xl focus:outline-none md:hidden p-1" aria-label="Open menu">
          <i class="bi bi-list"></i>
        </button>
      </div>
    </div>
</header>

<!-- TŁO PRZYCIEMNIAJĄCE (Overlay) -->
<div id="menu-overlay" class="fixed inset-0 bg-black/60 opacity-0 pointer-events-none transition-opacity duration-300 z-50"></div>

<!-- BOCZNY PANEL MOBILNY (Sidebar) -->
<div id="mobile-sidebar" class="fixed top-0 right-0 bottom-0 w-[300px] max-w-[85vw] bg-[#0C0F17] border-l border-gray-800 p-6 flex flex-col gap-6 translate-x-full transition-transform duration-300 ease-in-out z-50 text-white">
  
  <!-- Góra panelu: przycisk zamknij -->
  <div class="flex justify-end items-center">
    <button id="close-menu-btn" class="text-white text-3xl focus:outline-none p-1" aria-label="Close menu">
      <i class="bi bi-x"></i>
    </button>
  </div>

  <!-- Linki nawigacyjne w panelu -->
  <nav class="flex flex-col gap-5 text-lg">
    <a href="{{ route('home') }}" class="underline">Home</a>
    <a href="{{ route('features') }}" class="text-gray-300 hover:text-white transition-colors">Features</a>
    <a href="{{ route('pricing') }}" class="text-gray-300 hover:text-white transition-colors">Pricing</a>
    <a href="" class="text-gray-300 hover:text-white transition-colors">Contact</a>
  </nav>

  <hr class="border-gray-800 my-2">

  <!-- Sekcja logowania/rejestracji w panelu mobilnym -->
  <div class="flex flex-col gap-4">
    @auth
        <a href="{{ url('/dashboard') }}" class="text-green-400 text-center py-2 border border-green-400/30 rounded-lg bg-green-400/5">Panel Członka</a>
    @else
        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-center py-2 border border-gray-800 rounded-lg transition-colors">Login</a>
        <!-- WERSJA 1: Neonowy przycisk dopasowany do logo na mobile -->
        <a href="{{ route('register') }}" class="bg-[#cff245] px-4 py-2 rounded-lg text-[#0C0F17] hover:bg-[#bce036] text-center font-bold transition-colors">Registration</a>
    @endauth
  </div>
</div>

<!-- SKRYPT DO OBSŁUGI SIDEBARU -->
<script>
  const openBtn = document.getElementById('open-menu-btn');
  const closeBtn = document.getElementById('close-menu-btn');
  const sidebar = document.getElementById('mobile-sidebar');
  const overlay = document.getElementById('menu-overlay');

  function openMenu() {
    sidebar.classList.remove('translate-x-full');
    overlay.classList.remove('opacity-0', 'pointer-events-none');
    document.body.style.overflow = 'hidden'; // Blokuje scrollowanie strony w tle
  }

  function closeMenu() {
    sidebar.classList.add('translate-x-full');
    overlay.classList.add('opacity-0', 'pointer-events-none');
    document.body.style.overflow = ''; // Przywraca scrollowanie strony
  }

  openBtn.addEventListener('click', openMenu);
  closeBtn.addEventListener('click', closeMenu);
  overlay.addEventListener('click', closeMenu); // Kliknięcie w tło zamyka menu
</script>


      <main>
        @yield('content')
      </main>
  <footer class="px-8 py-20 flex flex-col gap-12">
    <div class="mx-auto max-w-5xl">
      <div>
        <div class="text-white">
          <div class="inline-flex items-center gap-3">
            <p class="text-2xl font-bold uppercase">SendIt</p>
          </div>
          <p class="mt-2 text-sm text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dignissimos deleniti qui voluptatem quis unde
            aliquam delectus, consequatur veritatis suscipit sit beatae accusamus quo blanditiis dicta magni! Quos, quae
            fuga.
          </p>
        </div>
      </div>
      <div class="flex flex-col pt-12 md:flex-row md:items-center md:justify-between">
        <p class="text-left">
          <span class="mx-auto mt-2 text-xs text-gray-500 lg:mx-0">
            © SendIt. All rights reserved
          </span>
        </p>
      </div>
    </div>
  </footer> 
</body>
</html>