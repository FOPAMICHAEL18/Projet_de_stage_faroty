<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Chemins à appliquer pour la configuration CORS
    |--------------------------------------------------------------------------
    |
    | Ici vous pouvez indiquer les endpoints de votre application auxquels
    | vous voulez appliquer la configuration CORS.
    |
    */
    'paths' => ['api/*'],

    /*
    |--------------------------------------------------------------------------
    | Méthodes HTTP autorisées
    |--------------------------------------------------------------------------
    |
    | Définissez ici les méthodes qui seront autorisées pour vos CORS.
    |
    */
    'allowed_methods' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | Origines autorisées
    |--------------------------------------------------------------------------
    |
    | Définissez ici l'URL de votre frontend (par exemple Nuxt3 côté dev).
    |
    */
    'allowed_origins' => ['http://localhost:3000', 'http://localhost:3001'],

    /*
    |--------------------------------------------------------------------------
    | Motifs d’origines autorisées
    |--------------------------------------------------------------------------
    |
    | Vous pouvez définir ici des motifs (regexs) pour autoriser des origines.
    |
    */
    'allowed_origins_patterns' => [],

    /*
    |--------------------------------------------------------------------------
    | En-têtes autorisés
    |--------------------------------------------------------------------------
    |
    | Indiquez tous les en-têtes que vous souhaitez autoriser.
    |
    */
    'allowed_headers' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | En-têtes exposés
    |--------------------------------------------------------------------------
    |
    | Si vous devez exposer certains en-têtes aux navigateurs,
    | listez-les ici.
    |
    */
    'exposed_headers' => [],

    /*
    |--------------------------------------------------------------------------
    | Durée de vie de la requête CORS
    |--------------------------------------------------------------------------
    |
    | Indiquez le temps (en secondes) pendant lequel la réponse
    | du navigateur peut être mise en cache.
    |
    */
    'max_age' => 0,

    /*
    |--------------------------------------------------------------------------
    | Support des identifiants (cookies, autorisations, etc.)
    |--------------------------------------------------------------------------
    |
    | Activez ceci si votre requête inclut des identifiants.
    |
    */
    'supports_credentials' => false,
];
