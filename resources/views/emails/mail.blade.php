Hello <strong>{{ $name }}</strong>,
{{--<p>{{$body}}</p>--}}
{!! html_entity_decode($body) !!}
