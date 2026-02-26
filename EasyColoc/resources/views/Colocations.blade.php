<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyColoc | Ma Colocation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#fcfdfe] text-slate-900">

    <div class="flex min-h-screen">
        <aside class="w-72 bg-white border-r border-slate-100 flex flex-col hidden lg:flex">
            <div class="p-8 flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-bolt"></i>
                </div>
                <span class="text-xl font-extrabold tracking-tighter italic">EasyColoc</span>
            </div>
            <nav class="flex-1 px-6 space-y-2 mt-4">
                <a href="/dashboard" class="flex items-center gap-4 text-slate-400 hover:bg-slate-50 px-4 py-3 rounded-2xl font-semibold transition">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-4 bg-indigo-50 text-indigo-600 px-4 py-3 rounded-2xl font-bold transition">
                    <i class="fas fa-home"></i> Colocations
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-6 lg:p-12 bg-slate-50/50 overflow-y-auto">
            
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6 mb-10">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <h1 class="text-3xl font-black tracking-tighter text-slate-900 italic uppercase">Appartement Centre-Ville</h1>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black rounded-full uppercase">Actif</span>
                    </div>
                    <p class="text-sm font-bold text-slate-400 uppercase tracking-tighter">Géré par: <span class="text-indigo-600">Amine (Owner)</span></p>
                </div>
                <div class="flex gap-3">
                    <button class="bg-rose-50 text-rose-600 px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-rose-100 transition">
                        <i class="fas fa-ban mr-2"></i> Annuler la coloc
                    </button>
                    <button class="bg-slate-900 text-white px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-slate-800 transition">
                        <i class="fas fa-arrow-left mr-2"></i> Retour
                    </button>
                </div>
            </div>

            @if(session('token'))
            <div class="mb-10 bg-indigo-600 p-4 rounded-2xl text-white flex items-center justify-between shadow-xl shadow-indigo-200">
                <div class="flex items-center gap-3">
                    <i class="fas fa-envelope-open-text animate-bounce"></i>
                    <p class="text-sm font-bold uppercase tracking-tight">Lien d'invitation généré: <span class="bg-white/20 px-2 py-1 rounded ml-2">{{ session('token') }}</span></p>
                </div>
                <button class="text-xs font-black underline uppercase">Copier le lien</button>
            </div>
            @endif

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                
                <div class="xl:col-span-2 space-y-8">
                    <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-8 lg:p-10">
                        <div class="flex justify-between items-center mb-8">
                            <h2 class="text-xl font-black italic uppercase tracking-tighter">Dépenses de la Coloc</h2>
                            <button class="bg-indigo-600 text-white px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest shadow-lg shadow-indigo-100 hover:scale-105 transition">+ Nouvelle Dépense</button>
                        </div>

                        <div class="flex items-center gap-4 mb-8 bg-slate-50 p-4 rounded-2xl w-fit">
                            <i class="fas fa-calendar-alt text-indigo-500"></i>
                            <select class="bg-transparent border-none text-xs font-black uppercase text-slate-600 focus:ring-0">
                                <option>Tous les mois</option>
                                <option>Février 2026</option>
                            </select>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="text-slate-400 uppercase text-[10px] font-black tracking-widest border-b border-slate-50">
                                    <tr>
                                        <th class="pb-4">Titre / Catégorie</th>
                                        <th class="pb-4">Payé par</th>
                                        <th class="pb-4 text-right">Montant</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-50">
                                    <tr class="hover:bg-slate-50/50 transition">
                                        <td class="py-5">
                                            <p class="font-bold text-slate-800">Courses Alimentaires</p>
                                            <span class="text-[9px] font-black bg-blue-50 text-blue-500 px-2 py-0.5 rounded uppercase">Alimentation</span>
                                        </td>
                                        <td class="py-5 font-semibold text-slate-600 italic">Ahmed</td>
                                        <td class="py-5 text-right font-black text-slate-900">320.00 DH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-8">
                        <h3 class="text-lg font-black italic uppercase tracking-tighter mb-6">Balance Financière</h3>
                        <div class="space-y-4">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <p class="text-xs font-bold text-slate-400 uppercase mb-2">Remboursement suggéré</p>
                                <div class="flex justify-between items-center">
                                    <span class="font-black text-sm">Toi <i class="fas fa-arrow-right mx-2 text-indigo-500"></i> Ahmed</span>
                                    <span class="font-black text-rose-500">80.00 DH</span>
                                </div>
                                <button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-xl text-[10px] font-black uppercase tracking-widest">Marquer payé</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-2xl">
                        <h3 class="text-xs font-black uppercase tracking-[0.2em] text-slate-500 mb-6">Colocataires Actifs</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center group">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-indigo-500 rounded-lg flex items-center justify-center font-bold text-xs">A</div>
                                    <div>
                                        <p class="text-xs font-black uppercase tracking-tight">Amine <i class="fas fa-crown text-yellow-500 ml-1"></i></p>
                                        <p class="text-[9px] font-bold text-slate-500 uppercase">Réputation: +5</p>
                                    </div>
                                </div>
                                <span class="text-[10px] font-black text-emerald-400">+120 DH</span>
                            </div>
                            <div class="flex justify-between items-center group">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-slate-700 rounded-lg flex items-center justify-center font-bold text-xs text-slate-400">U</div>
                                    <div>
                                        <p class="text-xs font-black uppercase tracking-tight text-slate-300">User 1</p>
                                        <p class="text-[9px] font-bold text-slate-500 uppercase">Réputation: -1</p>
                                    </div>
                                </div>
                                <button class="opacity-0 group-hover:opacity-100 text-rose-500 text-[10px] font-black uppercase transition">Retirer</button>
                            </div>
                        </div>
                        <button class="w-full mt-8 bg-white/10 hover:bg-white/20 py-4 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition border border-white/5 italic">
                            + Inviter un membre
                        </button>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>