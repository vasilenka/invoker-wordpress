@php
  $texttag = $as ? $as : 'span';
  $textclass_container = '';
  $textclass_children = '';
@endphp

@if($class)
  @php $textclass_container = $class; @endphp
@endif

@if($apply && count($apply) > 0)
  @foreach ($apply as $modifier)
    @php
      $textclass_children = $textclass_children . $modifier . ' ';
    @endphp
  @endforeach
@endif

<{{ $texttag }} class="{{ $textclass_container }}">
  <span class="{{ $textclass_children }}">
    {{ $slot }}
  </span>
</{{ $texttag }}>