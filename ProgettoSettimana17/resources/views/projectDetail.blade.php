<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dettaglio progetto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                  <div class="card border-0">
                    <div class="card-body">
                      <p class="my-1"><strong>Titolo progetto: </strong> {{$project->name}}</p>
                      <p class="my-1"><strong>Descrizione: </strong> {{$project->description}}</p>
                      <p class="my-1"><strong>Linguaggio: </strong> {{$project->language}}</p>
                      <p class="my-1"><strong>Data creazione: </strong> {{$project->created_at}}</p>
                      <p class="my-1"><strong>Ultimo aggiornamento: </strong> {{$project->updated_at}}</p>
                    </div>

                    <div class="card-body">
                      @if(count($project->activities) > 0)
                        <ul class="list-group list-group-flush">
                          <strong>Attività</strong>
                             @foreach($project->activities as $activity)
                             <li class="list-group-item list-group-item-action rounded">
                                    <span class="ms-3">{{$activity->title}}</span>
                                    <a class="btn me-3 text-black float-end" style="border: 2px solid #818CF8;" href="/activities/{{$activity->id}}" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Dettagli</i></a>
                             </li>
                             @endforeach
                        </ul>
                      @else
                        <strong>Attività</strong>
                        <p>Non sono presenti attività per questo progetto!</p>
                      @endif
                    </div>

                    <div class="card-footer bg-white">
                      <a class="btn text-black mt-3" style="border: 2px solid #818CF8; width: 100%" href="/projects" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Torna indietro</a>
                    </div>
                  </div>
                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
