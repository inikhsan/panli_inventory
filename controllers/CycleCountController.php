<?php

namespace app\controllers;

use Yii;
use app\models\CycleCount;
use app\models\CycleCountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CycleCountController implements the CRUD actions for CycleCount model.
 */
class CycleCountController extends Controller
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
     * Lists all CycleCount models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CycleCountSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CycleCount model.
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
     * Creates a new CycleCount model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CycleCount();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create', 'id' => $model->id_cycle_count]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CycleCount model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_cycle_count]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CycleCount model.
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
     * Finds the CycleCount model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CycleCount the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CycleCount::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionExport(){
      $model = CycleCount::find()->All();
      $filename = 'Data-'.Date('YmdGis').'-CycleCount.rtf';

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=".$filename);
      echo '<table border="1" width="100%">

    <thead>
    <tr>
        <th>Part Case</th>
        <th>Location</th>
        <th>QTY</th>
        <th>Date</th>
        <th>User</th>
    </tr>
    </thead>';
        foreach($model as $data){
            echo '
                <tr>
                    <td>'.$data['part_case'].'</td>
                    <td>'.$data['location'].'</td>
                    <td>'.$data['qty'].'</td>
                    <td>'.$data['date'].'</td>
                    <td>'.$data['user'].'</td>
                </tr>
            ';
        }
    echo '</table>';

  }
  }
