 <div class="card">
    <form action="{{ route('users.updateInterests', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-header">Interesses</div>


    <div class="card-body">
        @foreach(['Futebol', 'Volei', 'Basquete'] as $item)

       
            <div class="form-check @error('interests') is-invalid @enderror">
                <input class="form-check-input" type="checkbox" value="{{ $item }}" name="interests[][name]" @checked(in_array($item, $user->interests->pluck('name')->toArray())) >
                <label class="form-check-label" >
                    {{ $item }}
                </label>
            </div>
            @if($loop->last)
                @error('interests')
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