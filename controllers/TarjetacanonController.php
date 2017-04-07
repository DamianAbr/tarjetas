<?php

namespace app\controllers;

use Yii;
use app\models\tarjetacanon;
use app\models\tarjetacanonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TarjetacanonController implements the CRUD actions for tarjetacanon model.
 */
class TarjetacanonController extends Controller
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
     * Lists all tarjetacanon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new tarjetacanonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single tarjetacanon model.
     * @param string $nroTarjeta
     * @param string $idcanon
     * @return mixed
     */
    public function actionView($nroTarjeta, $idcanon)
    {
        return $this->render('view', [
            'model' => $this->findModel($nroTarjeta, $idcanon),
        ]);
    }

    /**
     * Creates a new tarjetacanon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new tarjetacanon();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nroTarjeta' => $model->nroTarjeta, 'idcanon' => $model->idcanon]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing tarjetacanon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nroTarjeta
     * @param string $idcanon
     * @return mixed
     */
    public function actionUpdate($nroTarjeta, $idcanon)
    {
        $model = $this->findModel($nroTarjeta, $idcanon);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nroTarjeta' => $model->nroTarjeta, 'idcanon' => $model->idcanon]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing tarjetacanon model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nroTarjeta
     * @param string $idcanon
     * @return mixed
     */
    public function actionDelete($nroTarjeta, $idcanon)
    {
        $this->findModel($nroTarjeta, $idcanon)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the tarjetacanon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nroTarjeta
     * @param string $idcanon
     * @return tarjetacanon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nroTarjeta, $idcanon)
    {
        if (($model = tarjetacanon::findOne(['nroTarjeta' => $nroTarjeta, 'idcanon' => $idcanon])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
