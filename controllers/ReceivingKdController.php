<?php

namespace app\controllers;

use Yii;
use app\models\ReceivingKd;
use app\models\ReceivingKdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReceivingKdController implements the CRUD actions for ReceivingKd model.
 */
class ReceivingKdController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ReceivingKd models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReceivingKdSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReceivingKd model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ReceivingKd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ReceivingKd();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ReceivingKd model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ReceivingKd model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReceivingKd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ReceivingKd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ReceivingKd::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionExport(){
      $model = ReceivingKd::find()->All();
      $filename = 'Data-'.Date('YmdGis').'-ReceivingKd.rtf';

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=".$filename);

      echo '<table border="1" width="100%">

    <thead>
    <tr>
        <th>Case No</th>
        <th>Location</th>
        <th>Date</th>
        <th>User</th>
    </tr>
    </thead>';
        foreach($model as $data){
            echo '
                <tr>
                    <td>'.$data['case_no'].'</td>
                    <td>'.$data['location'].'</td>
                    <td>'.$data['date'].'</td>
                    <td>'.$data['user'].'</td>
                </tr>
            ';
        }
    echo '</table>';

  }
}
