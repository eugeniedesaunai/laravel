# API REST
| URI (Endpoint) | Méthode HTTP (Verbe) | Paramètres | Action | Commentaire |
| - | - | - | - | - |
| /api/movies | GET | - | Récupère tous les films | - |
| /api/movies | POST | - | Créé un nouveau film | On devra récupérer la nouvelle entrée en réponse |
| /api/movies/{id} | GET | id correspond au champ id dans la table movies | Récupère le film qui correspond à l'id (sans le réalisateur et les acteurs) | - |
| /api/movies/{id} | PATCH | id correspond au champ id dans la table movies | Met à jour le film qui correspond à l'id | On devra récupérer l'entrée mise à jour en réponse |
| /api/movies/{id} | DELETE | id correspond au champ id dans la table movies | Supprime le film qui correspond à l'id | - |
| /api/movies/{id}/actors | GET | id correspond au champ id dans la table movies | Récupère les acteurs du film ciblé | - |
| /api/movies/{id}/director | GET | id correspond au champ id dans la table movies | Récupère le réalisateur du film ciblé | - |