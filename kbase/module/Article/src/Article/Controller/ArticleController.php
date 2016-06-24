<?php
namespace Article\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;
 use Article\Model\Article;          // <-- Add this import
 use Article\Form\ArticleForm;       

 class ArticleController extends AbstractActionController
 {

     protected $articleTable;

          protected $categoryTable;

     public function indexAction()
     {
        
        return new ViewModel(array(
             'articles' => $this->getArticleTable()->fetchAll(),
         ));
     }

     public function addAction()
     {
         
         $form = new ArticleForm();
         $form->get('submit')->setValue('Add');

         $request = $this->getRequest();
         if ($request->isPost()) {
             $article = new Article();
             $form->setInputFilter($article->getInputFilter());
             $form->setData($request->getPost());

             if ($form->isValid()) {
                 $article->exchangeArray($form->getData());
                 $this->getArticleTable()->saveAlbum($article);

                 // Redirect to list of albums
                 return $this->redirect()->toRoute('article');
             }


     } }

     public function editAction()
     {
            return new ViewModel();

     }

     public function deleteAction()
     {

               return new ViewModel();
     }

       public function getArticleTable()
     {
         if (!$this->articleTable) {
             $sm = $this->getServiceLocator();
             $this->articleTable = $sm->get('Article\Model\ArticleTable');
         }
         return $this->articleTable;
     }

      public function getCategoryTable()
     {
         if (!$this->CategoryTable) {
             $sm = $this->getServiceLocator();
             $this->CategoryTable = $sm->get('Article\Model\CategoryTable');
         }
         return $this->CategoryTable;
     }
 }