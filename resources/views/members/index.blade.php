@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <header></header>
            @if (session('message'))
                <div class="alert alert-success w-full p-6">{{ session('message') }}</div>
            @endif
        </section>
    </div>
</main>
@endsection