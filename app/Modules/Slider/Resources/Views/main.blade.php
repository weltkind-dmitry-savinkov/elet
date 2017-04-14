@if($slider)
    @push('js')
    <script>
    </script>
    @endpush
    <div class="slider-main">
        <div class="carousel-main">
            <div class="carousel-main__track">
                @foreach($slider as $slide)
                    <div class="carousel-main__item">
                        <a class="carousel-main__link" href="{{ $slide->link ? $slide->link : '' }}"></a>
                        <div class="carousel-main__title">
                            {{ $slide->title }}
                        </div>
                        <img src="/uploads/slider/full/{{ $slide->image }}" alt="img">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif