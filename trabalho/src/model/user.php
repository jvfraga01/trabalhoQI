<?php

class User {
    //Atributos
    private $cod;
    private $status;
    private $user;
    private $pass;
    private $photo;
    private $birth;
    private $firstName;
    private $lastName;
    private $desc;
    private $phone;     
    private $email;
    private $newPass;

    //Método construtor
    public function __construct($n = null, $p = null) {
        $this->user = $n;
        $this->pass = $p;
    }

    //Método para validar o login
    public function login() {
        //Criando objeto da classe Database
        $db = new Database();

        //Selecionar todos os registros da tabela
        //users
        $listUsers = $db->select(
            "SELECT * FROM users"
        );
        
        //Criando variável booleana para controlar se o
        //login deu certo ou não
        $check = false;

        foreach($listUsers as $u) {
            if($this->user == $u->user_name) {
                //Só entra aqui se encontrar um nome de usuário válido
                if(sha1($this->pass) == $u->user_pass) {
                    //Só entra aqui se a senha do usuario encontrado for
                    //a mesma que a digitada
                    $check = true;

                    //Preenchendo os demais atributos do objeto
                    $this->cod = $u->user_cod;
                    $this->photo = $u->user_photo;
                    $this->birth = $u->user_birth;
                    $this->firstName = $u->user_first_name;
                    $this->lastName = $u->user_last_name;
                    $this->desc = $u->user_desc;
                    $this->phone = $u->user_phone;
                    $this->email = $u->user_email;
                    $this->newPass = $u->user_new_pass;
                    $this->status = $u->user_status;
                }
            } 
        }
        return $check;
    }
   
    //Função para retornar o objeto inteiro
    public function getObject() {
        return $this;
    }

    //Função para atualizar objeto com os
    //dados do banco de dados
    public function updateObject($id) {
        //Para obtermos os dados do BD
        //precisamos criar um objeto da
        //classe Database
        $db = new Database();

        //Fazer uso do método de seleção de dados
        $u = $db->select(
            "SELECT * FROM users WHERE user_cod = '$id'"
        );

        //Atualizar atributos do objeto conforme dados
        //do BD
        //$this->cod = $u->user_cod;
        $this->photo            = $u[0]->user_photo;
        $this->birth            = $u[0]->user_birth;
        $this->firstName        = $u[0]->user_first_name;
        $this->lastName         = $u[0]->user_last_name;
        $this->desc             = $u[0]->user_desc;
        $this->phone            = $u[0]->user_phone;
        $this->email            = $u[0]->user_email;
        $this->newPass          = $u[0]->user_new_pass;
        $this->status           = $u[0]->user_status;

        //Agora, retornamos o objeto atualizado
        return $this;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     */
    public function setPass($pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     */
    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of birth
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set the value of birth
     */
    public function setBirth($birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of desc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     */
    public function setDesc($desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get the value of complement
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of complement
     */
    public function setComplement($complement): self
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of newPass
     */
    public function getNewPass()
    {
        return $this->newPass;
    }

    /**
     * Set the value of newPass
     */
    public function setNewPass($newPass): self
    {
        $this->newPass = $newPass;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of cod
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set the value of cod
     */
    public function setCod($cod): self
    {
        $this->cod = $cod;

        return $this;
    }
}