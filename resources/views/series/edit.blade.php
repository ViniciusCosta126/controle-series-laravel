<x-layout title="Editar Série '{{ $serie->nome }}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" btnText="Salvar serie" />
</x-layout>
