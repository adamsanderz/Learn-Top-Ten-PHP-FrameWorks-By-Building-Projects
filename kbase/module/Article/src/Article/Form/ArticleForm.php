<?php
namespace Article\Form;

 use Zend\Form\Form;

 class ArticleForm extends Form
 {
     public function __construct($name = null)
     {
         // we want to ignore the name passed
         parent::__construct('article');

         $this->add(array(
             'name' => 'id',
             'type' => 'Hidden',
         ));

         
         $this->add(array(
             'name' => 'title',
             'type' => 'Text',

          ));


         $this->add(array(
             'name' => 'category_id',
             'type' => 'Text',
             'options' => array( ),
         ));

      $this->add(array(
             'name' => 'body',
             'type' => 'Textarea',

          ));

       $this->add(array(
             'name' => 'keywords',
             'type' => 'Text',

          ));

         $this->add(array(
             'name' => 'submit',
             'type' => 'Submit',
             'attributes' => array(
                 'value' => 'Go',
                 'id' => 'submitbutton',
             ),
         ));
     }
 }