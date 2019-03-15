<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.03.2019
 * Time: 21:14
 */

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render(index);
    }
}