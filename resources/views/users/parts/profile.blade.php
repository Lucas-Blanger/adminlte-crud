 <div class="card">
    <form action="{{ route('users.updateProfile', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-header">Perfil</div>


    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Tipo de Pessoa</label>
            <select name="type" class="form-control @error('type') is-invalid @enderror">
                @foreach(['PJ', 'PF'] as $type)
                    <option value="{{ $type }}" @selected(old('type') == $type || $user?->profile?->type == $type)>{{ $type }}</option>
                @endforeach
            </select>
            @error('type')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="address" value="{{ old('address') ?? $user?->profile?->address }}" name="address" class="form-control @error('address') is-invalid @enderror" >
            @error('address')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
    
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Editar</button>
    </div>
    </form>
 </div>
</form>