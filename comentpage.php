<?php
$user = new User();
$log='';
if (Input::exists("adcom")) {
   
 
   $user->updateuser('trem_note', array(
            'comments' => Input::get("adcom")
        ), array('id','=',1)); 
    
                $log .= '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                User comment successfully saved thank you;
                   </div>';
                
         
        }
     
     $user->getdata(array('comments') ,'trem_note',array('id', '=', 1));
     $class =  $user->newdata()[0];   

 
?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Comment Page</h1>
                </div>
                <!-- End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Result Comment
                        </div>
                        <div class="panel-body">
                        
                            <form method="POST" role="form">
                            <?php echo $log; ?>
                            <div class='row'>
                            <div class="col-lg-12">
                  <!-- Form Elements -->
                              <div class="form-group">
                                            <label>Enter your commet</label>
                                            <textarea name='adcom' class="form-control" rows="6"><?php echo $class->comments; ?></textarea>
                                        </div>  
                            </div>
                               
                                 
                               
                                        <button type="submit" class="btn btn-primary">Save Now</button>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            
             
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>         

   