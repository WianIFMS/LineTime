<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mensagens</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="../css/style.css" rel="stylesheet"  />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <link rel="stylesheet" href="css/layouts/email.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <style>
.button-xsmall {
    font-size: 70%;
    color:white ;
    background:#556B2F ;
}
#btn-removerConversa{
    background:#8B1A1A;
}
.email-item-unread-4{
    border-bottom: 3px solid #BEBEBE;
}
.email-item-unread-5{
    border-bottom: 3.5px solid #556B2F;
}
/*.email-item-unread-6{
    border-bottom: 3.5px solid #2F4F4F;
}*/
.email-item-unread-7{
   border-bottom: 3.5px solid #DCDCDC;

}
.span-h6{
    margin-left:3px;
}
.pure-input-rounded{
    margin-left:3px;
}
.card-header{
    color:white;
    background:#000000;
    height:5%;
}
.card-footer{
    background:#000000;
    height:5%;
    margin-top:30px;
}
.input-ecreverMensagem{
    margin-top:5px;
    width:40%;
}
</style>
    
  </head>
  <body>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        
        <?php
        	session_start();
        	include_once("../../conexao.php");
        	$id_de = $_SESSION['id'];
        	$id_grupo = $_SESSION['id_grupo'];

            $emotions = array(":angry:", ":angry1:", ":bored:", ":bored1:", ":bored2:", ":confused:", ":confused1:", ":crying:", ":crying1:", ":embarrassed:", ":emoticons:", ":happy:", ":happy1:", ":happy2:", ":happy3:", ":happy4:", ":ill:", ":inlove:", ":kissing:", ":mad:", ":nerd:", ":ninja:", ":quiet:", ":sad:", ":secret:", ":smart:", ":smyle:", ":smiling:", ":surprised:", ":surprised1:", ":suspicious:", ":suspiciou1:", ":tongueout:", ":tongueout1:", ":unhappy:", ":wink:");
    
        $images   = array("<img style=\"width: 20px;\" src=\"../imagens/emoticons/angry.png\" class=\"emoticons-size\" title=\":angry:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/angry-1.png\" class=\"emoticons-size\" title=\":angry1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/bored.png\" class=\"emoticons-size\" title=\":bored:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/bored-1.png\" class=\"emoticons-size\" title=\":bored1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/bored-2.png\" class=\"emoticons-size\" title=\":bored2:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/confused.png\" class=\"emoticons-size\" title=\":confused:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/confused-1.png\" class=\"emoticons-size\" title=\":confused1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/crying.png\" class=\"emoticons-size\" title=\":crying:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/crying-1.png\" class=\"emoticons-size\" title=\":crying1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/embarrassed.png\" class=\"emoticons-size\" title=\":embarrassed:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/emoticons.png\" class=\"emoticons-size\" title=\":emoticons:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/happy.png\" class=\"emoticons-size\" title=\":happy:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/happy-1.png\" class=\"emoticons-size\" title=\":happy1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/happy-2.png\" class=\"emoticons-size\" title=\":happy2:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/happy-3.png\" class=\"emoticons-size\" title=\":happy3:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/happy-4.png\" class=\"emoticons-size\" title=\":happy4:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/ill.png\" class=\"emoticons-size\" title=\":ill:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/in-love.png\" class=\"emoticons-size\" title=\":inlove:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/kissing.png\" class=\"emoticons-size\" title=\":kissing:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/mad.png\" class=\"emoticons-size\" title=\":mad:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/nerd.png\" class=\"emoticons-size\" title=\":nerd:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/ninja.png\" class=\"emoticons-size\" title=\":minja:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/quiet.png\" class=\"emoticons-size\" title=\":quiet:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/sad.png\" class=\"emoticons-size\" title=\":sad:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/secret.png\" class=\"emoticons-size\" title=\":secret:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/smart.png\" class=\"emoticons-size\" title=\":smart:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/smile.png\" class=\"emoticons-size\" title=\":smile:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/smiling.png\" class=\"emoticons-size\" title=\":smiling:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/surprised.png\" class=\"emoticons-size\" title=\":surprised:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/surprised-1.png\" class=\"emoticons-size\" title=\":surprised1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/suspicious.png\" class=\"emoticons-size\" title=\":suspicious:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/suspicious-1.png\" class=\"emoticons-size\" title=\":suspicious1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/tongue-out.png\" class=\"emoticons-size\" title=\":tongueout:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/tongue-out-1.png\" class=\"emoticons-size\" title=\":tongueout1:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/unhappy.png\" class=\"emoticons-size\" title=\":unhappy:\">", 
                "<img style=\"width: 20px;\" src=\"../imagens/emoticons/wink.png\" class=\"emoticons-size\" title=\":wink:\">");


            $sql = "SELECT id, id_de, id_para, id_grupo, mensagem,dt_mensagem FROM mensagens WHERE id_grupo = ? ORDER BY id DESC LIMIT 10";

            $sqlprep = $conexao->prepare($sql);                         //prepara sql
            $sqlprep->bind_param("i", $id_grupo);                   //atribui parametros ao sql
            $sqlprep->execute(); 
            $result = $sqlprep->get_result();
            $linha = $result->fetch_all(MYSQLI_ASSOC);
              
            ?>
            <div class="card-body">
                        <div class="tamanho-campoMensagem">
                            
            <?php

            if(count($linha) <= 0){
            	echo "<code>A conversa não vai se iniciar sozinha... porque não começa dizendo um OI?</code>";
            }else{
            	foreach($linha as $key => $row){
                    $row['mensagem'] = str_replace($emotions, $images, $row['mensagem']);
                    $hora = explode(" ", $row["dt_mensagem"]);
                    $sql2 = "SELECT * FROM usuarios WHERE id = ?";

                    $sqlprep2 = $conexao->prepare($sql2);
                    $sqlprep2->bind_param("i", $row["id_de"]);
                    $sqlprep2->execute(); 
                    $result2 = $sqlprep2->get_result();
                    $linha2 = $result2->fetch_assoc();

        	   if($row['id_de'] == $id_de) {?>
            	<!--<div align="right"><p class="chat-i"><?php echo $linha2["nome"].": ".$row['mensagem'];?></p></div>-->
                            <div class="card">
                              <ul class="list-group list-group-flush">
                                <p>
                                    <div class="balao-campoMensagens"><span class="badge badge-success email-item-unread-4"><div class="hora-campoMensagem" style="float: left;"><?php echo $linha2["nome"];?> :</div> </br><?php echo $row['mensagem'];?> </br><div class="hora-campoMensagem"><?php echo $hora[1];?></div></span></div>
                                    
                                </p>
                              </ul>
                            </div>
                            
            	<?php } else {?>
            	<div class="card" style="height:100%">
                              <ul class="list-group list-group-flush">
                                <p>
                                    <div class="balao-campoMensagens"><span class="badge badge-success email-item-unread-4"><div class="hora-campoMensagem" style="float: left;"><?php echo $linha2["nome"];?> :</div> </br><?php echo $row["mensagem"];?> </br><div class="hora-campoMensagem"><?php echo $hora[1];?></div></span></div>
                                    
                                </p>
                              </ul>
                            </div>
            	<?php }}}?>    
                    </div>
                </div>
        </div>
    </div>
   </body>
</html>