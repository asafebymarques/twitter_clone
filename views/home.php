<div class="feed">
   <h2>Digite sua postagem aqui:</h2><br>
   <form method="post">
		<textarea name="msg" class="textareapost" cols="30" rows="10"></textarea><br>
		<input type="submit" value="Enviar">
   </form>

   <h2> Postagens:</h2><br>
   <?php foreach($feed as $itens):?>
	<strong><?=$itens['nome']?></strong> - <?=date('H:i',strtotime($itens['data_post']))?><br>
	<?=$itens['mensagem']?>
	<hr>

	<?php endforeach;?>
</div>
<div class="rightside">
	<h4>Relacionamentos</h4>
	<div class="rs_meio"><?=$qd_seguidores?><br/>Seguidores</div>
	<div class="rs_meio"><?=$qt_seguidos?><br/>Seguindo</div>
	<div style="clear:both"></div>

	<h4>Sugestões de amigos</h4>
	<div class="container">
		
		<?php foreach($sugestao as $usuario):?>
		
            <p><?=$usuario['nome']?></p>
           
                <?php if($usuario['seguido']=='0'):?>
				<form action="/twitter_clone/home/seguir/<?=$usuario['id']?>">
				<button type="submit" class="btn btn-success" >Seguir</button>
				</form>
				<?php else:?>
				<form class="" action="/twitter_clone/home/deseguir/<?=$usuario['id']?>" >
				<button  class="btn btn-success">Deixar de seguir</button>
				</form>
				<?php endif;?>
            
		<?php endforeach;?>
	</div>
</div>