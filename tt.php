<table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
      <tr>
          <th>Student Name </th>
          <th>1st Test</th>
          <th>2nd Test</th>
          <th>Assignment</th>
          <th>Examination</th>
          <th>Total Score</th>
          <th>Grade</th>
          <th>Class Position</th>
          <th>Group Position</th>
          <th>Action</th>
          
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>Arinze <input id="dvalus1" type="hidden" value='1,10,30,20,60'></td>
          <td><input type="text" style="width: 50px;" class="form-control val"  ddata="1,1" value="10"></td>
          <td><input type="text" style="width: 50px;" class="form-control val"  ddata="1,2" value="30"></td>
          <td ><input type="text" style="width: 50px;" class="form-control val"  ddata="1,3" value="20"></td>
          <td><input type="text" style="width: 50px;" class="form-control val"  ddata="1,4" value="60"></td>
          <td>92</td>
          <td>A</td>
          <td>3 out of 40</td>
          <td>3 out of 116</td>
          <td><button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button></td>
          
      </tr>
      <tr>
        <td>Arinze <input id="dvalus2" type="hidden" value='2,10,30,20,60'></td>
        <td><input type="text" style="width: 50px;" class="form-control val"  ddata="2,1" value="10"></td>
        <td><input type="text" style="width: 50px;" class="form-control val"  ddata="2,2" value="30"></td>
        <td ><input type="text" style="width: 50px;" class="form-control val"  ddata="2,3" value="20"></td>
        <td><input type="text" style="width: 50px;" class="form-control val"  ddata="2,4" value="60"></td>
        <td>92</td>
        <td>A</td>
        <td>3 out of 40</td>
        <td>3 out of 116</td>
        <td><button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button></td>
        
    </tr>
    <tr>
      <td>Arinze <input id="dvalus3" type="hidden" value='3,10,30,20,60'></td>
      <td><input type="text" style="width: 50px;" class="form-control val"  ddata="3,1" value="10"></td>
      <td><input type="text" style="width: 50px;" class="form-control val"  ddata="3,2" value="30"></td>
      <td ><input type="text" style="width: 50px;" class="form-control val"  ddata="3,3" value="20"></td>
      <td><input type="text" style="width: 50px;" class="form-control val"  ddata="3,4" value="60"></td>
      <td>92</td>
      <td>A</td>
      <td>3 out of 40</td>
      <td>3 out of 116</td>
      <td><button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button></td>
      
  </tr>
      
    </tbody>
  </table>
  <form method="POST" action="">
    <input id="dva" name="changes" type="text" >
    <input type="submit" value="saver">
  </form>
  
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script>
   $(".val").change(function() {
    var imput= $(this).val();
    var ddata= $(this).attr('ddata');
    //get array form imput
    cars = ddata.split(',');
    //console.log(ddata); 
    //get the data div
    var dval =  $('#dvalus'+cars[0]).val();
    dval = dval.split(',');
    var remo = dval;
    //set the imput valu
    dval[cars[1]] = imput;
        
    var y = dval.join(',');     
    $('#dvalus'+cars[0]).val(y);
    // console.log(y); 
    // console.log(cars); 
    var v = 0;
    var s =  $('#dva').val(); 
    var r = s.split(';');
   // console.log(' this befor r '+r);
    //  r = $.grep(r, function( a ) {
    //    return a === [""];
    //   });

  var sum = r.map(obj => obj.split(','));
  // console.log("array sum")
  //   console.log();
  
    console.log("array dval")
    console.log(sum);
//  var elem = cars[0];
//   newProjects = sum.map(p =>
//   p.v === cars[0]
//     ? myfun()
//     : p
// ); 
//  function myfun(){
//    v = 1;

//     return { ...dval } 
//  }
 //console.log(newProjects);

if(v === 0){
  sum.push(dval);
}
var newProj = sum.map(ob => mycc(ob));
function mycc(ob){
  if(ob !== undefined) {
    return ob.join(',');
    }
}
  var l = newProj.join(';');
$('#dva').val(l);
  }); 
  </script>
  <?php
  $thef   =   explode(";",$_POST['changes']);
  $thef   =    array_filter($thef);
  $collector =array();
  foreach ($thef as $v) {
     $seter  = explode(",",$v);
     $show = $seter[0];
     $effect[$show] = $show;
     $collector[$show] = $seter;
  }
  
     
  print_r($effect);
  echo "<br>";
  print_r($collector);
  ?>