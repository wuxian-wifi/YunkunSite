<?php

namespace App\Form;

use App\Entity\BlogComment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BlogCommentType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentor', null, array(
                'attr' => array(
                    'placeholder' => 'blog_page.comment.name',
                ) ,
                'translation_domain' => 'Yunkun'))
            ->add('comment', TextareaType::class, array(
                'attr' => array(
                    'class' => 'blog-comment',
                    'name' => 'blog_comment',
                    'placeholder' => 'blog_page.comment.comment'
                ) ,
                'translation_domain' => 'Yunkun'))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => BlogComment::class,
        ));
    }
}