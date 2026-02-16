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
  'rightAuthorImage' => null,
  'rightMeta' => null,
])

<section 
{{ $attributes->merge([
'class' => ' relative w-full md:w-[96%] min-h-[500px] md:min-h-[600px] lg:min-h-[750px] overflow-hidden md:rounded-[3rem] shadow-2xl mx-auto mb-12 md:mt-6'
]) }}>

  {{-- Background --}}
  <div class="absolute inset-0">
    <img src="{{ $bg }}" 
         class="w-full h-full object-cover"
         alt="Background">
    <div class="absolute inset-0 bg-black/40 md:bg-black/50"></div>
  </div>

  {{-- Header overlay --}}
  <div class="absolute top-4 left-4 right-4 md:top-6 md:left-6 md:right-6 z-[100]">
    <x-header />
  </div>

  {{-- Hero Content --}}
  <div class="relative z-10 flex flex-col items-center justify-center text-center px-6 pt-32 pb-12 sm:pt-40 sm:pb-24 md:pt-48 md:pb-32 lg:pt-56 lg:pb-40">
    <div class="max-w-4xl">
      
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-[1.1] md:leading-tight">
        {{ $title }}
      </h1>

      @if(!empty($subtitle))
        <p class="mt-4 md:mt-6 text-white/90 text-sm sm:text-base md:text-lg lg:text-xl max-w-2xl mx-auto leading-relaxed px-2 md:px-0">
          {{ $subtitle }}
        </p>
      @endif

    </div>
  </div>

  {{-- Bottom Cards Container --}}
  <div class="relative z-20 flex flex-col gap-4 px-4 pb-12 
              md:absolute md:bottom-10 md:left-0 md:w-full md:px-12 md:grid md:grid-cols-2 md:gap-6">

    {{-- Left Card --}}
    @if(!empty($leftTitle))
    <div class="bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-3xl p-4 md:p-5 shadow-xl w-full transform transition-transform hover:scale-[1.02]">
      <div class="flex gap-4 items-center">

        @if(!empty($leftImage))
          <img src="{{ $leftImage }}" 
               alt="{{ $leftTitle }}" 
               class="w-16 h-16 md:w-24 md:h-24 object-cover rounded-2xl shadow-lg">
        @endif

        <div class="flex-1 text-left">
          <h3 class="font-bold text-base md:text-lg leading-tight">{{ $leftTitle }}</h3>

          @if(!empty($leftText))
            <p class="text-white/60 text-[10px] md:text-xs mt-1 leading-normal">
              {{ $leftText }}
            </p>
          @endif
        </div>

      </div>
    </div>
    @endif

    {{-- Right Card --}}
    @if(!empty($rightQuote))
    <div class="bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-3xl p-4 md:p-6 shadow-xl w-full transform transition-transform hover:scale-[1.02]">
      
      <div class="flex flex-col h-full justify-between">
        <p class="text-white/80 text-xs md:text-sm italic leading-relaxed mb-4 text-left">
          “{{ $rightQuote }}”
        </p>

        <div class="flex flex-wrap items-center justify-between gap-4 mt-auto">
          <div class="flex items-center gap-3">
            @if(!empty($rightAuthorImage))
              <img src="{{ $rightAuthorImage }}" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-white/20" alt="{{ $rightAuthor }}">
            @else
              <div class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-white/20 bg-gradient-to-br from-[#d4ff3d] to-green-500 flex-shrink-0"></div>
            @endif
            <div class="text-left">
              @if(!empty($rightAuthor))
                <p class="text-white font-bold text-xs md:text-sm leading-none">{{ $rightAuthor }}</p>
              @endif
              @if(!empty($rightMeta))
                <p class="text-white/40 text-[8px] md:text-[10px] uppercase tracking-wider mt-1">{{ $rightMeta }}</p>
              @else
                <p class="text-white/40 text-[8px] md:text-[10px] uppercase tracking-wider mt-1">MJ Greens Team</p>
              @endif
            </div>
          </div>

          <div class="flex items-center gap-3 group bg-white/5 py-2 px-4 rounded-full border border-white/10">
              <div class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-white/20 
                          flex items-center justify-center 
                          transition-colors group-hover:bg-white/10 flex-shrink-0">
                  <svg class="w-4 h-4 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                  </svg>
              </div>
              <span class="text-white font-semibold uppercase tracking-wider text-[10px] md:text-xs">
                  Dignified and safe employment
              </span>
          </div>
        </div>
      </div>
    </div>
    @endif

  </div>
</section>
