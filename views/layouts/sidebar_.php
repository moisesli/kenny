<!-- Navbar -->
<nav class="flex flex-col bg-gray-200 dark:bg-gray-900 w-64 px-12 pt-4 pb-6">

  <!-- SideNavBar -->

  <div class="flex flex-row border-b items-center justify-between pb-2">
    <!-- Hearder -->
    <span class="text-lg font-semibold capitalize dark:text-gray-300">
      Facturador
    </span>

    <span class="relative ">
      <a class="hover:text-green-500 dark-hover:text-green-300
    text-gray-600 dark:text-gray-300" href="inbox/">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
          <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
        </svg>
      </a>
      <div class="absolute w-2 h-2 rounded-full bg-green-500
    dark-hover:bg-green-300 right-0 mb-5 bottom-0"></div>
    </span>

  </div>

  <div class="mt-8">
    <!-- User info -->
    <img class="h-12 w-12 rounded-full object-cover" src="https://appzzang.me/data/editor/1608/f9c387cb6bd7a0b004f975cd92cbe2d9_1471626325_6802.png" alt="enoshima profile" />
    <h2 class="mt-4 text-xl dark:text-gray-300 font-extrabold capitalize">
      Moises L.
    </h2>
    <span class="text-sm dark:text-gray-300">
      <span class="font-semibold text-green-600 dark:text-green-300">
        Usuario
      </span>
      id789038
    </span>
  </div>


  <a href="/views/docs/new.php" class="mt-8 flex items-center justify-between py-3 px-3 text-white dark:text-gray-200 bg-green-400 dark:bg-green-500 rounded-lg shadow">
    <!-- Action -->
    <span>Nueva Factura</span>
    <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
      <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
    </svg>
  </a>

  <ul class="mt-2 text-gray-600">

    <!-- Documentos -->
    <li class="mt-8 shadow py-2 bg-white dark:bg-gray-200 rounded-lg -ml-4">
      <a href="../docs/" class="flex pl-4">
        <svg class="fill-current h-5 w-5 dark:text-gray-300" viewBox="0 0 24 24">
          <path d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6 4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6 4h4v-4h-4M4 8h4V4H4v4z"></path>
        </svg>
        <span class="ml-2 capitalize font-medium text-black dark:text-gray-300">
          Documentos
        </span>
      </a>
    </li>

    <!-- Productos -->
    <li class="mt-8">
      <a href="#home" class="flex">
        <svg class="fill-current h-5 w-5 dark:text-gray-300" viewBox="0 0 24 24">
          <path d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2h-1V1m-1 11h-5v5h5v-5z"></path>
        </svg>
        <span class="ml-2 capitalize font-medium text-black dark:text-gray-300">
          Productos
        </span>
      </a>
    </li>

    <!-- Empresas -->
    <li class="mt-8">
      <a href="../empresas/" class="flex">
        <i class="fas fa-users fill-current h-5 w-5 dark:text-gray-300"></i>
        <span class="ml-2 capitalize font-medium">Empresas</span>
      </a>
    </li>

    <!-- Clientes -->
    <li class="mt-8">
      <a href="../clientes/" class="flex">
        <i class="fas fa-user fill-current"></i>
        <span class="ml-2 capitalize font-medium">
          Clientes
        </span>
      </a>
    </li>

  </ul>

  <div class="mt-auto flex items-center text-red-700 dark:text-red-400">
    <!-- important action -->
    <a href="#home" class="flex items-center">
      <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
        <path d="M16 17v-3H9v-4h7V7l5 5-5 5M14 2a2 2 0 012 2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2h9z"></path>
      </svg>
      <span class="ml-2 capitalize font-medium">Cerrar Session</span>
    </a>

  </div>
</nav>