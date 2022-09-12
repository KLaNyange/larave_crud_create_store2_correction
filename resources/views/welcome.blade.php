@extends('layouts.app')
@section('content')
    <h1>All Members ({{ $users->count() }})</h1>
    @include('partials.allMembers')
    <h1>Women ({{ $women->count() }})</h1>
    @include('partials.woman')
    <h1>Men ({{ $men->count() }})</h1>
    @include('partials.men')
@endsection
