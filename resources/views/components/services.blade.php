<!--
<section id="services" class="py-20 bg-white">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-10">Servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6 shadow-md rounded">
                <i class="text-blue-500 text-4xl mb-4">🌟</i>
                <h3 class="text-xl font-bold mb-2">Servicio 1</h3>
                <p class="text-gray-700">Descripción breve del servicio.</p>
            </div>
            <div class="text-center p-6 shadow-md rounded">
                <i class="text-blue-500 text-4xl mb-4">🚀</i>
                <h3 class="text-xl font-bold mb-2">Servicio 2</h3>
                <p class="text-gray-700">Descripción breve del servicio.</p>
            </div>
            <div class="text-center p-6 shadow-md rounded">
                <i class="text-blue-500 text-4xl mb-4">💻</i>
                <h3 class="text-xl font-bold mb-2">Servicio 3</h3>
                <p class="text-gray-700">Descripción breve del servicio.</p>
            </div>
        </div>
    </div>
</section>
-->
<!-- 
<div class="container py-16 md:py-20" id="services">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">Here's what I'm good at</h2>
    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 lg:grid-cols-3">
      <div class="group rounded px-8 py-12 shadow hover:bg-primary">
        <div class="mx-auto h-24 w-24 text-center">
          <img src="/assets/img/icon-development-black.svg" alt="development icon" />
        </div>
        <div class="text-center">
          <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">Web Development</h3>
        </div>
      </div>
    </div>
</div>
-->

@php
    $services = App\Models\Service::all(); // Obtén todos los servicios
@endphp

<div class="container py-16 md:py-20" id="services">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        Here's what I'm good at
    </h2>
    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 lg:grid-cols-3">
        @foreach ($services as $service)
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center">
                    <img src="{{ $service->icon }}" alt="{{ $service->title }}" />
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        {{ $service->title }}
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        {{ $service->description }}
                    </p>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Precio: ${{ number_format($service->price, 2) }}
                    </p>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Duración: {{ $service->duration }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
