<?php

namespace app\controllers;

use Yii;
use app\models\mantenimientos;
use app\models\mantenimientosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MantenimientosController implements the CRUD actions for mantenimientos model.
 */
class MantenimientosController extends Controller
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
     * Lists all mantenimientos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new mantenimientosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single mantenimientos model.
     * @param string $idMantenimiento
     * @param string $nroTarjeta
     * @param string $idUnidad
     * @return mixed
     */
    public function actionView($idMantenimiento, $nroTarjeta, $idUnidad)
    {
        return $this->render('view', [
            'model' => $this->findModel($idMantenimiento, $nroTarjeta, $idUnidad),
        ]);
    }

    /**
     * Creates a new mantenimientos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new mantenimientos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idMantenimiento' => $model->idMantenimiento, 'nroTarjeta' => $model->nroTarjeta, 'idUnidad' => $model->idUnidad]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing mantenimientos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $idMantenimiento
     * @param string $nroTarjeta
     * @param string $idUnidad
     * @return mixed
     */
    public function actionUpdate($idMantenimiento, $nroTarjeta, $idUnidad)
    {
        $model = $this->findModel($idMantenimiento, $nroTarjeta, $idUnidad);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idMantenimiento' => $model->idMantenimiento, 'nroTarjeta' => $model->nroTarjeta, 'idUnidad' => $model->idUnidad]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing mantenimientos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $idMantenimiento
     * @param string $nroTarjeta
     * @param string $idUnidad
     * @return mixed
     */
    public function actionDelete($idMantenimiento, $nroTarjeta, $idUnidad)
    {
        $this->findModel($idMantenimiento, $nroTarjeta, $idUnidad)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the mantenimientos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $idMantenimiento
     * @param string $nroTarjeta
     * @param string $idUnidad
     * @return mantenimientos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idMantenimiento, $nroTarjeta, $idUnidad)
    {
        if (($model = mantenimientos::findOne(['idMantenimiento' => $idMantenimiento, 'nroTarjeta' => $nroTarjeta, 'idUnidad' => $idUnidad])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
