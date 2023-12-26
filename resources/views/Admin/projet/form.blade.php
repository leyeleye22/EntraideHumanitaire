@extends('Admin.base')
@section('title', $projet->exists ? 'Editer un projet ' : 'Créer un projet')
@section('content')
    <form class="vstack gap-2"
        action="{{ route($projet->exists ? 'admin.projet.update' : 'admin.projet.store', ['projet' => $projet]) }}"
        method="post" enctype="multipart/form-data">
        @csrf
        @method($projet->exists ? 'put' : 'post')

        @include('shared.input', [
            'label' => 'Nom du projet',
            'name' => 'titre',
            'value' => $projet->titre,
        ])
        @include('shared.input', [
            'type' => 'textarea',
            'label' => 'description du projet',
            'name' => 'description',
            'value' => $projet->description,
        ])
        @include('shared.input', [
            'type' => 'file',
            'label' => 'Image du projet',
            'name' => 'image',
            'value' => $projet->image,
        ])


        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
        <select id="countries" name="status"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option value="en_attente" {{ $projet->status === 'en_attente' ? "selected" : '' }}>En attente</option>
            <option value="en_cours" {{ $projet->status === 'en_cours' ? "selected" : '' }}>En cours</option>
            <option value="termine" {{ $projet->status === 'termine' ? "selected" : '' }}>Terminé</option>
        </select>


        @include('shared.submitBtn', ['value' => $projet->exists ? 'Editer' : 'Créer'])

    </form>
@stop
