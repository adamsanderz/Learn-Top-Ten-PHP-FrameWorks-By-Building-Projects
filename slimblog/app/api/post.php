<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;


//Get blog post

$app->get('/api/post',function(Request $request , Response $response){

$sql = "select *from posts";
         
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

// single post 


$app->get('/api/post/{id}',function(Request $request , Response $response){

   $id = $request->getAttribute('id');

$sql = "select *from posts where id= $id";
         
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

$app->post('/api/post/add',function(Request $request , Response $response){

   $title = $request->getParam('title');
   $category_id = $request->getParam('category_id');
   $body = $request->getParam('body');

$sql = "INSERT INTO posts (title,category_id,body) VALUES ('$title', '$category_id' , '$body')";
         
         try{

         	$db =  new db();

         	$db = $db->connect();


         	$smtp = $db->prepare($sql);

         	$smtp->bindParam('title' ,$title);

         	$smtp->bindParam('category_id' ,$category_id);
         	$smtp->bindParam('body' ,$body);
            
            $smtp->execute();

         	$db = null;

            echo 'inserted';

         }catch(PDOException $e){
          
          echo $e;
         }

     });



// update post

$app->put('/api/post/update/{id}',function(Request $request , Response $response){
 

   $id= $request->getAttribute('id');
   $title = $request->getParam('title');
   $category_id = $request->getParam('category_id');
   $body = $request->getParam('body');

$sql = "UPDATE  posts SET 
            title = :title
            ,category_id = :category_id,

            body = :body

             WHERE id=$id ";
         
         try{

         	$db =  new db();

         	$db = $db->connect();


         	$smtp = $db->prepare($sql);

         	$smtp->bindParam(':title' ,$title);

         	$smtp->bindParam(':category_id' ,$category_id);
         	$smtp->bindParam(':body' ,$body);
            
            $smtp->execute();

         	$db = null;

            echo 'POST UPDATED';

         }catch(PDOException $e){
          
          echo $e;
         }

     });


// delete post


$app->delete('/api/post/del/{id}',function(Request $request , Response $response){
 

   $id= $request->getAttribute('id');
   $title = $request->getParam('title');
   $category_id = $request->getParam('category_id');
   $body = $request->getParam('body');

$sql = "DELETE FROM  posts WHERE id=$id ";
         
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