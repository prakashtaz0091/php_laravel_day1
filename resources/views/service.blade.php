<h1>{{ $service_name }}</h1>

@unless ($service_name == 'test')
    <p>This is not test mode</p>
    
@endunless


<p>{{ $opt_param ?? 'default opt params' }}</p>

@if ($opt_param)
    {{ $opt_param }}
@else
    <p>no opt param</p>
@endif

{{-- here {{ $unsafe_data}}  this syntax automatically escapes the unsafe data --}}
{{ $unsafe_data }}


{{-- here {!! $unsafe_data !!} this syntax doesn't protects from unsafe data --}}
{{-- {!! $unsafe_data !!} --}}
