
@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
<div class="m-auto w-1/2">
    <div class="lg:grid lg:grid-cols-1 gap-6 space-y-4 md:space-y-0">

        @unless(count($listings) == 0)

            @foreach($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach

        @else
            <p>No listings found</p>
        @endunless

    </div>
</div>
<div class="mt-6 p-4">
    {{$listings->links()}}
</div>

@endsection