@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

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
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->posto_grad->abrev_posto_grad ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->idt_militar ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->prec_cp ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->subunidade->abreviacao ?? 'Não cadastrado' }}</td>
                    <td>{{ $user->setor->abrev ?? 'Não cadastrado' }}</td>
                    <td><a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-sm px-1 py-0">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
