<?php

session_start();

if (empty($_SESSION['l'])) {
    header("location:login.html");
}
else {
	include "../core/commandefC.php";
include "../core/fournisseurC.php"; 
?>
<!DOCTYPE html>
<html class="no-js">
    <?php 
	$Commande1C=new CommandefC();
 

	$today=date("Y-m-d");
	//$Commande1C->supprimerCommandefexpire($today);

	$listecommandef1=$Commande1C->afficherCommandef();
	foreach($listecommandef1 as $row)
{
	
	if (($row['datec'] < $today) && ($row['etat'] == 'non arrivée'))
	{
		
		$fournisseurC=new FournisseurC();
		$fournisseurC->incRetard($row['ref_fournisseur']);
		$Commande1C->incDatec($row['referenceC']);
	}
	
}
	
	
	?>
    <head>
        <title>Commande Fournisseur</title>
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
        <script type="../text/javascript" src="../controlep.js"></script>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>  <?PHP echo $_SESSION['l'] ;?> <i class="caret"></i>

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
                         <li >
                            <a href="../Fournisseur.php"> Fournisseur</a>
                        </li>

                         <li class="active">
                            <a href="../Commandef.php"> Commandes Fournisseur</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">

                    
                    <div class="row-fluid">
                      <!--block -->
               <div class="control-group">
                <form method="GET" action="rechercherCommandef.php">
                                          <label class="control-label" for="typeahead">Référence Du commande</label>
                                          <div class="controls">
                                            <input type="number" class="span6" id="typeahead" name="referenceC" required data-provide="typeahead"  >
                                           <button type="submit" name="Rechercher" value="Rechercher" class="btn btn-info" >Rechercher</button>
                
                                          </div>
                </form>

                                        </div>
                                         <!--block -->
                                         <div class="control-group">
                <form method="GET" action="trierCommandef.php">
                                          <div class="controls">
                                            <button type="submit" class="btn btn-large btn-block">Trier Le Tableau Fournisseurs</button>
                                          </div>
                </form>

                      
                      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Commandes </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table class="table table-bordered" id ="indextable">
                                      <thead>
                                       <?PHP




$listecommandef=$Commande1C->afficherCommandef();


?>

<tr>
<td><a href="#" onclick="SortTable(0 ,'N');">Reference Commande</td>
<td><a href="#" onclick="SortTable(1 ,'T');">Titre</td>
<td><a href="#" onclick="SortTable(2 ,'N');">Ref fournisseur</td>
<td><a href="#" onclick="SortTable(3 ,'N');">Quantite</td>
<td><a href="#" onclick="SortTable(4 ,'D');">Date</td>
<td><a href="#" onclick="SortTable(5 ,'T');">Etat</td>


</tr>
</thead>
<tbody>
<?PHP
foreach($listecommandef as $row){
	?>
	<tr>
	<td><?PHP echo $row['referenceC']; ?></td>
	<td><?PHP echo $row['titre']; ?></td>
	<td><?PHP echo $row['ref_fournisseur']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['datec']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
    
	
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
           
        
        <!--/.fluid-container-->
<script type="text/javascript">
var TableIDvalue = "indextable";
var TableLastSortedColumn = -1;
function SortTable() {
var sortColumn = parseInt(arguments[0]);
var type = arguments.length > 1 ? arguments[1] : 'T';
var dateformat = arguments.length > 2 ? arguments[2] : '';
var table = document.getElementById(TableIDvalue);
var tbody = table.getElementsByTagName("tbody")[0];
var rows = tbody.getElementsByTagName("tr");
var arrayOfRows = new Array();
type = type.toUpperCase();
dateformat = dateformat.toLowerCase();
for(var i=0, len=rows.length; i<len; i++) {
    arrayOfRows[i] = new Object;
    arrayOfRows[i].oldIndex = i;
    var celltext = rows[i].getElementsByTagName("td")[sortColumn].innerHTML.replace(/<[^>]*>/g,"");
    if( type=='D' ) { arrayOfRows[i].value = GetDateSortingKey(dateformat,celltext); }
    else {
        var re = type=="N" ? /[^\.\-\+\d]/g : /[^a-zA-Z0-9]/g;
        arrayOfRows[i].value = celltext.replace(re,"").substr(0,25).toLowerCase();
        }
    }
if (sortColumn == TableLastSortedColumn) { arrayOfRows.reverse(); }
else {
    TableLastSortedColumn = sortColumn;
    switch(type) {
        case "N" : arrayOfRows.sort(CompareRowOfNumbers); break;
        case "D" : arrayOfRows.sort(CompareRowOfNumbers); break;
        default  : arrayOfRows.sort(CompareRowOfText);
        }
    }
var newTableBody = document.createElement("tbody");
for(var i=0, len=arrayOfRows.length; i<len; i++) {
    newTableBody.appendChild(rows[arrayOfRows[i].oldIndex].cloneNode(true));
    }
table.replaceChild(newTableBody,tbody);
} // function SortTable()

function CompareRowOfText(a,b) {
var aval = a.value;
var bval = b.value;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfText()

function CompareRowOfNumbers(a,b) {
var aval = /\d/.test(a.value) ? parseFloat(a.value) : 0;
var bval = /\d/.test(b.value) ? parseFloat(b.value) : 0;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfNumbers()

function GetDateSortingKey(format,text) {
if( format.length < 1 ) { return ""; }
format = format.toLowerCase();
text = text.toLowerCase();
text = text.replace(/^[^a-z0-9]*/,"");
text = text.replace(/[^a-z0-9]*$/,"");
if( text.length < 1 ) { return ""; }
text = text.replace(/[^a-z0-9]+/g,",");
var date = text.split(",");
if( date.length < 3 ) { return ""; }
var d=0, m=0, y=0;
for( var i=0; i<3; i++ ) {
    var ts = format.substr(i,1);
    if( ts == "d" ) { d = date[i]; }
    else if( ts == "m" ) { m = date[i]; }
    else if( ts == "y" ) { y = date[i]; }
    }
d = d.replace(/^0/,"");
if( d < 10 ) { d = "0" + d; }
if( /[a-z]/.test(m) ) {
    m = m.substr(0,3);
    switch(m) {
        case "jan" : m = String(1); break;
        case "feb" : m = String(2); break;
        case "mar" : m = String(3); break;
        case "apr" : m = String(4); break;
        case "may" : m = String(5); break;
        case "jun" : m = String(6); break;
        case "jul" : m = String(7); break;
        case "aug" : m = String(8); break;
        case "sep" : m = String(9); break;
        case "oct" : m = String(10); break;
        case "nov" : m = String(11); break;
        case "dec" : m = String(12); break;
        default    : m = String(0);
        }
    }
m = m.replace(/^0/,"");
if( m < 10 ) { m = "0" + m; }
y = parseInt(y);
if( y < 100 ) { y = parseInt(y) + 2000; }
return "" + String(y) + "" + String(m) + "" + String(d) + "";
} // function GetDateSortingKey()
</script>
        <script src="../vendors/jquery-1.9.1.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="../assets/scripts.js"></script>
        <script src="../assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
<?php }?>   
   </body>
   

</html>
