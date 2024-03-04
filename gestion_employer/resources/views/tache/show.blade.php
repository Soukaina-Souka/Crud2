@extends('layouts.app')

@section('content')
    <h1>Afficher détail d'une Tache</h1>
    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>Intitulé Tache:</th>
            <td>{{ $tache->intituléTache }}</td>
        </tr>
        <tr>
            <th>Date Tache:</th>
            <td>{{ $tache->date_tache }}</td>
        </tr>
        <tr>
            <th>Numéro Employé:</th>
            <td>{{ $tache->Num_Employe }}</td>
        </tr>
    </table>
@endsection
