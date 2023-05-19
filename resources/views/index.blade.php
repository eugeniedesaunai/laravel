@extends('layout')

@section('title', "mO'vie - Ma super page" )

@section('header')
<link rel="stylesheet" href="{{ url('/css/style.css') }}">
@stop

@section('content')
        <!-- Listing des fonctionnalités -->
        <section>
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">Une API REST pour accéder à des milliers de films</h2>
                    <p class="mt-4 text-lg text-gray-500">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
                </div>
                <dl class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
                    @foreach($arguments as $argument)
                    @component('components.x-item', ['title' => $argument['title'], 'description' => $argument['description']])
                    @endcomponent

                    @endforeach
                </dl>
            </div>
        </section>
@stop