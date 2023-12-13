<?php
$a = explode("\\", __DIR__);
$dir = "/{$a[1]}/{$a[2]}/{$a[3]}";

//Importação do cabeçalho
include $dir."/src/controller/header.php";

//Importação dos arquivos que contém as classes User e Database
include MODEL . "/user.php";
include MODEL . "/database.php";

//Importando arquivo que verifica se a sessão está "desligada".
//Caso esteja, redireciona o usuário para a página de login
include CONTROLLER . "/session_off.php";

session_reset();

//Lançando dados da $_SESSION para uma variável
//simples, apenas para facilitar nossa vida
$u = $_SESSION["user"];
//var_dump( $u );

?>

<script>
    function callUpdate() {
       return confirm("Deseja atualizar os dados?")
    }
</script>

    <button type="button" onclick="window.location.href='<?= ROOT ?>/src/controller/logout.php'">Finalizar sessão ↩️</button>

    <form action="<?= ROOT ?>/src/controller/update_profile.php" method="get" onsubmit="return callUpdate()" enctype="multipart/form-data">
        <!-- Tabela para organizar o conteúdo -->
        <table>
            <!-- <tr> representa uma linha da tabela -->
            <tr> 
                <!-- <td> representa uma célula da linha (coluna) -->
                <td colspan=2><h1>Bem vindo(a) <?= $u->getUser() ?></h1></td> 
                <td></td>
                
                <td>
                    <img src="<?= ($u->getPhoto()==null) ? ASSETS."/img/profile/user.png" : $u->getPhoto() ?>" alt="Imagem do perfil" width="100">
                    <br>
                    <input type="file" name="photo" id="photo">
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Dados pessoais</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="user">Nome de usuário</label>
                    <br>
                    <input type="text" name="user" id="user" value="<?= $u->getUser() ?>">
                </td>
                <td>
                    <label for="birth">Data de nascimento</label>
                    <br>
                    <input type="date" name="birth" id="birth" value="<?= $u->getBirth() ?>">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="first-name">Nome</label>
                    <br>
                    <input type="text" name="first-name" id="first-name" value="<?= $u->getFirstName() ?>">
                </td>
                <td>
                    <label for="last-name">Sobrenome</label>
                    <br>
                    <input type="text" name="last-name" id="last-name" value="<?= $u->getLastName() ?>">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan=4>
                    <label for="desc">Descrição (bio)</label>
                    <br>
                    <textarea name="desc" id="desc" cols="100" rows="3" placeholder="Fale sobre você" maxlength="255"><?= $u->getDesc() ?></textarea>
                </td>
            </tr>
            <!-- Linha para subtítulo -->
                    <!-- ///////// -->
            <tr>
                
                <td>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" value="<?= $u->getEmail() ?>">
                </td>
               
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Senha</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="new-pass">Nova senha</label>
                    <br>
                    <input type="password" name="new-pass" id="new-pass" class="show-pass">
                </td>
                <td>
                    <label for="confirm-pass">Cofirmação de senha</label>
                    <br>
                    <input type="password" name="confirm-pass" id="confirm-pass" class="show-pass">
                </td>
                <td id="show-pass">👀</td>
            </tr>
            <!-- Botões do formulário -->
            <tr>
                <td colspan=4>
                    <br>
                   <input type="submit" value="Salvar" name="submit">
                   <input type="reset" value="Limpar">
                </td>
            </tr>
            <!-- ///////////////////// -->
        </table>
    </form>

<?php
//Importação do rodapé
include $dir."/src/controller/footer.php";
