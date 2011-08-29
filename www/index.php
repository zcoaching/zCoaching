<?php
$racine = "./"; // cette variable contient le lien vers la racine du site
//en tete placée dans un autre fichier
include ( $racine."includes/entete.php");
?>

                    <!-- Début du menu horizontal -->
                    <ul id="MH">
                        <li><a href="http://www.siteduzero.com/" onclick="window.open(this.href);return false;"><< Retour vers www.siteduzero.com</a>
                        <li><a href="./">Accueil</a></li>
                        <li><a href="#" onclick="alert('Indisponible');return false;">Forums</a></li>
                    </ul>
                    <!-- Fin du menu horizontal -->
                    
            <div id="conteneur_2">

                <div id="corps">                    
                    
                    <!-- Début du menu vertical -->
                    <div id="MV">
                        
                        <div class="en_tete_MV">Menu</div>
                        <a href="#" class="lien_MV">Lien</a>
                        <a href="#" class="lien_MV">Lien</a>
                        <a href="#" class="lien_MV">Lien</a>
                        <a href="#" class="lien_MV">Lien</a>
                        <a href="#" class="lien_MV">Lien</a>
                        <a href="#" class="lien_MV">Lien</a>
                        <div class="marge_MV"></div>
                        
                    </div>
                    <!--Fin du menu vertical -->
                    <div id="texte"><div id="overflow">

                        <h1>Bienvenue sur zCoaching !</h1>
                                                
                        <div id="pres_accueil" style="float:right;">
                        <h1>Dernières news</h1>
                           <p>Duis non dui velit, eu pellentesque felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In id libero sed magna porttitor venenatis congue sed est. Proin ipsum justo, suscipit et varius at, malesuada nec velit. Nulla arcu elit, sagittis eget molestie in, faucibus vel tortor. Vivamus rhoncus varius varius. Cras pretium libero sed mi ullamcorper vitae porta tellus tristique.</p>
                        </div>
                        
                        <div id="pres_accueil">
                        <h1>Que propose le zCoaching ?</h1>
                           <ul>
                              <li><img style="float:left;padding-right:13px;" src="images/citation.png" />Etiam ullamcorper pretium nulla, sit amet feugiat nisi hendrerit a.</li>
                              <li><img style="float:left;padding-right:13px;" src="images/fiche.png" />Etiam ullamcorper pretium nulla, sit amet feugiat nisi hendrerit a.</li>
                              <li><img style="float:left;padding-right:13px;margin-left:-16px;" src="images/actu.png" />Etiam ullamcorper pretium nulla, sit amet feugiat nisi hendrerit a.</li>
                           </ul>
                        </div><br />
                        
                        <div id="pres_accueil" style="width:99%;">
                           <h1>Le zCoaching, qu'est-ce que c'est ?</h1>
                           <p>zCoaching aura pour but principal de mettre en relations des apprentis, surnommés zApprentis, et des coach surnommés zCoach.<br />
<br />
Les apprentis sont principalement des débutants dans un domaine donné, qui recherchent un coach pour les éclairer dans leur démarche/projet. « Par quelles étapes doit-je passer pour aboutir à mon site, ou à mon jeu ? » Les zCoach sont là pour ça : accompagner des débutants du Site du Zéro de A à Z dans leur projet, du cahier des charges à l'aboutissement concret.<br />
<br />
D'après les statistiques du topic officiel sur le Site du Zéro, il y a déjà près de 90 participants.</p>
                        </div>
                        <br />
                        <br />
                        
                        <div style="text-align:center"><a href="#" onclick="alert('Indisponible');return false;"><img src="images/bouton_zApprenti.png" alt="" /></a>    <a href="#" onclick="alert('Indisponible');return false;"><img src="images/bouton_zCoach.png" alt="" /></a></div>
                        
                        </div></div>

                    <div id="clear_both"></div>

                </div>

        <div id="pied_de_page">&copy; zCoaching<br />
        <br />
        <a href="#" onclick="alert('Indisponible');return false;"><img src="images/twitter.png" alt="Twitter" /></a>
        <g:plusone href="./index.html"></g:plusone><!-- bouton +1 -->
        <a href="#" onclick="alert('Indisponible');return false;"><img src="images/facebook.png" alt="Facebook" /></a>
        </div></div>

    </body>
</html>