@if(Session::has('msg'))
    <div class="alert alert-{{Session::get('msg') }}">
        <ul>
            <li>{!! Session::get('content') !!}</li>
        </ul>
    </div>
@endif
