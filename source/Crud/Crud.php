<?php
namespace Source\Crud;
use Source\Models\User;
class Crud {
    /** @var User */
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function addUser() {
        $this->user->first_name = "junior";
        $this->user->last_name = "costa";
        $this->user->genre = "M";
        $this->user->save();
    }

    public function deleteUser( int $id) {
        $this->user = (new User())->findById($id);
        if($this->user) {
            $this->user->destroy();
        } else {
            var_dump("DATA NULL");
        }
    }

    public function updateUser(int $id)
    {
        $this->user = (new User())->findById($id);
        $this->user->first_name = "Junior";
        $this->user->last_name = "Ribeiro";
        $this->user->genre = "M";
        $this->user->save();
    }

    public function read(){
        $this->user = new User();
        $list = $this->user->find()->fetch(true);
        foreach ($list as $userItem) {
            echo "ID: ", $userItem->data()->id, ", ";
            echo "Nome: ", $userItem->data()->first_name, ", ";
            echo "Sobrenome: ", $userItem->data()->last_name, ", ";
            echo "Genero: ", $userItem->data()->genre, ", ";
            echo "// ";
        }
    }
}
