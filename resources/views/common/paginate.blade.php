@if ($paginator->hasPages())
    <noindex>
        <nav>
            <ul class="pagination">
                @if (!$paginator->onFirstPage())
                    <li class="pagination__item">
                        <a class="pagination__link" href="{{ $paginator->previousPageUrl() }}">&larr;</a></li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="pagination__item"><span class="pagination__link_active pagination__link">{{ $page }}</span></li>
                            @else
                                <li class="pagination__item"><a class="pagination__link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="pagination__item"><a class="pagination__link" href="{{ $paginator->nextPageUrl() }}">&rarr;</a></li>
                @endif
            </ul>
        </nav>
    </noindex>
@endif