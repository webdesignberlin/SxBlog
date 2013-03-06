<?php

return array(
    'factories' => array(
        'SxBlog\Form\CreatePost' => function ($sm) {
            $createPostForm = new \SxBlog\Form\CreatePost();
            $postFieldset   = $sm->get('SxBlog\Form\Fieldset\Post');

            $postFieldset->setUseAsBaseFieldset(true);
            $createPostForm->add($postFieldset);

            return $createPostForm;
        },
        'SxBlog\Form\UpdatePost' => function ($sm) {
            $updatePostForm = new \SxBlog\Form\UpdatePost();
            $postFieldset   = $sm->get('SxBlog\Form\Fieldset\Post');

            $postFieldset->setUseAsBaseFieldset(true);
            $updatePostForm->add($postFieldset);

            return $updatePostForm;
        },
        'SxBlog\Form\Fieldset\Post' => function ($sm) {
            return new \SxBlog\Form\Fieldset\Post($sm->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        },
        'SxBlog\Form\CreateCategory' => function ($sm) {
            $createCategoryForm = new \SxBlog\Form\CreateCategory();
            $CategoryFieldset   = $sm->get('SxBlog\Form\Fieldset\Category');

            $CategoryFieldset->setUseAsBaseFieldset(true);
            $createCategoryForm->add($CategoryFieldset);

            return $createCategoryForm;
        },
        'SxBlog\Form\UpdateCategory' => function ($sm) {
            $updateCategoryForm = new \SxBlog\Form\UpdateCategory();
            $CategoryFieldset   = $sm->get('SxBlog\Form\Fieldset\Category');

            $CategoryFieldset->setUseAsBaseFieldset(true);
            $updateCategoryForm->add($CategoryFieldset);

            return $updateCategoryForm;
        },
        'SxBlog\Form\Fieldset\Category' => function ($sm) {
            return new \SxBlog\Form\Fieldset\Category($sm->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        },
    ),
);
