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
                           <li class="list-group-item list-group-item-action rounded d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-start flex-column">
                                  <span> <strong>ID progetto: </strong> {{$activity->project_id}}</span>
                                  <span> <strong>Titolo attività: </strong>{{$activity->title}}</span>
                                </div>
                                  <div class="d-flex align-items-center">
                                    <form method="POST" action="{{ route('activities.destroy', $activity->id) }}" onsubmit="return confirm('Sei sicuro di voler eliminare questa attività?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn me-3 text-black float-end" style="border: 2px solid red;" onmouseover="this.style.backgroundColor='red';" onmouseout="this.style.backgroundColor='#FFFFFF';">Elimina</button>
                                    </form>
                                    <a class="btn me-3 text-black float-end" style="border: 2px solid green;" href="{{ route('activities.edit', $activity->id) }}" onmouseover="this.style.backgroundColor='green';" onmouseout="this.style.backgroundColor='#FFFFFF';">Modifica</a>
                                    <a class="btn me-3 text-black" style="border: 2px solid #818CF8;" href="{{ route('activities.show', $activity->id) }}" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Dettagli</i></a>
                                  </div>
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
