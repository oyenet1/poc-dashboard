{{-- @extends('layouts.dashboard')
@section('title', 'welcome page')
@section('content') --}}
<div>
    @foreach ($datas as $item)
    <div>{{ $item }}</div>
    @endforeach
</div>
{{-- @endsection --}}