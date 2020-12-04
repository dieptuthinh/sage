<section class="mod-slider">
  <div class="container-fluid px-0">
    <div class="slider slider-lazy has-slider">
      @foreach ($sliders as $item)
        <div class="slider-item">
          <a href="{{ $item['link'] }}">
            <div data-src="{{ $item['image'] }}" class="lazy h-100 bg-img" src="{{App::imagesBase64()}}"></div>
            {{-- <img data-src="{{ $item['image'] }}" alt="banner" class="lazy" src="{{App::imagesBase64()}}"> --}}
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>