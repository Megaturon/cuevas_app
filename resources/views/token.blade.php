<!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Maria Skłodowska-Curie -->
<form method="POST" action="/token">
    @csrf
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    Search Term: <input type="test" name="term" value="" />
    <button type="submit">Go</button>
</form>

