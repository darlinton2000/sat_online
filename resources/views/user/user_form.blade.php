@extends('layouts.app')

@section('content')
<div class="container">
    <form 
    @if (isset($user))
        action="{{ route('users.update', $user) }}"
    @else 
        action="{{ route('users.store') }}"  
    @endif
    class="form" method="POST">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" @if (isset($user->name)) value="{{ $user->name }}" @else value="{{ old('name') }}" @endif required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

            <div class="col-md-6">
                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" @if (isset($user->cpf)) value="{{ $user->cpf }}" @else value="{{ old('cpf') }}" @endif required autocomplete="cpf">

                @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="prec_cp" class="col-md-4 col-form-label text-md-right">{{ __('Prec-CP') }}</label>

            <div class="col-md-6">
                <input id="prec_cp" type="text" class="form-control @error('prec_cp') is-invalid @enderror" name="prec_cp" @if (isset($user->prec_cp)) value="{{ $user->prec_cp }}" @else value="{{ old('prec_cp') }}" @endif required autocomplete="prec_cp">

                @error('prec_cp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="idt_militar" class="col-md-4 col-form-label text-md-right">{{ __('Identidade Militar') }}</label>

            <div class="col-md-6">
                <input id="idt_militar" type="text" class="form-control @error('idt_militar') is-invalid @enderror" name="idt_militar" @if (isset($user->idt_militar)) value="{{ $user->idt_militar }}" @else value="{{ old('idt_militar') }}" @endif required autocomplete="idt_militar">

                @error('idt_militar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="posto_grad" class="col-md-4 col-form-label text-md-right">{{ __('Posto/Grad') }}</label>

            <div class="col-md-6">
                <select class="custom-select" name="posto_grad_id" id="posto_grad">
                    <option value=""></option>
                    @foreach ($posto_grads as $posto_grad)
                        <option value="{{ $posto_grad->id }}" @if (isset($user->posto_grad_id) && $user->posto_grad_id == $posto_grad->id) selected @elseif (old('posto_grad_id') == $posto_grad->id) selected @endif >{{ $posto_grad->abrev_posto_grad }}</option>
                    @endforeach
                </select>

                @error('posto_grad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="subunidade" class="col-md-4 col-form-label text-md-right">{{ __('Subunidade') }}</label>

            <div class="col-md-6">
                <select class="custom-select" name="subunidade_id" id="subunidade">
                    <option value=""></option>
                    @foreach ($subunidades as $subunidade)
                        <option value="{{ $subunidade->id }}" @if (isset($user->subunidade_id) && $user->subunidade_id == $subunidade->id) selected @elseif (old('subunidade_id') == $subunidade->id) selected @endif >{{ $subunidade->abreviacao }}</option>
                    @endforeach
                </select>

                @error('subunidade')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="setor" class="col-md-4 col-form-label text-md-right">{{ __('Setor') }}</label>

            <div class="col-md-6">
                <select class="custom-select" name="setor_id" id="setor">
                    <option value=""></option>
                    @foreach ($setores as $setor)
                        <option value="{{ $setor->id }}" @if (isset($user->setor_id) && $user->setor_id == $setor->id) selected @elseif (old('setor_id') == $setor->id) selected @endif >{{ $setor->abrev }}</option>
                    @endforeach
                </select>

                @error('setor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="om" class="col-md-4 col-form-label text-md-right">{{ __('OM') }}</label>

            <div class="col-md-6">
                <select class="custom-select" name="om_id" id="om">
                    <option value=""></option>
                    @foreach ($oms as $om)
                        <option value="{{ $om->id }}" @if (isset($user->om_id) && $user->om_id == $om->id) selected @elseif (old('om_id') == $om->id) selected @endif >{{ $om->abrev }}</option>
                    @endforeach
                </select>

                @error('om')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-8 mx-auto">
                <input type="submit" value="Salvar" class="btn btn-success btn-block">
            </div>
        </div>
    </form>
</div>
@endsection
