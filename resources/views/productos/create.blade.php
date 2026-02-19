<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

<div class="max-w-xl mx-auto bg-white p-8 rounded shadow">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Crear Producto
    </h1>

    @if($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">
                Nombre
            </label>
            <input type="text" name="nombre"
                   value="{{ old('nombre') }}"
                   class="mt-1 w-full border rounded px-3 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                   required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">
                Precio
            </label>
            <input type="number" step="0.01" name="precio"
                   value="{{ old('precio') }}"
                   class="mt-1 w-full border rounded px-3 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                   required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">
                Stock
            </label>
            <input type="number" name="stock"
                   value="{{ old('stock') }}"
                   class="mt-1 w-full border rounded px-3 py-2 focus:ring-indigo-500 focus:border-indigo-500"
                   required>
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('productos.index') }}"
               class="text-gray-600 hover:underline">
                Cancelar
            </a>

            <button type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Guardar
            </button>
        </div>

    </form>

</div>

</body>
</html>