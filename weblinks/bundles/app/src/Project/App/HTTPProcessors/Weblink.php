<?php
namespace Project\App\HTTPProcessors;

use PHPixie\HTTP\Request;

// we extend a class that allows Controller-like behavior
class Weblink extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    /**
     * The Builder will be used to access
     * various parts of the framework later on
     * @var Project\App\HTTPProcessors\Builder
     */
    protected $builder;

    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    // This is the default action
    public function defaultAction(Request $request)
    {

     
     $orm = $this->builder->components()->orm();
     $weblinks = $orm->query('weblink')->find();


     $weblinks = $weblinks->asArray(true); 


      $template = $this->builder->components()->template();

        return $template->render(
            'app:weblink/default',
            array(
                'weblinks' => $weblinks
            )
        );
    }

    //We will be adding methods here in a moment
      
      public function viewAction(Request $request)
    {
        //Output the 'id' parameter
        $id= $request->attributes()->get('id');
      $orm = $this->builder->components()->orm();
      $weblink = $orm->query('weblink')
     ->where('id', $id)
        ->findOne();


         $template = $this->builder->components()->template();

        return $template->render(
            'app:weblink/view' , array(
            'weblink' =>  $weblink
              )
        );
    }


   public function addAction(Request $request)
    {

     if($request->method()=='POST')
    
      {
        $title= $request->data()->get('title');
       $url= $request->data()->get('url');
       $category= $request->data()->get('category');
       $username= $request->data()->get('username');
       $description= $request->data()->get('description');
     $orm = $this->builder->components()->orm();
      $weblinkRepository = $orm->repository('weblink');   

      $weblink = $weblinkRepository->create();
      $weblink->title=$title;    
      $weblink->url=$url;    
      $weblink->category=$category;    
      $weblink->username=$username;    
      $weblink->description=$description;    


   $weblink->save();
   $http = $this->builder->components()->http();
   $httpResponses = $http->responses();
   return $httpResponses->redirect('/'); 
      }

      $template = $this->builder->components()->template('weblink');

        return $template->render(
            'app:weblink/add'
        );
    }


      public function editAction(Request $request)
    {
        //Output the 'id' parameter
        $id= $request->attributes()->get('id');
      $orm = $this->builder->components()->orm();

if($request->method()=='POST')
    
      {
        $title= $request->data()->get('title');
       $url= $request->data()->get('url');
       $category= $request->data()->get('category');
       $username= $request->data()->get('username');
       $description= $request->data()->get('description');
      $weblinkRepository = $orm->repository('weblink');   
  
      $weblinkRepository->query()
      ->where('id' , $id) 
      ->update(array(
        'title' => $title,
        'url' => $url,
         'username' => $username,

        'category' => $category,
        'description' => $description,
        ));

   $http = $this->builder->components()->http();
   $httpResponses = $http->responses();
   return $httpResponses->redirect('/'); 
      }



      $weblink = $orm->query('weblink')
     ->where('id', $id)
        ->findOne();


         $template = $this->builder->components()->template();

        return $template->render(
            'app:weblink/edit' , array(
            'weblink' =>  $weblink
              )
        );
    }



      public function deleteAction(Request $request)
    {
        //Output the 'id' parameter
        $id= $request->attributes()->get('id');
      $orm = $this->builder->components()->orm();

            $weblinkRepository = $orm->repository('weblink');   

      $weblinkRepository->query()
     ->where('id', $id)
        ->delete();

    $http = $this->builder->components()->http();
   $httpResponses = $http->responses();
   return $httpResponses->redirect('/'); 
      
     }


}