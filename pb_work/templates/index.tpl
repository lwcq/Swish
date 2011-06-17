<?xml version="1.0" ?>
<opt:root>
<opt:prolog/>
<opt:dtd template="html5"/>
<html>
    <head>
        <title>Swish - Basketball Playbook</title>
        <meta name="author" content="lib, mhw"/>
        <meta name="description" content="Swish - Basketball Playbook"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" parse:href="$site~'media/css/index.css'" type="text/css"/>
        <link rel="stylesheet" parse:href="$site~'media/js/fancybox/jquery.fancybox-1.3.4.css'" type="text/css"/>
        <script parse:src="$site~'media/js/jquery161.js'" type="text/javascript"></script>
        <script parse:src="$site~'media/js/fancybox/jquery.fancybox-1.3.4.pack.js'" type="text/javascript"></script>
        <script parse:src="$site~'media/js/fancybox/fancybox_init.js'" type="text/javascript"></script>
        <script parse:src="$site~'media/js/menu.js'" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="top">
                <a href="index.php"><img id="logotyp" parse:src="$site~'media/images/logo.png'" alt="logo"/></a>
                <a class="login" href="#loginfb"></a>
            </div>
            <div class="left">
                <img id="m_logo" parse:src="$site~'media/images/menu.png'" alt="menu logo"/>
                <ul>
                    <li><a parse:href="$site~'index.php'">Strona główna</a></li>
                    <li><a class="login" href="#loginfb">Logowanie</a></li>
                    <li><a class="register" href="#registerfb">Rejestracja</a></li>
                    <li>
                        Pomoc
                        <ul class="exp">
                            <li><a href="#">Wprowadzenie</a></li>
                            <li><a href="#">Jes-Soft Basketball Playbook</a></li>
                            <li><a href="#">Zarządzanie zagraniami</a></li>
                        </ul>
                    </li>
                    <li><a href="#">O projekcie</a></li>
                </ul>
            </div>
            <div class="main"> 
                <div style="display:none;">
                    <div id="loginfb">
                        <form method="post" action="" name="">
                            <span>Logowanie</span>
                            <table>
                                <tr>
                                    <td>Login:</td><td><input type="text" name=""/></td>
                                </tr>
                                <tr>
                                    <td>Hasło:</td><td><input type="password" name=""/></td>
                                </tr>
                           </table>
                           <input style="margin-top: 6px;" type="submit" value="Zaloguj" name=""/>
                        </form> 
                    </div>
                    <div id="registerfb">
                        <form method="post" parse:action="$site~'index.php/user/add'" name="">
                            <span>Rejestracja</span>
                            <table>
                                <tr>
                                    <td>Login:</td><td><input type="text" name="username"/></td>
                                </tr>
                                <tr>
                                    <td>Hasło:</td><td><input type="password" name="password"/></td>
                                </tr>
                                <tr>
                                    <td>Powtórz hasło:</td><td><input type="password" name="password_2"/></td>
                                </tr>
                                <tr>
                                    <td>E-mail:</td><td><input type="text" name="email"/></td>
                                </tr>                                                               
                           </table>
                           <input style="margin-top: 6px;" type="submit" value="Rejestruj" name="reg_submit"/>
                        </form>     
                    </div>
                </div>  
                
                <opt:section name="modules">
                 <opt:include from="modules"/>
                </opt:section>
                
                <h1>Swish - Basketball Playbook - Witamy!</h1><hr />
                <p>Zaloguj się, aby rozpocząć korzystanie z systemu Swish. Jeżeli nie masz jeszcze konta - zarejestruj się!</p>
                <p><span style="font-style: italic;">Swish</span> to funkcjonalny menadżer zagrywek koszykarskich pozwalający na ich wygodne przeglądanie a także zarządzanie nimi. Z aplikacji może z powodzeniem korzystać cała drużyna, aby zapoznać się z nowymi zagraniami przed ich praktycznym wypróbowaniem lub w celu śledzenia zmian w aktualnych zagraniach.</p>
                <p>System Swish jest przystosowany do pracy z kreatorem zagrywek <span style="font-style: italic;">Basketball Playbook</span> firmy Jes-Soft, ale może z powodzeniem współpracować z innymi programami pozwalającymi na tworzenie wizualizacji zagrywek w formacie graficznym, opisu tekstowego oraz (opcjonalnie) animacji flash.</p>  
                <p>Po więcej informacji zapraszamy do działu Pomoc.</p>
                <blockquote><span style="font-style: italic;">"Talent wins games, but teamwork and intelligence win championships."</span><br/> Michael Jordan</blockquote>
            </div>
            <div class="footer">
                <span>Swish - Basketball Playbook<br />
                2011 &copy; by Bartosz Szabanowski &amp; Michał Gumny / gfx: Michał Korwin-Piotrowski
                </span>
            </div>
        </div>
    </body>
</html>
</opt:root>