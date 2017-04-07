<?php

namespace app\controllers;

use Yii;
use app\models\canonunidad;
use app\models\canonunidadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CanonunidadController implements the CRUD actions for canonunidad model.
 */
class CanonunidadController extends Controller
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
     * Lists all canonunidad models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new canonunidadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single canonunidad model.
     * @param string $idcanon
     * @param string $unidadID
     * @return mixed
     */
    public function actionView($idcanon, $unidadID)
    {
        return $this->render('view', [
            'model' => $this->findModel($idcanon, $unidadID),
        ]);
    }

    /**
     * Creates a new canonunidad model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new canonunidad();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcanon' => $model->idcanon, 'unidadID' => $model->unidadID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing canonunidad model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $idcanon
     * @param string $unidadID
     * @return mixed
     */
    public function actionUpdate($idcanon, $unidadID)
    {
        $model = $this->findModel($idcanon, $unidadID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcanon' => $model->idcanon, 'unidadID' => $model->unidadID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing canonunidad model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $idcanon
     * @param string $unidadID
     * @return mixed
     */
    public function actionDelete($idcanon, $unidadID)
    {
        $this->findModel($idcanon, $unidadID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the canonunidad model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $idcanon
     * @param string $unidadID
     * @return canonunidad the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcanon, $unidadID)
    {
        if (($model = canonunidad::findOne(['idcanon' => $idcanon, 'unidadID' => $unidadID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
