<?php

namespace app\models\Party;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "party".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $document
 */
class Party extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'party';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'document'], 'required'],
            [['name', 'email'], 'string', 'max' => 100],
            [['document'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'email' => 'Email',
            'document' => 'CPF',
        ];
    }
}
