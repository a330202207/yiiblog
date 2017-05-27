<?php

namespace common\models;

use Yii;
use common\models\Base;


/**
 * This is the model class for table "{{%cats}}".
 *
 * @property string $id
 * @property string $cat_name
 */
class Cats extends Base
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cats}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => '分类名称',
        ];
    }

    /**
     * 获取所有分类
     */
    public static function getAllCats()
    {

        $res = self::find()->asArray()->all();
        if ($res) {
            foreach ($res as $k => $list) {
                $cat[$list['id']] = $list['cat_name'];
            }
        } else {
            $cat = [0 => '暂无分类'];
        }
        return $cat;
    }
}
