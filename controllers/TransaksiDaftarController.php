<?php

namespace app\controllers;

use app\models\TransaksiDaftar;
use app\models\TransaksiDaftarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransaksiDaftarController implements the CRUD actions for TransaksiDaftar model.
 */
class TransaksiDaftarController extends Controller
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
     * Lists all TransaksiDaftar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TransaksiDaftarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TransaksiDaftar model.
     * @param int $id_transaksi_daftar Id Transaksi Daftar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_transaksi_daftar)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_transaksi_daftar),
        ]);
    }

    /**
     * Creates a new TransaksiDaftar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TransaksiDaftar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_transaksi_daftar' => $model->id_transaksi_daftar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TransaksiDaftar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_transaksi_daftar Id Transaksi Daftar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_transaksi_daftar)
    {
        $model = $this->findModel($id_transaksi_daftar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_transaksi_daftar' => $model->id_transaksi_daftar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TransaksiDaftar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_transaksi_daftar Id Transaksi Daftar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_transaksi_daftar)
    {
        $this->findModel($id_transaksi_daftar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TransaksiDaftar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_transaksi_daftar Id Transaksi Daftar
     * @return TransaksiDaftar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_transaksi_daftar)
    {
        if (($model = TransaksiDaftar::findOne(['id_transaksi_daftar' => $id_transaksi_daftar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
