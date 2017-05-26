<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    

        public $verification_code;
    public $id;
    public $rut;
    public $email;
    public $password;
    public $authKey;
    public $accessToken;
    public $activate;
     public $COM_CORREL;
 public $CAR_CODIGO;
 public $ALU_NOMBRES;
 public $ALU_PATERNO;
 public $ALU_MATERNO;
 public $ALU_FONO;
 public $ALU_DIRECCION;
  public $ALU_SITUACION;




    /**
     * @inheritdoc
     */
    
    /* busca la identidad del usuario a través de su $id */

    public static function findIdentity($id)
    {
        
        $user = Users::find()
                ->where("activate=:activate", [":activate" => 1])
                ->andWhere("id=:id", ["id" => $id])
                ->one();
        
        return isset($user) ? new static($user) : null;
    }

    /**
     * @inheritdoc
     */
    
    /* Busca la identidad del usuario a través de su token de acceso */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
        $users = Users::find()
                ->where("activate=:activate", [":activate" => 1])
                ->andWhere("accessToken=:accessToken", [":accessToken" => $token])
                ->all();
        
        foreach ($users as $user) {
            if ($user->accessToken === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by rut
     *
     * @param  string      $rut
     * @return static|null
     */
    
    /* Busca la identidad del usuario a través del rut */
    public static function findByrut($rut)
    {
        $users = Users::find()
                ->where("activate=:activate", ["activate" => 1])
                ->andWhere("rut=:rut", [":rut" => $rut])
                ->all();
        
        foreach ($users as $user) {
            if (strcasecmp($user->rut, $rut) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    
    /* Regresa el id del usuario */
    public function getId()
    {
        return $this->id;
    }


 public function getrole()
    {
        return $this->role;
    }

    /**
     * @inheritdoc
     */
    
    /* Regresa la clave de autenticación */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    
    /* Valida la clave de autenticación */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        /* Valida el password */
        if (crypt($password, $this->password) == $this->password)
        {
        return $password === $password;
        }
    }




    public $role;

public static function isUserAdmin($id)
{
   if (Users::findOne(['id' => $id, 'activate' => '1', 'role' => 2])){
    return true;
   } else {

    return false;
   }

}

public static function isUserSimple($id)
{
   if (Users::findOne(['id' => $id, 'activate' => '1', 'role' => 1])){
   return true;
   } else {

   return false;
   }
}

}
