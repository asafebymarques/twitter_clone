<?php

class Posts extends Model{

    public function inserirPost($msg){
        $id_usuario = $_SESSION['twlg'];

        $sql = "INSERT INTO posts SET id_usuario = '$id_usuario', data_post = NOW(), mensagem = '$msg'";
        $this->db->query($sql);
    }

    public function getFeed($lista, $limite){
        $array = array();

        if(count($lista)>0){
            $sql = "SELECT *, (SELECT nome FROM usuarios WHERE usuarios.id = posts.id_usuario) as nome FROM posts WHERE id_usuario IN (".implode(',',$lista).") ORDER BY data_post DESC LIMIT ".$limite;

            $sql = $this->db->query($sql);

            if($sql->rowCount()>0){
                $array = $sql->fetchAll();
            }
        }


        return $array;
    }

}