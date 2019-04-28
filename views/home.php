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
	<table border="0" width="100%">
		<tr>
			<td width="80%"></td>
			<td></td>
		</tr>
		<?php foreach($sugestao as $usuario):?>
		<tr>
            <td><?=$usuario['nome']?></td>
            <td>
                <?php if($usuario['seguido']=='0'):?>
				<a href="/twitter_clone/home/seguir/<?=$usuario['id']?>">Seguir</a>
				<?php else:?>
				<a href="/twitter_clone/home/deseguir/<?=$usuario['id']?>">Deixar de seguir</a>
				<?php endif;?>
            </td>
		</tr>
		<?php endforeach;?>
	</table>
</div>