@extends('layouts.app')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="flex items-center mb-6">
            <a href="{{ route('warranties.index') }}" class="text-indigo-600 hover:underline mr-4">← Volver</a>
            <h2 class="text-2xl font-semibold text-gray-800">Nueva Garantía</h2>
        </div>

        <form action="{{ route('warranties.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="product_name" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Producto</label>
                    <input type="text" name="product_name" id="product_name" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('product_name') }}" required>
                    @error('product_name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                
                <div>
                    <label for="duration_months" class="block text-sm font-medium text-gray-700 mb-1">Duración (meses)</label>
                    <input type="number" name="duration_months" id="duration_months" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('duration_months') }}" required min="1">
                    @error('duration_months')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                
                <div>
                    <label for="brand" class="block text-sm font-medium text-gray-700 mb-1">Marca</label>
                    <input type="text" name="brand" id="brand" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('brand') }}" required>
                    @error('brand')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                
                <div>
                    <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Modelo</label>
                    <input type="text" name="model" id="model" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('model') }}" required>
                    @error('model')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>
            
            <div class="mb-6">
                <label for="product_description" class="block text-sm font-medium text-gray-700 mb-1">Descripción del Producto</label>
                <textarea name="product_description" id="product_description" rows="4" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('product_description') }}</textarea>
                @error('product_description')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 transition">Guardar Garantía</button>
            </div>
        </form>
    </div>
</div>
@endsection