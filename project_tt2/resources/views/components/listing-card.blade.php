@props(['listing'])

<x-card class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-grey-500 duration-500">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl font-mono">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-m font-italic mb-4">Autors: {{$listing->email}}</div>
                <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="font-serif text-xs text-grey">{{substr($listing->description, 0, 100) . "...";}}</i>
            </div>
        </div>
    </div>
</x-card>