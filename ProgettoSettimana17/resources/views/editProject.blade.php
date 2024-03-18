<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica progetto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <form method="post" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo progetto</label>
                            <input type="text" class="form-control rounded" name="name" value="{{ $project->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Descrizione</label>
                            <input type="text" class="form-control rounded" name="description" value="{{ $project->description }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Linguaggio</label>
                            <select class="form-select" name="language">
                                <option value="HTML">HTML</option>
                                <option value="CSS">CSS</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="PHP">PHP</option>
                                <option value="Python">Python</option>
                                <option value="Java">Java</option>
                            </select>
                        </div>

                        <button type="submit" class="btn text-black my-3" style="border: 2px solid #F8A681; width: 100%" onmouseover="this.style.backgroundColor='#F8A681';" onmouseout="this.style.backgroundColor='#FFFFFF'; ">Modifica progetto</button>
                    </form>
                    
                    <hr>

                    <a class="btn text-black mt-3" style="border: 2px solid #818CF8; width: 100%" href="/projects" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Torna indietro</a>

                 </div>
            </div>
        </div>
</x-app-layout>
