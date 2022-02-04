<?php

namespace app\controllers;

use app\models\Access;
use app\models\AccessSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AccessController implements the CRUD actions for Access model.
 */
class AccessController extends Controller
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
     * Lists all Access models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AccessSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Access model.
     * @param int $access_id Access ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($access_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($access_id),
        ]);
    }

    /**
     * Creates a new Access model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Access();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'access_id' => $model->access_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Access model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $access_id Access ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($access_id)
    {
        $model = $this->findModel($access_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'access_id' => $model->access_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Access model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $access_id Access ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($access_id)
    {
        $this->findModel($access_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Access model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $access_id Access ID
     * @return Access the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($access_id)
    {
        if (($model = Access::findOne(['access_id' => $access_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
