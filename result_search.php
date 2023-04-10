<?php
$user = new User();
 $user->findoder('acade_year',array('id', '>', 0));
 $seletor =  $user->newdata(); 
 
if(Input::exists('oldr')){
    if(Input::get('term')== 4){
      $_GET['SJBSI']= 27;
    }else{
         $_GET['SJBSI']= 6;
    }
    
     Redirect::move_to('dashboard.php?'.http_build_query($_GET)); 
    
} 
 
 
?>
 <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Search Old Result</h1>
                </div>
                <!-- End Page Header -->
            </div> 
            
            <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Record Result
                        </div>

                        <div class="panel-body">
                            
                          
    <form role="form"  action="" method="GET">
        <input type="hidden"   name="SJBSI" value="26" >
    <div class="form-group">
    <label for="year">Academic Year here</label>
      <select name="year" class="form-control">
    <?php  
      
          foreach($seletor as  $val){
        $yr = explode('_',$val->db_name);
       $yrs = $yr[1]."/".$yr[2];
              echo '<option value="'.$val->db_name.'">'.$yrs .' By '. $val->name .'</option>';
          }
          
          ?>
                                          
             
                                        </select>
    <input type="hidden"   name="oldr" value="1" >
     
  </div>
                    <div class="form-group">
                                        <label>Select Session Term</label>
                                        <select name="term" class="form-control">
                                            <option value="1">First Term</option>
                                            <option value="2">Second Term</option>
                                            <option value="3">Third term</option>
                                            <option value="4">Annual </option>
                                        </select>
                                    </div>     
                    <div class="form-group">
                                        <label>Select Student Class</label>
                                        <select name="class" class="form-control">
                                            <option value="1">JSS 1</option>
                                            <option value="2">JSS 2</option>
                                            <option value="3">JSS 3</option>
                                            <option value="4">SSS 1</option>
                                            <option value="5">SSS 2</option>
                                            <option value="6">SSS 3</option>
                                            <option value="7">Special Class</option>
                
                                        </select>
                                    </div>     
                               
                                        <button type="submit" name="subad" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                            </form>
                         
                        </div>
                    </div>
                </div>
            