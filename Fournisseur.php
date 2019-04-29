<?PHP

 
session_start();
if (empty($_SESSION['l'])) {
    header("location:login.html");
}
else {
include "core/fournisseurC.php"; ?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
	<style>
    .error-message {
        padding: 0 0 0 30px;
        display: inline;
        color: #ff5b5b;
        display: none;
    
    }
    </style>
        <title>Fournisseur</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="JS/jquery.min.js"></script>
		<script type="text/javascript" src="JS/verifajoutfournisseur.js"></script>
		
	<script type="text/javascript">
  function notifyMe() {
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }
  else if (Notification.permission === "granted") {
    notify();
  }
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if (permission === "granted") {
        notify();
      }
    });
  }
  
  function notify() {
    var notification = new Notification('Avis', {
      icon: '../notifier.png',
      body: "Commande envoyée avec succé!",

    });

    setTimeout(notification.close.bind(notification), 7000); 
  }

}
</script>

	
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?PHP echo $_SESSION['l'] ;?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                       

                        <li class="active">
                            <a href="Fournisseur.php"> Fournisseur</a>
                        </li>

                         <li>
                            <a href="Commandef.php"> Commandes Fournisseur</a>
                        </li>

                        
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                         <!-- block --> 
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                    <form method="POST" action="views/afficherFournisseur.php"></div>
                                <div class="muted pull-left">Afficher Fournisseurs</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal">
                                      <fieldset>
                                        <div class="control-group">
                                   <button class="btn btn-warning btn-large" style="margin-left:auto;margin-right:auto;display:block;" >Afficher Fournisseurs</button>    
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">

                                <div class="muted pull-left">
                                     Fournisseur</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="ok"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                            
                                    }
									

                                    ?>
									
                                   <form method="POST" action="views/ajoutFournisseur.php" enctype="multipart/form-data">
                                      <fieldset>
                                        <legend>Ajouter fournisseur</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Nom du fournisseur <span class="required">*</span></label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="nom"  name="nom" >
                                            <div class="error-message">erreur</div>
                                          </div>
                                          </div>
                                          <br />
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Reference<span class="required">*</span></label>
                                          <div class="controls">
                                            <input type="number" class="span6"  id="referenceF"  name="referenceF" >
                                            <div class="error-message">erreur</div>
                                          </div>
										  
                                        </div>
										<div class="control-group">
											<label class="control-label">Email<span class="required">*</span></label>
												<div class="controls">
													<input name="email" type="email" class="span6 m-wrap" id="mail" />
													<div class="error-message">erreur</div>
												</div>
											</div>
                                            <div class="control-group">
                                          <label class="control-label" for="select01">Type de produit<span class="required">*</span></label>
                                          <div class="controls">
                                            <select  class="chzn-select"  name="type_produit" id="type_prod">
                                                <option >selectionnez</option>
												<option>Vêtements Homme</option>
												<option>Vêtements Femme</option>
												<option>Matériel</option>
												<option>Accessoires</option>
												
                                            </select>
                                         <div class="error-message">erreur</div>
                                          </div>
										 
                                        </div>
                                       
                                            
                                        <div class="control-group">
										
                                          <label class="control-label" for="typeahead">Telephone<span class="required">*</span></label>
                                          <div class="controls">
                                            <input type="number" class="span6" id="telephone"  name="telephone"  >
                                            <div class="error-message">erreur</div>
                                          </div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label">Note<span class="required">*</span></label>
												<div class="controls">
													<input name="note" type="number" id="note" class="span6 m-wrap"  />
												<div class="error-message">erreur</div>
												</div>
											</div>
                                       
                                   
                                        
                                        <div class="form-actions">
                                          <button  type="submit" name="ajouter" value="ajouter" id="butajout"  class="btn btn-primary">Ajouter</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                     Modifier Fournisseur</div>
                               
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="update"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                                    }
                                    ?>
                                    <form method="post" action="views/modifierFournisseur.php">
  
                                      <fieldset>
                                        <legend>Modifier Fournisseur</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Reference du fournisseur <span class="required">*</span></label>
                                          <div class="controls">
                                        <select id="select01" class="chzn-select"name="referenceF" >
                                             
				<?PHP

$Fournisseur1C=new FournisseurC();
$listefournisseur=$Fournisseur1C->afficherFournisseur();

?>

<?PHP
foreach($listefournisseur as $row){
    ?>

<?PHP echo "<option value='".$row['referenceF']."' class='active-result'>".$row['referenceF']."</option>"; ?>

    <?PHP
}
?>							 
				
                                            </select>
                                            <p class="help-block">Start typing to activate auto complete!</p>
                                          </div>
                                          <br />
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Nom</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="nom" name="nom" data-provide="typeahead" >
                                          </div>

                                        </div>
                                         <div class="control-group">
                                          <label class="control-label" for="select01">type de produit</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select"  name="type_produit" >
                                                <option> Sélectionnez</option>
                                              <option>Vêtements Homme</option>
                                              <option>Vêtements Femme</option>
                                              <option>Matériel</option>
                                              <option>Accessoires</option>
                                            </select>
                                           <div class="error-message">erreur</div>
                                          </div>
                                        </div>
									<div class="control-group">
                                          <label class="control-label" for="typeahead">Email</label>
                                          <div class="controls">
                                            <input type="email" class="span6" id="mail" name="email"  >
											 <div class="error-message">erreur</div>
                                          </div>

                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">telephone</label>
                                          <div class="controls">
                                            <input type="number" class="span6" id="telephone" name="telephone"  >
											
											<div class="error-message">erreur</div>
                                          </div>

                                        </div>
											
											<div class="control-group">
											<label class="control-label">Note<span class="required">*</span></label>
												<div class="controls">
													<input name="note" type="number" class="span6 m-wrap" id="note" />
													<div class="error-message">erreur</div>
												</div>
											</div>
                                       

                                        <div class="form-actions">
                                          <button type="submit"  class="btn btn-primary" name="modifier" value="modifier" id="butmodif">Modifier</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">

                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Supprimer Fournisseur</div>
                            </div>
                            <div class="block-content collapse in">

                                 <form method="POST" action="views/supprimerFournisseur.php">
                                     <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="oksupp"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                                    }
                                    ?>
                                <div class="span12">
                                      <fieldset>
                                        <legend>Supprimer Fournisseur</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Reference du Fournisseur<span class="required">*</span></label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select"name="referenceF">
                                               
 <?PHP

$Fournisseur1C=new FournisseurC();
$listefournisseur=$Fournisseur1C->afficherFournisseur();

?>

<?PHP
foreach($listefournisseur as $row){
    ?>

<?PHP echo "<option value='".$row['referenceF']."' class='active-result'>".$row['referenceF']."</option>"; ?>

    <?PHP
}
?>
                                            </select>
                                        </div>
                                          </div>
                                      </div>
                                          <br />
                                                                             <div class="form-actions">
                                          <button type="submit" onclick="envoyermodifier();" name="supprimer" value="supprimer"  class="btn btn-primary">Supprimer</button>
                                          
                                        </div>
                                      </fieldset>
                                    </form>
<br><br><br><br><br><br>
                                </div>
                        </div>
                    </div>
                        <!-- /block -->
                </div>

        <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

    <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/form-validation.js"></script>
        
    <script src="assets/scripts.js"></script>
        <script>

    jQuery(document).ready(function() {   
       FormValidation.init();
    });
    

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
<?PHP } ?>
    </body>

</html>