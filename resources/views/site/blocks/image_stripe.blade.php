<x-section default_class="py-16 sm:py-32">
    <div class="swiper swiper-infinite-autoplay" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
      modules: [Autoplay],
      allowTouchMove: false,
      speed: 15000,
      loop: true,
      mousewheel: false,
      autoplay: {
        delay: 1
      },
      slidesPerView: 1,
      breakpoints: {
        640: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 3
        },
        1024: {
          slidesPerView: 4
        }
      }
    })">
        <div class="swiper-container w-full" x-ref="container">
            <div class="swiper-wrapper">
                @foreach ($block->imagesAsArrays('image', 'default') as $imageData)
                    <div class="swiper-slide px-3">
                        <img src="{{ $imageData['src'] }}" loading="eager" alt="{{ $imageData['caption'] }}" class="">
                        <div class="mt-3 text-lg leading-normal w-56">{{ $imageData['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-section>
