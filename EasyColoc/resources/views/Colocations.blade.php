<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyColoc | Créer une Colocation</title>
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
                <a href="{{ route('dashboard') }}" class="flex items-center gap-4 text-slate-400 hover:bg-slate-50 px-4 py-3 rounded-2xl font-semibold transition">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>
                <a href="{{ route('colocations.index') }}" class="flex items-center gap-4 bg-indigo-50 text-indigo-600 px-4 py-3 rounded-2xl font-bold transition">
                    <i class="fas fa-home"></i> Colocations
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-6 lg:p-12 bg-slate-50/50 flex items-center justify-center">
            <div class="w-full max-w-2xl">
                
                    
               
                    
              
                @if (Auth::user()->leadership)
                <div class="mb-10 text-center">
                    <h1 class="text-3xl font-black tracking-tighter text-slate-900 italic uppercase">Nouvelle Colocation</h1>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-2">Créez votre espace en quelques secondes</p>
                </div>

                <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border border-slate-100">
                    <form action="{{ route('colocations.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-2">Nom du logement</label>
                            <input type="text" name="name" required placeholder="Ex: Villa des Amis" 
                                class="w-full bg-slate-50 border-none rounded-2xl p-4 text-sm font-bold text-slate-800 focus:ring-2 focus:ring-indigo-500 transition">
                        </div>
                        

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase text-slate-400 tracking-widest ml-2">Description</label>
                            <textarea name="Description" rows="3" required placeholder="Décrivez votre colocation..." 
                                class="w-full bg-slate-50 border-none rounded-2xl p-4 text-sm font-bold text-slate-800 focus:ring-2 focus:ring-indigo-500 transition"></textarea>
                        </div>

                        

                        <div class="p-4 bg-indigo-50 rounded-2xl flex items-center gap-3">
                            <i class="fas fa-info-circle text-indigo-500"></i>
                            <p class="text-[10px] font-bold text-indigo-600 uppercase">En créant ce groupe, vous devenez l'**Owner**.</p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <button type="submit" class="flex-1 bg-indigo-600 text-white py-4 rounded-2xl font-black text-xs uppercase tracking-widest shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">
                                Confirmer la création
                            </button>
                            <a href="{{ route('dashboard') }}" class="px-8 py-4 bg-slate-100 text-slate-500 rounded-2xl font-black text-xs uppercase tracking-widest text-center hover:bg-slate-200 transition">
                                Annuler
                            </a>
                        </div>
                    </form>
                </div>

                @else

                 <div class="mb-10 text-center">
                    <h1 class="text-3xl font-black tracking-tighter text-slate-900 italic uppercase">Nouvelle Colocation</h1>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-2">Créez votre espace en quelques secondes</p>
                </div>

                @endif
                

            </div>
        </main>
    </div>

</body>
</html>