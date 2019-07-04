<?php
namespace App\Frontend\Connexion;

use Framework\Model;

class ConnexionModel extends Model {

    public function userVerify($username, $password)
    {
        $req = $this->db->prepare("SELECT * FROM users WHERE users.username = ?");
        $req->execute([$username]);
        $user = $req->fetch();
        if (password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    /**
     * Requête permettant de créer l'utilisateur admin
     */
    public function createUser()
    {
        try {
            $password = password_hash('demo', PASSWORD_DEFAULT);
            $statement = "INSERT INTO users (users.username, users.password)
                          VALUES ('Jean Forteroche', '$password')";
            $req = $this->db->prepare($statement);
            $req->execute();
        } catch (\Exception $e) {
            echo 'La requete de la fonction createPost ne marche pas : '. $req . '<br/>'. $e->getMessage();
        }
    }
}
