
@extends('Admin.base')
@section('title', $beneficiaire ->exists ? 'Editer un beneficiaire ' : 'Créer un beneficiaire')
@section('content')
<form class="vstack gap-2" action="{{ route( $beneficiaire ->exists ? 'admin.beneficiaire.update' : 'admin.beneficiaire.store', ['beneficiaire' =>  $beneficiaire ] ) }}" method="post">
    @csrf
    @method($beneficiaire->exists ? 'put' : 'post')
   
    @include('shared.input', ['label' => 'Nom du beneficiaire', 'name' => 'nom_complet', 'value' => $beneficiaire->nom_complet] )     
    @include('shared.input', ['type'=>'email', 'label' => 'Email du beneficiaire', 'name' => 'email', 'value' => $beneficiaire->email] )     
    @include('shared.input', ['label' => 'Telephone du beneficiaire', 'name' => 'telephone', 'value' => $beneficiaire->telephone] )     
    @include('shared.input', ['label' => 'Adresse du beneficiaire', 'name' => 'adresse', 'value' => $beneficiaire->adresse] )     
    @include('shared.submitBtn', [ 'value' =>  $beneficiaire -> exists ? 'Editer' : 'Créer'  ] )        
   
</form>
@stop