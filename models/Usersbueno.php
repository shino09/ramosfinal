<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $rut
 * @property string $email
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property integer $activate
 * @property string $verification_code
 * @property integer $role
 * @property string $COM_CORREL
 * @property string $CAR_CODIGO
 * @property string $ALU_NOMBRES
 * @property string $ALU_PATERNO
 * @property string $ALU_MATERNO
 * @property string $ALU_FONO
 * @property string $ALU_DIRECCION
 * @property string $ALU_SITUACION
 *
 * @property Inscribe[] $inscribes
 * @property Carrera $cARCODIGO
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'email', 'password', 'authKey', 'accessToken', 'verification_code'], 'required'],
            [['activate', 'role'], 'integer'],
            [['COM_CORREL'], 'number'],
            [['rut', 'ALU_FONO'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 80],
            [['password', 'authKey', 'accessToken', 'verification_code', 'ALU_DIRECCION'], 'string', 'max' => 250],
            [['CAR_CODIGO'], 'string', 'max' => 20],
            [['ALU_NOMBRES', 'ALU_PATERNO', 'ALU_MATERNO'], 'string', 'max' => 200],
            [['ALU_SITUACION'], 'string', 'max' => 1],
            [['CAR_CODIGO'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['CAR_CODIGO' => 'CAR_CODIGO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rut' => 'Rut',
            'email' => 'Email',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'activate' => 'Activate',
            'verification_code' => 'Verification Code',
            'role' => 'Role',
            'COM_CORREL' => 'Com  Correl',
            'CAR_CODIGO' => 'Car  Codigo',
            'ALU_NOMBRES' => 'Alu  Nombres',
            'ALU_PATERNO' => 'Alu  Paterno',
            'ALU_MATERNO' => 'Alu  Materno',
            'ALU_FONO' => 'Alu  Fono',
            'ALU_DIRECCION' => 'Alu  Direccion',
            'ALU_SITUACION' => 'Alu  Situacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscribes()
    {
        return $this->hasMany(Inscribe::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCARCODIGO()
    {
        return $this->hasOne(Carrera::className(), ['CAR_CODIGO' => 'CAR_CODIGO']);
    }
}
