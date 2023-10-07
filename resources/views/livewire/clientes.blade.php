<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-10 py-12">
    <div class="w-64">
        <a href=""
            class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
            Emisores
        </a>
        <ul>
            <li class="mb-2">
                <a href=""
                    class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                    <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                    Nueva Factura
                </a>
            </li>
            <li class="mb-2">
                <a href=""
                    class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                    <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                    Facturas
                </a>
            </li>
            <li class="mb-2">
                <a href=""
                    class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                    <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                    Clientes
                </a>
            </li>
            <li class="mb-2">
                <a href=""
                    class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                    <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                    Productos Servicios
                </a>
            </li>
            <li class="mb-2">
                <a href=""
                    class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                    <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                    Unidad de Medida
                </a>
            </li>
            <li class="mb-2">
                <a href=""
                    class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                    <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                    Razon Social
                </a>
            </li>
        </ul>


        <a href=""
            class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
            Configuracion
        </a>
        <a href=""
            class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
            Usuario
        </a>
        <a href=""
            class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
            Salir del Sistema
        </a>
    </div>
    <div class="w-full">
        <!--Aqui quiero la tabla-->
        <h1 class="text-2xl font-bold text-white mb-4">Tabla de Clientes</h1>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                        Nombre
                    </th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                        Contacto
                    </th>
                    <!-- Agrega más encabezados de columna según tus necesidades -->
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td class="px-6 py-4 bg-gray-600 text-white whitespace-nowrap">
                            {{ $cliente->cliente }}
                        </td>
                        <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                            {{ $cliente->contacto }}
                        </td>
                        <!-- Agrega más columnas según tus necesidades -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
