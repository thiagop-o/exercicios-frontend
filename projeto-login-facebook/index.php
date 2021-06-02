<html>

<head>
    <title>Facebook - Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>

            <form  method="post" class="form-login" action="">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                    <input type="text"/>
                </div>
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password"/>
                </div>
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar" />
                </div>
            </form>
            <div class="clear"></div>
        </div>
    </header>
    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                <img src="images/img1.png" alt="">
            </div>
            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>
                <form action="" class="criar-conta">
                    <div class="w-50">
                        <input type="text" placeholder="Nome" required/>
                    </div>
                    <div class="w-50">
                        <input type="text" placeholder="Sobrenome" required/>
                    </div>
                    <div class="w-100">
                        <input type="text" placeholder="Email ou telefone" required />
                    </div>
                    <div class="w-100">
                        <input type="password" placeholder="Senha" required />
                    </div>
                    <div class="w-100">
                        <h3>Data de Nascimento</h3>
                        <select name="nascimento-dia" id="data" class="nascimento">
                            <?php
                                for ($i=1; $i <= 31 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" id="data" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" id="data" class="nascimento">
                            <?php
                                for ($i=1900; $i <= 2020 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class ="w-100">
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="masculino">
                                <h2>Masculino</h2>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="feminino">
                                <h2>Feminino</h2>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="w-100">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div>
                    <div class="clear"></div>
                </form>
                
            </div>

            <div class="clear"></div>
        </div>
    </section>
    <section class="linguas">
        <div class="center">
            <nav>
                <ul>
                    <li><a class="selected" href="">Português (Brasil)</a></li>
                    <li><a href="">Português (Brasil)</a></li>
                    <li><a href="">Português (Brasil)</a></li>
                    <li><a href="">Português (Brasil)</a></li>
                    <li><a href="">Português (Brasil)</a></li>
                    <li><a href="">Português (Brasil)</a></li>
                </ul>
            </nav>
        </div>

        <div class="center">
            <nav>
                <ul>
                    <li><a href="">Cadastre-se</a></li>
                    <li><a href="">Entrar</a></li>
                    <li><a href="">Messenger</a></li>
                </ul>
            </nav>
        </div>
    </section>
</body>

</html>