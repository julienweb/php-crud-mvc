Blog d'un écrivain - Publication de roman en ligne

Description du projet

Ce projet consiste en la création d'un blog pour un écrivain qui souhaite publier son roman en ligne, article par article. L'application inclut une interface publique pour les lecteurs et une interface d'administration sécurisée pour l'écrivain.

Fonctionnalités principales

Frontend (interface publique)
- Page d'accueil affichant les derniers articles (chapitres du roman).
- Page d'index affichant tous les articles.
- Page dédiée pour lire un article complet.
- Fonctionnalité permettant aux lecteurs de laisser des commentaires sur chaque article.
- Possibilité de signaler un commentaire pour modération.

Backend (interface d'administration)
- Tableau de bord pour gérer le contenu du blog.
  - CRUD complet pour gérer les articles :
    - Créer de nouveaux articles grâce à un éditeur WYSIWYG (TinyMCE).
    - Lire, Mettre à jour et Supprimer les articles existants.
  - Gestion des commentaires :
    - Lire, Supprimer ou Modérer les commentaires signalés.
    - Accès à l'administration protégé par un mot de passe.

Contraintes techniques
- Base de données : Utilisation de MySQL pour le stockage des données.
- Architecture logicielle : Pattern MVC pour une organisation claire et maintenable du code.
- Programmation orientée objet (POO) pour garantir modularité et réutilisabilité.
- Interface WYSIWYG pour la création et l’édition des articles (basée sur TinyMCE).
- Implémentation des fonctionnalités de modération des commentaires dans le back-office.
