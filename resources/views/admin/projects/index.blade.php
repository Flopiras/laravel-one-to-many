@extends('layouts.app')

@section('title', 'Projects')

@section('content')
{{-- add new --}}
<div class="mt-4 d-flex justify-content-end">
  {{-- create --}}
    <a href="{{ route('admin.projects.create')}}" class="btn btn-success me-4">Crea nuovo progetto</a>
    {{-- trash --}}
    <a href="{{ route('admin.projects.trash')}}" class="btn btn-danger">Cestino</a>
</div>
    
{{-- projects --}}
<div class="mt-4">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome progetto</th>
          <th scope="col">Creato il</th>
          <th scope="col">Ultima modifica</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse($projects as $project)
        <tr>
            <th scope="row">{{ $project->id }}</th>
          <td>{{ $project->title }}</td>
          <td>{{ $project->created_at }}</td>
          <td>{{ $project->updated_at }}</td>
          <td><a href="{{ route('admin.projects.show', $project)}}" class="btn btn-primary">Vedi</a></td>
        </tr>
          @empty
          <tr>
            <td class="text-center" colspan="5">
              <h3>Non ci sono progetti disponibili</h3>
            </td>
          </tr>
          @endforelse
          
      </tbody>
    </table>
  </div>
@endsection