<?php
$servername = "127.0.0.1";
$username = "stjohqse_root";
$password = 'g#dqWT^8U3@a';
$dbname = "stjohqse_Wizarddb";

  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_GET['cat'])){
     $dat = $_GET['cat'];

    $data = $pdo->query("SELECT * FROM admit where catig = $dat")->fetchAll();  
     
  }else{
    $data = $pdo->query("SELECT * FROM admit")->fetchAll();  
  }

?>
<html lang="en">
    <head>
  <title>CATHOLIC DIOCESE OF AWKA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css">

<script>
function myFunction() {
  alert("Sorry ...\n You will have to check leta for your files  ");
}
</script>

</head>
<body>

<nav class="navbar navbar-default" style="
    border-color: #040444;
    background: #040444;
">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="../assets/img/logo.png" style="
    height: 34px;
">
      </a>
    </div>
  </div>
</nav>

<div class="jumbotron" style="
    background: url(admissions.jpg);
    background-size: 100% 101%;
">
  <div class="container text-center" style="
    background-color: #0404698f;
    border-radius: 10px;
    color: aliceblue;
">
    <h1> Entrance Result </h1>      
    <p>ST. JOHNBOSCO SEMINARY ISUANIOCHA</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Result Table</h3><br>
  <div class="row">
    <div class="col-sm-12">
      <div class="btn-group" role="group" aria-label="CENTRE">
  <a href='?cat=1'><button type="button" class="btn btn-default">ISUANIOCHA</button></a>
  <a href='?cat=2'><button type="button" class="btn btn-default">EKWULOBIA</button></a>
  <a href='?cat=3'><button type="button" class="btn btn-default">ONITSHA</button></a>
</div>
<br>
<br>
<div class="well">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Class</th>
                <th>Exam Number</th>
                <th>Exam Status</th>
                <th>Requirements</th>
            </tr>
        </thead>
        <tbody>
            <?php 
           
            foreach ($data as $row) {
            $tou = ($row['stats'] =='PASSED') ? 'green':'red';
            $clas = ($row['class'] =='1') ? 'JSS1':'JSS2';
           
            ?>
            <tr>
                <td><?php  echo $row['name']; ?></td>
                <td><?php  echo $clas; ?></td>
                <td><?php  echo $row['exam_n']; ?></td>
                <td><b style="color: <?php echo $tou; ?>;"><?php  echo $row['stats']; ?></b></td>
                <td><!-- Extra small button group -->

   
  
  <button onclick='myFunction()' type="button" class="btn btn-primary btn-xs">PDF Document</button></td>
             </tr>
   
<? }?>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                
            </tr>
</tbody>
        <tfoot>
            <tr>
                <th>Full Name</th>
                <th>Class</th>
                <th>Exam Number</th>
                <th>Exam Status</th>
                <th>Requirements</th>
            </tr>
        </tfoot>
    </table>
    </div>
       </div>
  </div>
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        fixedHeader: true
    } );
} );
</script>


</body></html>