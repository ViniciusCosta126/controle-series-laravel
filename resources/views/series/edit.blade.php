<x-layout title="Editar Série '{!! $serie->name !!}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->name" btnText="Salvar serie" :update="true" />
</x-layout>
