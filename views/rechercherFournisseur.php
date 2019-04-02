
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Produit</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="../assets/styles.css" rel="stylesheet" media="screen">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="../text/javascript" src="controlep.js"></script>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Said Kamel<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../login.html">Logout</a>
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
                            <a href="../Fournisseur.php"> Fournisseur</a>
                        </li>

                         <li>
                            <a href="../Commandef.php"> Commandes Fournisseur</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                    <!--block -->
               <div class="control-group">
                <form method="GET" action="rechercherFournisseur.php">
                                          <label class="control-label" for="typeahead">Référence Du fournisseur</label>
                                          <div class="controls">
                                            <input type="number" class="span6" id="typeahead" name="referenceF" required data-provide="typeahead" >
                                             <button type="submit" name="Rechercher" value="Rechercher" class="btn btn-info">Rechercher</button>
                
                                          </div>
                </form>
                                        </div>
                                            <!--block -->
                                         <div class="control-group">
                <form method="GET" action="trierFournisseur.php">
                                          <div class="controls">
                                            <button type="submit" class="btn btn-large btn-block">Trier Le Tableau Fournisseurs</button>
                                          </div>
                </form>

                      
                      <!-- block -->
                      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Fournisseurs</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table class="table table-bordered">
                                      <thead>
                                       <?PHP
  include "../core/fournisseurC.php";                                  
$fournisseur1C=new FournisseurC();
if (isset($_GET["referenceF"])){
	$listefournisseur=$fournisseur1C->rechercherFournisseur($_GET["referenceF"]);
}




?>
<table class="table table-bordered">
<tr>
<td>Reference fournisseur</td>
<td>Nom</td>
<td>telephone</td>
<td>email</td>
<td>type de produit</td>

</tr>

<?PHP
foreach($listefournisseur as $row){
	?>
	<tr>
	<td><?PHP echo $row['referenceF']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['type_produit']; ?> </td>
	
	</tr>
	<?PHP
}
?>


                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                      
                      
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        
                    </div>

                     <div class="row-fluid">
                        
           
        
        <!--/.fluid-container-->

        <script src="../vendors/jquery-1.9.1.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="../assets/scripts.js"></script>
        <script src="../assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>
