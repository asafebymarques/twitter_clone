<?php
class homeController extends Controller {

    public function __construct(){
        parent::__construct();

        $user = new Usuarios();

        if(!$user->isLogged()){
            header("Location: ".BASE_URL."login");
        }
    }

    public function index() {
        $dados = array(
            'nome' => '',
        );

        $posts = new Posts();

        if(isset($_POST['msg']) && !empty($_POST['msg'])){
            $msg = addslashes($_POST['msg']);
            $posts->inserirPost($msg);
        }

        $user = new Usuarios($_SESSION['twlg']);

        $dados['nome'] = $user->getNome();

        $dados['qt_seguidos'] = $user->countSeguidos();
        $dados['qd_seguidores'] = $user->countSeguidores();
        $dados['sugestao'] = $user->getUsuarios(5);

        $lista = $user->getSeguidos();
        $lista[] = $_SESSION['twlg'];
        $dados['feed'] = $posts->getFeed($lista,10);


        $this->loadTemplate('home', $dados);
    }

    public function seguir($id) {

        if (!empty($id)) {
            $id = addslashes($id);
            $user = new usuarios();

            if ($user->usuarioIdExiste($id)) {

                $rel = new relacionamentos();
                $rel->seguir($_SESSION['twlg'], $id);
            }
        }

        header("Location: /twitter_clone");

    }

    public function deseguir($id) {

        if(!empty($id)) {
            $id = addslashes($id);
            $user = new usuarios();

            if ($user->usuarioIdExiste($id)) {

                $rel = new relacionamentos();
                $rel->deseguir($_SESSION['twlg'], $id);
            }

        }

        header("Location: /twitter_clone");

    }
}