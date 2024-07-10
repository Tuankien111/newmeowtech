@extends('layouts.master')
@section('title', 'Services')

@section('content')
    @include('components.navbar')

    @include('partials.breadcrumb')

    @include('partials.dataSolutionsService')

    @include('partials.estimateProject')

@stop
