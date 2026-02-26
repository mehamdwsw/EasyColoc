<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyColoc Admin | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="h-full font-sans antialiased text-gray-900">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-indigo-900 text-white flex-shrink-0 hidden md:flex flex-col shadow-2xl">
            <div class="p-6">
                <h1 class="text-2xl font-black tracking-widest text-indigo-100 italic">EASYCOLOC</h1>
                <p class="text-xs text-indigo-400 font-bold mt-1 uppercase">Admin Panel v1.0</p>
            </div>
            
            <nav class="mt-6 flex-1 px-4 space-y-2">
                <a href="#" class="flex items-center bg-indigo-800 text-white px-4 py-3 rounded-xl transition duration-200">
                    <i class="fas fa-chart-line w-6"></i>
                    <span class="font-bold">Dashboard</span>
                </a>
                <a href="#" class="flex items-center text-indigo-300 hover:bg-indigo-800 hover:text-white px-4 py-3 rounded-xl transition duration-200">
                    <i class="fas fa-users w-6"></i>
                    <span>Utilisateurs</span>
                </a>
                <a href="#" class="flex items-center text-indigo-300 hover:bg-indigo-800 hover:text-white px-4 py-3 rounded-xl transition duration-200">
                    <i class="fas fa-home w-6"></i>
                    <span>Colocations</span>
                </a>
                <a href="#" class="flex items-center text-indigo-300 hover:bg-indigo-800 hover:text-white px-4 py-3 rounded-xl transition duration-200">
                    <i class="fas fa-cog w-6"></i>
                    <span>Paramètres</span>
                </a>
            </nav>

            <div class="p-4 border-t border-indigo-800">
                <div class="flex items-center p-2 bg-indigo-800 rounded-lg">
                    <div class="h-8 w-8 bg-indigo-600 rounded-full flex items-center justify-center font-bold">A</div>
                    <div class="ml-3 overflow-hidden">
                        <p class="text-sm font-bold truncate">Admin Global</p>
                        <p class="text-xs text-indigo-400 truncate">admin@easycoloc.ma</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8 shadow-sm">
                <div class="flex items-center md:hidden">
                    <button class="text-gray-600 focus:outline-none"><i class="fas fa-bars fa-lg"></i></button>
                    <span class="ml-4 font-bold text-indigo-900">EASYCOLOC</span>
                </div>
                
                <div class="flex-1 flex justify-end items-center space-x-6">
                    <button class="text-gray-400 hover:text-indigo-600 relative">
                        <i class="fas fa-bell fa-lg"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 h-2 w-2 rounded-full"></span>
                    </button>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="text-sm font-bold text-red-600 hover:bg-red-50 px-4 py-2 rounded-lg transition">Déconnexion</button>
                    </form>
                </div>
            </header>

            <main class="p-8 overflow-y-auto">
                <div class="mb-8">
                    <h2 class="text-3xl font-black text-gray-800">Bonjour, Admin !</h2>
                    <p class="text-gray-500">Voici ce qui se passe sur la plateforme aujourd'hui.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-100 text-blue-600 rounded-2xl"><i class="fas fa-user-friends fa-lg"></i></div>
                            <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">+12%</span>
                        </div>
                        <p class="text-sm text-gray-500 font-bold">Utilisateurs</p>
                        <p class="text-2xl font-black text-gray-800">1,284</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-purple-100 text-purple-600 rounded-2xl"><i class="fas fa-house-user fa-lg"></i></div>
                        </div>
                        <p class="text-sm text-gray-500 font-bold">Colocations</p>
                        <p class="text-2xl font-black text-gray-800">342</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-green-100 text-green-600 rounded-2xl"><i class="fas fa-wallet fa-lg"></i></div>
                        </div>
                        <p class="text-sm text-gray-500 font-bold">Dépenses (DH)</p>
                        <p class="text-2xl font-black text-gray-800">85,400</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-red-100 text-red-600 rounded-2xl"><i class="fas fa-user-lock fa-lg"></i></div>
                        </div>
                        <p class="text-sm text-gray-500 font-bold">Utilisateurs Bannis</p>
                        <p class="text-2xl font-black text-gray-800">5</p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                        <h3 class="text-lg font-black text-gray-800 uppercase tracking-tight">Gestion des Utilisateurs</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 text-gray-400 text-xs font-black uppercase">
                                <tr>
                                    <th class="px-8 py-4">Nom & Email</th>
                                    <th class="px-8 py-4">Réputation</th>
                                    <th class="px-8 py-4">Statut</th>
                                    <th class="px-8 py-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-indigo-50/30 transition">
                                    <td class="px-8 py-5">
                                        <div class="font-bold text-gray-800">Youssef Amrani</div>
                                        <div class="text-xs text-gray-500 italic font-medium">youssef@example.com</div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-black rounded-lg uppercase">+5 pts</span>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-2.5 py-1 bg-green-50 text-green-600 text-[10px] font-black uppercase border border-green-200 rounded-md">Actif</span>
                                    </td>
                                    <td class="px-8 py-5 text-right">
                                        <button class="text-red-500 hover:text-red-700 font-black text-xs uppercase tracking-widest">Bannir</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-indigo-50/30 transition">
                                    <td class="px-8 py-5">
                                        <div class="font-bold text-gray-800">Sara Mansouri</div>
                                        <div class="text-xs text-gray-500 italic font-medium">sara@example.com</div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-black rounded-lg uppercase">-2 pts</span>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-2.5 py-1 bg-red-50 text-red-600 text-[10px] font-black uppercase border border-red-200 rounded-md">Banni</span>
                                    </td>
                                    <td class="px-8 py-5 text-right">
                                        <button class="text-indigo-600 hover:text-indigo-800 font-black text-xs uppercase tracking-widest">Débannir</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>