    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
                            <b><u>Identifier en tant que :</u></b>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
                        </br>
           <li class="smenu">
               <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           </br>
 	   <li class="smenu">
               <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter"><i>Déconnexion</i></a>
           </li>
         </ul>
        
    </div>
    