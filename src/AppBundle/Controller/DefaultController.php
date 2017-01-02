<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('foo', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', [
                'choices' => ['A', 'B', 'C'],
                'choice_value' => function ($value) {
                    if (null === $value) {
                        throw new \InvalidArgumentException('Nullable value is unexpected here!');
                    }

                    return $value;
                },
            ])
            ->getForm();

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
