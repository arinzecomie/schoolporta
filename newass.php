<?php  $user = new User();

  if(Input::exists('subad')){

  $dater = explode('/',Input::get('year'));
   $tablebk ="asst_".$dater[0]."_".$dater[1];
   
   if($tablebk !== Session::get('asst')){
     
   $user->asstable($tablebk);
   $user->create('acade_year',[
        'db_name' => Session::get('asst'),
        'name' =>$user->data()->full_name
    ]);
 
   }
  $user->updateuser('trem_note', [
      'asstable' => $tablebk,
      'term'=>Input::get('term')],
      ['id', '=',1]);
      
  Session::put('asst', $tablebk);
  Session::put('termst', Input::get('term'));
  Redirect::alert('New Term Started Succefully');
  Redirect::move_to('dashboard.php?SJBSI=25');
  }
  
 $acade = explode('_', Session::get('asst')); 
 
     ?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">New Academic Year</h1>
                </div>
                <!-- End Page Header -->
            </div> 
            
            <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Assessment Settup
                        </div>

                        <div class="panel-body">
                            
<form role="form" method="POST">
    <div class="form-group">
    <label for="year">Academic Year</label>
    <input type="text" class="form-control" id="year" name="year" value="<?php echo $acade[1];  ?>/<?php echo $acade[2]; ?>" required>
  </div>
                    <div class="form-group">
                                        <label>Select Session Term</label>
                                        <select name="term" class="form-control">
                                            <option value="1">First Term</option>
                                            <option value="2">Second Term</option>
                                            <option value="3">Third term</option>
                
                                        </select>
                                    </div>     
                
                               <br>
                                        <button type="submit" name="subad" class="btn btn-primary">Create</button>
                            </form>
                         
                        </div>
                    </div>
                </div>
            