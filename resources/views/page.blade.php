@extends('layout')

@section('content')
    @foreach ($sections ?? [] as $block)
        @include('components.blocks.' . ($block['type'] ?? 'distillery_hero'), ['block' => $block, 'data' => $block])
    @endforeach
@endsection
