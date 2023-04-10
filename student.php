
 <?php $sdudc = array("","JSS1","JSS2","JSS3","SSS1","SSS2","SSS3"); $sdsub = array("","A","B","C","D");  
                     ?>
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
 <i class="fa  fa-pencil"></i>  the result  is ready . Please click here to Check your result   <a href="?SJBSI=6&class=<?php echo $stud_d->stud_level; ?>&user=<?php echo $user->data()->user_code; ?>"><strong><span class=" label label-success">Result</span></strong></a>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>SS1 </b>Student Class

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 </b>Student Class Number  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>30</b> Total Class Member

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Term </b>1st 
                    </div>
                </div>
                <!--end quick info section -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Student Detials</h3>
                           <div class="row">
                               <div class="col-md-6"  style="text-align: center;">
     
                               <div class="profimg" style="background-image: url(resault/headerbosco.png);background-size: contain;"></div>  
                                 
                                <h4><?php echo escape($user->data()->full_name) ; ?></h4>
                                <div>
                                    <button class="btn btn-info">Update</button>
                                    <button class="btn btn-primary">update</button>
                                </div>  


                               </div>
                               <div class="col-md-6">
                                   <h4>About Student</h4>
                                <ul class="list-unstyled">
                                    
                                <li><b>Full Name :</b><?php echo escape($user->data()->full_name) ; ?></li>
                                <li><b>Code :</b><?php echo $user->data()->user_code; ?> </li>
                                <li><b>Class :</b> <?php echo $sdudc[$stud_d->stud_level] ; ?></li>
                                <li><b>Sub-class  :</b> <?php echo $sdsub[$stud_d->stud_subcl] ; ?></li>
                               
                                </ul>
                                <div class="col-md-12">
                    <div class="well">
                        <h4>View Your Class Result</h4>
                        <a href="?SJBSI=6&class=<?php echo $stud_d->stud_level; ?>&user=<?php echo $user->data()->user_code; ?>"> <strong><span class=" label label-success"> <?php echo Session::get('termst'); ?> Term <?php echo $sdudc[$stud_d->stud_level] ; ?></span></strong></a>
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
    border-bottom: solid 2px;
    border-radius: 5px;
    padding: 0px 10px;
}
            </style>
            <div class="row">
                <!--<div class="col-lg-6">-->
                    <!-- Form Elements -->
                <!--    <div class="panel panel-default">-->
                <!--        <div class="panel-heading">-->
                <!--            Add Staff-->
                <!--        </div>-->
                <!--        <div class="panel-body">-->
                <!--            <form role="form">-->
                <!--               <div class="form-group">-->
                <!--                  <label>Full Name</label>-->
                <!--                  <input class="form-control" placeholder="Enter new student name">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                  <label>User Name</label>-->
                <!--                  <input class="form-control" placeholder="Enter new student name">-->
                <!--                </div>-->
                <!--                <div class="row">-->
                <!--                    <div class="col-xs-6">-->
                <!--                <div class="form-group">-->
                <!--                  <label>Assgin Class</label>-->
                <!--                  <select class="form-control">-->
                <!--                         <option>SS1</option>-->
                <!--                          <option>SS2</option>-->
                <!--                          <option>SS3</option>-->
                <!--                  </select>-->
                <!--                  </div>-->
                <!--                 </div>-->
                <!--                 <div class="col-xs-6">-->
                <!--                <div class="form-group">-->
                <!--                  <label>Subclass</label>-->
                <!--                  <select class="form-control">-->
                <!--                          <option>A</option>-->
                <!--                          <option>B</option>-->
                <!--                          <option>C</option>-->
                <!--                          <option>D</option>-->
                <!--                          <option>E</option>-->
                <!--                          <option>F</option>-->
                <!--                          <option>G</option>-->
                <!--                  </select>-->
                <!--                </div>-->
                <!--                </div>-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                            <label>Inline Checkboxes</label>-->
                <!--                            <br>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" checked="">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                            <label class="checkbox-inline">-->
                <!--                                <input type="checkbox" aria-checked="true">English-->
                <!--                            </label>-->
                <!--                        </div>-->
                <!--                        <button type="submit" class="btn btn-primary">Add Now</button>-->
                <!--            </form>-->
                         
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            
               <div class="col-md-12">
                  <!-- Form Elements -->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                    Subject List 
                  </div>
               <div class="panel-body">
                 <?php 
                 $subj_id    = json_decode($stud_d->stud_subj);
                    foreach ($subj_id as $ky => $va) { 
                    // $nuy = explode("_",$va); 
                    $user->findoder('subject',array('subj_id', '=',$va[1] ));
                    echo ' <p class="text-primary">'.  $user->newdata()[0]->subj_name .'</p>';  
                     
                    } 
                    ?>
             
              </div>
            </div>
     </div>
</div>