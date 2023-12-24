@extends('Admin.base')


@section('content')
<div class="d-flex justify-content-between algin-items-center">
    <h1>@section('title', 'Beneficiaire')</h1>
    <a href="{{route('admin.beneficiaire.create')}}" class="btn btn-primary"> Ajouter</a>
</div>
<table class="table table-striped">

    <thead>
        <th class="text-end">Nom </th> 
        <th class="text-end">Email </th> 
        <th class="text-end">Telephone </th> 
        <th class="text-end">Addresse </th> 
    </thead>

    <tbody>
        @foreach($beneficiaires as $beneficiaire)
        <tr>
            <td>{{ $beneficiaire ->nom_complet }}</td>     
            <td>{{ $beneficiaire ->email }}</td>     
            <td>{{ $beneficiaire ->telephone }}</td>     
            <td>{{ $beneficiaire ->address }}</td>     
            <td> @include('shared.formBtn', [ 'method' =>'get', 'token' => false,  'value' => 'Editer', 'action' => 'admin.beneficiaire.edit', 'argument' => $beneficiaire ]) </td>
            <td> @include('shared.formBtn', [ 'anothermethod' => 'delete', 'class' => 'btn btn-danger', 'value' => 'Supprimer', 'action' => 'admin.beneficiaire.destroy', 'argument' => $beneficiaire ]) </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $beneficiaires -> links() }}

@stop