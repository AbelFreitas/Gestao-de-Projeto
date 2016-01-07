<?php
$conteudo = ob_get_contents();
ob_end_clean();

$erro_login="";

/* tratamento do erro de login */
if(isset($_GET["erro"]) && !empty($_GET["erro"])){
    $erro_login = '<p id="error_message"><img src="gp_ficheiros/img/erro_login.png" id="icone_inq">&nbsp;&nbsp;Username ou password errados!</p>';
}

include("index.php");

?>
<header>
    <?php include('header.php');?>
</header>
<body>
<div class="container">
    <div class="clear1"><!-- --></div>

    <div class="row typography">
        <div class="col-md-12">
            <div id="Breadcrumbs">
                <p>Início</p>
            </div>
        </div>
    </div>
    <div class="row" id="skipcontent">
        <div class="col-md-12" id="Layout">
            <div class="typography">
                <div class="row">
                    <div class="col-md-3">
                        <div id="Sidebar" class="typography">
                            <div class="sidebarBox">
                                <div class="clear"></div>
                            </div>
                            <div class="clear" style="margin-bottom:100px;">&nbsp;</div>
                            <div style="height:20px"> </div>
                            <div class="sidebarBottom"></div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div id="Content-home">
                            <h1 class="h5"> Área de Acesso</h1>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="login">
                                        <?php
                                        if(isset($_GET["erro"])){
                                            echo $erro_login;
                                        }
                                        ?>
                                        <!-- Login vai ser feito aqui -->
                                        <form name="form_login" id="form_login" action="valida_login.php" method="POST">
                                            <label class="" for="username">Utilizador:</label>
                                            <input type="text" id="username" name="username" size="20" placeholder="Insira o seu numero aqui" required />
                                            <br />
                                            <label class="" for="pw">Password:</label>
                                            <input type="password" id="pw" name="pw" size="20" placeholder="Insira a password" required /><br />
                                            <br>
                                            <input type="submit" class="btn" value="Login">
                                        </form>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
