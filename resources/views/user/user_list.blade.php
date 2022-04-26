@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Cadastrar Militar</a href="{{ route('users.create') }}">
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Posto/Grad</th>
                <th>Nome</th>
                <th>Identidade</th>
                <th>CPF</th>
                <th>Prec-CP</th>
                <th>Subunidade</th>
                <th>Setor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->posto_grad->abrev_posto_grad ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->idt_militar ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->prec_cp ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->subunidade->abreviacao ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->setor->abrev ?? 'Não cadastrado' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
