<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

<div class="max-w-xl mx-auto bg-white p-8 rounded shadow">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Detalle del Producto
    </h1>

    <div class="space-y-4">

        <div>
            <p class="text-sm text-gray-500">Nombre</p>
            <p class="text-lg font-semibold text-gray-900">
                {{ $producto->nombre }}
            </p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Precio</p>
            <p class="text-lg font-semibold text-gray-900">
                S/. {{ $producto->precio }}
            </p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Stock</p>
            <p class="text-lg font-semibold text-gray-900">
                {{ $producto->stock }}
            </p>
        </div>

    </div>

    <div class="mt-6">
        <a href="{{ route('productos.index') }}"
           class="text-indigo-600 hover:underline">
            ← Volver al listado
        </a>
    </div>

</div>

</body>
</html>