<?php

namespace App\Presenters;

use Nette;
use App\Model;


class HomepagePresenter extends BasePresenter
{


   private $database;

   public function __construct(Nette\Database\Context $database){

          $this->database = $database;
   }
	public function renderDefault()
	{
		$this->template->ideas = $this->database->table('ideas')
		->order('create_date DESC')
		->limit(20);
	}

}
