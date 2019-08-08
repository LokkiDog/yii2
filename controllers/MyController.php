<?php
namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\TestForm;

class MyController extends AppController
{
    public $layout = 'my';
    public function actionIndex($id = null){
        if(Yii::$app->request->isAjax){
            //$this->debug($_POST);
            //$this->debug(Yii::$app->request->post());
            exit;
        }

        $model = new TestForm();

        if($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->setFlash('success','Успех!');
                $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error','Ошибка!');
            }
        }

        return $this->render('index', compact('model'));




//        $hi = 'Hello World';
//        $mas = ['ivano', 'Smirnov', 'Sidorov'];
////    return $this->render('index',['hello' => $hi, 'mas'=>$mas]);
//        return $this->render('index',compact('hi','mas', 'id'));
    }

    public function actionTest()
    {
        $this->view->title = 'Тестовая страница';
        $this->view->registerMetaTag(['name'=>'keywords','content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description','content'=>'описание']);


//        $cats = Category::find()->all();
//        $cats = Category::find()->orderBy(['id'=>SORT_DESC])->all();
//        $cats = Category::find()->asArray()->all();
//        $cats = Category::find()->asArray()->where(['like','title','iphone'])->all();
//        $cats = Category::find()->asArray()->where('parent=691')->limit(1)->one();
//        $cats = Category::find()->asArray()->count();
//        $cats = Category::findOne(['parent' => 691]);
//        $cats = Category::findAll(['parent' => 691]);

//        $query = "SELECT * FROM categories WHERE title LIKE '%iphone%'";
//        $cats = Category::findBySql($query)->all();

//        Безопасный зпрос.
//        $query = "SELECT * FROM categories WHERE title LIKE :search";
//        $cats = Category::findBySql($query,[':search'=>'%iphone%'])->all();

//        Ленивая\отложенная загрузка  (когда не много объектов или 1)
//        $cats = Category::findOne(694);

//        Жадная загрузка(когда много объектов)
        $cats = Category::find()->with('products')->all();
        return $this->render('test', compact('cats'));
    }
}