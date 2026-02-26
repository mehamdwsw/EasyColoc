<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyColoc | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-[#fcfdfe] text-slate-900">

    <div class="flex min-h-screen">
        <aside class="w-72 bg-white border-r border-slate-100 flex flex-col hidden lg:flex">
            <div class="p-8 flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-indigo-200">
                    <i class="fas fa-bolt"></i>
                </div>
                <span class="text-xl font-extrabold tracking-tighter italic text-slate-800">EasyColoc</span>
            </div>

            <nav class="flex-1 px-6 space-y-2 mt-4">
                <a href="#"
                    class="flex items-center gap-4 bg-indigo-50 text-indigo-600 px-4 py-3 rounded-2xl font-bold transition">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>
                <a href="#"
                    class="flex items-center gap-4 text-slate-400 hover:bg-slate-50 px-4 py-3 rounded-2xl font-semibold transition">
                    <i class="fas fa-home"></i> Colocations
                </a>
                <a href="#"
                    class="flex items-center gap-4 text-slate-400 hover:bg-slate-50 px-4 py-3 rounded-2xl font-semibold transition">
                    <i class="fas fa-wallet"></i> Dépenses
                </a>
            </nav>

            <div class="p-6">
                <div class="bg-slate-900 rounded-[2rem] p-6 text-white relative overflow-hidden">
                    <p class="text-[10px] uppercase font-black text-slate-400 tracking-widest mb-1">Votre Réputation</p>
                    <p class="text-2xl font-black italic">+{{ Auth::user()->reputation }} points</p>
                    <div class="mt-4 h-1.5 w-full bg-white/10 rounded-full overflow-hidden">
                        <div class="bg-indigo-500 h-full w-2/3"></div>
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 lg:h-screen overflow-y-auto bg-slate-50/50 p-6 lg:p-12">

            <div class="flex justify-between items-center mb-10">
                <div>
                    <h1 class="text-3xl font-black tracking-tighter text-slate-900 italic uppercase">Mon Dashboard ✨
                    </h1>
                    <p class="text-sm font-bold text-slate-400 uppercase tracking-tighter">Gérez vos finances
                        collectives simplement.</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-black text-slate-800 uppercase">{{ Auth::user()->name }}</p>
                        <p class="text-[10px] font-bold text-indigo-500 uppercase tracking-widest italic">Membre Actif
                        </p>
                    </div>
                    <div
                        class="w-12 h-12 bg-white rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center font-black text-indigo-600">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div
                    class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 group hover:scale-105 transition-transform duration-300">
                    <div
                        class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-plus-circle fa-lg"></i>
                    </div>
                    <p class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Mon Solde </p>
                    <p class="text-3xl font-black text-emerald-600">+ 450.00 <span class="text-sm">DH</span></p>
                </div>

                <div
                    class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 group hover:scale-105 transition-transform duration-300">
                    <div class="w-12 h-12 bg-rose-100 text-rose-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-minus-circle fa-lg"></i>
                    </div>
                    <p class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Dettes à payer</p>
                    <p class="text-3xl font-black text-rose-600">- 120.00 <span class="text-sm">DH</span></p>
                </div>

                <div
                    class="bg-indigo-600 p-8 rounded-[2.5rem] shadow-xl shadow-indigo-100 flex flex-col justify-center relative overflow-hidden">
                    <i class="fas fa-rocket absolute -right-4 -bottom-4 text-white/10 text-9xl -rotate-12"></i>
                    <p class="text-xs font-black text-indigo-200 uppercase tracking-[0.2em] mb-1">Statut Financier</p>
                    <p class="text-2xl font-bold text-white italic">Excellent État !</p>
                </div>
            </div>

            @if (!Auth::user()->leadership)
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                    <div class="xl:col-span-2 bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-8 lg:p-10">
                        <div class="flex justify-between items-center mb-8">
                            <h2 class="text-xl font-black italic uppercase tracking-tighter text-slate-800">Derniers
                                Flux</h2>
                            <button
                                class="text-xs font-black text-indigo-600 bg-indigo-50 px-4 py-2 rounded-xl uppercase tracking-widest hover:bg-indigo-600 hover:text-white transition">+
                                Ajouter</button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead
                                    class="text-slate-400 uppercase text-[10px] font-black tracking-widest border-b border-slate-50">
                                    <tr>
                                        <th class="pb-4">Désignation</th>
                                        <th class="pb-4 text-right">Montant</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-50">
                                    <tr class="group hover:bg-slate-50 transition">
                                        <td class="py-5">
                                            <div class="font-bold text-slate-800">Courses Carrefour</div>
                                            <div class="text-[10px] font-black text-indigo-400 uppercase">#Alimentation
                                            </div>
                                        </td>
                                        <td class="py-5 text-right font-black text-slate-800">250.00 DH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-slate-900 rounded-[2.5rem] p-10 text-white shadow-2xl relative">
                        <h3 class="text-xs font-black text-slate-500 uppercase tracking-[0.2em] mb-6 italic">Ma Coloc
                            Actuelle</h3>
                        <div class="mb-8">
                            <p class="text-2xl font-black italic mb-1 uppercase tracking-tighter">Coloc 1</p>
                            <p class="text-xs text-indigo-400 font-bold uppercase">4 Membres • Statut: Actif</p>
                        </div>
                        <div class="space-y-4">
                            <button
                                class="w-full bg-white/10 hover:bg-white/20 py-4 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition">Voir
                                la liste</button>
                            <button
                                class="w-full bg-rose-500 hover:bg-rose-600 py-4 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] transition shadow-lg shadow-rose-500/20">Quitter
                                Coloc</button>
                        </div>
                    </div>
                </div>
            @endif


        </main>
    </div>

</body>

</html>
