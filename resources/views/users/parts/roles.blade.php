 <div class="card">
    <form action="{{ route('users.updateRoles', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-header">Cargos</div>



    <div class="card-body">
        @foreach($roles as $role)
            <div class="form-check @error('roles') is-invalid @enderror">
                <input class="form-check-input" type="checkbox" value="{{ $role->id }}" name="roles[] @checked(in_array($role->name, $user->roles->pluck('name')->toArray()))"
                    {{ $user->roles && $user->roles->pluck('id')->contains($role->id) ? 'checked' : '' }}>
                <label class="form-check-label">
                    {{ $role->name }}
                </label>
            </div>
            @if($loop->last)
                @error('roles')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            @endif
        @endforeach

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Editar</button>
    </div>
    </form>
 </div>
</form>