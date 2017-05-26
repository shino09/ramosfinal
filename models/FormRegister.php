<?php

namespace app\models;
use Yii;
use yii\base\Model;
use app\models\Users;

class FormRegister extends model{
 
    public $rut;
    public $email;
    public $password;
    public $password_repeat;
    
    public function rules()
    {
        return [
            [['rut', 'email', 'password', 'password_repeat'], 'required', 'message' => 'Campo requerido'],
            ['rut', 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'Mínimo 3 y máximo 50 caracteres'],
            ['rut', 'match', 'pattern' => "/^[0-9a-z]+$/i", 'message' => 'Sólo se aceptan letras y números'],
            ['rut', 'rut_existe'],
            ['email', 'match', 'pattern' => "/^.{5,80}$/", 'message' => 'Mínimo 5 y máximo 80 caracteres'],
            ['email', 'email', 'message' => 'Formato no válido'],
            ['email', 'email_existe'],
            ['password', 'match', 'pattern' => "/^.{8,16}$/", 'message' => 'Mínimo 6 y máximo 16 caracteres'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Los passwords no coinciden'],
        ];
    }
    
    public function email_existe($attribute, $params)
    {
  
  //Buscar el email en la tabla
  $table = Users::find()->where("email=:email", [":email" => $this->email]);
  
  //Si el email existe mostrar el error
  if ($table->count() == 1)
  {
                $this->addError($attribute, "El email seleccionado existe");
  }
    }
 
    public function rut_existe($attribute, $params)
    {
  //Buscar el rut en la tabla
  $table = Users::find()->where("rut=:rut", [":rut" => $this->rut]);
  
  //Si el rut existe mostrar el error
  if ($table->count() == 1)
  {
                $this->addError($attribute, "El usuario seleccionado existe");
  }
    }
 
}
