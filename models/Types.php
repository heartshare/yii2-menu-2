<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-menu
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-menu
 * @version 0.8.1
 */

namespace cinghie\menu\models;

use Yii;

/**
 * This is the model class for table "{{%menu_types}}".
 *
 * @property string $id
 * @property string $menutype
 * @property string $title
 * @property string $description
 */
class Types extends Menu
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%menu_types}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menutype', 'title'], 'required'],
            [['menutype'], 'string', 'max' => 24],
            [['title'], 'string', 'max' => 48],
            [['description'], 'string', 'max' => 255],
            [['menutype'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('menu', 'ID'),
            'menutype' => Yii::t('menu', 'Menutype'),
            'title' => Yii::t('menu', 'Title'),
            'description' => Yii::t('menu', 'Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return TypesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TypesQuery(get_called_class());
    }

}
