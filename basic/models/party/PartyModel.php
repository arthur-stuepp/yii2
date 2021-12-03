<?php

namespace app\models\Party;

use yii\base\Model;

class PartyModel extends Model
{
    public $name;
    public $email;
    public $document;

    public function rules()
    {
        return [
            [['name', 'email', 'document'], 'required'],
            ['email', 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Nome',
            'email' => 'Email',
            'document' => 'CPF',
        ];
    }

}