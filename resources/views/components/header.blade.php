<!--
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 flex justify-between items-center py-4">
        <a href="#" class="text-lg font-bold">Logo</a>
        <nav class="space-x-4">
            <a href="#home" class="text-gray-700 hover:text-blue-500">Inicio</a>
            <a href="#services" class="text-gray-700 hover:text-blue-500">Servicios</a>
            <a href="#portfolio" class="text-gray-700 hover:text-blue-500">Trabajos</a>
            <a href="#about" class="text-gray-700 hover:text-blue-500">Nosotros</a>
            <a href="#contact" class="text-gray-700 hover:text-blue-500">Contáctanos</a>
        </nav>
    </div>
</header> 
-->

<div class="w-full z-50 top-0 py-3 sm:py-5 absolute">
    <div class="container flex items-center justify-between">
      <div>
        <a href="/">
          <img src="/assets/img/logo.svg" class="w-24 lg:w-48" alt="logo image" />
        </a>
      </div>
      <div class="hidden lg:block">
        <ul class="flex items-center">
          <li class="group pl-6">
            <span @click="$scroll('#about')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Acerca de</span>
            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
          </li>
          <li class="group pl-6">
            <span @click="$scroll('#services')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Servicios</span>
            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
          </li>
          <li class="group pl-6">
            <span @click="$scroll('#portfolio')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Portafolio</span>
            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
          </li>
          <li class="group pl-6">
            <span @click="$scroll('#work')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Proyectos Realizados</span>
            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
          </li>
          <li class="group pl-6">
            <span @click="$scroll('#contact')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Contactanos</span>
            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  