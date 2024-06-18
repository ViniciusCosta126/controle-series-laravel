<x-layout title="Nova Série">
    <form class="" action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="mb-3 col-8">
                <label class="form-label" for="name">Nome:</label>
                <input class="form-control" type="text" autofocus name="name" id="name"
                    value="{{ old('nome') }}">
            </div>
            <div class="mb-3 col-2">
                <label class="form-label" for="seasonsQty">N temporadas</label>
                <input class="form-control" type="text" name="seasonsQty" id="seasonsQty"
                    value="{{ old('seasonsQty') }}">
            </div>
            <div class="mb-3 col-2">
                <label class="form-label" for="episodesPerSeason">Eps / Temporada: </label>
                <input class="form-control" type="text" name="episodesPerSeason" id="episodesPerSeason"
                    value="{{ old('episodesPerSeason') }}">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar serie</button>
    </form>

</x-layout>
