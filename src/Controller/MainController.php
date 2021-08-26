<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use KMS\FroalaEditorBundle\Form\Type\FroalaEditorType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    public function index(): Response
    {
        $form = $this->createFormBuilder()
            ->add('field', FroalaEditorType::class, array('label' => false))->getForm();

        return $this->render('froala.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
