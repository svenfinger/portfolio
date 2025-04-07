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
    <div class="swiper-container w-full py-12" x-ref="container">
        <div class="gradient-blur-l absolute inset-0 w-6 sm:w-20 z-20">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="absolute inset-0 bg-linear-to-l from-transparent to-white z-20 w-6 sm:w-20"></div>

        <div class="gradient-blur-r absolute inset-0 left-auto w-6 sm:w-20 z-20">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="absolute inset-0 left-auto bg-linear-to-r from-transparent to-white z-20 w-6 sm:w-20"></div>

        <div class="swiper-wrapper">
            @foreach ($block->imagesAsArrays('image', 'default') as $imageData)
                <div class="swiper-slide px-3">
                    <img src="{{ $imageData['src'] }}" loading="eager" alt="{{ $imageData['caption'] }}" class="rounded-lg">
                    <div class="mt-2 text-lg leading-normal w-56">{{ $imageData['caption'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
