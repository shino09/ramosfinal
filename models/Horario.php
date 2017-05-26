<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property string $HOR_CODIGO
 * @property string $ASI_CODIGO
 * @property string $HOR_INICIO
 * @property string $HOR_FINAL
 *
 * @property Asignatura $aSICODIGO
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOR_CODIGO'], 'required'],
            [['HOR_CODIGO', 'ASI_CODIGO'], 'string', 'max' => 15],
            [['HOR_INICIO', 'HOR_FINAL'], 'string', 'max' => 20],
            [['ASI_CODIGO'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['ASI_CODIGO' => 'ASI_CODIGO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HOR_CODIGO' => 'Hor  Codigo',
            'ASI_CODIGO' => 'Asi  Codigo',
            'HOR_INICIO' => 'Hor  Inicio',
            'HOR_FINAL' => 'Hor  Final',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getASICODIGO()
    {
        return $this->hasOne(Asignatura::className(), ['ASI_CODIGO' => 'ASI_CODIGO']);
    }
}
