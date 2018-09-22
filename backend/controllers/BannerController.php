<?php

namespace backend\controllers;

use Yii;
use app\models\Banner;
use app\models\BannerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * BannerController implements the CRUD actions for Banner model.
 */
class BannerController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Banner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banner model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Banner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Banner();
        $model->creationdate = date('Y-m-d H:i:s');
        if ($model->load(Yii::$app->request->post())) {            
            $file = \yii\web\UploadedFile::getInstance($model, 'banner_image');
            if (!empty($file))
                $model->banner_image = $file;
            if($model->save())
            {
                if (!empty($file))
                    $path = Yii::getAlias('@root') .'/web/images/banner/';
                    FileHelper::createDirectory($path);
                    $file->saveAs($path.$file);

              return $this->redirect(['view', 'id' => $model->uid]);
            }
            return $this->render('create', [
            'model' => $model,
            ]);
        } else {
            return $this->render('create', [
            'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Banner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){           
            $file = \yii\web\UploadedFile::getInstance($model, 'banner_image');
            if (!empty($file)){
                 $delete = $model->oldAttributes['banner_image'];
                 $model->banner_image = $file; 
            }
            else{
                $model->image = $model->oldAttributes['banner_image'];
            }
            if($model->save())
            {
             if (!empty($file))
                $path = Yii::getAlias('@root') .'/web/images/banner/';
                FileHelper::createDirectory($path);
                $file->saveAs($path.$file);

              return $this->redirect(['view', 'id' => $model->uid]);
            }
            return $this->render('update', [
            'model' => $model,
            ]);

        } else {
            return $this->render('update', [
            'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Banner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if(file_exists(Yii::getAlias('@root') .'/web/images/banner/'. $model->banner_image))
        unlink(Yii::getAlias('@root') .'/web/images/banner/'. $model->banner_image);
        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Banner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Banner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banner::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /*public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->banner_image = UploadedFile::getInstance($model, 'banner_image');

            if ($model->banner_image && $model->validate()) {                
                $model->banner_image->saveAs('images/banner' . $model->banner_image->baseName . '.' . $model->banner_image->extension);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }*/
}
