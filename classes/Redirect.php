<?php
/**
 * Modify by Arinze on 9/18/2019.
 */

class Redirect {
    public static function to($location = null) {
        if($location) {
            if(is_numeric($location)) {
                switch($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include 'includes/errors/404.php';
                        break;
                    case 1:
                        require_once 'dashboarddata.php';
                         break;
                    case 2:
                            include 'addstudent.php';
                            break;
                    case 3:
                            include 'Edit_student.php';
                            break;
                    case 4:
                            include 'addstaff.php';
                            break;
                    case 5:
                            include 'assessment.php';
                            break;
                    case 6:
                            include 'resualt.php';
                            break;
                    case 7:
                             include 'stdresualt.php';
                                break;
                     case 8:
                            include 'addsubject.php';
                              break;    
                     case 9:
                            include 'assign_admin.php';
                                break;   
                    case 10:
                             include 'adminassament.php';
                                break; 
                    case 11:
                            include 'newstaff.php';
                                 break;              
                    case 12:
                            include 'select_staff.php';
                                break;   
                    case 13:
                            include 'edit_staff.php';
                                break;
                    case 14:
                            include 'stud_profile.php';
                                break; 
                    case 15:
                            include 'setsubsheet.php';
                                break;
                    case 16:
                            include 'comentpage.php';
                                break;
                    case 17:
                            include 'resultwork.php';
                                break;  
                    case 18:
                            include 'anualenter.php';
                                break;  
                     case 19:
                            include 'useresult.php';
                                break;
                    case 20:
                            include 'clearterm.php';
                                break;
                    case 21:
                            include 'codeassa.php';
                                break;  
                    case 22:
                            include 'clearterm.php';
                                break; 
                      case 23:
                            include 'oldresult.php';
                                break;  
                     case 24:
                            include 'anualenter.php';
                                break;
                       case 25:
                            include 'newass.php';
                                break; 
                     case 26:
                            include 'result_search.php';
                                break; 
                       case 27:
                            include 'annualstatus.php';
                                break; 
                         case 28:
                            include 'assessmettest.php';
                                break; 
                               
                    default :
                            include 'includes/errors/404.php';
                             break;
                }
            }else{
            header('Location: '. $location);
            exit(); }
        }
    }
    public static function move_to($input){
        echo'<script> window.location.href = "'.$input.'";</script>';
        return true;
    }
    public static function alert($input,$type=1){
        // VanillaToasts.create({
        //     title: "Success",
        //     text: "'.$input.'",
        //     type: :"success",
        //     icon: "assets/img/logo.png",
        //     positionClass: "topLeft",
        //     timeout: 5000
        //   });
        // notification title
        // notification message
        // success, info, warning, error   / optional parameter
         // path to notification icon
         // topRight, topLeft, topCenter, bottomRight, bottomLeft, bottomCenter
         // auto dismiss after 5000ms
         // executed when toast is clicked
         //callback: function() { ... }
         
         
         if($type == 1){
            $set = 'success';
            $title ='Successful!';
         }else{
            $set = 'error';
            $title ='Error!';   
         }         
     echo' <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    echo "<script> swal('$title', '$input', '$set'); </script>";
        return true;
    }
}