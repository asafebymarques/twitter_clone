<?php
class loginController extends Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $dados = array();

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            $user = new Usuarios();

            if($user->fazerLogin($email,$senha)){
                header("Location: ".BASE_URL);
            }
        }

        $this->loadTemplate('login',$dados);
    }

    public function cadastro(){
        $dados = array('aviso' => '');

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']); 
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
            
            if(!empty($nome) && !empty($email) && !empty($senha)){

                $user = new Usuarios();

                if(!$user->usuarioExiste($email)){
                    $_SESSION['twlg'] = $user->inserirUsuario($nome,$email,$senha);
                    header("Location: ".BASE_URL);
                }else{
                    $dados['aviso'] = "Esse usuário ja existe!";
                }

            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate('cadastro',$dados);
    }

    public function sair(){
        unset($_SESSION['twlg']);
        header("Location: ".BASE_URL);
    }


}