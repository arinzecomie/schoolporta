<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "johnbusco";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $val = '
// .	AFORKA RAPHAEL CHUKWUEMEKA
// .	AHANONU JOHNBOSCO OLUEBUBECHUKWU
// .	AKANONU STANISLAUS CHIDUBEM
// .	AMAEZE CORNELIUS CHUKWUELOKA
// .	AMASIOBI CHRISTOPHER MMADUABUCHI
// .	ANIOFOR RAPHAEL IKECHUKWU
// .	ANUSIONWU MAC-DAVIS CHIDERA
// .	ANYIKA AUGUSTINE CHUKWUEMEKA
// .	ANYOKE PASCHAL CHIEMELIE
// .	CHIGBO JOSEPH CHUKWUNONSO
// .	CHUKWUDI COSMAS OLUOMACHUKWU
// .	COSMAS GODSWILL MMASICHUKWU
// .	DIMUKEJE FRANCIS CHINEMELUM
// .	EJIKEME ROMANUS CHUKWUEBUKA
// .	ENECHUKWU EMMANUEL CHIBUIKE
// .	ENWEANI CLEMENT ZUKORAIFEIJIBULUCHUKWU
// .	ENWEREM KINGSLEY CHINEDU
// .	ENYI COLLINS-MARY CHISOM
// .	EZEAGBOGU PETER CHINEDU
// .	EZEAMII REGINALD CHIEMELIE
// .	EZEH AUGUSTINE CHIMEZIE
// .	EZEJI EMMANUEL CHINAEMEREM
// .	EZENAIKE PASCHAL CHUKWUMA
// .	EZENWENYI STEPHEN CHIKAEMEREM
// .	EZEOKAFOR COLLINS KOSISOCHUKWU
// .	IFEJIONU JOHNPAUL CHIDERA
// .	IKECHUKWU SAMUEL IKECHUKWU
// .	IKEGBUSI ATHANASIUS CHIJINDU
// .	ILOKA KINGSLEY CHUKWUEBUKA
// .	MADUABUCHI LAWRENCE IFECHUKWU
// .	MADUKA STEPHEN CHIBUIKE
// .	NLEDUM HIMMEL IFEANYI
// .	NNABUIFE ALEXANDER EKENEDIRICHUKWU
// .	NNADI PASCHAL CHIBUZOR
// .	NWAFOR PAULINUS OBIORAH
// .	OBIEKWEREM FRANCIS OBIAJURU
// .	OBIORA COSMAS CHIDERA
// .	ODIRICHUKWU PETER CHINAZONDU
// .	OFOEDU AUGUSTINE UGOCHUKWU 
// .	OGUAJU ROMUALD ELOCHUKWU
// .	OKAFOR KINGSLEY CHIDERA
// .	OKEKE CASMIR SOMTOOCHUKWU
// .	OKEKE EMMANUEL IFEANYICHUKWU
// .	OKEKE JUDE KENECHUKWU
// .	OKEKE MELVIN CHIEMELIE
// .	OKEKE PASCHAL CHIBUIKE 
// .	OKEKE PATRICK CHIWETALU
// .	OKOYE AUGUSTINE ODINAKA
// .	OKOYE FRANCIS CHIEDOZIE
// .	OKOYE HENRY OLISAEMEKA
// .	OKOYE PETER NZUBECHUKWU
// .	OKPALA EMMANUEL CHUKWUMA
// .	OKPALA SAMUEL CHIDERA
// .	ONUNKWO GERALD CHIDERA
// .	ONWUEGBUNAM JUDE THADDEUS IFEANYICHUKWU
// .	ORAZULUME EMMANUEL CHIDERA
// .	OZUAH PASCHAL CHIDOZIE
// .	UGORJI KINGSLEY CHUKWUEBUKA
// .	UKACHUKWU EMMANUEL CHIADIKA
// .	UZOBENYI PAUL ELOCHUKWU';
$val ='Agricultural Science.
Basic Science.
Basic Technology. 
Business Studies.
Christian Religious Knowledge.
Civic Education.
Computer Science/ICT. 
English Language. 
Fine Art. 
French. 
Home Economics.
Igbo. 
Latin.
Literature in English. 
Liturgy.
Mathematics.
Music. 
Physical and Health Education.
Social Studies.';

 $regt =date('Y-m-d');
 $peson = "gh'ghh'gh'"; //explode('.',$val);
 
// $peson = str_replace("'","\'",$peson);
htmlentities($peson, ENT_QUOTES, 'UTF-8');
 //foreach ($peson as $key => $value) {
 //$value = trim($peson);
 //if(!$value == null){
  $sql = "INSERT INTO subject (subj_name)
  VALUES ('$peson')";
//jerry2020
// $num =rand(100,999);
// $user_code ='SJBSI20'.$key.$num;
// $sql = "INSERT INTO users ( user_code, password, full_name, gender, priority, ddate)
// VALUES ('$user_code', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', '$value','M', 1, '$regt')";
// $sqll = "INSERT INTO stud_de (stud_code,stud_cl, stud_subcl, stud_level, stud_term, date_set)
// VALUES ( '$user_code','SS3', 1, 3,2 , '2019/2020')"; 
if ($conn->query($sql)) {
  echo  $value.'  done  <br>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//} 
// }
//}



// $user_id = '9';
//function myy('SELECT ',array('user_id','user','me'),'exam',array('user_id', '=' ,array($user_id ,'AND', 'subject', '=' ,$user_id,'1')));
//         if(count($where) === 3) {
//             $operators = array('=', '>', '<', '>=', '<=','<>');

//             $field = $where[0];
//             $operator = $where[1];
//             $value = $where[2];
//            if(is_array($value)){
//            $couter = count($value);
//            }else{
//             $couter = 1;
//            }

//   $sfieldin  = implode(' , ',$sfield);
        
// //value is an array
//          if($couter == 1){
//             $values = array($value[0]) ;
//             //echo $values ;
//             $extra = ' ?';
//             $exec = $values;
//          }else if($couter > 1){
         
//          $rem = array();
//         $thev = $value;
       
//          if(count($value) > 5){
//          	$i=1;
//            foreach ($value as $a) {
             
//                 if ($i < 6) {
//                              $value[]=   $a; 
//                             }
//                 if ($i > 5) {
//                              $rem[]='LIMIT '. $a;
//                             }
//                              $i++;
//             }

//          }
            
         
//           $f_value = array($thev[0]) ;
//           unset($thev[0]);
//           $s_value =array($thev[4]);
//           unset($thev[4]);
//           unset($thev[5]);
//           $exec = array_merge($f_value,$s_value);
//           $extra = '? '.implode(' ',$thev).' ? '.$rem[0];
//          //print_r( $exec);
//          }
   
 
//         $sql = "{$action} {$sfieldin} FROM {$table} WHERE {$field} {$operator} {$extra}";
//       //unque(array('user_id'),'exam',array('user_id', '=' ,array($user_id ,'AND', 'subject', '=' ,$subject,'LIMIT 1'))
//       // $STMH = $this->_db->query(" SELECT msg FROM chat WHERE  receiver = '$userid' AND sender = '$id' LIMIT 1");
//       //echo $sql;
               
//                     //to bind pdo
//                     echo $extra;
//                     echo $sql .'<br>';
//                     print_r($exec);

               
         

//         }

       



?>