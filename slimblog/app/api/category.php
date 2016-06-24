<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;


//Get blog post

$app->get('/api/categories',function(Request $request , Response $response){

$sql = "select *from categories";
         
         try{

         	$db =  new db();

         	$db = $db->connect();

         	$smtp = $db->query($sql);

         	$categories  = $smtp->fetchAll(PDO::FETCH_OBJ);

         	$db = null;

         	echo json_encode($categories);

         }catch(PDOException $e){
          
          echo $e;
         }

     });

// single post 


$app->get('/api/categories/{id}',function(Request $request , Response $response){

   $id = $request->getAttribute('id');

$sql = "select *from categories where id= $id";
         
         try{

         	$db =  new db();

         	$db = $db->connect();

         	$smtp = $db->query($sql);

         	$posts  = $smtp->fetchAll(PDO::FETCH_OBJ);

         	$db = null;

         	echo json_encode($posts);

         }catch(PDOException $e){
          
          echo $e;
         }

     });



//add post

$app->post('/api/categories/add',function(Request $request , Response $response){

   $name = $request->getParam('name');
 
$sql = "INSERT INTO categories (name) VALUES ('$name')";
         
         try{

         	$db =  new db();

         	$db = $db->connect();


         	$smtp = $db->prepare($sql);

         	$smtp->bindParam('name' ,$name);

            
            $smtp->execute();

         	$db = null;

            echo 'inserted';

         }catch(PDOException $e){
          
          echo $e;
         }

     });



// update post

$app->put('/api/categories/update/{id}',function(Request $request , Response $response){
 

   $id= $request->getAttribute('id');
   $name = $request->getParam('name');

$sql = "UPDATE  categories SET 
            name = :name
            

             WHERE id=$id ";
         
         try{

         	$db =  new db();

         	$db = $db->connect();


         	$smtp = $db->prepare($sql);

         	$smtp->bindParam(':name' ,$name);

         
            
            $smtp->execute();

         	$db = null;

            echo 'Categories UPDATED';

         }catch(PDOException $e){
          
          echo $e;
         }

     });


// delete post


$app->delete('/api/categories/del/{id}',function(Request $request , Response $response){
 

   $id= $request->getAttribute('id');
   $name = $request->getParam('name');

$sql = "DELETE FROM  categories WHERE id=$id ";
         
         try{

         	$db =  new db();

         	$db = $db->connect();


         	$smtp = $db->prepare($sql);

            
            $smtp->execute();

         	$db = null;

            echo 'POST DELETED';

         }catch(PDOException $e){
          
          echo $e;
         }

     });