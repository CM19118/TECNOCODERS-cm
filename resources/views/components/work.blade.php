<!--
<div class="container py-16 md:py-20" id="work">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">My work experience</h2>
    <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
      <div class="mt-8 flex flex-col text-center md:flex-row">
        <div class="md:w-2/5">
          <img src="/assets/img/logo-spotify.svg" class="h-auto w-32" alt="company logo" />
        </div>
        <div class="md:w-3/5">
          <div class="mt-1 flex">
            <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">Frontend Developer</span>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
@php
    $works = App\Models\Work::all(); // Obtén los datos de experiencia laboral
@endphp

<div class="container py-16 md:py-20" id="work">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        My work experience
    </h2>
    <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
        @foreach ($works as $work)
            <div class="mt-8 flex flex-col text-center md:flex-row">
                <div class="md:w-2/5">
                    <img src="{{ $work->logo }}" class="h-auto w-32 mx-auto md:mx-0" alt="{{ $work->company }}" />
                </div>
                <div class="md:w-3/5">
                    <div class="mt-1 flex flex-col text-center md:text-left">
                        <span class="block font-header text-xl font-bold uppercase text-primary">
                            {{ $work->position }}
                        </span>
                        <span class="block font-body text-grey-40">
                            {{ $work->start_date ? \Carbon\Carbon::parse($work->start_date)->format('M Y') : 'Fecha no especificada' }} -
                            {{ $work->end_date ? \Carbon\Carbon::parse($work->end_date)->format('M Y') : 'Present' }}
                        </span>                        
                        @if ($work->description)
                            <p class="pt-2 font-body text-black">
                                {{ $work->description }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
