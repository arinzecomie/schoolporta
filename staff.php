
<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome <b><?php echo Input::get('full') ."   "; echo escape($user->data()->full_name);?> </b>
 <i class="fa  fa-pencil"></i>  the system is readly now.
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
<?php
if($user->data()->priority == 2){
    
    ?>
 <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>4 </b>Classes You Handle their subjects

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>0 </b>Your compected Assament  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>4</b> Your total Assament

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Done</b>Your Class Assament
                    </div>
                </div>
                <!--end quick info section -->
            </div>
  <?php } else{  ?>
    <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>4 </b> Class result remainning

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>0 </b>Total Class compected Assament  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>4</b>  Class total Assament

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>5</b>Total Class rectors comment
                    </div>
                </div>
                <!--end quick info section -->
            </div>

 <?php } 

        
    ?>
           
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Student Detials</h3>
                           <div class="row">
                               <div class="col-md-6"  style="text-align: center;">
                                   
                               <div class="profimg" style="background-image: url(resault/headerbosco.png);background-size: contain;"></div>  
                                <h4><?php echo escape($user->data()->full_name);?></h4>
                                <div>
                                    <button class="btn btn-info">Update</button>
                                    <button class="btn btn-primary">update</button>
                                </div>  


                               </div>
                               <div class="col-md-6">
                                   <h4><?php echo $user->data()->full_name;?></h4>
                                <ul class="list-unstyled">
                                <li><b>User Name :</b><?php echo $user->data()->user_code;?></li>
                                <li><b>Form Teacher of :</b><?php echo escape($user->data()->full_name);?></li>
                                <li><b>Gender :</b><?php echo $staff_d->staff_gander;?></li>
                                <li><b>Email :</b><?php echo $staff_d->email;?></li>
                                <li><b>Phone :</b><?php echo $staff_d->phone; ?></li>
                                <li><b>Address :</b><?php echo $staff_d->address; ?></li>
                                </ul>
                                <div class="col-md-12">
                    <div class="well">
                        <h4>View Your Class Result And Comment</h4>
                       <?php $sdudc = array("","JSS1","JSS2","JSS3","SSS1","SSS2","SSS3"); $sdsub = array("","A","B","C");  
                     ?>
                       <a href="dashboard.php?SJBSI=6"> <button  class="btn btn-info"><?php echo $sdudc[$_SESSION['staff_d']->staff_cl]." ".$sdsub[ $_SESSION['staff_d']->staff_mcl]; ?> Class</button></a>
                    </div>
                </div>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
.profimg {
    height: 200px;
    width: 200px;
    background: black;
    margin: auto;
    border-radius: 100px;
      }
      .list-unstyled li {
    border-bottom: solid 2px #3411bf;
    border-radius: 5px;
    padding: 0px 10px;
}
            </style>
            <div class="row">
                <div class="col-lg-6">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Staff Info Box
                        </div>
                        <div class="panel-body">
                          <p class="text-primary">Info from <i>Rv.john okoye</i></p>
                        <p class="text-info">You are expected to be through with all Assassment next two days please</p> 
                         <i>2020/5/15</i>
                        </div>
                    </div>
                </div>
            
               <div class="col-lg-6">
                  <!-- Form Elements -->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                    Your Subject Assassment Status
                  </div>
               <div class="panel-body">
                <?php
                    $clss    = json_decode($staff_d->stud_subj);
                    foreach ($clss as $ky => $va) { 
                    $nuy = explode("_",$va); 
                    $user->findoder('subject',array('subj_id', '=',$nuy[1] ));
                    $seletor[$nuy[0]][] =  $user->newdata()[0]->subj_name;  
                     
                    }
               


                 $stdc = array('JSS Class','SSS Class');
                foreach ($seletor as $ky => $vas) {  
                foreach ($vas as  $va) { 
                ?>
                                   <p class="text-primary"><?php  echo $va; ?> for  <?php  echo $stdc[$ky]; ?></p>
                               
                               <?php 
                         }
                               } ?>
               
              </div>
            </div>
     </div>
</div>