<div id="rates">
    @foreach($rates as $rate)
        <div>{{ $rate->currency->name }} {{ $rate->course }}</div>
    @endforeach
</div>