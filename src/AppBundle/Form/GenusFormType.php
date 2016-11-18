<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenusFormType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
			$builder
				->add('name')
				->add('speciesCount')
				->add('funfact')
			;
	}

	public function configureOptions(OptionsResolver $resolver) {

	} 
}