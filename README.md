# TP 3 – Les formulaires en Symfony

## Objectif
Transformer un formulaire HTML en formulaire Symfony en utilisant :
- Twig
- Form Types
- Contrôleur Symfony

## Travail réalisé
- Création d’un layout Twig avec Bootstrap
  
    ```bash
    templates\product\show.html.twig
    ```
- Création d’un formulaire Symfony `AddToCartType`
  
  ```bash
  src\Form\Type\AddToCartType.php
  ```
- Gestion du formulaire via un contrôleur
  
  ```bash
  src\Controller\ProductController.php
  ```
- Personnalisation du rendu via Twig
  
  ```bash
  templates\product\show.html.twig
  ```
- Protection CSRF activée
  ```php
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => true,
            'csrf_token_id' => 'add_to_cart',
        ]);
    }
  ```
## Résultat
Le formulaire permet de sélectionner :
- La quantité du produit
- La couleur
Puis de soumettre les données vers Symfony.
  ```json
   ProductController.php on line 22:
    array:2 [▼
      "quantity" => 2
      "color" => "white"
    ]
  ```
