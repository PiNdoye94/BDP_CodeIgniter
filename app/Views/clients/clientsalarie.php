<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Client Salarié</title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/styles.css')?>">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			<div class="backdrop"></div>
			<div class="vertical_bar">
				<div class="profile_info">
					<div class="img_holder">
						<img src="<?php echo base_url('public/image/lol.png')?>" alt="profile_pic">
					</div>
					<p class="title">Responsable Compte</p>
					<p class="sub_title">papisndoye218@gmail.com</p>
				</div>
				<ul class="menu">
					<li><a href="<?php echo base_url('public/Home/index')?>">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Accueil</span>
					</a></li>
					<li><a href="#" class="active">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Salarié</span>
					</a></li>
					<li><a href="<?php echo base_url('public/Particulier/clientparticulier')?>">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Particulier</span>
					</a></li>
					<li><a href="<?php echo base_url('public/Moral/clientmoral')?>">
						<span class="icon"><i class="fas fa-chart-pie"></i></span>
						<span class="text">Moral</span>
					</a></li>
					<li><a href="<?php echo base_url('public/Gestion/gestionclients')?>">
						<span class="icon"><i class="fas fa-cog"></i></span>
						<span class="text">Gestion Clients</span>
					</a></li>
				</ul>

				<h3 class="out"><a href="" >Deconnexion</a></h3>
			</div>
		</div>
		<div class="main_container">
			<div class="top_bar">
				<div class="hamburger">
					<i class="fas fa-bars"></i>
				</div>
				<div class="logo">
					Client <span>Salarié</span>
				</div>
			</div>

			<div class="container">
				<div class="content">
					<div class="item">
						<form id="formulaire" name="ouvertureCompte" action="<?php echo base_url('public/Salarie/addClientSalarie');?>" method="POST">  
			                <fieldset class="donneesClient">
			                	<legend>Informations client</legend>
			                        <div>
			                            <label for="lname">Nom<span id="error_nom"></span> </label>
			                            <input type="text" id="lname" name="nom" class="input_saisi" value="" />
			                            <span id="error_nomMessage"><?php echo @$nomErr;?></span>
			                        </div>
			                        <div>   
			                            <label for="fname">Prénom<span id="error_prenom"></span> </label>
			                            <input type="text" id="fname" name="prenom" class="input_saisie"/>
			                            <span id="error_prenomMessage"><?php echo @$prenomErr;?></span>
			                        </div>
			                        <div>
			                            <label for="adress">Adresse<span id="error_adress"></span></label>
			                            <input type="text" id="adress" name="adresse" class="input_saisi"/>
			                            <span id="error_adressMessage"><?php echo @$adresseErr;?></span>
			                        </div>
			                        <div>
			                            <label for="phone">Téléphone<span id="error_phone"></span> </label>
			                            <input type="tel" id="phone" name="telephone" class="input_saisi"/>
			                            <span id="error_phoneMessage"><?php echo @$telephoneErr;?></span>
			                        </div>
			                        <div>
			                            <label for="mail">Adresse Email<span id="error_mail"></span> </label>
			                            <input type="email" id="mail" name="email" class="input_saisie"/>
			                            <span id="error_mailMessage"><?php echo @$emailErr;?></span>
			                        </div>
			                        <div>
			                            <label for="cin">N° Carte d'identité<span id="error_cin"></span> </label>
			                            <input type="text" id="cin" name="carte_identite" class="input_saisie"/>
			                            <span id="error_cinMessage"><?php echo @$carte_identiteErr;?></span>
			                        </div>
			                        <div>
			                           <label for="validite">Validité CIN<span id="error_valid"></span></label>
			                            <input type="date" id="validite" name="validite_identite" class="input_saisie"/>
			                            <span id="error_validMessage"><?php echo @$validite_cinErr;?></span>
			                        </div>   
			                        <div> 
			                            <label for="nameProf">Profession<span id="error_nameProf"></span> </label>
			                            <input type="text" id="nameProf" name="profession" class="input_saisie"/>
			                            <span id="error_nameProfMessage"><?php echo @$professionErr;?></span>
			                        </div>
			                        <div>
			                            <label for="nameEnt">Nom de l'entreprise<span id="error_nameEnt"></span> </label>
			                            <input type="text" id="nameEnt" name="nom_entreprise" class="input_saisie"/>
			                            <span id="error_nameEntMessage"><?php echo @$nom_entrepriseErr;?></span>
			                        </div>
			                        <div>
			                           <label for="adressEnt">Adresse entreprise<span id="error_adressEnt"></span> </label>
			                            <input type="text" id="adressEnt" name="adresse_entreprise" class="input_saisie"/>
			                            <span id="error_adressEntMessage"><?php echo @$adresse_entrepriseErr;?></span>
			                        </div>
			                        <div id="obligatoire"></div>
			                </fieldset>

			                <fieldset class="donneesClient">
			                    <legend>Informations comptes client</legend>
			                        <div id="comptes">
			                        	<label for="courant" class="inline">
			                        	<input type= "radio" name="compte" value="1" id="courant">Compte Courant
			                        	<span></span>
				                        </label>
				                        <labe for="epargne" class="inline">
										<input type= "radio" name="compte" value="2" id="epargne">Compte Epargne
										<span></span> 
										</label>
										<labe for="bloque" class="inline">
										<input type= "radio" name="compte" value="3" id="bloque">Compte Blogué
										<span></span>
										</label>
			                        </div>
			                    <div id="dataComptes" >
			                      	<div id="static">
				                        <div>
				                            <label for="numero_compte">N° Compte<span id="error_NCompte"></span> </label>
				                            <input type="text" name="numero_compte" id="numero_compte" class="input_saisie"/>
				                            <span id="error_NCompteMessage"></span>
				                        </div>
				                        <div>
				                            <label for="cle_rib">Clé Rib<span id="error_clerib"></span> </label>
				                            <input type="text" name="cle_rib" id="cle_rib" class="input_saisie">
				                            <span id="error_cleribMessage"></span>
				                        </div>
				                        <div>
				                            <label for="numero_agence"> N° Agence<span id="error_nAgence"></span> </label>
				                            <input type="text" name="numero_agence" id="numero_agence" class="input_saisie"/>
				                            <span id="error_nAgenceMessage"></span>
				                        </div>
				                        <div>
				                            <label for="date_ouverture">Date d'ouverture<span id="error_dateOuverture"></span></label>
				                            <input type="date" id="date_ouverture" name="date_ouverture" value="" min="" max="" class="input_saisie"/> 
				                            <!--span id="error_dateOuvertureMessage"></span-->
				                        </div>
				                        <div>                            
				                            <label for="solde">Solde<span id="error_solde"></span> </label>
				                            <input type="text" name="solde" id="solde" class="input_saisie"/>
				                            <span id="error_soldeMessage"></span>
				                        </div>
			                        </div>
			                        <div id="dynamic">
				                        <div id="salaire">
				                            <label for="salaire_client">Montant Salaire<span id="error_salaire"></span> </label>
				                            <input type="text" name="salaire" id="salaire_client" class="input_saisie"/>
				                            <span id="error_salaireMessage"></span>
				                        </div>
				                        <div id="nomEmployeur">
				                            <label for="nom_Employeur">Nom Employeur<span id="error_nomEmp"></span> </label>
				                            <input type="text" name="nom_employeur" id="nom_employeur" class="input_saisie"/>
				                            <!--span id="error_nomEmpMessage"></span-->
				                        </div>
				                        <div id="raisonSociale">
				                            <label for="raison_sociale">Raison Sociale Employeur<span id="error_rSociale"></span> </label>
				                            <input type="text" name="rs_employeur" id="raison_social" class="input_saisie"/>
				                            <!--span id="error_rSocialeMessage"></span-->
				                        </div>
				                        <div id="idEmployeur">
				                            <label for="identifiant_employeur">ID Employeur<span id="error_idEmpMessage"></span> </label>
				                            <input type="text" name="id_employeur" id="identifiant_employeur" class="input_saisie"/>
				                            <!--span id="error_idEmpMessage"></span-->
				                        </div>
				                        <div id="adresseEmployeur">
				                            <label for="Adresse_employeur">Adresse Employeur<span id="error_adresseEmp"></span> </label>
				                            <input type="text" name="adresse_employeur" id="Adresse_employeur" class="input_saisie"/>
				                            <!--span id="error_adresseEmpMessage"></span-->
				                        </div>
				                        <!--div id="dureeBlocage">                            
				                            <label for="duree_blocage">Durée de Blocage<span id="error_dureeBlocage"></span> </label>
				                            <input type="date" name="duree_blocage" id="duree_blocage" class="input_saisie"/>
				                            <span id="error_dureeBlocageMessage"></span>
				                        </div-->
				                        <!--div>                            
				                            <label for="MontantRenumeration">Montant de Renumeration<span id="error_montant_r"></span> </label>
				                            <input type="text" name="montant_renumeration" id="MontantRenumeration" class="input_saisie"/>
				                            <span id="error_montant_rMessage"></span>
				                        </div>
				                        <div id="fraisOuverture">
				                            <label for="frais_ouverture">Fais d'ouverture Compte<span id="error_fraisOuverture"></span> </label>
				                            <input type="text" name="frais_ouverture" id="frais_ouverture" class="input_saisie"/>
				                            <span id="error_fraisOuvertureMessage"></span>
				                        </div-->
				                        <div id="agios">
				                            <label for="agios_compte_courant">Agios<span id="error_agios"></span> </label>
				                            <input type="text" name="agios" id="agios_compte_courant" class="input_saisie">
				                            <!--span id="error_agiosMessage"></span-->
										</div>
			                        </div>
			                    </div>
			                </fieldset>

			                <div id="save">
			                    <input type="submit" class="bouton" id="boutonsave" name="envoyer" value="Enregistrer">
			                    <input type="reset" class="bouton" value="Annuler">    
			                </div>

			                <div id="message">  

			                </div>

			          	</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

<!--script src="../public/js/salarie.js">
	
</script-->
</body>
</html>