@extends('layouts.default')

@section('_header')
    @include('layouts.blocks._header')
@endsection

@section('_content')
    {!! $content !!}
@endsection

@section('_footer')
    @include('layouts.blocks._footer')
@endsection
