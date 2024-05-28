<h1>{{ $service_name}}</h1>

<p>{{ $opt_param  ?? "default opt params"  }}</p>

{{-- here {{ $unsafe_data}}  this syntax automatically escapes the unsafe data --}}
{{ $unsafe_data }}  


{{-- here {!! $unsafe_data !!} this syntax doesn't protects from unsafe data --}}
{!! $unsafe_data !!}