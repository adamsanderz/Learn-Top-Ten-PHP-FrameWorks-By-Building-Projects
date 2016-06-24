<?php

namespace App\Presenters;

use Nette;
use App\Model;
use Nette\Application\UI\Form;


class IdeaPresenter extends BasePresenter
{


   private $database;

   public function __construct(Nette\Database\Context $database){

          $this->database = $database;
   }
	public function renderShow($ideaId)
	{   

		$idea = $this->database->table('ideas')->get($ideaId);

		$this->template->idea = $idea; 
		$this->template->comments = $idea ->related('comments')->order('create_date');
	}

	public function createComponentCommentForm(){

		$form = new Form;

		$form->addText('name' , 'Your name')
		->setRequired();

		$form->addText('email' , 'email');
	  

	  $form->addText('body' , 'Body')
		->setRequired();


  $form->addSubmit('send' , 'Publish Comment');

  $form->onSuccess[] = array($this, 'commentFormSucceeded');

  return $form;
	}
   

   public function commentFormSucceeded($form , $values){
 
    $ideaId = $this-> getParameter('ideaId');
    $this->database->table('comments')->insert(array(
    	'idea_id' => $ideaId,
        'name' => $values->name , 
        'email' => $values->email,
        'body' => $values->body

     	 ));

    $this->flashMessage('Thanks for commenting it', 'success');

     $this->redirect('this');

   }




    public function createComponentIdeaForm(){

    
    $form = new Form;

		$form->addText('title' , 'Title')
		->setRequired();

		$form->addTextarea('description' , 'Description');
	  

	  $form->addText('time_estimate' , 'Time Estimate');

	  $form->addText('cost_estimate' , 'Cost Estimate');


  $form->addSubmit('send' , 'Save and Publish ');

  $form->onSuccess[] = array($this, 'ideaFormSucceeded');

  return $form;


   }

   public function ideaFormSucceeded($form,$values){

     $ideaId = $this->getParameter('ideaId');

     if($ideaId){

     	$idea = $this->database->table('ideas')->get($ideaId);

     	$idea->update($values);
     }else{

        	$idea = $this->database->table('ideas')->insert($values);
  	   $this->flashMessage('Idea Publish', 'success');
  	   $this->redirect('show', $idea->id);

     }
   }


   public function actionEdit($ideaId){


     	$idea = $this->database->table('ideas')->get($ideaId);


   if(!$idea){


     	$this->error('Idea not Found');
     }

       $this['ideaForm']->setDefaults($idea->toArray());

   }

}
