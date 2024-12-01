@extends('layout.app',['title' => 'Home'])

@section('content')

@include('components.hero')
@include('components.featuredjob')
@include('components.clients')


@endSection
