@props(['highlight' => false])
<div @class(['highlight' => $highlight, 'card'])>
   {{ $slot }}
   <a href="{{ $attributes->get('href') }}" class="btn btn-primary">View Details</a> 
</div>