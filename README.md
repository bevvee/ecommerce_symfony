# TP 3 – Les formulaires en Symfony

## Objectif
Transformer un formulaire HTML en formulaire Symfony en utilisant :
- Twig
- Form Types
- Contrôleur Symfony
- Bootstrap 5.3

## Travail réalisé
- Création d’un layout Twig avec Bootstrap
    ```bash
        templates\product\show.html.twig
    ```
- Création d’un formulaire Symfony `AddToCartType`
- Gestion du formulaire via un contrôleur
- Personnalisation du rendu via Twig
- Protection CSRF activée

## Résultat
Le formulaire permet de sélectionner :
- La quantité du produit
- La couleur
Puis de soumettre les données vers Symfony.

## Technologies
- Symfony
- Twig
- Bootstrap 5.3
