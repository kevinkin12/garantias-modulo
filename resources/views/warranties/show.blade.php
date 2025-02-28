@extends('layouts.app')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="flex items-center mb-6">
            <a href="{{ route('warranties.index') }}" class="text-indigo-600 hover:underline mr-4">← Volver</a>
            <h2 class="text-2xl font-semibold text-gray-800">Detalles de la Garantía</h2>
        </div>
        
        <div class="bg-gray-50 rounded-lg p-6">
            <div class="mb-6">
                <h3 class="text-xl font-medium text-gray-900 mb-2">{{ $warranty->product_name }}</h3>
                <div class="flex flex-wrap text-sm">
                    <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded mr-2 mb-2">Marca: {{ $warranty->brand }}</span>
                    <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded mr-2 mb-2">Modelo: {{ $warranty->model }}</span>
                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded mb-2">Duración: {{ $warranty->duration_months }} meses</span>
                </div>
            </div>
            
            <div class="mb-6">
                <h4 class="text-sm font-medium text-gray-700 mb-2">Descripción del Producto</h4>
                <p class="text-gray-600 whitespace-pre-line">{{ $warranty->product_description }}</p>
            </div>
            
            <div class="text-sm text-gray-500">
                <p>Registrado: {{ $warranty->created_at->format('d/m/Y H:i') }}</p>
                <p>Última actualización: {{ $warranty->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
        
        <div class="flex justify-end mt-6 space-x-3">
            <a href="{{ route('warranties.edit', $warranty->id) }}" class="px-4 py-2 bg-yellow-500 text-white text-sm rounded-md hover:bg-yellow-600 transition">Editar</a>
            <form action="{{ route('warranties.destroy', $warranty->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white text-sm rounded-md hover:bg-red-700 transition" onclick="return confirm('¿Estás seguro que deseas eliminar esta garantía?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection