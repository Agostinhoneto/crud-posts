@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container mx-auto flex flex-wrap py-6">
                <section class="w-full md:w-2/3  px-3">
                    <div class="container">
                        <div class=" flex flex-col items-center">
                            <br>
                            <div class="jumbotron">
                                Title: {{ $posts->title }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
