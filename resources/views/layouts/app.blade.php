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
<body class="inter antialiased bg-[#0d0e11]">
   <header class="px-8 py-4 bg-[#0d0e11] border-b border-gray-800">
    <div class="flex items-center text-white justify-between mx-auto w-full max-w-7xl">
      <a href="/" class="flex items-center gap-2">
        <i class="bi bi-send-fill text-xl text-[#cff245]"></i> <span>SendIt</span>
      </a>
      <nav class="hidden md:flex text-sm gap-8">
        <a href="#" class="underline">Home</a>
        <a href="#" class="hover:underline">Features</a>
        <a href="#" class="hover:underline">Pricing</a>
        <a href="#" class="hover:underline">Blog</a>
      </nav>
      <a href="" class="text-sm py-1 px-4 border rounded-xl">
        Contact
      </a>
    </div>
  </header>
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