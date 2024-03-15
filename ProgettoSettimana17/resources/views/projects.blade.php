<?php


foreach ($projects as $project) {
    echo $project->name;
    echo $project->language;
    echo $project->description;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class ="text-center my-4">Progetti</h1>

    @if($projects->count() > 0)
    <div class="container">
        <div class="list-group">

         @foreach($projects as $project)
             <div class="d-flex justify-content-between">
                <li class="list-group-item">{{$project->name}}</li>
                <a href="projects/{{$project->id}}">Info</a>
                </div>
         @endforeach

        </div>
    </div>
    @else
        <h3 class="text-center my-4">Non sono presenti progetti!!!</h3>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>