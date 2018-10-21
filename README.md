# api-annonce

Utilisation de :
Symfony 4
FOSRestBundle

Je n'ai pas utilisé FosUserBundle bien que je l'aurais fait pour une vrai API

Cette branche ne contient pas de token d'authentification, j'ai fais une branche test-authenticator avec un début d'implémentation.

J'ai des annotations doctrine, une vérification sous forme de formulaire de ce quie st soumis et un enregistrement en BDD de l'annonce. J4ai fais cela car je n'avais encore jamais utilisé symfony 4 et donc utilisé la nouvelle façon de faire avec doctrine au niveau des migrations etc.

Le schéma de modélisation est disponible à la racine du projet (modelisation_api_annonce.jpg).
La requete CURL d'exemple est dans le controlleur AnnonceController -> exempleRequeteCurl. Je l'ai testé à partir d'un fichier php à part et cela fonctionne (voir capture exemple_curl.jpg)
J'ai aussi inclus une capture d'une requête depuis Postman (exemple_postman.jpg)
