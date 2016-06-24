<?php
namespace Article\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;
 use Zend\Mvc\Controller\Plugin\AbstractPlugin;

 class CategoryController extends AbstractActionController
 {

     protected $articleTable;

      protected $categoryTable;

     public function indexAction()
     {
        
        return new ViewModel(array(
             'categories' => $this->getCagtegoryTable()->fetchAll(),
         ));
     }

     public function addAction()
     {
           return new ViewModel();

     }

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
         if (!$this->categoryTable) {
             $sm = $this->getServiceLocator();
             $this->categoryTable = $sm->get('Article\Model\CategoryTable');
         }
         return $this->categoryTable;
     }


     
 }