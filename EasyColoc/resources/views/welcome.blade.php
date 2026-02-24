<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyColoc - Vivre ensemble, simplement</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="flex items-center justify-between px-8 py-6 bg-white shadow-sm sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-blue-600 text-white p-2 rounded-lg">
                <i class="fas fa-hand-holding-usd fa-lg"></i>
            </div>
            <span class="text-2xl font-bold tracking-tight text-slate-800">Easy<span class="text-blue-600">Coloc</span></span>
        </div>
        
        <div class="hidden md:flex items-center gap-8 font-medium">
            <a href="#features" class="hover:text-blue-600 transition">Fonctionnalités</a>
            <a href="#how-it-works" class="hover:text-blue-600 transition">Comment ça marche</a>
        </div>

        <div class="flex items-center gap-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-5 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition shadow-md">Tableau de bord</a>
                @else
                    <a href="{{ route('login') }}" class="text-slate-600 hover:text-blue-600 font-semibold transition">Connexion</a>
                    <a href="{{ route('register') }}" class="px-6 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition shadow-lg">S'inscrire</a>
                @endauth
            @endif
        </div>
    </nav>

    <header class="relative overflow-hidden bg-white pt-16 pb-32">
        <div class="container mx-auto px-8 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 space-y-8 text-center lg:text-left">
                <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight text-slate-900">
                    Gérez votre colocation <br> <span class="text-blue-600 text-shadow-sm">sans stress.</span>
                </h1>
                <p class="text-lg text-slate-600 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    EasyColoc automatise la répartition des dépenses communes. Fini les calculs manuels et les malentendus : sachez exactement <strong>"qui doit quoi à qui"</strong> en un clin d'œil.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('register') }}" class="px-8 py-4 bg-blue-600 text-white rounded-xl font-bold text-lg hover:bg-blue-700 transition transform hover:-translate-y-1 shadow-xl">
                        Créer ma colocation
                    </a>
                    <a href="#features" class="px-8 py-4 border-2 border-slate-200 text-slate-700 rounded-xl font-bold text-lg hover:bg-slate-50 transition">
                        Voir les avantages
                    </a>
                </div>
            </div>
            
            <div class="lg:w-1/2 mt-16 lg:mt-0 relative">
                <div class="bg-blue-600/5 absolute -inset-4 rounded-full blur-3xl"></div>
                <div class="relative mx-auto w-full max-w-md bg-slate-900 rounded-[2.5rem] border-[8px] border-slate-800 shadow-2xl overflow-hidden aspect-[9/16] md:aspect-video md:max-w-none">
    <div class="h-6 bg-slate-800 flex items-center px-4 gap-1">
        <div class="w-2 h-2 rounded-full bg-red-500"></div>
        <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
        <div class="w-2 h-2 rounded-full bg-green-500"></div>
    </div>
    
    <div class="p-6 space-y-6 bg-slate-900 text-white h-full">
        <div class="flex justify-between items-center">
            <h4 class="font-bold text-xl">Appart' Paris 11e</h4>
            <span class="bg-blue-600 text-[10px] px-2 py-1 rounded">3 colocataires</span>
        </div>
        
        <div class="bg-blue-600 p-6 rounded-2xl shadow-lg">
            <p class="text-sm opacity-80">Loyer du mois</p>
            <h2 class="text-3xl font-bold">1 650 €</h2>
            <div class="w-full bg-white/20 h-2 mt-4 rounded-full overflow-hidden">
                <div class="bg-white h-full w-2/3"></div>
            </div>
        </div>

        <div class="space-y-4">
            <div class="flex items-center justify-between bg-slate-800 p-3 rounded-xl">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-green-500/20 text-green-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <span class="text-sm">Courses de la semaine</span>
                </div>
                <span class="font-bold text-sm text-blue-400">85 €</span>
            </div>
            
            <div class="flex items-center justify-between bg-slate-800 p-3 rounded-xl opacity-60">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-purple-500/20 text-purple-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <span class="text-sm">Électricité</span>
                </div>
                <span class="font-bold text-sm">120 €</span>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </header>

    <section id="features" class="py-24 bg-slate-900 text-white">
        <div class="container mx-auto px-8">
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <div class="space-y-4">
                    <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-calculator"></i></div>
                    <h3 class="text-xl font-bold">Calcul Automatique</h3>
                    <p class="text-slate-400 italic">L'algorithme répartit chaque dépense équitablement entre tous les membres.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-envelope-open-text"></i></div>
                    <h3 class="text-xl font-bold">Invitations Faciles</h3>
                    <p class="text-slate-400 italic">Invitez vos colocataires par email via un lien sécurisé unique.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-star"></i></div>
                    <h3 class="text-xl font-bold">Système de Réputation</h3>
                    <p class="text-slate-400 italic">Encouragez les bons payeurs avec notre système de points de confiance.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="py-24 bg-white">
        <div class="container mx-auto px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900">Comment ça fonctionne ?</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:shadow-lg transition">
                    <span class="text-4xl font-black text-blue-200">01</span>
                    <h4 class="text-lg font-bold mt-2">Créez votre espace</h4>
                    <p class="text-sm text-slate-600 mt-2">Nommez votre colocation et définissez les règles de base.</p>
                </div>
                <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:shadow-lg transition">
                    <span class="text-4xl font-black text-blue-200">02</span>
                    <h4 class="text-lg font-bold mt-2">Invitez vos amis</h4>
                    <p class="text-sm text-slate-600 mt-2">Envoyez des invitations. Une fois acceptées, ils rejoignent le groupe.</p>
                </div>
                <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:shadow-lg transition">
                    <span class="text-4xl font-black text-blue-200">03</span>
                    <h4 class="text-lg font-bold mt-2">Ajoutez des dépenses</h4>
                    <p class="text-sm text-slate-600 mt-2">Courses, loyer, électricité... saisissez le montant et le payeur.</p>
                </div>
                <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:shadow-lg transition">
                    <span class="text-4xl font-black text-blue-200">04</span>
                    <h4 class="text-lg font-bold mt-2">Réquilibrez</h4>
                    <p class="text-sm text-slate-600 mt-2">Visualisez les dettes et marquez les remboursements comme "Payés".</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-50 border-t border-slate-200 py-12">
        <div class="container mx-auto px-8 text-center">
            <p class="text-slate-500 font-medium">© 2026 EasyColoc - Développé par Amine HMIDOUCHE</p>
            <div class="flex justify-center gap-6 mt-6">
                <a href="#" class="text-slate-400 hover:text-blue-600 transition"><i class="fab fa-github fa-xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-blue-600 transition"><i class="fab fa-linkedin fa-xl"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>