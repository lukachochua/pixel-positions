@props(['employer', 'width' => 90])
<div>
    <img src="{{ asset($employer->logo) }}" alt="logo" class="rounded-xl" width="{{$width}}">
</div>
