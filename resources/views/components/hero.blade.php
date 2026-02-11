@props([
  'title',
  'subtitle' => null,
  'bg' => null,
  'leftImage' => null,
  'leftTitle' => null,
  'leftText' => null,
  'leftLinkHref' => '#',
  'leftLinkLabel' => 'Read More →',
  'rightQuote' => null,
  'rightAuthor' => null,
  'rightMeta' => null,
])

<section 
{{ $attributes->merge([
'class' => ' relative w-[96%] min-h-[500px] md:min-h-[600px] lg:min-h-[700px] overflow-hidden rounded-[3rem] shadow-2xl mx-4 md:mx-6 lg:mx-8 mb-12 mt-6'
]) }}>

  {{-- Background --}}
  <div class="absolute inset-0">
    <img src="{{ $bg }}" 
         class="w-full h-full object-cover"
         alt="Background">
    <div class="absolute inset-0 bg-black/50"></div>
  </div>

  {{-- Header overlay --}}
  <div class="absolute top-6 left-6 right-6">

    <x-header />
  </div>

  {{-- Hero Content --}}
  <div class="relative z-10 flex items-center justify-center text-center px-6 py-24 md:py-32">
    <div class="max-w-4xl">
      
      <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-white leading-tight">
        {{ $title }}
      </h1>

      @if(!empty($subtitle))
        <p class="mt-6 text-white/80 text-sm sm:text-base md:text-lg max-w-3xl mx-auto">
          {{ $subtitle }}
        </p>
      @endif

    </div>
  </div>

  {{-- Bottom Cards Container --}}
  <div class="relative z-20 flex flex-col gap-6 px-6 pb-8 
              md:absolute md:bottom-6 md:left-6 md:right-6 md:flex-row md:justify-between">

    {{-- Left Card --}}
    @if(!empty($leftTitle))
    <div class="bg-white/20 backdrop-blur-lg text-white rounded-2xl p-5 shadow-xl w-full md:max-w-md">
      <div class="flex gap-4 items-start">

        @if(!empty($leftImage))
          <img src="{{ $leftImage }}" 
               alt="{{ $leftTitle }}" 
               class="w-16 h-16 md:w-20 md:h-20 object-cover rounded-xl">
        @endif

        <div>
          <h3 class="font-bold text-lg">{{ $leftTitle }}</h3>

          @if(!empty($leftText))
            <p class="text-white/80 text-sm mt-1">
              {{ $leftText }}
            </p>
          @endif

          <a href="{{ $leftLinkHref }}" 
             class="inline-block mt-2 text-sm font-semibold hover:underline">
            {{ $leftLinkLabel }}
          </a>
        </div>

      </div>
    </div>
    @endif

    {{-- Right Card --}}
    @if(!empty($rightQuote))
    <div class="bg-white/20 backdrop-blur-lg text-white rounded-2xl p-5 shadow-xl w-full md:max-w-md">
      
      <p class="italic text-sm leading-relaxed">
        “{{ $rightQuote }}”
      </p>

      <div class="flex items-center gap-3 mt-4">
        <div class="w-8 h-8 rounded-full bg-white/30"></div>
        <div>
          @if(!empty($rightAuthor))
            <p class="text-sm font-semibold">{{ $rightAuthor }}</p>
          @endif
          @if(!empty($rightMeta))
            <p class="text-xs text-white/70">{{ $rightMeta }}</p>
          @endif
        </div>
      </div>

    </div>
    @endif

  </div>

</section>
