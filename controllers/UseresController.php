<?php

namespace app\controllers;

use app\models\Useres;
use app\models\UseresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UseresController implements the CRUD actions for Useres model.
 */
class UseresController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Useres models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UseresSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Useres model.
     * @param int $id_useres Id Useres
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_useres)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_useres),
        ]);
    }

    /**
     * Creates a new Useres model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Useres();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_useres' => $model->id_useres]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Useres model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_useres Id Useres
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_useres)
    {
        $model = $this->findModel($id_useres);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_useres' => $model->id_useres]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Useres model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_useres Id Useres
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_useres)
    {
        $this->findModel($id_useres)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Useres model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_useres Id Useres
     * @return Useres the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_useres)
    {
        if (($model = Useres::findOne(['id_useres' => $id_useres])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
