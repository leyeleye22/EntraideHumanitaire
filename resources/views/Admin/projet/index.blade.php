@extends('Admin.base')


@section('content')
    <div class="d-flex justify-content-between algin-items-center">
        <h1>
        @section('title', 'projet')
    </h1>
    <a href="{{ route('admin.projet.create') }}" class="btn btn-primary"> Ajouter</a>
</div>
<table class="table table-striped">

    <thead>
        <th class="text-end">Id </th>
        <th class="text-end">Image </th>
        <th class="text-end">Titre </th>
        <th class="text-end">Description </th>
        <th class="text-end">status </th>
    </thead>

    <tbody>
        @foreach ($projets as $projet)
            <tr>
                <td>{{ $projet->id }}</td>
                <td> <img src="/storage/{{ $projet->image }}" style="width: 100px; height:100px;" alt=""
                        srcset=""> </td>
                <td>{{ $projet->titre }}</td>
                <td>{{ $projet->description }}</td>
                <td>{{ $projet->status }}</td>
                <td> @include('shared.formBtn', [
                    'method' => 'get',
                    'token' => false,
                    'value' => 'Editer',
                    'action' => 'admin.projet.edit',
                    'argument' => $projet,
                ]) </td>
                <td> @include('shared.formBtn', [
                    'anothermethod' => 'delete',
                    'class' => 'btn btn-danger',
                    'value' => 'Supprimer',
                    'action' => 'admin.projet.destroy',
                    'argument' => $projet,
                ]) </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $projets->links() }}

@stop
