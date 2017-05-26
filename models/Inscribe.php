<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inscribe".
 *
 * @property string $INS_CORREL
 * @property integer $id
 * @property string $ASI_CODIGO
 * @property string $INS_SEMESTRE
 * @property string $INS_ANO
 *
 * @property Asignatura $aSICODIGO
 * @property Users $id0
 */
class Inscribe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inscribe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INS_CORREL', 'id', 'ASI_CODIGO'], 'required'],
            [['INS_CORREL', 'INS_SEMESTRE', 'INS_ANO'], 'number'],
            [['id'], 'integer'],
            [['ASI_CODIGO'], 'string', 'max' => 15],
            [['ASI_CODIGO'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['ASI_CODIGO' => 'ASI_CODIGO']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'INS_CORREL' => 'Ins  Correl',
            'id' => 'ID',
            'ASI_CODIGO' => 'Asi  Codigo',
            'INS_SEMESTRE' => 'Ins  Semestre',
            'INS_ANO' => 'Ins  Ano',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getASICODIGO()
    {
        return $this->hasOne(Asignatura::className(), ['ASI_CODIGO' => 'ASI_CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Users::className(), ['id' => 'id']);
    }
}
