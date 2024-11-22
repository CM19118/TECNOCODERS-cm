@php
    $about = App\Models\About::first(); // Obtén el primer registro
@endphp

@if($about)
<div class="bg-grey-50" id="about">
    <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
        <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
            <h2 class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                {{ $about->title }}
            </h2>
            <p class="pt-6 font-body leading-relaxed text-grey-20">
                {{ $about->description }}
            </p>
        </div>
        <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
            <!-- Aquí podrías agregar barras de habilidades dinámicas en el futuro -->
        </div>
    </div>
</div>
@endif
