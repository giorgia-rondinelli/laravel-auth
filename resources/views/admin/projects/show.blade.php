@extends('admin.home')
@section('content')

<div class="container mt-4 ">
<h1>{{$project->title}}</h1>
<div class="d-flex justify-content-between ">
<p>Data di creazione: {{$project->created_at}}</p>
@if ($project->status)
<p class="badge text-bg-primary ">Pubblico</p>
@else
<p class="badge text-bg-primary ">Privato</p>
@endif

</div>

<h4>Descrizione:</h4>
<div class="mb-4">{{$project->description}}</div>
<h4>Linguaggio</h4>
<div>{{$project->languages}}</div>

</div>
@endsection
