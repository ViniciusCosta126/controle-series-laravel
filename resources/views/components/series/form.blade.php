<form class="" action="{{ $action }}" method="post">
    @csrf

    @isset($update)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label class="form-label" for="name">Nome:</label>
        <input class="form-control" type="text" name="name" id="name"
            @isset($nome)value="{{ $nome }}"@endisset>
    </div>
    <button class="btn btn-primary" type="submit">{{ $btnText }}</button>
</form>
