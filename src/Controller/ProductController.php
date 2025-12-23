<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\Type\AddToCartType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function show(Request $request): Response
    {
        $form = $this->createForm(AddToCartType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form->getData());
        }

        return $this->render('product/show.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
