<?php
$servername = "127.0.0.1";
$username = "stjohqse_root";
$password = 'g#dqWT^8U3@a';
$dbname = "stjohqse_Wizarddb";
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_GET['cat'])){
     $dat = $_GET['cat'];

    $data = $pdo->query("SELECT * FROM entranc where catig = $dat")->fetchAll();  
  }
  
  if(isset($_GET['clas'])){ 
     $dat = $_GET['clas'];

    $data = $pdo->query("SELECT * FROM entranc where class = $dat")->fetchAll();   
  }else{
    $data = $pdo->query("SELECT * FROM entranc")->fetchAll();  
  }

?>
<html lang="en">
    <head>
  <title>CATHOLIC DIOCESE OF AWKA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  
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
function myFunction(x,z) {
    if(z){
  var disp = `<a href="../admit.php?id=${x}"> <button type="button" class="btn btn-primary btn-lg btn-block">Invitation Letter</button></a><br>
  <a href="RECOMMENDATION_LETTER_ISU.pdf"> <button type="button" class="btn btn-info btn-lg btn-block">Recommendation Form</button></a>`;
  $('.showme').html(disp); 
  $('#myModal').modal('show'); 
    }else{
      window.location.href = `../admit.php?id=${x}`;   
    }
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
    <h1> INTERVIEW Result </h1>      
    <p>ST. JOHNBOSCO SEMINARY ISUANIOCHA</p>
    <p> INTERVIEW EXAMINATION LIST OF PROSPECTIVE CANDIDATES </p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Result Table</h3><br>
  <div class="row">
    <div class="col-sm-12">
      <div class="btn-group" role="group" aria-label="CENTRE">
   <a href='../entrance/status.php'><button type="button" class="btn btn-primary">ALL</button></a>
   <a href='?cat=1'><button type="button" class="btn btn-primary">JSS</button></a>
   <a href='?clas=2'><button type="button" class="btn btn-primary">SS1</button></a>
   
</div>
<br>
<br>
<div class="well" style="overflow: auto;">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Class</th>
                <th>Exam Number</th>
                <th>Exam Status</th>
                <!--<th>Requirements</th>-->
            </tr>
        </thead>
        <tbody>
            <?php 
           
            foreach ($data as $row) {
            $tou = (trim($row['stats']) =='PASSED') ? 'green':'red';
            $clas = ($row['class'] =='1') ? 'JSS1':'SS1';
            $but = (trim($row['stats']) =='PASSED') ? 1:0;
            ?>
            <tr>
                <td><?php  echo $row['name']; ?></td>
                <td><?php  echo $clas; ?></td>
                <td><?php  echo $row['exam_n']; ?></td>
                <td><b style="color: <?php echo $tou; ?>;"><?php  echo $row['stats']; ?></b></td>
  <!--              <td> Extra small button group -->
  <!--<button onclick='myFunction(<?php  echo $row['id']; ?>,<?php  echo $but; ?>)' type="button" class="btn btn-primary btn-xs" >PDF Document</button></td>-->
             </tr>
   
<? }?>
           
</tbody>
        <tfoot>
            <tr>
                <th>Full Name</th>
                <th>Class</th>
                <th>Exam Number</th>
                <th>Exam Status</th>
                <!--<th>Requirements</th>-->
            </tr>
        </tfoot>
    </table>
    </div>
       </div>
  </div>
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p>stjohnboscoseminary.com</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        fixedHeader: true
    } );
} );
</script>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Candidates requirement</h4>
        </div>
        <div class="modal-body">
        <p>Please Print the following documents</p>
         <div class='showme'>
             
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</body></html>