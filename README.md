# Recherche d'utilisateur en PHP

## Enoncé :

- Créer une application qui permettra de chercher un utilisateur dans un tableau préalablement défini (définir une dizaine ou une quinzaine d'utilisateurs minimum)
- La recherche se fera par e-mail

- Structure de l'utilisateur (tableau associatif) :
- Quatre clés : 'username', 'profile_image', 'date_inscription' et 'email'
- Date d'inscription : mettez du texte, on verra les dates en PHP plus tard

- L'interface présentera une page d'accueil avec un lien vers une page de recherche
- Dans la page de recherche, vous implémenterez un formulaire pour chercher un utilisateur par mail

- Sur la page cible du formulaire, vous afficherez les informations de l'utilisateur trouvé sous forme d'une carte stylisée, sinon un message indiquant qu'aucun utilisateur n'a été trouvé

>BONUS :
>- Pour les plus énervés (motivés) d'entre vous, implémentez la recherche pour trouver un utilisateur à partir d'un texte partiel (par exemple : "jo" pourra trouver l'adresse email "john@example.com")
>- Du coup, faites attention, car ce type de recherche pourra renvoyer plusieurs utilisateurs => changer la page cible pour afficher non plus un mais plusieurs utilisateurs
