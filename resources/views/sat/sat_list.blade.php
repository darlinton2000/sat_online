@extends('layouts.app')

@section('content')
<div class="container">

<div class="container">
        <a href="{{ route('sat.create') }}" class="btn btn-success mb-3">Cadastrar Nova Solicitação</a>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th># Nr</th>
                <th>Beneficiario</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sats as $sat)
                <tr>
                    <td>{{ $sat->id }}</td>
                    <td>{{ $user->beneficiario->name }}</td>
                    <td><a href="{{ route('sat.edit', $sat) }}" class="btn btn-primary btn-sm px-1 py-0">Editar</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3"><p>Nenhuma solicitação cadastrada até o momento.</p></td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $sats->links() }}

</div>
@endsection