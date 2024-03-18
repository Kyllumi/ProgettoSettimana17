<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attività') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div>
                        <a class="btn text-black mb-3" href="{{ route('activities.create') }}" style="border: 2px solid #818CF8; width: 100%" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Aggiungi una attività</a>
                    </div>

                @if($activities->count() > 0)
                      <ul class="list-group list-group-flush">
                           @foreach($activities as $activity)
                           <li class="list-group-item list-group-item-action rounded">
                                  <span>{{$activity->project_id}} - </span>
                                  <span>{{$activity->title}}</span>
                                  <a class="btn me-3 text-black float-end" style="border: 2px solid #818CF8;" href="activities/{{$activity->id}}" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Dettagli</i></a>
                           </li>
                           @endforeach
                      </ul>
                      @else
                          <p class="text-center my-4">Non sono presenti progetti!</p>
                      @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
