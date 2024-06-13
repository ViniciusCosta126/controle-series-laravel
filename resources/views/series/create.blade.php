<x-layout title="Nova Série">
    <x-series.form :action="route('series.store')" :nome="old('nome')" btnText='Adicionar serie' />
</x-layout>
