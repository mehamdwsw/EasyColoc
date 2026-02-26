<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Bloqué - EasyColoc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8 text-center">
        <div class="flex justify-center mb-6">
            <div class="bg-red-100 p-4 rounded-full">
                <svg class="h-12 w-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
        </div>

        <h1 class="text-2xl font-bold text-gray-800 mb-4">Votre compte a été banni</h1>
        
        <p class="text-gray-600 mb-6">
            Désolé, votre accès à **EasyColoc** a été suspendu par l'administration globale. 
            Si vous pensez qu'il s'agit d'une erreur, veuillez contacter le support.
        </p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
                Se déconnecter
            </button>
        </form>
    </div>

</body>
</html>     