
@if(!empty($result))

    @foreach($result as $module => $moduleInfo)

        <div class="b-search-results-list__module">

            @if($moduleInfo['html'])
                {!! $moduleInfo['html'] !!}
            @elseif(!empty($moduleInfo['nodes']))
                <h3 class="b-search-results-list__title">{{ $moduleInfo['title'] }}</h3>
            <div class="b-search-results-list__list">
                <ul>

                    @foreach($moduleInfo['nodes'] as $num => $node)
                    <li class="b-search-results-list__item">
                        <div class="b-search-results-list-item">
                            <h5 class="b-search-results-list-item__title">
                                <a href="{{ $node['url'] }}">{!! $node['title']  !!}</a>
                            </h5>
                            <p class="b-search-results-list-item__preview">{!! $node['preview']  !!}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    @endforeach
@endif

