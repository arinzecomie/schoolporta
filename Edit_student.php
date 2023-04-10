<?php
 $user = new User();
 $da = 0;
 //removed
 if (isset($_GET['id'])) {    
        $user->updateuser('stud_de', array(
            'stud_status' => 7 
        ), array('stud_code','=',Input::get('id'))); 
    
 $user->updateuser('users', array(
            'priority' => 7
        ), array('user_code','=',Input::get('id'))); 
    
    
    Redirect::alert('You have successfully  removed '.Input::get('name').'. you can still undo this.');
    Redirect::move_to('?SJBSI=3&class='.Input::get('class'));
  } 
 
 
 //demoted 
 if (Input::exists('usr')) {  
                 $dclas = Input::get('class');
	            $nclas = $dclas - 1; 
	  
	
        $user->updateuser('stud_de', array(
            'stud_level' => $nclas
        ), array('stud_code','=',Input::get('usr'))); 
    

    
    Redirect::alert('You have successfully demoted '.Input::get('name') );
    Redirect::move_to('?SJBSI=3&class='.Input::get('class'));
  } 
 
  if (Input::exists('now')) {
             $myset = array();
                 
                  if(Input::exists('subclass')){
                    $myset["stud_subcl"]= Input::get('subclass');
                  }
                   if(Input::exists('class')){
                       $myset["stud_level"]= Input::get('class');
                  }
                  $nuy = array_filter(explode(",",Input::get('rown') ));
                  
foreach ($nuy as  $value) {
    if($myset["stud_subcl"] == 0){
             $user->updateuser('stud_de', array(
            'stud_status' => 5 ,
            'stud_level' => 7 
        ), array('stud_code','=',$value)); 
    
 $user->updateuser('users', array(
            'priority' => 5
        ), array('user_code','=',$value)); 
    
    }else{
        if($user->updateuser('stud_de',$myset, array('stud_code','=',$value))){
          $da = 1;  
        }
    }
} 
if($da){
       Redirect::alert('You have successfully  change selected set ');
       Redirect::move_to('?SJBSI=3&class='.Input::get('class'));  }
  }
 
 $user->findoder('stud_de',['stud_level', '=',Input::get('class')],'AND',['stud_status','=',0]);
 $seletor =  $user->newdata(); 
 $clas=array('','JSS1','JSS2','JSS3','SSS1','SSS2','SSS3');
 ?> 
 <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
 <div class="row">
     <script>
     function check(){
     return  confirm(' Do you want to Demote this student?! ');
     }
     </script>
                  <!--  page header -->
                 <div class="col-lg-12">
                     <h1 class="page-header">Edit <?php  echo $clas[Input::get('class')]; ?> Class</h1>
                 </div>
                  <!-- end  page header -->
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <!-- Advanced Tables -->
                     <div class="panel panel-default">
                         <div class="panel-heading">
                              Students Tables
                         </div>
                         <div class="panel-body">
                             <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                                         <tr><th>Set</th>
                                             <th>Student Name </th>
                                             <th>Student Class</th>
                                             <th>Student Code</th>
                                             <th>School Status</th>
                                             <th>Default Password</th>
                                             <th>Action</th>
                                             
                                         </tr>
                                     </thead>
                                     <tbody>
 
                                     <?php
                                     
                                    $studclass= array('NA','A','B','C','D','E','F','G');
                                    $i = 1;
                                    foreach ($seletor as $ky => $va) { 
                                        $user->getdata(array('full_name','intake','priority') ,'users',array('user_code', '=', $va->stud_code));
                                        $name =  $user->newdata()[0];
                                        $link = "?SJBSI=14&cls=".Input::get('class')."&id=".$va->stud_code; 
                                        $dlink = "?SJBSI=3&class=".Input::get('class')."&id=".$va->stud_code."&name=" .$name->full_name;
                                        $molink = "?SJBSI=3&class=".Input::get('class')."&usr=".$va->stud_code."&name=". $name->full_name;
                                        if($name->priority == 1){
                                           $sstatus = '<strong><span class=" label label-success">Active</span></strong>';
                                        }elseif( $name->priority == 5){
                                           $sstatus = '<strong><span class=" label label-info">Graduated</span></strong>';
                                        }else{
                                           $sstatus =  '<strong><span class=" label label-danger">Removed</span></strong>';
                                        }
                                       
                                     ?>
                                   
                                     <tr>
                                         <td><input type="checkbox" value="<?php echo $va->stud_code; ?>" name="hobbies[]" class="hobbies_class"></td>
                                            <td> <?php echo $name->full_name; ?> </td>
                                             <td><?php  echo $clas[Input::get('class')] .$studclass[$va->stud_subcl]; ?> </td>
                                             <td><?php echo $va->stud_code; ?></td>
                                             <td><?php echo $sstatus ; ?></td>
                                             <td><?php echo $name->intake; ?> </td>
                                             
                                             <td><a href="<?php echo $link; ?>"><button class="btn btn-info btn-sm">Edit profit <i class="fa fa-edit"></i></button></a> <!---<a   href="<?php echo $molink; ?>" onclick="return check()"  ><button   class="btn btn-info btn-sm">Demote<i class="fa fa-trash-o"></i></button></a>---> <a href="<?php echo $dlink; ?>"><button class="btn btn-danger btn-sm">Remove <i class="fa fa-trash-o"></i></button></a></td>
                                    
                                         </tr>
                                <?php $i++;
                                        
                                } ?>
                                         
                                         
 
                                     </tbody>
                                 </table>
                           
                             
                         </div>
     <h1>Make Changes</h1><hr>                    
<form method='post'>
 <input type="hidden" name="rown" id="show" value="" >
   <div class="form-group">
     <label>New Class</label>  
  <select name ="class" class="form-control">
                              <option value="0">Select class</option>
                              <option value="1">JSS1</option>
                              <option value="2">JSS2</option>
                              <option value="3">JSS3</option>
                              <option value="4">SSS1</option>
                              <option value="5">SSS2</option>
                              <option value="6">SSS3</option>
                               <option value="7"> Graduate Students</option>
                          </select>
</div>
 <div class="form-group">
     <label>Select New Sub-Class/Graduate Students</label>  
  <select id="subclass" name ="subclass"  class="form-control">
                              <option value="0"> Graduate Students</option>
                              <option value="1">A class</option>
                              <option value="2">B class</option>
                              <option value="3">C class</option>
                              <option value="4">D class</option>
                          </select>
</div>
  <button type="submit" onclick="grad()" name="now" class="btn btn-default">Change Now</button>
</form>  
                         
                     </div>
                     <!--End Advanced Tables -->
                 </div>
             </div>
             <script src="jquery-3.5.0.js"></script>    
    <script>
        jQuery(".hobbies_class").click(function() {
            var selectedCountry = new Array();
            var n = jQuery(".hobbies_class:checked").length;
            if (n > 0) {
                jQuery(".hobbies_class:checked").each(function() {
                    selectedCountry.push($(this).val());
                });
            }

            $('#show').val(selectedCountry);
        });
      
    function grad(){
           var u= $('#subclass').val();
  if(u == 0){
  if(confirm('You are about to Graduate the selected Student, Do you want to continue?! ')){
    return true; 
       }else{
           return false;
       }
    }
    }  
      
    </script>
          