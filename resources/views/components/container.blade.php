@php
  $containertag = $as ? $as : 'div';
  $containerspace = $space ? 'container-'.$space : 'container';
  $containerclass = $class ? $class : '';
@endphp

<{{ $containertag }} class="{{ $containerspace }} {{ $containerclass }}">
  {{ $slot }}
</{{ $containertag }}>