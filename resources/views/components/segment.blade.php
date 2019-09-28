@php
  $segmenttag = $as ? $as : 'div';
  $segmentspace = $space ? 'segment-'.$space : 'segment';
  $segmentclass = $class ? $class : '';
@endphp

<{{ $segmenttag }} class="{{ $segmentspace }} {{ $segmentclass }}">
  {{ $slot }}
</{{ $segmenttag }}>