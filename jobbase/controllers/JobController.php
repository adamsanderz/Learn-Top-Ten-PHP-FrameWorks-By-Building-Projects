<?php

namespace app\controllers;
use Yii;
use app\models\job;
use app\models\Category;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;


class JobController extends \yii\web\Controller
{




    public function behaviors(){

      return [
     
      'access' => [
      
      'class' => AccessControl::className(),
      'only' => ['create' , 'edit' , 'delete'],
      'rules' => [
         [
         'actions' =>['create' , 'edit' ,'delete'],

          'allow' => true,
          'roles' => ['@'],

      ],




      ],


     ]

      ];




    }








    public function actionCreate()
    { 
    

         $job = new job();

    if ($job->load(Yii::$app->request->post())) {
        if ($job->validate()) {
            // form inputs are valid, do something here

            $job->save();

            Yii::$app->getSession()->setFlash('Success' , 'Job Added');

            return $this->redirect ('index.php?r=job');
        }
    }

    return $this->render('create', [
        'job' => $job,
    ]); 
       
    }

    






    public function actionDelete($id)
    {


       $job =  job::findOne($id);

       
       if(Yii::$app->user->identity->id != $job->user_id){
            return $this->redirect ('index.php?r=job');

       }

       $job->delete();

       Yii::$app->getSession()->setFlash('Success' , 'Job Deleted');

            return $this->redirect ('index.php?r=job');


    }

    public function actionEdit($id)
    {
             $job =  job::findOne($id);


       if(Yii::$app->user->identity->id != $job->user_id){
            return $this->redirect ('index.php?r=job');

       }
  

    if ($job->load(Yii::$app->request->post())) {
        if ($job->validate()) {
            // form inputs are valid, do something here

            $job->save();

            Yii::$app->getSession()->setFlash('Success' , 'Job Updated');

            return $this->redirect ('index.php?r=job');
        }
    }

    return $this->render('create', [
        'job' => $job,
    ]); 










        return $this->render('edit');
    }

     public function actionDetails($id)
    {
       $job = Job::find()
       ->where(['id' => $id]) 
       ->one();
        return $this->render('details', ['job' => $job]);

    }

    public function actionIndex()
    {
         $query = Job::find();
        $pagination = new Pagination([
            'defaultPageSize'=> 20 ,
            'totalCount' => $query->count(), 
            ]);


          $jobs = $query->orderBy('id DESC')
          ->offset($pagination->offset)
          ->limit($pagination->limit)
          ->all();
        return $this->render('index',[
             'jobs' => $jobs,
            'pagination' => $pagination,
            ]);
    }

}
