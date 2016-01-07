<?php session_start();
ob_start();
include('../header.php');
include_once('../bd/bd_gp.php');
include_once('../bd/config_db.php');
include('../DAO/Admin.php');


$admin = new Admin();
//$dados = $admin->obtem_alunos();
?>

</head>

<body>
<div class="container">
<div class="clear1"><!-- --></div>

    <div class="row typography">
        <div class="col-md-12">
            <div id="Breadcrumbs">
                <p><a href="inicio.php">Início</a></p>
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
                                <ul id="Menu2">
                                    <li>
                                        <a href="inicio.php" title=" Ir para Início" class="current levela">
                                                <span>
                                                    <em>Início</em>
                                                </span>
                                        </a>
                                    </li>
                                    <li class="current">
                                        <a href="pprof.php" title=" Ir para Permissões" class="link levela">
                                                <span>
                                                    <em>Permissões</em>
                                                </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../index.php" title=" Sair " class="link levela">
                                                <span>
                                                    <em>Sair</em>
                                                </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clear"></div>

                            </div>

                            <div class="clear" style="margin-bottom:100px;">&nbsp;</div>
                            <div style="height:20px"> </div>
                            <div class="sidebarBottom"></div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div id="Content-home">
                            <h1 class="h5">Início</h1>
                            <br>
                            <div class="row">
                                <div class="col-md-11">
                                    <div>
                                        <table id="tabela_inq">
                                            <tr>
                                                <th colspan="2">Aluno</th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Nome
                                                </th>
                                                <th>
                                                    Estado (Ativo/Inativo)
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>Alexandre Filipe</td>
                                                <td><a href=""><img src="../gp_ficheiros/img/green.jpg" height="35" id="icone_inq"></a></td>
                                            </tr>
                                            <tr>
                                                <td>Nuno Cabral</td>
                                                <td><a href=""><img src="../gp_ficheiros/img/red.jpg" height="35" id="icone_inq"></a></td>
                                            </tr>
                                        </table>
                                        <div class="linkArquivo">
                                            <a href="paluno.php">Ver Mais</a>
                                        </div>
                                        <br>
                                        <table id="tabela_inq">
                                            <tr>
                                                <th colspan="2">Professor</th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Nome
                                                </th>
                                                <th>
                                                    Estado (Ativo/Inativo)
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>Marco Veloso</td>
                                                <td><a href=""><img src="../gp_ficheiros/img/green.jpg" height="35" id="icone_inq"></a></td>
                                            </tr>
                                            <tr>
                                                <td>Mateus Mendes</td>
                                                <td><a href=""><img src="../gp_ficheiros/img/red.jpg" height="35" id="icone_inq"></a></td>
                                            </tr>
                                            <tr>
                                                <td>Nuno Gil Fonseca</td>
                                                <td><a href=""><img src="../gp_ficheiros/img/green.jpg" height="35" id="icone_inq"></a></td>
                                            </tr>
                                        </table>
                                        <div class="linkArquivo">
                                            <a href="pprof.php">Ver Mais</a>
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

    <div class="clear"><!-- --></div>

</body>
</html>

<?php
include('../footer.php');

$conteudo = ob_get_contents();
ob_end_clean();
$titulo = "INQ+";
include("../master.php");

?>
