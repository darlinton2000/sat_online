<form @if (!isset($sat->id))
            action="{{ route('sat.store') }}"
        @else
            action="{{ route('sat.update', $sat) }}"
        @endif
    method="POST"
    id="form-dados-beneficiario">
@csrf
@if (isset($sat->id))
    @method('PUT')
@endif

<div class="form-group row">
    <label for="beneficiario" class="col-md-4 col-form-label text-md-right">{{ __('Selecione o beneficiário') }}</label>

    <div class="col-md-6">
        <select class="custom-select form-select2" name="beneficiario_id" id="beneficiario">
            <option value=""></option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" 
                    @if (isset($sat->beneficiario_id) && $user->id == $sat->beneficiario_id) 
                        selected 
                    @elseif (old('beneficiario_id') == $user->id) 
                        selected 
                    @endif >
                    {{ $user->posto_grad->abrev_posto_grad . ' ' . $user->name }}
                </option>
            @endforeach
        </select>

        @error('beneficiario_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

</form>