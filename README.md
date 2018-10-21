# api-annonce

Utilisation de :
Symfony 4
FOSRestBundle

Je n'ai pas utilisé FosUserBundle bien que je l'aurais fait pour une vrai API

Cette branche ne contient pas de token d'authentification, j'ai fais une branche test-authenticator avec un début d'implémentation.

J'ai ajouté un peu d'annotations doctrine et un simple enregistrement en BDD de l'annonce pour essayer car je n'avais jamais utilisé symfony 4 et donc la nouvelle façon de faire avec doctrine.

Le schéma de modélisation est disponible à la racine du projet (modelisation_api_annonce.jpg).
La requete CURL d'exemple est dans le controlleur AnnonceController -> exempleRequeteCurl. Je l'ai testé à partir d'un fichier php à part et cela fonctionne (voir capture exemple_curl.jpg)
J'ai aussi inclus une capture d'une requête depuis Postman (exemple_postman.jpg)
