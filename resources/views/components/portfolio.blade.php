<!--
<section id="portfolio" class="py-20 bg-gray-100">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-10">Mis Trabajos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="shadow-md rounded overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Trabajo 1" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Trabajo 1</h3>
                    <p class="text-gray-700">Descripción del proyecto.</p>
                </div>
            </div>
            <div class="shadow-md rounded overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Trabajo 2" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Trabajo 2</h3>
                    <p class="text-gray-700">Descripción del proyecto.</p>
                </div>
            </div>
            <div class="shadow-md rounded overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Trabajo 3" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Trabajo 3</h3>
                    <p class="text-gray-700">Descripción del proyecto.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container py-16 md:py-20" id="portfolio">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">Check out my Portfolio</h2>
    <div class="grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:grid-cols-2">
      <a href="/" class="mx-auto transform transition-all hover:scale-105">
        <img src="/assets/img/portfolio-apple.jpeg" class="w-full shadow" alt="portfolio image" />
      </a>
    </div>
  </div>
-->

@php
    $portfolios = App\Models\Portfolio::all(); // Obtén todos los registros
@endphp

<div class="container py-16 md:py-20" id="portfolio">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        Check out my Portfolio
    </h2>
    <div class="grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:grid-cols-2">
        @foreach ($portfolios as $portfolio)
            <a href="{{ $portfolio->link ?? '#' }}" class="mx-auto transform transition-all hover:scale-105">
                <img src="{{ $portfolio->image }}" class="w-full shadow" alt="{{ $portfolio->title }}" />
                <div class="pt-4 text-center">
                    <h3 class="text-lg font-semibold uppercase text-primary">{{ $portfolio->title }}</h3>
                    <p class="text-sm text-gray-600">{{ $portfolio->description }}</p>
                    @if ($portfolio->category)
                        <span class="text-sm text-gray-400">{{ $portfolio->category }}</span>
                    @endif
                </div>
            </a>
        @endforeach
    </div>
</div>
