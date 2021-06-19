<?php
require '../vendor/autoload.php'; // include Composer's autoloader

session_start();

if(isset( $_SESSION['userNum'])){
    
$userNumber =  $_SESSION['userNum'];  
  


} else {
    // Redirect them to the login page
    header("Location: https://task.help/log_in_username/");
}



$userNumber = $_GET["un"];
$taskNumber = $_GET["tnum"];


$tfs1_readonly = "";
$tfs1_readonly = "";

$tfs2_readonly = "";



$madeIntoTask_text="";
$tfs2_chkbxlable_none="";
$tfs2_chkbx_none="";


$submitBit =  array(); 
$visible =  array(); 
for($i=0; $i<100; $i++){
    
    $submitBit[$i] = 0;
    $visible[$i] = 0;
}



$client = new MongoDB\Client(
    'mongodb+srv://xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.mongodb.net/?retryWrites=true&w=majority');
$collection = $client->tfs->$taskNumber;


$result = $collection->find();


$submitBitHolder = array(); 
$madeIntoTaskBit =  array();  
$subject = array();  
$content = array();  
$submitedOn = array(); 
$madeIntoTask = array(); 


     foreach ($result as $row) {
         $submitBitHolder[] =  $row["submitBit"]; 
         $madeIntoTaskBit[] =  $row["approveBit"]; 
         $subject[] = $row["subject"]; 
         $content[] = $row["content"]; 
         $submitedOn[] = $row["submitedOn"]; 
         $madeIntoTask[] = $row["madeIntoTask"]; 
   
                            
     
     }
     

      



$process_tfs_url = "https://task.help/taskflow_suggest_taskhelpers/process_tfs.php/?un=$userNumber&tnum=$taskNumber";


    $confirm_tfs =  "https://task.help/taskflow_suggest_taskhelpers/confirm_tasflow_suggest_submit/?un=$userNumber&tnum=$taskNumber&tfs=$nextTfs";



$server_side_url = "https://task.help/taskflow_suggest_taskhelpers/process_tfs.php/?un=$userNumber&tnum=$taskNumber";





$tfs_submitted_successfully = "https://task.help/taskflow_suggest_taskhelpers/tfs_submitted_successfully/?un=$userNumber&tnum=$taskNumber";


$no_tfs_processed = "https://task.help/taskflow_suggest_taskhelpers/?tnum=$taskNumber";






for($i=0; $i<count($submitBitHolder); $i++ ){
    
    $submitBit[$i] = $submitBitHolder[$i];
    $visible[$i] = $submitBitHolder[$i];
    
    
}





// find total tfs sumited
 
 $submittedTotal = 0;
 for($i = 0; $i< count($submitBit); $i++){
    
  if($submitBit[$i] >= 1){
     
   
    $submittedTotal +=1;
     

   
  }  
  
}

if($submittedTotal == 0){
    $submittedTotal = "";
}







// find total tfs made into task

 $madeIntoTaskTotal = 0;
 for($i = 0; $i< count($madeIntoTaskBit); $i++){
    
  if($madeIntoTaskBit[$i] >= 1){
     
   
    $madeIntoTaskTotal +=1;
     

   
  }  
  
}

if($madeIntoTaskTotal == 0){
    $madeIntoTaskTotal = "";
}





if($submitBit[0] == 1){
    
     $tfs1_readonly = "readonly";
   
    $tfs1_chkbx_none = "visibility:hidden";

}


if($submitBit[1] == 1){
    
     $tfs2_readonly = "readonly";
   
    $tfs2_chkbx_none = "visibility:hidden";

}

if($submitBit[2] == 1){
    
     $tfs3_readonly = "readonly";
   
    $tfs3_chkbx_none = "visibility:hidden";

}


if($submitBit[3] == 1){
    
     $tfs4_readonly = "readonly";
   
    $tfs4_chkbx_none = "visibility:hidden";

}


if($submitBit[4] == 1){
    
     $tfs5_readonly = "readonly";
   
    $tfs5_chkbx_none = "visibility:hidden";

}

if($submitBit[5] == 1){
    
     $tfs6_readonly = "readonly";
   
    $tfs6_chkbx_none = "visibility:hidden";

}

if($submitBit[6] == 1){
    
     $tfs7_readonly = "readonly";
   
    $tfs7_chkbx_none = "visibility:hidden";

}

if($submitBit[7] == 1){
    
     $tfs8_readonly = "readonly";
   
    $tfs8_chkbx_none = "visibility:hidden";

}

if($submitBit[8] == 1){
    
     $tfs9_readonly = "readonly";
   
    $tfs9_chkbx_none = "visibility:hidden";

}



if($submitBit[9] == 1){
    
     $tfs10_readonly = "readonly";
   
    $tfs10_chkbx_none = "visibility:hidden";

}



if($submitBit[10] == 1){
    
     $tfs11_readonly = "readonly";
   
    $tfs11_chkbx_none = "visibility:hidden";

}


if($submitBit[11] == 1){
    
     $tfs12_readonly = "readonly";
   
    $tfs12_chkbx_none = "visibility:hidden";

}

if($submitBit[12] == 1){
    
     $tfs13_readonly = "readonly";
   
    $tfs13_chkbx_none = "visibility:hidden";

}


if($submitBit[13] == 1){
    
     $tfs14_readonly = "readonly";
   
    $tfs14_chkbx_none = "visibility:hidden";

}


if($submitBit[14] == 1){
    
     $tfs15_readonly = "readonly";
   
    $tfs15_chkbx_none = "visibility:hidden";

}

if($submitBit[15] == 1){
    
     $tfs16_readonly = "readonly";
   
    $tfs16_chkbx_none = "visibility:hidden";

}

if($submitBit[16] == 1){
    
     $tfs17_readonly = "readonly";
   
    $tfs17_chkbx_none = "visibility:hidden";

}

if($submitBit[17] == 1){
    
     $tfs18_readonly = "readonly";
   
    $tfs18_chkbx_none = "visibility:hidden";

}

if($submitBit[18] == 1){
    
     $tfs19_readonly = "readonly";
   
    $tfs19_chkbx_none = "visibility:hidden";

}



if($submitBit[19] == 1){
    
     $tfs20_readonly = "readonly";
   
    $tfs20_chkbx_none = "visibility:hidden";

}


if($submitBit[20] == 1){
    
     $tfs21_readonly = "readonly";
   
    $tfs21_chkbx_none = "visibility:hidden";

}


if($submitBit[21] == 1){
    
     $tfs22_readonly = "readonly";
   
    $tfs22_chkbx_none = "visibility:hidden";

}

if($submitBit[22] == 1){
    
     $tfs23_readonly = "readonly";
   
    $tfs23_chkbx_none = "visibility:hidden";

}


if($submitBit[23] == 1){
    
     $tfs24_readonly = "readonly";
   
    $tfs24_chkbx_none = "visibility:hidden";

}


if($submitBit[24] == 1){
    
     $tfs25_readonly = "readonly";
   
    $tfs25_chkbx_none = "visibility:hidden";

}

if($submitBit[25] == 1){
    
     $tfs26_readonly = "readonly";
   
    $tfs26_chkbx_none = "visibility:hidden";

}

if($submitBit[26] == 1){
    
     $tfs27_readonly = "readonly";
   
    $tfs27_chkbx_none = "visibility:hidden";

}

if($submitBit[27] == 1){
    
     $tfs28_readonly = "readonly";
   
    $tfs28_chkbx_none = "visibility:hidden";

}

if($submitBit[28] == 1){
    
     $tfs29_readonly = "readonly";
   
    $tfs29_chkbx_none = "visibility:hidden";

}



if($submitBit[29] == 1){
    
     $tfs30_readonly = "readonly";
   
    $tfs30_chkbx_none = "visibility:hidden";

}


if($submitBit[30] == 1){
    
     $tfs31_readonly = "readonly";
   
    $tfs31_chkbx_none = "visibility:hidden";

}


if($submitBit[31] == 1){
    
     $tfs32_readonly = "readonly";
   
    $tfs32_chkbx_none = "visibility:hidden";

}

if($submitBit[32] == 1){
    
     $tfs33_readonly = "readonly";
   
    $tfs33_chkbx_none = "visibility:hidden";

}


if($submitBit[33] == 1){
    
     $tfs34_readonly = "readonly";
   
    $tfs34_chkbx_none = "visibility:hidden";

}


if($submitBit[34] == 1){
    
     $tfs35_readonly = "readonly";
   
    $tfs35_chkbx_none = "visibility:hidden";

}

if($submitBit[35] == 1){
    
     $tfs36_readonly = "readonly";
   
    $tfs36_chkbx_none = "visibility:hidden";

}

if($submitBit[36] == 1){
    
     $tfs37_readonly = "readonly";
   
    $tfs37_chkbx_none = "visibility:hidden";

}

if($submitBit[37] == 1){
    
     $tfs38_readonly = "readonly";
   
    $tfs38_chkbx_none = "visibility:hidden";

}

if($submitBit[38] == 1){
    
     $tfs39_readonly = "readonly";
   
    $tfs39_chkbx_none = "visibility:hidden";

}



if($submitBit[39] == 1){
    
     $tfs40_readonly = "readonly";
   
    $tfs40_chkbx_none = "visibility:hidden";

}


if($submitBit[40] == 1){
    
     $tfs41_readonly = "readonly";
   
    $tfs41_chkbx_none = "visibility:hidden";

}


if($submitBit[41] == 1){
    
     $tfs42_readonly = "readonly";
   
    $tfs42_chkbx_none = "visibility:hidden";

}

if($submitBit[42] == 1){
    
     $tfs43_readonly = "readonly";
   
    $tfs43_chkbx_none = "visibility:hidden";

}


if($submitBit[43] == 1){
    
     $tfs44_readonly = "readonly";
   
    $tfs44_chkbx_none = "visibility:hidden";

}


if($submitBit[44] == 1){
    
     $tfs45_readonly = "readonly";
   
    $tfs45_chkbx_none = "visibility:hidden";

}

if($submitBit[45] == 1){
    
     $tfs46_readonly = "readonly";
   
    $tfs46_chkbx_none = "visibility:hidden";

}

if($submitBit[46] == 1){
    
     $tfs47_readonly = "readonly";
   
    $tfs47_chkbx_none = "visibility:hidden";

}

if($submitBit[47] == 1){
    
     $tfs48_readonly = "readonly";
   
    $tfs48_chkbx_none = "visibility:hidden";

}

if($submitBit[48] == 1){
    
     $tfs49_readonly = "readonly";
   
    $tfs49_chkbx_none = "visibility:hidden";

}



if($submitBit[49] == 1){
    
     $tfs50_readonly = "readonly";
   
    $tfs50_chkbx_none = "visibility:hidden";

}



if($submitBit[50] == 1){
    
     $tfs51_readonly = "readonly";
   
    $tfs51_chkbx_none = "visibility:hidden";

}


if($submitBit[51] == 1){
    
     $tfs52_readonly = "readonly";
   
    $tfs52_chkbx_none = "visibility:hidden";

}

if($submitBit[52] == 1){
    
     $tfs53_readonly = "readonly";
   
    $tfs53_chkbx_none = "visibility:hidden";

}


if($submitBit[53] == 1){
    
     $tfs54_readonly = "readonly";
   
    $tfs54_chkbx_none = "visibility:hidden";

}


if($submitBit[54] == 1){
    
     $tfs55_readonly = "readonly";
   
    $tfs55_chkbx_none = "visibility:hidden";

}

if($submitBit[55] == 1){
    
     $tfs56_readonly = "readonly";
   
    $tfs56_chkbx_none = "visibility:hidden";

}

if($submitBit[56] == 1){
    
     $tfs57_readonly = "readonly";
   
    $tfs57_chkbx_none = "visibility:hidden";

}

if($submitBit[57] == 1){
    
     $tfs58_readonly = "readonly";
   
    $tfs58_chkbx_none = "visibility:hidden";

}

if($submitBit[58] == 1){
    
     $tfs59_readonly = "readonly";
   
    $tfs59_chkbx_none = "visibility:hidden";

}



if($submitBit[59] == 1){
    
     $tfs60_readonly = "readonly";
   
    $tfs60_chkbx_none = "visibility:hidden";

}


if($submitBit[60] == 1){
    
     $tfs61_readonly = "readonly";
   
    $tfs61_chkbx_none = "visibility:hidden";

}


if($submitBit[61] == 1){
    
     $tfs62_readonly = "readonly";
   
    $tfs62_chkbx_none = "visibility:hidden";

}

if($submitBit[62] == 1){
    
     $tfs63_readonly = "readonly";
   
    $tfs63_chkbx_none = "visibility:hidden";

}


if($submitBit[63] == 1){
    
     $tfs64_readonly = "readonly";
   
    $tfs64_chkbx_none = "visibility:hidden";

}


if($submitBit[64] == 1){
    
     $tfs65_readonly = "readonly";
   
    $tfs65_chkbx_none = "visibility:hidden";

}

if($submitBit[65] == 1){
    
     $tfs66_readonly = "readonly";
   
    $tfs66_chkbx_none = "visibility:hidden";

}

if($submitBit[66] == 1){
    
     $tfs67_readonly = "readonly";
   
    $tfs67_chkbx_none = "visibility:hidden";

}

if($submitBit[67] == 1){
    
     $tfs68_readonly = "readonly";
   
    $tfs68_chkbx_none = "visibility:hidden";

}

if($submitBit[68] == 1){
    
     $tfs69_readonly = "readonly";
   
    $tfs69_chkbx_none = "visibility:hidden";

}



if($submitBit[69] == 1){
    
     $tfs70_readonly = "readonly";
   
    $tfs70_chkbx_none = "visibility:hidden";

}


if($submitBit[70] == 1){
    
     $tfs71_readonly = "readonly";
   
    $tfs71_chkbx_none = "visibility:hidden";

}


if($submitBit[71] == 1){
    
     $tfs72_readonly = "readonly";
   
    $tfs72_chkbx_none = "visibility:hidden";

}

if($submitBit[72] == 1){
    
     $tfs73_readonly = "readonly";
   
    $tfs73_chkbx_none = "visibility:hidden";

}


if($submitBit[73] == 1){
    
     $tfs74_readonly = "readonly";
   
    $tfs74_chkbx_none = "visibility:hidden";

}


if($submitBit[74] == 1){
    
     $tfs75_readonly = "readonly";
   
    $tfs75_chkbx_none = "visibility:hidden";

}

if($submitBit[75] == 1){
    
     $tfs76_readonly = "readonly";
   
    $tfs76_chkbx_none = "visibility:hidden";

}

if($submitBit[76] == 1){
    
     $tfs77_readonly = "readonly";
   
    $tfs77_chkbx_none = "visibility:hidden";

}

if($submitBit[77] == 1){
    
     $tfs78_readonly = "readonly";
   
    $tfs78_chkbx_none = "visibility:hidden";

}

if($submitBit[78] == 1){
    
     $tfs79_readonly = "readonly";
   
    $tfs79_chkbx_none = "visibility:hidden";

}



if($submitBit[79] == 1){
    
     $tfs80_readonly = "readonly";
   
    $tfs80_chkbx_none = "visibility:hidden";

}


if($submitBit[80] == 1){
    
     $tfs81_readonly = "readonly";
   
    $tfs81_chkbx_none = "visibility:hidden";

}


if($submitBit[81] == 1){
    
     $tfs82_readonly = "readonly";
   
    $tfs82_chkbx_none = "visibility:hidden";

}

if($submitBit[82] == 1){
    
     $tfs83_readonly = "readonly";
   
    $tfs83_chkbx_none = "visibility:hidden";

}


if($submitBit[83] == 1){
    
     $tfs84_readonly = "readonly";
   
    $tfs84_chkbx_none = "visibility:hidden";

}


if($submitBit[84] == 1){
    
     $tfs85_readonly = "readonly";
   
    $tfs85_chkbx_none = "visibility:hidden";

}

if($submitBit[85] == 1){
    
     $tfs86_readonly = "readonly";
   
    $tfs86_chkbx_none = "visibility:hidden";

}

if($submitBit[86] == 1){
    
     $tfs87_readonly = "readonly";
   
    $tfs87_chkbx_none = "visibility:hidden";

}

if($submitBit[87] == 1){
    
     $tfs88_readonly = "readonly";
   
    $tfs88_chkbx_none = "visibility:hidden";

}

if($submitBit[88] == 1){
    
     $tfs89_readonly = "readonly";
   
    $tfs89_chkbx_none = "visibility:hidden";

}



if($submitBit[89] == 1){
    
     $tfs90_readonly = "readonly";
   
    $tfs90_chkbx_none = "visibility:hidden";

}


if($submitBit[90] == 1){
    
     $tfs91_readonly = "readonly";
   
    $tfs91_chkbx_none = "visibility:hidden";

}


if($submitBit[91] == 1){
    
     $tfs92_readonly = "readonly";
   
    $tfs92_chkbx_none = "visibility:hidden";

}

if($submitBit[92] == 1){
    
     $tfs93_readonly = "readonly";
   
    $tfs93_chkbx_none = "visibility:hidden";

}


if($submitBit[93] == 1){
    
     $tfs94_readonly = "readonly";
   
    $tfs94_chkbx_none = "visibility:hidden";

}


if($submitBit[94] == 1){
    
     $tfs95_readonly = "readonly";
   
    $tfs95_chkbx_none = "visibility:hidden";

}

if($submitBit[95] == 1){
    
     $tfs96_readonly = "readonly";
   
    $tfs96_chkbx_none = "visibility:hidden";

}

if($submitBit[96] == 1){
    
     $tfs97_readonly = "readonly";
   
    $tfs97_chkbx_none = "visibility:hidden";

}

if($submitBit[97] == 1){
    
     $tfs98_readonly = "readonly";
   
    $tfs98_chkbx_none = "visibility:hidden";

}

if($submitBit[98] == 1){
    
     $tfs99_readonly = "readonly";
   
    $tfs99_chkbx_none = "visibility:hidden";

}



if($submitBit[99] == 1){
    
     $tfs100_readonly = "readonly";
   
    $tfs100_chkbx_none = "visibility:hidden";

}





?>





<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Task Help</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
 
  <script>
$(document).ready(function (e){
$("#frmContact").on('submit',(function(e){
	e.preventDefault();
	$("#mail-status").html("processing...");
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "<?php echo $process_tfs_url ?>",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  
		    if(data == 1){
		         	window.location.replace("<?php echo $tfs_submitted_successfully ?>"); 
		    }

 		        if(data == 2){
		            
		      window.location.replace("<?php echo $no_tfs_processed ?>"); 
		        }

             
		            
		      $("#content_status").html(data); 
		    



		},
		error: function(){} 	        
		
		});
	}
}));





function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	

        var plsChk = "Please click on the checkbox of the following Taskflow-suggest: ";

        var chkNum = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        
        var addChk = "";
        
        
        var misCont = "There is content missing for the following Taskflow-suggest: ";
        var misContNum = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        var addCont = "";

	    var subject1 = document.getElementById("s1").value;
        var content1 = document.getElementById("c1").value;
        var isVisible1 = document.getElementById("v01").value;
        var checked1 = document.getElementById("checkbox-1").checked;
  
        subject1 = subject1.trim();
        content1 = content1.trim();
  
  
  
   if(Number(isVisible1) == 0 ){
        
        if(checked1 == false){
          
            if(subject1 != "" || content1 != ""){
            
             chkNum[0] = 1;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
  
            if(checked1 == true){
          
            if(subject1 == "" || content1 == ""){
            
             misContNum[0] = 1;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
        
            
         }
  
  
  	    var subject2 = document.getElementById("s2").value;
        var content2 = document.getElementById("c2").value;
        var isVisible2 = document.getElementById("v02").value;
        var checked2 = document.getElementById("checkbox-2").checked;
  
        subject2 = subject2.trim();
        content2 = content2.trim();

  
     if(Number(isVisible2) == 0 ){
        
        if(checked2 == false){
          
            if(subject2 != "" || content2 != ""){
            
             chkNum[1] = 2;
           
            valid = false; 
                 	
            }  	
                 	
        }
  
  
          if(checked2 == true){
          
            if(subject2 == "" || content2 == ""){
            
             misContNum[1] = 2;
           
            valid = false; 
                 	
            }  	
                 	
        }
  
  
            
         }
    

   	    var subject3 = document.getElementById("s3").value;
        var content3 = document.getElementById("c3").value;
        var isVisible3 = document.getElementById("v03").value;
        var checked3 = document.getElementById("checkbox-3").checked;
  
        subject3 = subject3.trim();
        content3 = content3.trim();

  
  if(Number(isVisible3) == 0 ){
        
        if(checked3 == false){
          
            if(subject3 != "" || content3 != ""){
            
             chkNum[2] = 3;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
              if(checked3 == true){
          
            if(subject3 === "" || content3 == ""){
            
             misContNum[2] = 3;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
         
         
            
         }
  
  
  
  
    
   	    var subject4 = document.getElementById("s4").value;
        var content4 = document.getElementById("c4").value;
        var isVisible4 = document.getElementById("v04").value;
        var checked4 = document.getElementById("checkbox-4").checked;
  
        subject4 = subject4.trim();
        content4 = content4.trim();


  
    if(Number(isVisible4) == 0 ){
        
        if(checked4 == false){
          
            if(subject4 != "" || content4 != ""){
            
             chkNum[3] = 4;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
             if(checked4 == true){
          
            if(subject4 == "" || content4 == ""){
            
             misContNum[3] = 4;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
         
         
         
         
            
         }
  
  
  
  
   
    
   	    var subject5 = document.getElementById("s5").value;
        var content5 = document.getElementById("c5").value;
        var isVisible5 = document.getElementById("v05").value;
        var checked5 = document.getElementById("checkbox-5").checked;

        subject5 = subject5.trim();
        content5 = content5.trim();

  
  
    if(Number(isVisible5) == 0 ){
        
        if(checked5 == false){
          
            if(subject5 != "" || content5 != ""){
            
             chkNum[4] = 5;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         if(checked5 == true){
          
            if(subject5 == "" || content5 == ""){
            
             misContNum[4] = 5;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 
          
          
          
            
         }
  
  
  
      
   	    var subject6 = document.getElementById("s6").value;
        var content6 = document.getElementById("c6").value;
        var isVisible6 = document.getElementById("v06").value;
        var checked6 = document.getElementById("checkbox-6").checked;

        subject6 = subject6.trim();
        content6 = content6.trim();

  
  
   if(Number(isVisible6) == 0 ){
        
        if(checked6 == false){
          
            if(subject6 != "" || content6 != ""){
            
             chkNum[5] = 6;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
        if(checked6 == true){
          
            if(subject6 == "" || content6 == ""){
            
             misContNum[5] = 6;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
          
          
          
            
         }
  
  
  
   
      
   	    var subject7 = document.getElementById("s7").value;
        var content7 = document.getElementById("c7").value;
        var isVisible7 = document.getElementById("v07").value;
        var checked7 = document.getElementById("checkbox-7").checked;
  
        subject7 = subject7.trim();
        content7 = content7.trim();


  
    if(Number(isVisible7) == 0 ){
        
        if(checked7 == false){
          
            if(subject7 != "" || content7 != ""){
            
             chkNum[6] = 7;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         if(checked7 == true){
          
            if(subject7 == "" || content7 == ""){
            
             misContNum[6] = 7;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 
          
          
          
            
         }
  
  
  
        
   	    var subject8 = document.getElementById("s8").value;
        var content8 = document.getElementById("c8").value;
        var isVisible8 = document.getElementById("v08").value;
        var checked8 = document.getElementById("checkbox-8").checked;
  
        subject8 = subject8.trim();
        content8 = content8.trim();


  
    if(Number(isVisible8) == 0 ){
        
        if(checked8 == false){
          
            if(subject8 != "" || content8 != ""){
            
             chkNum[7] = 8;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
        if(checked8 == true){
          
            if(subject8 == "" || content8 == ""){
            
             misContNum[7] = 8;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 
          
          
          
          
            
         }
  
  
     	var subject9 = document.getElementById("s9").value;
        var content9 = document.getElementById("c9").value;
        var isVisible9 = document.getElementById("v09").value;
        var checked9 = document.getElementById("checkbox-9").checked;

        subject9 = subject9.trim();
        content9 = content9.trim();

  
  
    if(Number(isVisible9) == 0 ){
        
        if(checked9 == false){
          
            if(subject9 != "" || content9 != ""){
            
             chkNum[8] = 9;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
           if(checked9 == true){
          
            if(subject9 == "" || content9 == ""){
            
             misContNum[8] = 9;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
        
        
        
            
         }
  
  
    
     	var subject10 = document.getElementById("s10").value;
        var content10 = document.getElementById("c10").value;
        var isVisible10 = document.getElementById("v10").value;
        var checked10 = document.getElementById("checkbox-10").checked;
  
        subject10 = subject10.trim();
        content10 = content10.trim();


  
  if(Number(isVisible10) == 0 ){
        
        if(checked10 == false){
          
            if(subject10 != "" || content10 != ""){
            
             chkNum[9] = 10;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
        if(checked10 == true){
          
            if(subject10 == "" || content10 == ""){
            
             misContNum[9] = 10;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
        
        
        
            
         }
  




	    var subject11 = document.getElementById("s11").value;
        var content11 = document.getElementById("c11").value;
        var isVisible11 = document.getElementById("v11").value;
        var checked11 = document.getElementById("checkbox-11").checked;
  
        subject11 = subject11.trim();
        content11 = content11.trim();
  
  
  
    if(Number(isVisible11) == 0 ){
        
        if(checked11 == false){
          
            if(subject11 != "" || content11 != ""){
            
             chkNum[10] = 11;
           
            valid = false; 
                 	
            }  	
                 	
        }
     
        if(checked11 == true){
          
            if(subject11 == "" || content11 == ""){
            
             misContNum[10] = 11;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
     
     
            
         }
  
  
  	    var subject12 = document.getElementById("s12").value;
        var content12 = document.getElementById("c12").value;
        var isVisible12 = document.getElementById("v12").value;
        var checked12 = document.getElementById("checkbox-12").checked;
  
        subject12 = subject12.trim();
        content12 = content12.trim();

  
   if(Number(isVisible12) == 0 ){
        
        if(checked12 == false){
          
            if(subject12 != "" || content12 != ""){
            
             chkNum[11] = 12;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
        if(checked12 == true){
          
            if(subject12 == "" || content12 == ""){
            
             misContNum[11] = 12;
           
            valid = false; 
                 	
            }  	
                 	
        }
               
        
        
        
            
         }
    

   	    var subject13 = document.getElementById("s13").value;
        var content13 = document.getElementById("c13").value;
        var isVisible13 = document.getElementById("v13").value;
        var checked13 = document.getElementById("checkbox-13").checked;
  
        subject13 = subject13.trim();
        content13 = content13.trim();

  
    if(Number(isVisible13) == 0 ){
        
        if(checked13 == false){
          
            if(subject13 != "" || content13 != ""){
            
             chkNum[12] = 13;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
            if(checked13 == true){
          
            if(subject13 == "" || content13 == ""){
            
             misContNum[12] = 13;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
        
        
            
         }
  
  
  
  
    
   	    var subject14 = document.getElementById("s14").value;
        var content14 = document.getElementById("c14").value;
        var isVisible14 = document.getElementById("v14").value;
        var checked14 = document.getElementById("checkbox-14").checked;
  
        subject14 = subject14.trim();
        content14 = content14.trim();


  
   if(Number(isVisible14) == 0 ){
        
        if(checked14 == false){
          
            if(subject14 != "" || content14 != ""){
            
             chkNum[13] = 14;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         if(checked14 == true){
          
            if(subject14 == "" || content14 == ""){
            
             misContNum[13] = 14;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 
          
          
            
         }
  
  
  
  
   
    
   	    var subject15 = document.getElementById("s15").value;
        var content15 = document.getElementById("c15").value;
        var isVisible15 = document.getElementById("v15").value;
        var checked15 = document.getElementById("checkbox-15").checked;

        subject15 = subject15.trim();
        content15 = content15.trim();

  
  
  if(Number(isVisible15) == 0 ){
        
        if(checked15 == false){
          
            if(subject15 != "" || content15 != ""){
            
             chkNum[14] = 15;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         if(checked15 == true){
          
            if(subject15 == "" || content15 == ""){
            
             misContNum[14] = 15;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
          
          
            
         }
  
  
  
      
   	    var subject16 = document.getElementById("s16").value;
        var content16 = document.getElementById("c16").value;
        var isVisible16 = document.getElementById("v16").value;
        var checked16 = document.getElementById("checkbox-16").checked;

        subject16 = subject16.trim();
        content16 = content16.trim();

  
  
    if(Number(isVisible16) == 0 ){
        
        if(checked16 == false){
          
            if(subject16 != "" || content16 != ""){
            
             chkNum[15] = 16;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
        if(checked16 == true){
          
            if(subject16 == "" || content16 == ""){
            
             misContNum[15] = 16;
           
            valid = false; 
                 	
            }  	
                 	
        }
               
        
        
            
         }
  
  
  
   
      
   	    var subject17 = document.getElementById("s17").value;
        var content17 = document.getElementById("c17").value;
        var isVisible17 = document.getElementById("v17").value;
        var checked17 = document.getElementById("checkbox-17").checked;
  
        subject17 = subject17.trim();
        content17 = content17.trim();


  
    if(Number(isVisible17) == 0 ){
        
        if(checked17 == false){
          
            if(subject17 != "" || content17 != ""){
            
             chkNum[16] = 17;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         if(checked17 == true){
          
            if(subject17 == "" || content17 == ""){
            
             misContNum[16] = 17;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
          
          
            
         }
  
  
  
        
   	    var subject18 = document.getElementById("s18").value;
        var content18 = document.getElementById("c18").value;
        var isVisible18 = document.getElementById("v18").value;
        var checked18 = document.getElementById("checkbox-18").checked;
  
        subject18 = subject18.trim();
        content18 = content18.trim();


  
   if(Number(isVisible18) == 0 ){
        
        if(checked18 == false){
          
            if(subject18 != "" || content18 != ""){
            
             chkNum[17] = 18;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
        if(checked18 == true){
          
            if(subject18 == "" || content18 == ""){
            
             misContNum[17] = 18;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  
           
            
         }
  
  
     	var subject19 = document.getElementById("s19").value;
        var content19 = document.getElementById("c19").value;
        var isVisible19 = document.getElementById("v19").value;
        var checked19 = document.getElementById("checkbox-19").checked;

        subject19 = subject19.trim();
        content19 = content19.trim();

  
  
   if(Number(isVisible19) == 0 ){
        
        if(checked19 == false){
          
            if(subject19 != "" || content19 != ""){
            
             chkNum[18] = 19;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
        if(checked19 == true){
          
            if(subject19 == "" || content19 == ""){
            
             misContNum[18] = 19;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 
          
          
            
         }
  
  
    
     	var subject20 = document.getElementById("s20").value;
        var content20 = document.getElementById("c20").value;
        var isVisible20 = document.getElementById("v20").value;
        var checked20 = document.getElementById("checkbox-20").checked;
  
        subject20 = subject20.trim();
        content20 = content20.trim();


  
    if(Number(isVisible20) == 0 ){
        
        if(checked20 == false){
          
            if(subject20 != "" || content20 != ""){
            
             chkNum[19] = 20;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
       if(checked20 == true){
          
            if(subject20 == "" || content20 == ""){
            
             misContNum[19] = 20;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
         
         
            
         }
  




	    var subject21 = document.getElementById("s21").value;
        var content21 = document.getElementById("c21").value;
        var isVisible21 = document.getElementById("v21").value;
        var checked21 = document.getElementById("checkbox-21").checked;
  
        subject21 = subject21.trim();
        content21 = content21.trim();
  
  
  
     if(Number(isVisible21) == 0 ){
        
        if(checked21 == false){
          
            if(subject21 != "" || content21 != ""){
            
             chkNum[20] = 21;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
        if(checked21 == true){
          
            if(subject21 == "" || content21 == ""){
            
             misContNum[20] = 21;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 
         
            
         }
  
  
  	    var subject22 = document.getElementById("s22").value;
        var content22 = document.getElementById("c22").value;
        var isVisible22 = document.getElementById("v22").value;
        var checked22 = document.getElementById("checkbox-22").checked;
  
        subject22 = subject22.trim();
        content22 = content22.trim();

  
    if(Number(isVisible22) == 0 ){
        
        if(checked22 == false){
          
            if(subject22 != "" || content22 != ""){
            
             chkNum[21] = 22;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         if(checked22 == true){
          
            if(subject22 == "" || content22 == ""){
            
             misContNum[21] = 22;
           
            valid = false; 
                 	
            }  	
                 	
        }
              
       
            
         }
    

   	    var subject23 = document.getElementById("s23").value;
        var content23 = document.getElementById("c23").value;
        var isVisible23 = document.getElementById("v23").value;
        var checked23 = document.getElementById("checkbox-23").checked;
  
        subject23 = subject23.trim();
        content23 = content23.trim();

  
    if(Number(isVisible23) == 0 ){
        
        if(checked23 == false){
          
            if(subject23 != "" || content23 != ""){
            
             chkNum[22] = 23;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
          if(checked23 == true){
          
            if(subject23 == "" || content23 == ""){
            
             misContNum[22] = 23;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
          
          
            
         }
  
  
  
  
    
   	    var subject24 = document.getElementById("s24").value;
        var content24 = document.getElementById("c24").value;
        var isVisible24 = document.getElementById("v24").value;
        var checked24 = document.getElementById("checkbox-24").checked;
  
        subject24 = subject24.trim();
        content24 = content24.trim();


  
   if(Number(isVisible24) == 0 ){
        
        if(checked24 == false){
          
            if(subject24 != "" || content24 != ""){
            
             chkNum[23] = 24;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
        if(checked24 == true){
          
            if(subject24 == "" || content24 == ""){
            
             misContNum[23] = 24;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  
          
          
            
         }
  
  
  
  
   
    
   	    var subject25 = document.getElementById("s25").value;
        var content25 = document.getElementById("c25").value;
        var isVisible25 = document.getElementById("v25").value;
        var checked25 = document.getElementById("checkbox-25").checked;

        subject25 = subject25.trim();
        content25 = content25.trim();

  
  
    if(Number(isVisible25) == 0 ){
        
        if(checked25 == false){
          
            if(subject25 != "" || content25 != ""){
            
             chkNum[24] = 25;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
             if(checked25 == true){
          
            if(subject25 == "" || content25 == ""){
            
             misContNum[24] = 25;
           
            valid = false; 
                 	
            }  	
                 	
        }
             
          
          
          
            
         }
  
  
  
      
   	    var subject26 = document.getElementById("s26").value;
        var content26 = document.getElementById("c26").value;
        var isVisible26 = document.getElementById("v26").value;
        var checked26 = document.getElementById("checkbox-26").checked;

        subject26 = subject26.trim();
        content26 = content26.trim();

  
  
   if(Number(isVisible26) == 0 ){
        
        if(checked26 == false){
          
            if(subject26 != "" || content26 != ""){
            
             chkNum[25] = 26;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
        
            if(checked26 == true){
          
            if(subject26 == "" || content26 == ""){
            
             misContNum[25] = 26;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
        
            
         }
  
  
  
   
      
   	    var subject27 = document.getElementById("s27").value;
        var content27 = document.getElementById("c27").value;
        var isVisible27 = document.getElementById("v27").value;
        var checked27 = document.getElementById("checkbox-27").checked;
  
        subject27 = subject27.trim();
        content27 = content27.trim();


  
  if(Number(isVisible27) == 0 ){
        
        if(checked27 == false){
          
            if(subject27 != "" || content27 != ""){
            
             chkNum[26] = 27;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
           if(checked27 == true){
          
            if(subject27 == "" || content27 == ""){
            
             misContNum[26] = 27;
           
            valid = false; 
                 	
            }  	
                 	
        }     
        
        
        
            
         }
  
  
  
        
   	    var subject28 = document.getElementById("s28").value;
        var content28 = document.getElementById("c28").value;
        var isVisible28 = document.getElementById("v28").value;
        var checked28 = document.getElementById("checkbox-28").checked;
  
        subject28 = subject28.trim();
        content28 = content28.trim();


  
    if(Number(isVisible28) == 0 ){
        
        if(checked28 == false){
          
            if(subject28 != "" || content28 != ""){
            
             chkNum[27] =28;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
          if(checked28 == true){
          
            if(subject28 == "" || content28 == ""){
            
             misContNum[27] =28;
           
            valid = false; 
                 	
            }  	
                 	
        }
              
         
         
         
         
            
         }
  
  
     	var subject29 = document.getElementById("s29").value;
        var content29 = document.getElementById("c29").value;
        var isVisible29 = document.getElementById("v29").value;
        var checked29 = document.getElementById("checkbox-29").checked;

        subject29 = subject29.trim();
        content29 = content29.trim();

  
  
    if(Number(isVisible29) == 0 ){
        
        if(checked29 == false){
          
            if(subject29 != "" || content29 != ""){
            
             chkNum[28] = 29;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
            if(checked29 == true){
          
            if(subject29 == "" || content29 == ""){
            
             misContNum[28] = 29;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
         
         
         
            
         }
  
  
    
     	var subject30 = document.getElementById("s30").value;
        var content30 = document.getElementById("c30").value;
        var isVisible30 = document.getElementById("v30").value;
        var checked30 = document.getElementById("checkbox-30").checked;
  
        subject30 = subject30.trim();
        content30 = content30.trim();


  
    if(Number(isVisible30) == 0 ){
        
        if(checked30 == false){
          
            if(subject30 != "" || content30 != ""){
            
             chkNum[29] = 30;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
            if(checked30 == true){
          
            if(subject30 == "" || content30 == ""){
            
             misContNum[29] = 30;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
        
        
            
         }
  




	    var subject31 = document.getElementById("s31").value;
        var content31 = document.getElementById("c31").value;
        var isVisible31 = document.getElementById("v31").value;
        var checked31 = document.getElementById("checkbox-31").checked;
  
        subject31 = subject31.trim();
        content31 = content31.trim();
  
  
  
  if(Number(isVisible31) == 0 ){
        
        if(checked31 == false){
          
            if(subject31 != "" || content31 != ""){
            
             chkNum[30] = 31;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
             if(checked31 == true){
          
            if(subject31 == "" || content31 == ""){
            
             misContNum[30] = 31;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
        
        
            
         }
  
  
  	    var subject32 = document.getElementById("s32").value;
        var content32 = document.getElementById("c32").value;
        var isVisible32 = document.getElementById("v32").value;
        var checked32 = document.getElementById("checkbox-32").checked;
  
        subject32 = subject32.trim();
        content32 = content32.trim();

  
 if(Number(isVisible32) == 0 ){
        
        if(checked32 == false){
          
            if(subject32 != "" || content32 != ""){
            
             chkNum[31] = 32;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
          if(checked32 == true){
          
            if(subject32 == "" || content32 == ""){
            
             misContNum[31] = 32;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
       
            
         }
    

   	    var subject33 = document.getElementById("s33").value;
        var content33 = document.getElementById("c33").value;
        var isVisible33 = document.getElementById("v33").value;
        var checked33 = document.getElementById("checkbox-33").checked;
  
        subject33 = subject33.trim();
        content33 = content33.trim();

  
  if(Number(isVisible33) == 0 ){
        
        if(checked33 == false){
          
            if(subject33 != "" || content33 != ""){
            
             chkNum[32] = 33;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
         if(checked33 == true){
          
            if(subject33 == "" || content33 == ""){
            
             misContNum[32] = 33;
           
            valid = false; 
                 	
            }  	
                 	
        }
              
         
            
         }
  
  
  
  
    
   	    var subject34 = document.getElementById("s34").value;
        var content34 = document.getElementById("c34").value;
        var isVisible34 = document.getElementById("v34").value;
        var checked34 = document.getElementById("checkbox-34").checked;
  
        subject34 = subject34.trim();
        content34 = content34.trim();


  
 if(Number(isVisible34) == 0 ){
        
        if(checked34 == false){
          
            if(subject34 != "" || content34 != ""){
            
             chkNum[33] = 34;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
        if(checked34 == true){
          
            if(subject34 == "" || content34 == ""){
            
             misContNum[33] = 34;
           
            valid = false; 
                 	
            }  	
                 	
        }
             
         
            
         }
  
  
  
  
   
    
   	    var subject35 = document.getElementById("s35").value;
        var content35 = document.getElementById("c35").value;
        var isVisible35 = document.getElementById("v35").value;
        var checked35 = document.getElementById("checkbox-35").checked;

        subject35 = subject35.trim();
        content35 = content35.trim();

  
  
   if(Number(isVisible35) == 0 ){
        
        if(checked35 == false){
          
            if(subject35 != "" || content35 != ""){
            
             chkNum[34] = 35;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
        if(checked35 == true){
          
            if(subject35 == "" || content35 == ""){
            
             misContNum[34] = 35;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 
          
            
         }
  
  
  
      
   	    var subject36 = document.getElementById("s36").value;
        var content36 = document.getElementById("c36").value;
        var isVisible36 = document.getElementById("v36").value;
        var checked36 = document.getElementById("checkbox-36").checked;

        subject36 = subject36.trim();
        content36 = content36.trim();

  
  
  if(Number(isVisible36) == 0 ){
        
        if(checked36 == false){
          
            if(subject36 != "" || content36 != ""){
            
             chkNum[35] = 36;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
          if(checked36 == true){
          
            if(subject36 == "" || content36 == ""){
            
             misContNum[35] = 36;
           
            valid = false; 
                 	
            }  	
                 	
        }
              
         
         
            
         }
  
  
  
   
      
   	    var subject37 = document.getElementById("s37").value;
        var content37 = document.getElementById("c37").value;
        var isVisible37 = document.getElementById("v37").value;
        var checked37 = document.getElementById("checkbox-37").checked;
  
        subject37 = subject37.trim();
        content37 = content37.trim();


  
  if(Number(isVisible37) == 0 ){
        
        if(checked37 == false){
          
            if(subject37 != "" || content37 != ""){
            
             chkNum[36] = 37;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
         if(checked37 == true){
          
            if(subject37 == "" || content37 == ""){
            
             misContNum[36] = 37;
           
            valid = false; 
                 	
            }  	
                 	
        }
             
         
         
            
         }
  
  
  
        
   	    var subject38 = document.getElementById("s38").value;
        var content38 = document.getElementById("c38").value;
        var isVisible38 = document.getElementById("v38").value;
        var checked38 = document.getElementById("checkbox-38").checked;
  
        subject38 = subject38.trim();
        content38 = content38.trim();


  
   if(Number(isVisible38) == 0 ){
        
        if(checked38 == false){
          
            if(subject38 != "" || content38 != ""){
            
             chkNum[37] = 38;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
          if(checked38 == true){
          
            if(subject38 == "" || content38 == ""){
            
             misContNum[37] = 38;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
           
         
         
            
         }
  
  
     	var subject39 = document.getElementById("s39").value;
        var content39 = document.getElementById("c39").value;
        var isVisible39 = document.getElementById("v39").value;
        var checked39 = document.getElementById("checkbox-39").checked;

        subject39 = subject39.trim();
        content39 = content39.trim();

  
  
 if(Number(isVisible39) == 0 ){
        
        if(checked39 == false){
          
            if(subject39 != "" || content39 != ""){
            
             chkNum[38] = 39;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         if(checked39 == true){
          
            if(subject39 == "" || content39 == ""){
            
             misContNum[38] = 39;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
          
          
            
         }
  
  
    
     	var subject40 = document.getElementById("s40").value;
        var content40 = document.getElementById("c40").value;
        var isVisible40 = document.getElementById("v40").value;
        var checked40 = document.getElementById("checkbox-40").checked;
  
        subject40 = subject40.trim();
        content40 = content40.trim();


  
 if(Number(isVisible40) == 0 ){
        
        if(checked40 == false){
          
            if(subject40 != "" || content40 != ""){
            
             chkNum[39] = 40;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
        
        if(checked40 == true){
          
            if(subject40 == "" || content40 == ""){
            
             misContNum[39] = 40;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
            
         }
  




	    var subject41 = document.getElementById("s41").value;
        var content41 = document.getElementById("c41").value;
        var isVisible41 = document.getElementById("v41").value;
        var checked41 = document.getElementById("checkbox-41").checked;
  
        subject41 = subject41.trim();
        content41 = content41.trim();
  
  
  
 if(Number(isVisible41) == 0 ){
        
        if(checked41 == false){
          
            if(subject41 != "" || content41 != ""){
            
             chkNum[40] = 41;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
        if(checked41 == true){
          
            if(subject41 == "" || content41 == ""){
            
             misContNum[40] = 41;
           
            valid = false; 
                 	
            }  	
                 	
        }
                
          
            
         }
  
  
  	    var subject42 = document.getElementById("s42").value;
        var content42 = document.getElementById("c42").value;
        var isVisible42 = document.getElementById("v42").value;
        var checked42 = document.getElementById("checkbox-42").checked;
  
        subject42 = subject42.trim();
        content42 = content42.trim();

  
 if(Number(isVisible42) == 0 ){
        
        if(checked42 == false){
          
            if(subject42 != "" || content42 != ""){
            
             chkNum[41] = 42;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
        
        if(checked42 == true){
          
            if(subject42 == "" || content42 == ""){
            
             misContNum[41] = 42;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         
            
         }
    

   	    var subject43 = document.getElementById("s43").value;
        var content43 = document.getElementById("c43").value;
        var isVisible43 = document.getElementById("v43").value;
        var checked43 = document.getElementById("checkbox-43").checked;
  
        subject43 = subject43.trim();
        content43 = content43.trim();

  
    if(Number(isVisible43) == 0 ){
        
        if(checked43 == false){
          
            if(subject43 != "" || content43 != ""){
            
             chkNum[42] = 43;
           
            valid = false; 
                 	
            }  	
                 	
        }
 
         if(checked43 == true){
          
            if(subject43 == "" || content43 == ""){
            
             misContNum[42] = 43;
           
            valid = false; 
                 	
            }  	
                 	
        }
    
 
            
         }
  
  
  
  
    
   	    var subject44 = document.getElementById("s44").value;
        var content44 = document.getElementById("c44").value;
        var isVisible44 = document.getElementById("v44").value;
        var checked44 = document.getElementById("checkbox-44").checked;
  
        subject44 = subject44.trim();
        content44 = content44.trim();


  
  if(Number(isVisible44) == 0 ){
        
        if(checked44 == false){
          
            if(subject44 != "" || content44 != ""){
            
             chkNum[43] = 44;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
         
        if(checked44 == true){
          
            if(subject44 == "" || content44 == ""){
            
             misContNum[43] = 44;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
         
         
            
         }
  
  
  
  
   
    
   	    var subject45 = document.getElementById("s45").value;
        var content45 = document.getElementById("c45").value;
        var isVisible45 = document.getElementById("v45").value;
        var checked45 = document.getElementById("checkbox-45").checked;

        subject45 = subject45.trim();
        content45 = content45.trim();

  
  
 if(Number(isVisible45) == 0 ){
        
        if(checked45 == false){
          
            if(subject45 != "" || content45 != ""){
            
             chkNum[44] = 45;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
        if(checked45 == true){
          
            if(subject45 == "" || content45 == ""){
            
             misContNum[44] = 45;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
         
            
         }
  
  
  
      
   	    var subject46 = document.getElementById("s46").value;
        var content46 = document.getElementById("c46").value;
        var isVisible46 = document.getElementById("v46").value;
        var checked46 = document.getElementById("checkbox-46").checked;

        subject46 = subject46.trim();
        content46 = content46.trim();

  
  
 if(Number(isVisible46) == 0 ){
        
        if(checked46 == false){
          
            if(subject46 != "" || content46 != ""){
            
             chkNum[45] = 46;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
         if(checked46 == true){
          
            if(subject46 == "" || content46 == ""){
            
             misContNum[45] = 46;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
            
         }
  
  
  
   
      
   	    var subject47 = document.getElementById("s47").value;
        var content47 = document.getElementById("c47").value;
        var isVisible47 = document.getElementById("v47").value;
        var checked47 = document.getElementById("checkbox-47").checked;
  
        subject47 = subject47.trim();
        content47 = content47.trim();


  
  if(Number(isVisible47) == 0 ){
        
        if(checked47 == false){
          
            if(subject47 != "" || content47 != ""){
            
             chkNum[46] = 47;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
        if(checked47 == true){
          
            if(subject47 == "" || content47 == ""){
            
             misContNum[46] = 47;
           
            valid = false; 
                 	
            }  	
                 	
        }
             
         
            
         }
  
  
  
        
   	    var subject48 = document.getElementById("s48").value;
        var content48 = document.getElementById("c48").value;
        var isVisible48 = document.getElementById("v48").value;
        var checked48 = document.getElementById("checkbox-48").checked;
  
        subject48 = subject48.trim();
        content48 = content48.trim();


  
  if(Number(isVisible48) == 0 ){
        
        if(checked48 == false){
          
            if(subject48 != "" || content48 != ""){
            
             chkNum[47] = 48;
           
            valid = false; 
                 	
            }  	
                 	
        }
      
         if(checked48 == true){
          
            if(subject48 == "" || content48 == ""){
            
             misContNum[47] = 48;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
      
            
         }
  
  
     	var subject49 = document.getElementById("s49").value;
        var content49 = document.getElementById("c49").value;
        var isVisible49 = document.getElementById("v49").value;
        var checked49 = document.getElementById("checkbox-49").checked;

        subject49 = subject49.trim();
        content49 = content49.trim();

  
  
   if(Number(isVisible49) == 0 ){
        
        if(checked49 == false){
          
            if(subject49 != "" || content49 != ""){
            
             chkNum[48] = 49;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
          if(checked49 == true){
          
            if(subject49 == "" || content49 == ""){
            
             misContNum[48] = 49;
           
            valid = false; 
                 	
            }  	
                 	
        }
             
         
         
            
         }
  
  
    
     	var subject50 = document.getElementById("s50").value;
        var content50 = document.getElementById("c50").value;
        var isVisible50 = document.getElementById("v50").value;
        var checked50 = document.getElementById("checkbox-50").checked;
  
        subject50 = subject50.trim();
        content50 = content50.trim();


  
  if(Number(isVisible50) == 0 ){
        
        if(checked50 == false){
          
            if(subject50 != "" || content50 != ""){
            
             chkNum[49] = 50;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
        if(checked50 == true){
          
            if(subject50 == "" || content50 == ""){
            
             misContNum[49] = 50;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
                
            
            
         }
  




	    var subject51 = document.getElementById("s51").value;
        var content51 = document.getElementById("c51").value;
        var isVisible51 = document.getElementById("v51").value;
        var checked51 = document.getElementById("checkbox-51").checked;
  
        subject51 = subject51.trim();
        content51 = content51.trim();
  
  
  
  if(Number(isVisible51) == 0 ){
        
        if(checked51 == false){
          
            if(subject51 != "" || content51 != ""){
            
             chkNum[50] =51;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
          if(checked51 == true){
          
            if(subject51 == "" || content51 == ""){
            
             misContNum[50] =51;
           
            valid = false; 
                 	
            }  	
                 	
        }
             
            
         }
  
  
  	    var subject52 = document.getElementById("s52").value;
        var content52 = document.getElementById("c52").value;
        var isVisible52 = document.getElementById("v52").value;
        var checked52 = document.getElementById("checkbox-52").checked;
  
        subject52 = subject52.trim();
        content52 = content52.trim();

  
  if(Number(isVisible52) == 0 ){
        
        if(checked52 == false){
          
            if(subject52 != "" || content52 != ""){
            
             chkNum[51] = 52;
           
            valid = false; 
                 	
            }  	
                 	
        }
            if(checked52 == true){
          
            if(subject52 == "" || content52 == ""){
            
             misContNum[51] = 52;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
        
            
         }
    

   	    var subject53 = document.getElementById("s53").value;
        var content53 = document.getElementById("c53").value;
        var isVisible53 = document.getElementById("v53").value;
        var checked53 = document.getElementById("checkbox-53").checked;
  
        subject53 = subject53.trim();
        content53 = content53.trim();

  
   if(Number(isVisible53) == 0 ){
        
        if(checked53 == false){
          
            if(subject53 != "" || content53 != ""){
            
             chkNum[52] = 53;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked53 == true){
          
            if(subject53 == "" || content53 == ""){
            
             misContNum[52] = 53;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         }
  
  
  
  
    
   	    var subject54 = document.getElementById("s54").value;
        var content54 = document.getElementById("c54").value;
        var isVisible54 = document.getElementById("v54").value;
        var checked54 = document.getElementById("checkbox-54").checked;
  
        subject54 = subject54.trim();
        content54 = content54.trim();


  
    if(Number(isVisible54) == 0 ){
        
        if(checked54 == false){
          
            if(subject54 != "" || content54 != ""){
            
             chkNum[53] = 54;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked54 == true){
          
            if(subject54 == "" || content54 == ""){
            
             misContNum[53] = 54;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
  
   
    
   	    var subject55 = document.getElementById("s55").value;
        var content55 = document.getElementById("c55").value;
        var isVisible55 = document.getElementById("v55").value;
        var checked55 = document.getElementById("checkbox-55").checked;

        subject55 = subject55.trim();
        content55 = content55.trim();

  
  
   if(Number(isVisible55) == 0 ){
        
        if(checked55 == false){
          
            if(subject55 != "" || content55 != ""){
            
             chkNum[54] = 55;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked55 == true){
          
            if(subject55 == "" || content55 == ""){
            
             misContNum[54] = 55;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
         }
  
  
  
      
   	    var subject56 = document.getElementById("s56").value;
        var content56 = document.getElementById("c56").value;
        var isVisible56 = document.getElementById("v56").value;
        var checked56 = document.getElementById("checkbox-56").checked;

        subject56 = subject56.trim();
        content56 = content56.trim();

  
  
  if(Number(isVisible56) == 0 ){
        
        if(checked56 == false){
          
            if(subject56 != "" || content56 != ""){
            
             chkNum[55] = 56;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked56 == true){
          
            if(subject56 == "" || content56 == ""){
            
             misContNum[55] = 56;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
         }
  
  
  
   
      
   	    var subject57 = document.getElementById("s57").value;
        var content57 = document.getElementById("c57").value;
        var isVisible57 = document.getElementById("v57").value;
        var checked57 = document.getElementById("checkbox-57").checked;
  
        subject57 = subject57.trim();
        content57 = content57.trim();


  
 if(Number(isVisible57) == 0 ){
        
        if(checked57 == false){
          
            if(subject57 != "" || content57 != ""){
            
             chkNum[56] = 57;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked57 == true){
          
            if(subject57 == "" || content57 == ""){
            
             misContNum[56] = 57;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
         }
  
  
  
        
   	    var subject58 = document.getElementById("s58").value;
        var content58 = document.getElementById("c58").value;
        var isVisible58 = document.getElementById("v58").value;
        var checked58 = document.getElementById("checkbox-58").checked;
  
        subject58 = subject58.trim();
        content58 = content58.trim();


  
   if(Number(isVisible58) == 0 ){
        
        if(checked58 == false){
          
            if(subject58 != "" || content58 != ""){
            
             chkNum[57] = 58;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked58 == true){
          
            if(subject58 == "" || content58 == ""){
            
             misContNum[57] = 58;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
         }
  
  
     	var subject59 = document.getElementById("s59").value;
        var content59 = document.getElementById("c59").value;
        var isVisible59 = document.getElementById("v59").value;
        var checked59 = document.getElementById("checkbox-59").checked;

        subject59 = subject59.trim();
        content59 = content59.trim();

  
  
   if(Number(isVisible59) == 0 ){
        
        if(checked59 == false){
          
            if(subject59 != "" || content59 != ""){
            
             chkNum[58] = 59;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked59 == true){
          
            if(subject59 == "" || content59 == ""){
            
             misContNum[58] = 59;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  
  
    
     	var subject60 = document.getElementById("s60").value;
        var content60 = document.getElementById("c60").value;
        var isVisible60 = document.getElementById("v60").value;
        var checked60 = document.getElementById("checkbox-60").checked;
  
        subject60 = subject60.trim();
        content60 = content60.trim();


  
   if(Number(isVisible60) == 0 ){
        
        if(checked60 == false){
          
            if(subject60 != "" || content60 != ""){
            
             chkNum[59] = 60;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  
        if(checked60 == true){
          
            if(subject60 == "" || content60 == ""){
            
             misContNum[59] = 60;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  






	    var subject61 = document.getElementById("s61").value;
        var content61 = document.getElementById("c61").value;
        var isVisible61 = document.getElementById("v61").value;
        var checked61 = document.getElementById("checkbox-61").checked;
  
        subject61 = subject61.trim();
        content61 = content61.trim();
  
  
  
  if(Number(isVisible61) == 0 ){
        
        if(checked61 == false){
          
            if(subject61 != "" || content61 != ""){
            
             chkNum[60] = 61;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked61 == true){
          
            if(subject61 == "" || content61 == ""){
            
             misContNum[60] = 61;
           
            valid = false; 
                 	
            }  	
                 	
        }
      
         }
  
  
  	    var subject62 = document.getElementById("s62").value;
        var content62 = document.getElementById("c62").value;
        var isVisible62 = document.getElementById("v62").value;
        var checked62 = document.getElementById("checkbox-62").checked;
  
        subject62 = subject62.trim();
        content62 = content62.trim();

  
    if(Number(isVisible62) == 0 ){
        
        if(checked62 == false){
          
            if(subject62 != "" || content62 != ""){
            
             chkNum[61] = 62;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked62 == true){
          
            if(subject62 == "" || content62 == ""){
            
             misContNum[61] = 62;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
    

   	    var subject63 = document.getElementById("s63").value;
        var content63 = document.getElementById("c63").value;
        var isVisible63 = document.getElementById("v63").value;
        var checked63 = document.getElementById("checkbox-63").checked;
  
        subject63 = subject63.trim();
        content63 = content63.trim();

  
  if(Number(isVisible63) == 0 ){
        
        if(checked63 == false){
          
            if(subject63 != "" || content63 != ""){
            
             chkNum[62] = 63;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked63 == true){
          
            if(subject63 == "" || content63 == ""){
            
             misContNum[62] = 63;
           
            valid = false; 
                 	
            }  	
                 	
        }
    
         }
  
  
  
  
    
   	    var subject64 = document.getElementById("s64").value;
        var content64 = document.getElementById("c64").value;
        var isVisible64 = document.getElementById("v64").value;
        var checked64 = document.getElementById("checkbox-64").checked;
  
        subject64 = subject64.trim();
        content64 = content64.trim();


  
     if(Number(isVisible64) == 0 ){
        
        if(checked64 == false){
          
            if(subject64 != "" || content64 != ""){
            
             chkNum[63] = 64;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked64 == true){
          
            if(subject64 == "" || content64 == ""){
            
             misContNum[63] = 64;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  
  
  
  
   
    
   	    var subject65 = document.getElementById("s65").value;
        var content65 = document.getElementById("c65").value;
        var isVisible65 = document.getElementById("v65").value;
        var checked65 = document.getElementById("checkbox-65").checked;

        subject5 = subject5.trim();
        content5 = content5.trim();

  
  
    if(Number(isVisible65) == 0 ){
        
        if(checked65 == false){
          
            if(subject65 != "" || content65 != ""){
            
             chkNum[64] = 65;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked65 == true){
          
            if(subject65 == "" || content65 == ""){
            
             misContNum[64] = 65;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  
  
  
      
   	    var subject66 = document.getElementById("s66").value;
        var content66 = document.getElementById("c66").value;
        var isVisible66 = document.getElementById("v66").value;
        var checked66 = document.getElementById("checkbox-66").checked;

        subject66 = subject66.trim();
        content66 = content66.trim();

  
  
   if(Number(isVisible66) == 0 ){
        
        if(checked66 == false){
          
            if(subject66 != "" || content66 != ""){
            
             chkNum[65] = 66;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked66 == true){
          
            if(subject66 == "" || content66 == ""){
            
             misContNum[65] = 66;
           
            valid = false; 
                 	
            }  	
                 	
        }
      
         }
  
  
  
   
      
   	    var subject67 = document.getElementById("s67").value;
        var content67 = document.getElementById("c67").value;
        var isVisible67 = document.getElementById("v67").value;
        var checked67 = document.getElementById("checkbox-67").checked;
  
        subject67 = subject67.trim();
        content67 = content67.trim();


  
   if(Number(isVisible67) == 0 ){
        
        if(checked67 == false){
          
            if(subject67 != "" || content67 != ""){
            
             chkNum[66] = 67;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked67 == true){
          
            if(subject67 == "" || content67 == ""){
            
             misContNum[66] = 67;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
        
   	    var subject68 = document.getElementById("s68").value;
        var content68 = document.getElementById("c68").value;
        var isVisible68 = document.getElementById("v68").value;
        var checked68 = document.getElementById("checkbox-68").checked;
  
        subject68 = subject68.trim();
        content68 = content68.trim();


  
    if(Number(isVisible68) == 0 ){
        
        if(checked68 == false){
          
            if(subject68 != "" || content68 != ""){
            
             chkNum[67] = 68;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked68 == true){
          
            if(subject68 == "" || content68 == ""){
            
             misContNum[67] = 68;
           
            valid = false; 
                 	
            }  	
                 	
        }
           
         }
  
  
     	var subject69 = document.getElementById("s69").value;
        var content69 = document.getElementById("c69").value;
        var isVisible69 = document.getElementById("v69").value;
        var checked69 = document.getElementById("checkbox-69").checked;

        subject69 = subject69.trim();
        content69 = content69.trim();

  
  
     if(Number(isVisible69) == 0 ){
        
        if(checked69 == false){
          
            if(subject69 != "" || content69 != ""){
            
             chkNum[68] = 69;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked69 == true){
          
            if(subject69 == "" || content69 == ""){
            
             misContNum[68] = 69;
           
            valid = false; 
                 	
            }  	
                 	
        }
      
         }
  
  
    
     	var subject70 = document.getElementById("s70").value;
        var content70 = document.getElementById("c70").value;
        var isVisible70 = document.getElementById("v70").value;
        var checked70 = document.getElementById("checkbox-70").checked;
  
        subject70 = subject70.trim();
        content70 = content70.trim();


  
   if(Number(isVisible70) == 0 ){
        
        if(checked70 == false){
          
            if(subject70 != "" || content70 != ""){
            
             chkNum[69] = 70;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked70 == true){
          
            if(subject70 == "" || content70 == ""){
            
             misContNum[69] = 70;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  






	    var subject71 = document.getElementById("s71").value;
        var content71 = document.getElementById("c71").value;
        var isVisible71 = document.getElementById("v71").value;
        var checked71 = document.getElementById("checkbox-71").checked;
  
        subject71 = subject71.trim();
        content71 = content71.trim();
  
  
  
     if(Number(isVisible71) == 0 ){
        
        if(checked71 == false){
          
            if(subject71 != "" || content71 != ""){
            
             chkNum[70] = 71;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked71 == true){
          
            if(subject71 == "" || content71 == ""){
            
             misContNum[70] = 71;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  	    var subject72 = document.getElementById("s72").value;
        var content72 = document.getElementById("c72").value;
        var isVisible72 = document.getElementById("v72").value;
        var checked72 = document.getElementById("checkbox-72").checked;
  
        subject72 = subject72.trim();
        content72 = content72.trim();

  
     if(Number(isVisible72) == 0 ){
        
        if(checked72 == false){
          
            if(subject72 != "" || content72 != ""){
            
             chkNum[71] = 72;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked72 == true){
          
            if(subject72 == "" || content72 == ""){
            
             misContNum[71] = 72;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
    

   	    var subject73 = document.getElementById("s73").value;
        var content73 = document.getElementById("c73").value;
        var isVisible73 = document.getElementById("v73").value;
        var checked73 = document.getElementById("checkbox-73").checked;
  
        subject73 = subject73.trim();
        content73 = content73.trim();

 

   if(Number(isVisible73) == 0){
        
        if(checked73 == false){
          
            if(subject73 != "" || content73 != ""){
            
             chkNum[72] = 73;
           
            valid = false; 
                 	
            }  	
                 	
        }
                   if(checked73 == true){
          
            if(subject73 == "" || content73 == ""){
            
             misContNum[72] = 73;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
  
    
   	    var subject74 = document.getElementById("s74").value;
        var content74 = document.getElementById("c74").value;
        var isVisible74 = document.getElementById("v74").value;
        var checked74 = document.getElementById("checkbox-74").checked;
  
        subject74 = subject74.trim();
        content74 = content74.trim();


  
    if(Number(isVisible74) == 0 ){
        
        if(checked74 == false){
          
            if(subject74 != "" || content74 != ""){
            
             chkNum[73] = 74;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked74 == true){
          
            if(subject74 == "" || content74 == ""){
            
             misContNum[73] = 74;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
  
   
    
   	    var subject75 = document.getElementById("s75").value;
        var content75 = document.getElementById("c75").value;
        var isVisible75 = document.getElementById("v75").value;
        var checked75 = document.getElementById("checkbox-75").checked;

        subject75 = subject75.trim();
        content75 = content75.trim();

  
  
     if(Number(isVisible75) == 0 ){
        
        if(checked75 == false){
          
            if(subject75 != "" || content75 != ""){
            
             chkNum[74] = 75;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked75 == true){
          
            if(subject75 == "" || content75 == ""){
            
             misContNum[74] = 75;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
      
   	    var subject76 = document.getElementById("s76").value;
        var content76 = document.getElementById("c76").value;
        var isVisible76 = document.getElementById("v76").value;
        var checked76 = document.getElementById("checkbox-76").checked;

        subject76 = subject76.trim();
        content76 = content76.trim();

  
  
   if(Number(isVisible76) == 0 ){
        
        if(checked76 == false){
          
            if(subject76 != "" || content76 != ""){
            
             chkNum[75] = 76;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked76 == true){
          
            if(subject76 == "" || content76 == ""){
            
             misContNum[75] = 76;
           
            valid = false; 
                 	
            }  	
                 	
        }
      
         }
  
  
  
   
      
   	    var subject77 = document.getElementById("s77").value;
        var content77 = document.getElementById("c77").value;
        var isVisible77 = document.getElementById("v77").value;
        var checked77 = document.getElementById("checkbox-77").checked;
  
        subject77 = subject77.trim();
        content77 = content77.trim();


  
     if(Number(isVisible77) == 0 ){
        
        if(checked77 == false){
          
            if(subject77 != "" || content77 != ""){
            
             chkNum[76] = 77;
           
            valid = false; 
                 	
            }  	
                 	
        }
                   if(checked77 == true){
          
            if(subject77 == "" || content77 == ""){
            
             misContNum[76] = 77;
           
            valid = false; 
                 	
            }  	
                 	
        }
     
         }
  
  
  
        
   	    var subject78 = document.getElementById("s78").value;
        var content78 = document.getElementById("c78").value;
        var isVisible78 = document.getElementById("v78").value;
        var checked78 = document.getElementById("checkbox-78").checked;
  
        subject78 = subject78.trim();
        content78 = content78.trim();


  
      if(Number(isVisible78) == 0 ){
        
        if(checked78 == false){
          
            if(subject78 != "" || content78 != ""){
            
             chkNum[77] = 78;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked78 == true){
          
            if(subject78 == "" || content78 == ""){
            
             misContNum[77] = 78;
           
            valid = false; 
                 	
            }  	
                 	
        }
     
         }
  
  
     	var subject79 = document.getElementById("s79").value;
        var content79 = document.getElementById("c79").value;
        var isVisible79 = document.getElementById("v79").value;
        var checked79 = document.getElementById("checkbox-79").checked;

        subject79 = subject79.trim();
        content79 = content79.trim();

  
  
     if(Number(isVisible79) == 0 ){
        
        if(checked79 == false){
          
            if(subject79 != "" || content79 != ""){
            
             chkNum[78] = 79;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked79 == true){
          
            if(subject79 == "" || content79 == ""){
            
             misContNum[78] = 79;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
    
     	var subject80 = document.getElementById("s80").value;
        var content80 = document.getElementById("c80").value;
        var isVisible80 = document.getElementById("v80").value;
        var checked80 = document.getElementById("checkbox-80").checked;
  
        subject80 = subject80.trim();
        content80 = content80.trim();


  
     if(Number(isVisible80) == 0 ){
        
        if(checked80 == false){
          
            if(subject80 != "" || content80 != ""){
            
             chkNum[79] = 80;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked80 == true){
          
            if(subject80 == "" || content80 == ""){
            
             misContNum[79] = 80;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
         }
  



	    var subject81 = document.getElementById("s81").value;
        var content81 = document.getElementById("c81").value;
        var isVisible81 = document.getElementById("v81").value;
        var checked81 = document.getElementById("checkbox-81").checked;
  
        subject81 = subject81.trim();
        content81 = content81.trim();
  
  
  
   if(Number(isVisible81) == 0 ){
        
        if(checked81 == false){
          
            if(subject81 != "" || content81 != ""){
            
             chkNum[80] = 81;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked81 == true){
          
            if(subject81 == "" || content81 == ""){
            
             misContNum[80] = 81;
           
            valid = false; 
                 	
            }  	
                 	
        }
      
         }
  
  
  	    var subject82 = document.getElementById("s82").value;
        var content82 = document.getElementById("c82").value;
        var isVisible82 = document.getElementById("v82").value;
        var checked82 = document.getElementById("checkbox-82").checked;
  
        subject82 = subject82.trim();
        content82 = content82.trim();

  
  if(Number(isVisible82) == 0 ){
        
        if(checked82 == false){
          
            if(subject82 != "" || content82 != ""){
            
             chkNum[81] = 82;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked82 == true){
          
            if(subject82 == "" || content82 == ""){
            
             misContNum[81] = 82;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
    

   	    var subject83 = document.getElementById("s83").value;
        var content83 = document.getElementById("c83").value;
        var isVisible83 = document.getElementById("v83").value;
        var checked83 = document.getElementById("checkbox-83").checked;
  
        subject83 = subject83.trim();
        content83 = content83.trim();

  
 if(Number(isVisible83) == 0 ){
        
        if(checked83 == false){
          
            if(subject83 != "" || content83 != ""){
            
             chkNum[82] = 83;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked83 == true){
          
            if(subject83 == "" || content83 == ""){
            
             misContNum[82] = 83;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
         }
  
  
  
  
    
   	    var subject84 = document.getElementById("s84").value;
        var content84 = document.getElementById("c84").value;
        var isVisible84 = document.getElementById("v84").value;
        var checked84 = document.getElementById("checkbox-84").checked;
  
        subject84 = subject84.trim();
        content84 = content84.trim();


  
   if(Number(isVisible84) == 0 ){
        
        if(checked84 == false){
          
            if(subject84 != "" || content84 != ""){
            
             chkNum[83] = 84;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked84 == true){
          
            if(subject84 == "" || content84 == ""){
            
             misContNum[83] = 84;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  
  
  
  
   
    
   	    var subject85 = document.getElementById("s85").value;
        var content85 = document.getElementById("c85").value;
        var isVisible85 = document.getElementById("v85").value;
        var checked85 = document.getElementById("checkbox-85").checked;

        subject85 = subject85.trim();
        content85 = content85.trim();

  
  
 if(Number(isVisible85) == 0 ){
        
        if(checked85 == false){
          
            if(subject85 != "" || content85 != ""){
            
             chkNum[84] = 85;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked85 == true){
          
            if(subject85 == "" || content85 == ""){
            
             misContNum[84] = 85;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
      
   	    var subject86 = document.getElementById("s86").value;
        var content86 = document.getElementById("c86").value;
        var isVisible86 = document.getElementById("v86").value;
        var checked86 = document.getElementById("checkbox-86").checked;

        subject86 = subject86.trim();
        content86 = content86.trim();

  
  
   if(Number(isVisible86) == 0 ){
        
        if(checked86 == false){
          
            if(subject86 != "" || content86 != ""){
            
             chkNum[85] = 86;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked86 == true){
          
            if(subject86 == "" || content86 == ""){
            
             misContNum[85] = 86;
           
            valid = false; 
                 	
            }  	
                 	
        }
      
         }
  
  
  
   
      
   	    var subject87 = document.getElementById("s87").value;
        var content87 = document.getElementById("c87").value;
        var isVisible87 = document.getElementById("v87").value;
        var checked87 = document.getElementById("checkbox-87").checked;
  
        subject87 = subject87.trim();
        content87 = content87.trim();


  
  if(Number(isVisible87) == 0 ){
        
        if(checked87 == false){
          
            if(subject87 != "" || content87 != ""){
            
             chkNum[86] = 87;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked87 == true){
          
            if(subject87 == "" || content87 == ""){
            
             misContNum[86] = 87;
           
            valid = false; 
                 	
            }  	
                 	
        }
            
       
         }
  
  
  
        
   	    var subject88 = document.getElementById("s88").value;
        var content88 = document.getElementById("c88").value;
        var isVisible88 = document.getElementById("v88").value;
        var checked88 = document.getElementById("checkbox-88").checked;
  
        subject88 = subject88.trim();
        content88 = content88.trim();


  
   if(Number(isVisible88) == 0 ){
        
        if(checked88 == false){
          
            if(subject88 != "" || content88 != ""){
            
             chkNum[87] = 88;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked88 == true){
          
            if(subject88 == "" || content88 == ""){
            
             misContNum[87] = 88;
           
            valid = false; 
                 	
            }  	
                 	
        }
          
         }
  
  
     	var subject89 = document.getElementById("s89").value;
        var content89 = document.getElementById("c89").value;
        var isVisible89 = document.getElementById("v89").value;
        var checked89 = document.getElementById("checkbox-89").checked;

        subject89 = subject89.trim();
        content89 = content89.trim();

  
  
 if(Number(isVisible89) == 0 ){
        
        if(checked89 == false){
          
            if(subject89 != "" || content89 != ""){
            
             chkNum[88] = 89;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked89 == true){
          
            if(subject89 == "" || content89 == ""){
            
             misContNum[88] = 89;
           
            valid = false; 
                 	
            }  	
                 	
        }
         
         }
  
  
    
     	var subject90 = document.getElementById("s90").value;
        var content90 = document.getElementById("c90").value;
        var isVisible90 = document.getElementById("v90").value;
        var checked90 = document.getElementById("checkbox-90").checked;
  
        subject90 = subject90.trim();
        content90 = content90.trim();


 if(Number(isVisible90) == 0 ){
        
        if(checked90 == false){
          
            if(subject90 != "" || content90 != ""){
            
             chkNum[89] = 90;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked90 == true){
          
            if(subject90 == "" || content90 == ""){
            
             misContNum[89] = 90;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  







	    var subject91 = document.getElementById("s91").value;
        var content91 = document.getElementById("c91").value;
        var isVisible91 = document.getElementById("v91").value;
        var checked91 = document.getElementById("checkbox-91").checked;
  
        subject91 = subject91.trim();
        content91 = content91.trim();
  
  
  
   if(Number(isVisible91) == 0 ){
        
        if(checked91 == false){
          
            if(subject91 != "" || content91 != ""){
            
             chkNum[90] = 91;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked91 == true){
          
            if(subject91 == "" || content91 == ""){
            
             misContNum[90] = 91;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  	    var subject92 = document.getElementById("s92").value;
        var content92 = document.getElementById("c92").value;
        var isVisible92 = document.getElementById("v92").value;
        var checked92 = document.getElementById("checkbox-92").checked;
  
        subject92 = subject92.trim();
        content92 = content92.trim();

  
   if(Number(isVisible92) == 0 ){
        
        if(checked92 == false){
          
            if(subject92 != "" || content92 != ""){
            
             chkNum[91] = 92;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked92 == true){
          
            if(subject92 == "" || content92 == ""){
            
             misContNum[91] = 92;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
    

   	    var subject93 = document.getElementById("s93").value;
        var content93 = document.getElementById("c93").value;
        var isVisible93 = document.getElementById("v93").value;
        var checked93 = document.getElementById("checkbox-93").checked;
  
        subject93 = subject93.trim();
        content93 = content93.trim();

  
  if(Number(isVisible93) == 0 ){
        
        if(checked93 == false){
          
            if(subject93 != "" || content93 != ""){
            
             chkNum[92] = 93;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked93 == true){
          
            if(subject93 == "" || content93 == ""){
            
             misContNum[92] = 93;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  
  
  
  
    
   	    var subject94 = document.getElementById("s94").value;
        var content94 = document.getElementById("c94").value;
        var isVisible94 = document.getElementById("v94").value;
        var checked94 = document.getElementById("checkbox-94").checked;
  
        subject94 = subject94.trim();
        content94 = content94.trim();


  
   if(Number(isVisible94) == 0 ){
        
        if(checked94 == false){
          
            if(subject94 != "" || content94 != ""){
            
             chkNum[93] = 94;
           
            valid = false; 
                 	
            }  	
                 	
        }
                   
        if(checked94 == true){
          
            if(subject94 == "" || content94 == ""){
            
             misContNum[93] = 94;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
  
   
    
   	    var subject95 = document.getElementById("s95").value;
        var content95 = document.getElementById("c95").value;
        var isVisible95 = document.getElementById("v95").value;
        var checked95 = document.getElementById("checkbox-95").checked;

        subject95 = subject95.trim();
        content95 = content95.trim();

  
  
    if(Number(isVisible95) == 0 ){
        
        if(checked95 == false){
          
            if(subject95 != "" || content95 != ""){
            
             chkNum[94] = 95;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked95 == true){
          
            if(subject95 == "" || content95 == ""){
            
             misContNum[94] = 95;
           
            valid = false; 
                 	
            }  	
                 	
        }
    
            
         }
  
  
  
      
   	    var subject96 = document.getElementById("s96").value;
        var content96 = document.getElementById("c96").value;
        var isVisible96 = document.getElementById("v96").value;
        var checked96 = document.getElementById("checkbox-96").checked;

        subject96 = subject96.trim();
        content96 = content96.trim();

  
  
    if(Number(isVisible96) == 0 ){
        
        if(checked96 == false){
          
            if(subject96 != "" || content96 != ""){
            
             chkNum[95] = 96;
           
            valid = false; 
                 	
            }  	
                 	
        }
                  if(checked96 == true){
          
            if(subject96 == "" || content96 == ""){
            
             misContNum[95] = 96;
           
            valid = false; 
                 	
            }  	
                 	
        }
     
         }
  
  
  
   
      
   	    var subject97 = document.getElementById("s97").value;
        var content97 = document.getElementById("c97").value;
        var isVisible97 = document.getElementById("v97").value;
        var checked97 = document.getElementById("checkbox-97").checked;
  
        subject97 = subject97.trim();
        content97 = content97.trim();


  
  if(Number(isVisible97) == 0 ){
        
        if(checked97 == false){
          
            if(subject97 != "" || content97 != ""){
            
             chkNum[96] = 97;
           
            valid = false; 
                 	
            }  	
                 	
        }
                if(checked97 == true){
          
            if(subject97 == "" || content97 == ""){
            
             misContNum[96] = 97;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
  
        
   	    var subject98 = document.getElementById("s98").value;
        var content98 = document.getElementById("c98").value;
        var isVisible98 = document.getElementById("v98").value;
        var checked98 = document.getElementById("checkbox-98").checked;
  
        subject98 = subject98.trim();
        content98 = content98.trim();


  
  if(Number(isVisible98) == 0 ){
        
        if(checked98 == false){
          
            if(subject98 != "" || content98 != ""){
            
             chkNum[97] = 98;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked98 == true){
          
            if(subject98 == "" || content98 == ""){
            
             misContNum[97] = 98;
           
            valid = false; 
                 	
            }  	
                 	
        }
       
         }
  
  
     	var subject99 = document.getElementById("s99").value;
        var content99 = document.getElementById("c99").value;
        var isVisible99 = document.getElementById("v99").value;
        var checked99 = document.getElementById("checkbox-99").checked;

        subject99 = subject99.trim();
        content99 = content99.trim();

  
  
  if(Number(isVisible99) == 0 ){
        
        if(checked99 == false){
          
            if(subject99 != "" || content99 != ""){
            
             chkNum[98] = 99;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked99 == true){
          
            if(subject99 == "" || content99 == ""){
            
             misContNum[98] = 99;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  
  
    
     	var subject100 = document.getElementById("s100").value;
        var content100 = document.getElementById("c100").value;
        var isVisible100 = document.getElementById("v100").value;
        var checked100 = document.getElementById("checkbox-100").checked;
  
        subject100 = subject100.trim();
        content100 = content100.trim();


  
  if(Number(isVisible100) == 0 ){
        
        if(checked100 == false){
          
            if(subject100 != "" || content100 != ""){
            
             chkNum[99] = 100;
           
            valid = false; 
                 	
            }  	
                 	
        }
                 if(checked100 == true){
          
            if(subject100 == "" || content100 == ""){
            
             misContNum[99] = 100;
           
            valid = false; 
                 	
            }  	
                 	
        }
        
         }
  




  
  
var count = false; 
var chkAll = "";


if(chkNum[0] >= 1){

 chkAll =  chkAll.concat("#1 ");    

    count = true;
}  
  
if(chkNum[1] >= 1){
     chkAll =  chkAll.concat("#2 ");    

    count = true;
}  
  
if(chkNum[2] >= 1){
 chkAll =  chkAll.concat("#3 ");    

    count = true;
}  


if(chkNum[3] >= 1){
 chkAll =  chkAll.concat("#4 ");    

    count = true;
}  

if(chkNum[4] >= 1){
  chkAll =  chkAll.concat("#5 ");    

    count = true;
}  

if(chkNum[5] >= 1){
    chkAll =  chkAll.concat("#6 ");    

    count = true;
}  

if(chkNum[6] >= 1){
  chkAll =  chkAll.concat("#7 ");    

    count = true;
}  

if(chkNum[7] >= 1){
    chkAll =  chkAll.concat("#8 ");    

    count = true;
}  

if(chkNum[8] >= 1){
     chkAll =  chkAll.concat("#9 ");    

    count = true;
}  
  
if(chkNum[9] >= 1){
    chkAll =  chkAll.concat("#10 ");    

    count = true;
}  
  


if(chkNum[10] >= 1){
       chkAll =  chkAll.concat("#11 "); 
    count = true;
}  
  
if(chkNum[11] >= 1){
      chkAll =  chkAll.concat("#12 ");
    count = true;
}  
  
if(chkNum[12] >= 1){
      chkAll =  chkAll.concat("#13 ");
    count = true;
}  


if(chkNum[13] >= 1){
  chkAll =  chkAll.concat("#14 ");
    count = true;
}  

if(chkNum[14] >= 1){
  chkAll =  chkAll.concat("#15 ");
    count = true;
}  

if(chkNum[15] >= 1){
    chkAll =  chkAll.concat("#16 ");
    count = true;
}  

if(chkNum[16] >= 1){
     chkAll =  chkAll.concat("#17 ");
    count = true;
}  

if(chkNum[17] >= 1){
    chkAll =  chkAll.concat("#18 ");
    count = true;
}  

if(chkNum[18] >= 1){
      chkAll =  chkAll.concat("#19 ");
    count = true;
}  
  
if(chkNum[19] >= 1){
      chkAll =  chkAll.concat("#20 ");
    count = true;
}  



if(chkNum[20] >= 1){
      chkAll =  chkAll.concat("#21 ");
    count = true;
}  
  
if(chkNum[21] >= 1){
      chkAll =  chkAll.concat("#22 ");
    count = true;
}  
  
if(chkNum[22] >= 1){
      chkAll =  chkAll.concat("#23 ");
    count = true;
}  


if(chkNum[23] >= 1){
      chkAll =  chkAll.concat("#24 ");
    count = true;
}  

if(chkNum[24] >= 1){
       chkAll =  chkAll.concat("#25 ");
    count = true;
}  

if(chkNum[25] >= 1){
     chkAll =  chkAll.concat("#26 ");
    count = true;
}  

if(chkNum[26] >= 1){
       chkAll =  chkAll.concat("#27 ");
    count = true;
}  

if(chkNum[27] >= 1){
     chkAll =  chkAll.concat("#28 ");
    count = true;
}  

if(chkNum[28] >= 1){
      chkAll =  chkAll.concat("#29 ");
    count = true;
}  
  
if(chkNum[29] >= 1){
    chkAll =  chkAll.concat("#30 ");
    count = true;
}  



if(chkNum[30] >= 1){
   chkAll =  chkAll.concat("#31 ");
    count = true;
}  
  
if(chkNum[31] >= 1){
   chkAll =  chkAll.concat("#32 ");
    count = true;
}  
  
if(chkNum[32] >= 1){
   chkAll =  chkAll.concat("#33 ");
    count = true;
}  


if(chkNum[33] >= 1){
   chkAll =  chkAll.concat("#34 ");
    count = true;
}  

if(chkNum[34] >= 1){
   chkAll =  chkAll.concat("#35 ");
    count = true;
}  

if(chkNum[35] >= 1){
    chkAll =  chkAll.concat("#36 ");
    count = true;
}  

if(chkNum[36] >= 1){
   chkAll =  chkAll.concat("#37 ");
    count = true;
}  

if(chkNum[37] >= 1){
  chkAll =  chkAll.concat("#38 ");
    count = true;
}  

if(chkNum[38] >= 1){
    chkAll =  chkAll.concat("#39 ");
    count = true;
}  
  
if(chkNum[39] >= 1){
   chkAll =  chkAll.concat("#40 ");
    count = true;
}  



if(chkNum[40] >= 1){
      chkAll =  chkAll.concat("#41 ");
    count = true;
}  
  
if(chkNum[41] >= 1){
     chkAll =  chkAll.concat("#42 ");
    count = true;
}  
  
if(chkNum[42] >= 1){
     chkAll =  chkAll.concat("#43 ");
    count = true;
}  


if(chkNum[43] >= 1){
    chkAll =  chkAll.concat("#44 ");
    count = true;
}  

if(chkNum[44] >= 1){
     chkAll =  chkAll.concat("#45 ");
    count = true;
}  

if(chkNum[45] >= 1){
     chkAll =  chkAll.concat("#46 ");
    count = true;
}  

if(chkNum[46] >= 1){
    chkAll =  chkAll.concat("#47 ");
    count = 1;
}  

if(chkNum[47] >= 1){
      chkAll =  chkAll.concat("#48 ");
    count = true;
}  

if(chkNum[48] >= 1){
   chkAll =  chkAll.concat("#49 ");
    count = true;
}  
  
if(chkNum[49] >= 1){
  chkAll =  chkAll.concat("#50 ");
    count = true;
}  



if(chkNum[50] >= 1){
  chkAll =  chkAll.concat("#51 ");
    count = true;
}  
  
if(chkNum[51] >= 1){
    chkAll =  chkAll.concat("#52 ");
    count = true;
}  
  
if(chkNum[52] >= 1){
    chkAll =  chkAll.concat("#53 ");
    count = true;
}  


if(chkNum[53] >= 1){
    chkAll =  chkAll.concat("#54 ");
    count = true;
}  

if(chkNum[54] >= 1){
     chkAll =  chkAll.concat("#55 ");
    count = true;
}  

if(chkNum[55] >= 1){
   chkAll =  chkAll.concat("#56 ");
    count = true;
}  

if(chkNum[56] >= 1){
    chkAll =  chkAll.concat("#57 ");
    count = true;
}  

if(chkNum[57] >= 1){
    chkAll =  chkAll.concat("#58 ");
    count = true;
}  

if(chkNum[58] >= 1){
   chkAll =  chkAll.concat("#59 ");
    count = true;
}  
  
if(chkNum[59] >= 1){
   chkAll =  chkAll.concat("#60 ");
    count = true;
}  



if(chkNum[60] >= 1){
     chkAll =  chkAll.concat("#61 ");
    count = true;
}  
  
if(chkNum[61] >= 1){
   chkAll =  chkAll.concat("#62 ");
    count = true;
}  
  
if(chkNum[62] >= 1){
      chkAll =  chkAll.concat("#63 ");
    count = true;
}  


if(chkNum[63] >= 1){
     chkAll =  chkAll.concat("#64 ");
    count = true;
}  

if(chkNum[64] >= 1){
     chkAll =  chkAll.concat("#65 ");
    count = true;
}  

if(chkNum[65] >= 1){
     chkAll =  chkAll.concat("#66 ");
    count = true;
}  

if(chkNum[66] >= 1){
   chkAll =  chkAll.concat("#67 ");
    count = true;
}  

if(chkNum[67] >= 1){
   chkAll =  chkAll.concat("#68 ");
    count = true;
}  

if(chkNum[68] >= 1){
    chkAll =  chkAll.concat("#69 ");
    count = true;
}  
  
if(chkNum[69] >= 1){
   chkAll =  chkAll.concat("#70 ");
    count = true;
}  



if(chkNum[70] >= 1){
  chkAll =  chkAll.concat("#71 ");
    count = true;
}  
  
if(chkNum[71] >= 1){
   chkAll =  chkAll.concat("#72 ");
    count = true;
}  
  
if(chkNum[72] >= 1){
    chkAll =  chkAll.concat("#73 ");
    count = true;
}  


if(chkNum[73] >= 1){
   chkAll =  chkAll.concat("#74 ");
    count = true;
}  

if(chkNum[74] >= 1){
  chkAll =  chkAll.concat("#75 ");
    count = true;
}  

if(chkNum[75] >= 1){
  chkAll =  chkAll.concat("#76 ");
    count = true;
}  

if(chkNum[76] >= 1){
     chkAll =  chkAll.concat("#77 ");
    count = true;
}  

if(chkNum[77] >= 1){
  chkAll =  chkAll.concat("#78 ");
    count = true;
}  

if(chkNum[78] >= 1){
  chkAll =  chkAll.concat("#79 ");
    count = true;
}  
  
if(chkNum[79] >= 1){
   chkAll =  chkAll.concat("#80 ");
    count = true;
}  




if(chkNum[80] >= 1){
   chkAll =  chkAll.concat("#81 ");
    count = true;
}  
  
if(chkNum[81] >= 1){
  chkAll =  chkAll.concat("#82 ");
    count = true;
}  
  
if(chkNum[82] >= 1){
   chkAll =  chkAll.concat("#83 ");
    count = true;
}  


if(chkNum[83] >= 1){
    chkAll =  chkAll.concat("#84 ");
    count = true;
}  

if(chkNum[84] >= 1){
  chkAll =  chkAll.concat("#85 ");
    count = true;
}  

if(chkNum[85] >= 1){
    chkAll =  chkAll.concat("#86 ");
    count = true;
}  

if(chkNum[86] >= 1){
     chkAll =  chkAll.concat("#87 ");
    count = true;
}  

if(chkNum[87] >= 1){
     chkAll =  chkAll.concat("#88 ");
    count = true;
}  

if(chkNum[88] >= 1){
     chkAll =  chkAll.concat("#89 ");
    count = true;
}  
  
if(chkNum[89] >= 1){
   chkAll =  chkAll.concat("#90 ");
    count = true;
}  




if(chkNum[90] >= 1){
  chkAll =  chkAll.concat("#91 ");
    count = true;
}  
  
if(chkNum[91] >= 1){
 chkAll =  chkAll.concat("#92 ");
    count = true;
}  
  
if(chkNum[92] >= 1){
 chkAll =  chkAll.concat("#93 ");
    count = true;
}  


if(chkNum[93] >= 1){
 chkAll =  chkAll.concat("#94 ");
    count = true;
}  

if(chkNum[94] >= 1){
   chkAll =  chkAll.concat("#95 ");
    count = true;
}  

if(chkNum[95] >= 1){
chkAll =  chkAll.concat("#96 ");
    count = true;
}  

if(chkNum[96] >= 1){
  chkAll =  chkAll.concat("#97 ");
    count = true;
}  

if(chkNum[97] >= 1){
 chkAll =  chkAll.concat("#98 ");
    count = true;
}  

if(chkNum[98] >= 1){
   chkAll =  chkAll.concat("#99 ");
    count = true;
}  
  
if(chkNum[99] >= 1){
   chkAll =  chkAll.concat("#100 ");
    count = true;
}  


        if(count){
            
        var msg = plsChk.concat(chkAll);

        document.getElementById("content_status").innerHTML = msg;
        document.getElementById("content_status").style.color = "lightcoral";
        document.getElementById("content_status").style.fontSize = "14px";
        
        
            
        }
  


  
var miscount = false; 
var misContAll = "";



if(misContNum[0] >= 1){

 misContAll =  misContAll.concat("#1 ");    

    miscount= true;
}  
  
if(misContNum[1] >= 1){
     misContAll =  misContAll.concat("#2 ");    

    miscount= true;
}  
  
if(misContNum[2] >= 1){
 misContAll =  misContAll.concat("#3 ");    

    miscount= true;
}  


if(misContNum[3] >= 1){
 misContAll =  misContAll.concat("#4 ");    

    miscount= true;
}  

if(misContNum[4] >= 1){
  misContAll =  misContAll.concat("#5 ");    

    miscount= true;
}  

if(misContNum[5] >= 1){
    misContAll =  misContAll.concat("#6 ");    

    miscount= true;
}  

if(misContNum[6] >= 1){
  misContAll =  misContAll.concat("#7 ");    

    miscount= true;
}  

if(misContNum[7] >= 1){
    misContAll =  misContAll.concat("#8 ");    

    miscount= true;
}  

if(misContNum[8] >= 1){
     misContAll =  misContAll.concat("#9 ");    

    miscount= true;
}  
  
if(misContNum[9] >= 1){
    misContAll =  misContAll.concat("#10 ");    

    miscount= true;
}  
  


if(misContNum[10] >= 1){
       misContAll =  misContAll.concat("#11 "); 
    miscount= true;
}  
  
if(misContNum[11] >= 1){
      misContAll =  misContAll.concat("#12 ");
    miscount= true;
}  
  
if(misContNum[12] >= 1){
      misContAll =  misContAll.concat("#13 ");
    miscount= true;
}  


if(misContNum[13] >= 1){
  misContAll =  misContAll.concat("#14 ");
    miscount= true;
}  

if(misContNum[14] >= 1){
  misContAll =  misContAll.concat("#15 ");
    miscount= true;
}  

if(misContNum[15] >= 1){
    misContAll =  misContAll.concat("#16 ");
    miscount= true;
}  

if(misContNum[16] >= 1){
     misContAll =  misContAll.concat("#17 ");
    miscount= true;
}  

if(misContNum[17] >= 1){
    misContAll =  misContAll.concat("#18 ");
    miscount= true;
}  

if(misContNum[18] >= 1){
      misContAll =  misContAll.concat("#19 ");
    miscount= true;
}  
  
if(misContNum[19] >= 1){
      misContAll =  misContAll.concat("#20 ");
    miscount= true;
}  



if(misContNum[20] >= 1){
      misContAll =  misContAll.concat("#21 ");
    miscount= true;
}  
  
if(misContNum[21] >= 1){
      misContAll =  misContAll.concat("#22 ");
    miscount= true;
}  
  
if(misContNum[22] >= 1){
      misContAll =  misContAll.concat("#23 ");
    miscount= true;
}  


if(misContNum[23] >= 1){
      misContAll =  misContAll.concat("#24 ");
    miscount= true;
}  

if(misContNum[24] >= 1){
       misContAll =  misContAll.concat("#25 ");
    miscount= true;
}  

if(misContNum[25] >= 1){
     misContAll =  misContAll.concat("#26 ");
    miscount= true;
}  

if(misContNum[26] >= 1){
       misContAll =  misContAll.concat("#27 ");
    miscount= true;
}  

if(misContNum[27] >= 1){
     misContAll =  misContAll.concat("#28 ");
    miscount= true;
}  

if(misContNum[28] >= 1){
      misContAll =  misContAll.concat("#29 ");
    miscount= true;
}  
  
if(misContNum[29] >= 1){
    misContAll =  misContAll.concat("#30 ");
    miscount= true;
}  



if(misContNum[30] >= 1){
   misContAll =  misContAll.concat("#31 ");
    miscount= true;
}  
  
if(misContNum[31] >= 1){
   misContAll =  misContAll.concat("#32 ");
    miscount= true;
}  
  
if(misContNum[32] >= 1){
   misContAll =  misContAll.concat("#33 ");
    miscount= true;
}  


if(misContNum[33] >= 1){
   misContAll =  misContAll.concat("#34 ");
    miscount= true;
}  

if(misContNum[34] >= 1){
   misContAll =  misContAll.concat("#35 ");
    miscount= true;
}  

if(misContNum[35] >= 1){
    misContAll =  misContAll.concat("#36 ");
    miscount= true;
}  

if(misContNum[36] >= 1){
   misContAll =  misContAll.concat("#37 ");
    miscount= true;
}  

if(misContNum[37] >= 1){
  misContAll =  misContAll.concat("#38 ");
    miscount= true;
}  

if(misContNum[38] >= 1){
    misContAll =  misContAll.concat("#39 ");
    miscount= true;
}  
  
if(misContNum[39] >= 1){
   misContAll =  misContAll.concat("#40 ");
    miscount= true;
}  



if(misContNum[40] >= 1){
      misContAll =  misContAll.concat("#41 ");
    miscount= true;
}  
  
if(misContNum[41] >= 1){
     misContAll =  misContAll.concat("#42 ");
    miscount= true;
}  
  
if(misContNum[42] >= 1){
     misContAll =  misContAll.concat("#43 ");
    miscount= true;
}  


if(misContNum[43] >= 1){
    misContAll =  misContAll.concat("#44 ");
    miscount= true;
}  

if(misContNum[44] >= 1){
     misContAll =  misContAll.concat("#45 ");
    miscount= true;
}  

if(misContNum[45] >= 1){
     misContAll =  misContAll.concat("#46 ");
    miscount= true;
}  

if(misContNum[46] >= 1){
    misContAll =  misContAll.concat("#47 ");
    miscount= 1;
}  

if(misContNum[47] >= 1){
      misContAll =  misContAll.concat("#48 ");
    miscount= true;
}  

if(misContNum[48] >= 1){
   misContAll =  misContAll.concat("#49 ");
    miscount= true;
}  
  
if(misContNum[49] >= 1){
  misContAll =  misContAll.concat("#50 ");
    miscount= true;
}  



if(misContNum[50] >= 1){
  misContAll =  misContAll.concat("#51 ");
    miscount= true;
}  
  
if(misContNum[51] >= 1){
    misContAll =  misContAll.concat("#52 ");
    miscount= true;
}  
  
if(misContNum[52] >= 1){
    misContAll =  misContAll.concat("#53 ");
    miscount= true;
}  


if(misContNum[53] >= 1){
    misContAll =  misContAll.concat("#54 ");
    miscount= true;
}  

if(misContNum[54] >= 1){
     misContAll =  misContAll.concat("#55 ");
    miscount= true;
}  

if(misContNum[55] >= 1){
   misContAll =  misContAll.concat("#56 ");
    miscount= true;
}  

if(misContNum[56] >= 1){
    misContAll =  misContAll.concat("#57 ");
    miscount= true;
}  

if(misContNum[57] >= 1){
    misContAll =  misContAll.concat("#58 ");
    miscount= true;
}  

if(misContNum[58] >= 1){
   misContAll =  misContAll.concat("#59 ");
    miscount= true;
}  
  
if(misContNum[59] >= 1){
   misContAll =  misContAll.concat("#60 ");
    miscount= true;
}  



if(misContNum[60] >= 1){
     misContAll =  misContAll.concat("#61 ");
    miscount= true;
}  
  
if(misContNum[61] >= 1){
   misContAll =  misContAll.concat("#62 ");
    miscount= true;
}  
  
if(misContNum[62] >= 1){
      misContAll =  misContAll.concat("#63 ");
    miscount= true;
}  


if(misContNum[63] >= 1){
     misContAll =  misContAll.concat("#64 ");
    miscount= true;
}  

if(misContNum[64] >= 1){
     misContAll =  misContAll.concat("#65 ");
    miscount= true;
}  

if(misContNum[65] >= 1){
     misContAll =  misContAll.concat("#66 ");
    miscount= true;
}  

if(misContNum[66] >= 1){
   misContAll =  misContAll.concat("#67 ");
    miscount= true;
}  

if(misContNum[67] >= 1){
   misContAll =  misContAll.concat("#68 ");
    miscount= true;
}  

if(misContNum[68] >= 1){
    misContAll =  misContAll.concat("#69 ");
    miscount= true;
}  
  
if(misContNum[69] >= 1){
   misContAll =  misContAll.concat("#70 ");
    miscount= true;
}  



if(misContNum[70] >= 1){
  misContAll =  misContAll.concat("#71 ");
    miscount= true;
}  
  
if(misContNum[71] >= 1){
   misContAll =  misContAll.concat("#72 ");
    miscount= true;
}  
  
if(misContNum[72] >= 1){
    misContAll =  misContAll.concat("#73 ");
    miscount= true;
}  


if(misContNum[73] >= 1){
   misContAll =  misContAll.concat("#74 ");
    miscount= true;
}  

if(misContNum[74] >= 1){
  misContAll =  misContAll.concat("#75 ");
    miscount= true;
}  

if(misContNum[75] >= 1){
  misContAll =  misContAll.concat("#76 ");
    miscount= true;
}  

if(misContNum[76] >= 1){
     misContAll =  misContAll.concat("#77 ");
    miscount= true;
}  

if(misContNum[77] >= 1){
  misContAll =  misContAll.concat("#78 ");
    miscount= true;
}  

if(misContNum[78] >= 1){
  misContAll =  misContAll.concat("#79 ");
    miscount= true;
}  
  
if(misContNum[79] >= 1){
   misContAll =  misContAll.concat("#80 ");
    miscount= true;
}  




if(misContNum[80] >= 1){
   misContAll =  misContAll.concat("#81 ");
    miscount= true;
}  
  
if(misContNum[81] >= 1){
  misContAll =  misContAll.concat("#82 ");
    miscount= true;
}  
  
if(misContNum[82] >= 1){
   misContAll =  misContAll.concat("#83 ");
    miscount= true;
}  


if(misContNum[83] >= 1){
    misContAll =  misContAll.concat("#84 ");
    miscount= true;
}  

if(misContNum[84] >= 1){
  misContAll =  misContAll.concat("#85 ");
    miscount= true;
}  

if(misContNum[85] >= 1){
    misContAll =  misContAll.concat("#86 ");
    miscount= true;
}  

if(misContNum[86] >= 1){
     misContAll =  misContAll.concat("#87 ");
    miscount= true;
}  

if(misContNum[87] >= 1){
     misContAll =  misContAll.concat("#88 ");
    miscount= true;
}  

if(misContNum[88] >= 1){
     misContAll =  misContAll.concat("#89 ");
    miscount= true;
}  
  
if(misContNum[89] >= 1){
   misContAll =  misContAll.concat("#90 ");
    miscount= true;
}  




if(misContNum[90] >= 1){
  misContAll =  misContAll.concat("#91 ");
    miscount= true;
}  
  
if(misContNum[91] >= 1){
 misContAll =  misContAll.concat("#92 ");
    miscount= true;
}  
  
if(misContNum[92] >= 1){
 misContAll =  misContAll.concat("#93 ");
    miscount= true;
}  


if(misContNum[93] >= 1){
 misContAll =  misContAll.concat("#94 ");
    miscount= true;
}  

if(misContNum[94] >= 1){
   misContAll =  misContAll.concat("#95 ");
    miscount= true;
}  

if(misContNum[95] >= 1){
misContAll =  misContAll.concat("#96 ");
    miscount= true;
}  

if(misContNum[96] >= 1){
  misContAll =  misContAll.concat("#97 ");
    miscount= true;
}  

if(misContNum[97] >= 1){
 misContAll =  misContAll.concat("#98 ");
    miscount= true;
}  

if(misContNum[98] >= 1){
   misContAll =  misContAll.concat("#99 ");
    miscount= true;
}  
  
if(misContNum[99] >= 1){
   misContAll =  misContAll.concat("#100 ");
    miscount= true;
}  


        if(miscount){
            
        var misContmsg = misCont.concat(misContAll); 

        document.getElementById("mail-status").innerHTML = misContmsg;
        document.getElementById("mail-status").style.color = "lightcoral";
        document.getElementById("mail-status").style.fontSize = "14px";
        
        
            
        }
  








 
         
	return valid;
}

});






$(document).ready( function() {
    $('#accordion').accordion({
        collapsible:true,
        beforeActivate: function(event, ui) {
             // The accordion believes a panel is being opened
            if (ui.newHeader[0]) {
                var currHeader  = ui.newHeader;
                var currContent = currHeader.next('.ui-accordion-content');
             // The accordion believes a panel is being closed
            } else {
                var currHeader  = ui.oldHeader;
                var currContent = currHeader.next('.ui-accordion-content');
            }
             // Since we've changed the default behavior, this detects the actual status
            var isPanelSelected = currHeader.attr('aria-selected') == 'true';
            
             // Toggle the panel's header
            currHeader.toggleClass('ui-corner-all',isPanelSelected).toggleClass('accordion-header-active ui-state-active ui-corner-top',!isPanelSelected).attr('aria-selected',((!isPanelSelected).toString()));
            
            // Toggle the panel's icon
            currHeader.children('.ui-icon').toggleClass('ui-icon-triangle-1-e',isPanelSelected).toggleClass('ui-icon-triangle-1-s',!isPanelSelected);
            
             // Toggle the panel's content
            currContent.toggleClass('accordion-content-active',!isPanelSelected)    
            if (isPanelSelected) { currContent.slideUp(); }  else { currContent.slideDown(); }

            return false; // Cancels the default action
        }
    });
});






</script>



 
 <script>
function tfs_chk1(){
    


  var subject1 = document.getElementById("s1").value;
  var content1 = document.getElementById("c1").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject1 = subject1.trim();
    content1 = content1.trim();
    
     if(subject1 == "" || content1 == ""){
       var checked1 = document.getElementById("checkbox-1").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 1: missing content";


// The condition of either the subject or the content being missing and the
// checkbox is on can never occur.  In order for this condition to have
// occured there would have had to have needed to be a previous condition
// where subject and the content were both not missing and thus a "1"
// would have been added to the total.  So this then must be a special
// case where the  subject or content is being remove or made blank after
// it would have before or previously had valid entry... this is why then
//  we need to minus -1 



      
     	if(checked1 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-1").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked1 = document.getElementById("checkbox-1").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked1){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked1 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk2(){
    


  var subject2 = document.getElementById("s2").value;
  var content2 = document.getElementById("c2").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject2 = subject2.trim();
    content2 = content2.trim();
  
    if(subject2 == "" || content2 == ""){
        content_missing_flag = false;
       var checked2 = document.getElementById("checkbox-2").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 2: missing content";
     
     	if(checked2 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-2").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked2 = document.getElementById("checkbox-2").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked2){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked2 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk3(){
    


  var subject3 = document.getElementById("s3").value;
  var content3 = document.getElementById("c3").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject3 = subject3.trim();
    content3 = content3.trim();
  
    if(subject3 == "" || content3 == ""){
        content_missing_flag = false;
        var checked3 = document.getElementById("checkbox-3").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 3: missing content";
     
     	if(checked3 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-3").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked3 = document.getElementById("checkbox-3").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked3){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked3 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk4(){
    


  var subject4 = document.getElementById("s4").value;
  var content4 = document.getElementById("c4").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject4 = subject4.trim();
    content4 = content4.trim();
  
    if(subject4 == "" || content4 == ""){
        content_missing_flag = false;
        var checked4 = document.getElementById("checkbox-4").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 4: missing content";
     
     	if(checked4 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-4").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked4 = document.getElementById("checkbox-4").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked4){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked4 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk5(){
    


  var subject5 = document.getElementById("s5").value;
  var content5 = document.getElementById("c5").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject5 = subject5.trim();
    content5 = content5.trim();
  
    if(subject5 == "" || content5 == ""){
        content_missing_flag = false;
        var checked5 = document.getElementById("checkbox-5").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 5: missing content";
     
     	if(checked5 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-5").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked5 = document.getElementById("checkbox-5").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked5){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked5 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk6(){
    


  var subject6 = document.getElementById("s6").value;
  var content6 = document.getElementById("c6").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject6 = subject6.trim();
    content6 = content6.trim();
  
    if(subject6 == "" || content6 == ""){
        content_missing_flag = false;
        var checked6 = document.getElementById("checkbox-6").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 6: missing content";
     
     	if(checked6 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-6").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked6 = document.getElementById("checkbox-6").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked6){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked6 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk7(){
    


  var subject7 = document.getElementById("s7").value;
  var content7 = document.getElementById("c7").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject7 = subject7.trim();
    content7 = content7.trim();
  
    if(subject7 == "" || content7 == ""){
        content_missing_flag = false;
        var checked7 = document.getElementById("checkbox-7").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 7: missing content";
     
     	if(checked7 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-7").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked7 = document.getElementById("checkbox-7").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked7 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked7 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk8(){
    


  var subject8 = document.getElementById("s8").value;
  var content8 = document.getElementById("c8").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject8 = subject8.trim();
    content8 = content8.trim();
  
    if(subject8 == "" || content8 == ""){
        content_missing_flag = false;
        var checked8 = document.getElementById("checkbox-8").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 8: missing content";
     
     	if(checked8 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-8").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked8 = document.getElementById("checkbox-8").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked8){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked8 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk9(){
    


  var subject9 = document.getElementById("s9").value;
  var content9 = document.getElementById("c9").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject9 = subject9.trim();
    content9 = content9.trim();
  
    if(subject9 == "" || content9 == ""){
        content_missing_flag = false;
        var checked9 = document.getElementById("checkbox-9").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 9: missing content";
     
     	if(checked9 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-9").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked9 = document.getElementById("checkbox-9").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked9){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked9 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk10(){
    


  var subject10 = document.getElementById("s10").value;
  var content10 = document.getElementById("c10").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject10 = subject10.trim();
    content10 = content10.trim();
  
    if(subject10 == "" || content10 == ""){
        content_missing_flag = false;
        var checked10 = document.getElementById("checkbox-10").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 10: missing content";
     
     	if(checked10 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-10").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked10 = document.getElementById("checkbox-10").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked10){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked10 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>



 
 <script>
function tfs_chk11(){
    


  var subject11 = document.getElementById("s11").value;
  var content11 = document.getElementById("c11").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject11 = subject11.trim();
    content11 = content11.trim();
    
     if(subject11 == "" || content11 == ""){
       var checked11 = document.getElementById("checkbox-11").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 11: missing content";
      
     	if(checked11 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-11").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked11 = document.getElementById("checkbox-11").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked11){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked11 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk12(){
    


  var subject12 = document.getElementById("s12").value;
  var content12 = document.getElementById("c12").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject12 = subject12.trim();
    content12 = content12.trim();
  
    if(subject12 == "" || content12 == ""){
        content_missing_flag = false;
       var checked12 = document.getElementById("checkbox-12").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 12: missing content";
     
     	if(checked12 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-12").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked12 = document.getElementById("checkbox-12").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked12){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked12 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk13(){
    


  var subject13 = document.getElementById("s13").value;
  var content13 = document.getElementById("c13").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject13 = subject13.trim();
    content13 = content13.trim();
  
    if(subject13 == "" || content13 == ""){
        content_missing_flag = false;
        var checked13 = document.getElementById("checkbox-13").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 13: missing content";
     
     	if(checked13 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-13").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked13 = document.getElementById("checkbox-13").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked13){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked13 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk14(){
    


  var subject14 = document.getElementById("s14").value;
  var content14 = document.getElementById("c14").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject14 = subject14.trim();
    content14 = content14.trim();
  
    if(subject14 == "" || content14 == ""){
        content_missing_flag = false;
        var checked14 = document.getElementById("checkbox-14").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 14: missing content";
     
     	if(checked14 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-14").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked14 = document.getElementById("checkbox-14").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked14){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked14 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk15(){
    


  var subject15 = document.getElementById("s15").value;
  var content15 = document.getElementById("c15").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject15 = subject15.trim();
    content15 = content15.trim();
  
    if(subject15 == "" || content15 == ""){
        content_missing_flag = false;
        var checked15 = document.getElementById("checkbox-15").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 15: missing content";
     
     	if(checked15 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-15").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked15 = document.getElementById("checkbox-15").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked15){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked15 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk16(){
    


  var subject16 = document.getElementById("s16").value;
  var content16 = document.getElementById("c16").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject16 = subject16.trim();
    content16 = content16.trim();
  
    if(subject16 == "" || content16 == ""){
        content_missing_flag = false;
        var checked16 = document.getElementById("checkbox-16").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 16: missing content";
     
     	if(checked16 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-16").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked16 = document.getElementById("checkbox-16").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked16){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked16 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk17(){
    


  var subject17 = document.getElementById("s17").value;
  var content17 = document.getElementById("c17").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject17 = subject17.trim();
    content17 = content17.trim();
  
    if(subject17 == "" || content17 == ""){
        content_missing_flag = false;
        var checked17 = document.getElementById("checkbox-17").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 17: missing content";
     
     	if(checked17 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-17").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked17 = document.getElementById("checkbox-17").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked17 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked17 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk18(){
    


  var subject18 = document.getElementById("s18").value;
  var content18 = document.getElementById("c18").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject18 = subject18.trim();
    content18 = content18.trim();
  
    if(subject18 == "" || content18 == ""){
        content_missing_flag = false;
        var checked18 = document.getElementById("checkbox-18").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 18: missing content";
     
     	if(checked18 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-18").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked18 = document.getElementById("checkbox-18").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked18){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked18 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk19(){
    


  var subject19 = document.getElementById("s19").value;
  var content19 = document.getElementById("c19").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject19 = subject19.trim();
    content19 = content19.trim();
  
    if(subject19 == "" || content19 == ""){
        content_missing_flag = false;
        var checked19 = document.getElementById("checkbox-19").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 19: missing content";
     
     	if(checked19 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-19").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked19 = document.getElementById("checkbox-19").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked19){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked19 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk20(){
    


  var subject20 = document.getElementById("s20").value;
  var content20 = document.getElementById("c20").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject20 = subject20.trim();
    content20 = content20.trim();
  
    if(subject20 == "" || content20 == ""){
        content_missing_flag = false;
        var checked20 = document.getElementById("checkbox-20").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 20: missing content";
     
     	if(checked20 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-20").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked20 = document.getElementById("checkbox-20").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked20){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked20 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk21(){
    


  var subject21 = document.getElementById("s21").value;
  var content21 = document.getElementById("c21").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject21 = subject21.trim();
    content21 = content21.trim();
    
     if(subject21 == "" || content21 == ""){
       var checked21 = document.getElementById("checkbox-21").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 21: missing content";
      
     	if(checked21 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-21").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked21 = document.getElementById("checkbox-21").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked21){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked21 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk22(){
    


  var subject22 = document.getElementById("s22").value;
  var content22 = document.getElementById("c22").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject22 = subject22.trim();
    content22 = content22.trim();
  
    if(subject22 == "" || content22 == ""){
        content_missing_flag = false;
       var checked22 = document.getElementById("checkbox-22").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 22: missing content";
     
     	if(checked22 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-22").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked22 = document.getElementById("checkbox-22").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked22){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked22 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk23(){
    


  var subject23 = document.getElementById("s23").value;
  var content23 = document.getElementById("c23").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject23 = subject23.trim();
    content23 = content23.trim();
  
    if(subject23 == "" || content23 == ""){
        content_missing_flag = 0;
        var checked23 = document.getElementById("checkbox-23").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 23: missing content";
     
     	if(checked23 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-23").checked = false;
     
  } else{
	  content_missing_flag = 1;
	   checked23 = document.getElementById("checkbox-23").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked23){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == 1 && checked23 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk24(){
    


  var subject24 = document.getElementById("s24").value;
  var content24 = document.getElementById("c24").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject24 = subject24.trim();
    content24 = content24.trim();
  
    if(subject24 == "" || content24 == ""){
        content_missing_flag = false;
        var checked24 = document.getElementById("checkbox-24").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 24: missing content";
     
     	if(checked24 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-24").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked24 = document.getElementById("checkbox-24").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked24){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked24 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk25(){
    


  var subject25 = document.getElementById("s25").value;
  var content25 = document.getElementById("c25").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject25 = subject25.trim();
    content25 = content25.trim();
  
    if(subject25 == "" || content25 == ""){
        content_missing_flag = 0;
        var checked25 = document.getElementById("checkbox-25").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 25: missing content";
     
     	if(checked25 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-25").checked = false;
     
  } else{
	  content_missing_flag = 1;
	   checked25 = document.getElementById("checkbox-25").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked25){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == 1 && checked25 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk26(){
    


  var subject26 = document.getElementById("s26").value;
  var content26 = document.getElementById("c26").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject26 = subject26.trim();
    content26 = content26.trim();
  
    if(subject26 == "" || content26 == ""){
        content_missing_flag = false;
        var checked26 = document.getElementById("checkbox-26").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 26: missing content";
     
     	if(checked26 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-26").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked26 = document.getElementById("checkbox-26").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked26){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked26 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk27(){
    


  var subject27 = document.getElementById("s27").value;
  var content27 = document.getElementById("c27").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject27 = subject27.trim();
    content27 = content27.trim();
  
    if(subject27 == "" || content27 == ""){
        content_missing_flag = false;
        var checked27 = document.getElementById("checkbox-27").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 27: missing content";
     
     	if(checked27 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-27").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked27 = document.getElementById("checkbox-27").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked27 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked27 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk28(){
    


  var subject28 = document.getElementById("s28").value;
  var content28 = document.getElementById("c28").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject28 = subject28.trim();
    content28 = content28.trim();
  
    if(subject28 == "" || content28 == ""){
        content_missing_flag = false;
        var checked28 = document.getElementById("checkbox-28").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 28: missing content";
     
     	if(checked28 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-28").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked28 = document.getElementById("checkbox-28").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked28){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked28 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk29(){
    


  var subject29 = document.getElementById("s29").value;
  var content29 = document.getElementById("c29").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject29 = subject29.trim();
    content29 = content29.trim();
  
    if(subject29 == "" || content29 == ""){
        content_missing_flag = false;
        var checked29 = document.getElementById("checkbox-29").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 29: missing content";
     
     	if(checked29 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-29").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked29 = document.getElementById("checkbox-29").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked29){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked29 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk30(){
    


  var subject30 = document.getElementById("s30").value;
  var content30 = document.getElementById("c30").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject30 = subject30.trim();
    content30 = content30.trim();
  
    if(subject30 == "" || content30 == ""){
        content_missing_flag = false;
        var checked30 = document.getElementById("checkbox-30").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 30: missing content";
     
     	if(checked30 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-30").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked30 = document.getElementById("checkbox-30").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked30){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked30 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk31(){
    


  var subject31 = document.getElementById("s31").value;
  var content31 = document.getElementById("c31").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject31 = subject31.trim();
    content31 = content31.trim();
    
     if(subject31 == "" || content31 == ""){
       var checked31 = document.getElementById("checkbox-31").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 31: missing content";
      
     	if(checked31 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-31").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked31 = document.getElementById("checkbox-31").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked31){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked31 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk32(){
    


  var subject32 = document.getElementById("s32").value;
  var content32 = document.getElementById("c32").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject32 = subject32.trim();
    content32 = content32.trim();
  
    if(subject32 == "" || content32 == ""){
        content_missing_flag = false;
       var checked32 = document.getElementById("checkbox-32").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 32: missing content";
     
     	if(checked32 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-32").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked32 = document.getElementById("checkbox-32").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked32){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked32 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk33(){
    


  var subject33 = document.getElementById("s33").value;
  var content33 = document.getElementById("c33").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject33 = subject33.trim();
    content33 = content33.trim();
  
    if(subject33 == "" || content33 == ""){
        content_missing_flag = false;
        var checked33 = document.getElementById("checkbox-33").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 33: missing content";
     
     	if(checked33 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-33").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked33 = document.getElementById("checkbox-33").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked33){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked33 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk34(){
    


  var subject34 = document.getElementById("s34").value;
  var content34 = document.getElementById("c34").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject34 = subject34.trim();
    content34 = content34.trim();
  
    if(subject34 == "" || content34 == ""){
        content_missing_flag = false;
        var checked34 = document.getElementById("checkbox-34").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 34: missing content";
     
     	if(checked34 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-34").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked34 = document.getElementById("checkbox-34").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked34){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked34 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk35(){
    


  var subject35 = document.getElementById("s35").value;
  var content35 = document.getElementById("c35").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject35 = subject35.trim();
    content35 = content35.trim();
  
    if(subject35 == "" || content35 == ""){
        content_missing_flag = 0;
        var checked35 = document.getElementById("checkbox-35").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 35: missing content";
     
     	if(checked35 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-35").checked = false;
     
  } else{
	  content_missing_flag = 1;
	   checked35 = document.getElementById("checkbox-35").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked35){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == 1 && checked35 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk36(){
    


  var subject36 = document.getElementById("s36").value;
  var content36 = document.getElementById("c36").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject36 = subject36.trim();
    content36 = content36.trim();
  
    if(subject36 == "" || content36 == ""){
        content_missing_flag = false;
        var checked36 = document.getElementById("checkbox-36").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 36: missing content";
     
     	if(checked36 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-36").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked36 = document.getElementById("checkbox-36").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked36){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked36 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk37(){
    


  var subject37 = document.getElementById("s37").value;
  var content37 = document.getElementById("c37").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject37 = subject37.trim();
    content37 = content37.trim();
  
    if(subject37 == "" || content37 == ""){
        content_missing_flag = false;
        var checked37 = document.getElementById("checkbox-37").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 37: missing content";
     
     	if(checked37 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-37").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked37 = document.getElementById("checkbox-37").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked37 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked37 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk38(){
    


  var subject38 = document.getElementById("s38").value;
  var content38 = document.getElementById("c38").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject38 = subject38.trim();
    content38 = content38.trim();
  
    if(subject38 == "" || content38 == ""){
        content_missing_flag = false;
        var checked38 = document.getElementById("checkbox-38").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 38: missing content";
     
     	if(checked38 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-38").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked38 = document.getElementById("checkbox-38").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked38){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked38 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk39(){
    


  var subject39 = document.getElementById("s39").value;
  var content39 = document.getElementById("c39").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject39 = subject39.trim();
    content39 = content39.trim();
  
    if(subject39 == "" || content39 == ""){
        content_missing_flag = false;
        var checked39 = document.getElementById("checkbox-39").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 39: missing content";
     
     	if(checked39 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-39").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked39 = document.getElementById("checkbox-39").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked39){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked39 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk40(){
    


  var subject40 = document.getElementById("s40").value;
  var content40 = document.getElementById("c40").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject40 = subject40.trim();
    content40 = content40.trim();
  
    if(subject40 == "" || content40 == ""){
        content_missing_flag = false;
        var checked40 = document.getElementById("checkbox-40").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 40: missing content";
     
     	if(checked40 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-40").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked40 = document.getElementById("checkbox-40").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked40){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked40 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk41(){
    


  var subject41 = document.getElementById("s41").value;
  var content41 = document.getElementById("c41").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject41 = subject41.trim();
    content41 = content41.trim();
    
     if(subject41 == "" || content41 == ""){
       var checked41 = document.getElementById("checkbox-41").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 41: missing content";
      
     	if(checked41 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-41").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked41 = document.getElementById("checkbox-41").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked41){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked41 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk42(){
    


  var subject42 = document.getElementById("s42").value;
  var content42 = document.getElementById("c42").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject42 = subject42.trim();
    content42 = content42.trim();
  
    if(subject42 == "" || content42 == ""){
        content_missing_flag = false;
       var checked42 = document.getElementById("checkbox-42").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 42: missing content";
     
     	if(checked42 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-42").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked42 = document.getElementById("checkbox-42").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked42){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked42 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk43(){
    


  var subject43 = document.getElementById("s43").value;
  var content43 = document.getElementById("c43").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject43 = subject43.trim();
    content43 = content43.trim();
  
    if(subject43 == "" || content43 == ""){
        content_missing_flag = false;
        var checked43 = document.getElementById("checkbox-43").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 43: missing content";
     
     	if(checked43 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-43").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked43 = document.getElementById("checkbox-43").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked43){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked43 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk44(){
    


  var subject44 = document.getElementById("s44").value;
  var content44 = document.getElementById("c44").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject44 = subject44.trim();
    content44 = content44.trim();
  
    if(subject44 == "" || content44 == ""){
        content_missing_flag = false;
        var checked44 = document.getElementById("checkbox-44").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 44: missing content";
     
     	if(checked44 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-44").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked44 = document.getElementById("checkbox-44").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked44){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked44 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk45(){
    


  var subject45 = document.getElementById("s45").value;
  var content45 = document.getElementById("c45").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject45 = subject45.trim();
    content45 = content45.trim();
  
    if(subject45 == "" || content45 == ""){
        content_missing_flag = false;
        var checked45 = document.getElementById("checkbox-45").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 45: missing content";
     
     	if(checked45 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-45").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked45 = document.getElementById("checkbox-45").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked45){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked45 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk46(){
    


  var subject46 = document.getElementById("s46").value;
  var content46 = document.getElementById("c46").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject46 = subject46.trim();
    content46 = content46.trim();
  
    if(subject46 == "" || content46 == ""){
        content_missing_flag = false;
        var checked46 = document.getElementById("checkbox-46").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 46: missing content";
     
     	if(checked46 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-46").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked46 = document.getElementById("checkbox-46").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked46){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked46 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk47(){
    


  var subject47 = document.getElementById("s47").value;
  var content47 = document.getElementById("c47").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject47 = subject47.trim();
    content47 = content47.trim();
  
    if(subject47 == "" || content47 == ""){
        content_missing_flag = false;
        var checked47 = document.getElementById("checkbox-47").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 47: missing content";
     
     	if(checked47 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-47").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked47 = document.getElementById("checkbox-47").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked47 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked47 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk48(){
    


  var subject48 = document.getElementById("s48").value;
  var content48 = document.getElementById("c48").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject48 = subject48.trim();
    content48 = content48.trim();
  
    if(subject48 == "" || content48 == ""){
        content_missing_flag = false;
        var checked48 = document.getElementById("checkbox-48").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 48: missing content";
     
     	if(checked48 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-48").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked48 = document.getElementById("checkbox-48").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked48){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked48 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk49(){
    


  var subject49 = document.getElementById("s49").value;
  var content49 = document.getElementById("c49").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject49 = subject49.trim();
    content49 = content49.trim();
  
    if(subject49 == "" || content49 == ""){
        content_missing_flag = false;
        var checked49 = document.getElementById("checkbox-49").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 49: missing content";
     
     	if(checked49 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-49").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked49 = document.getElementById("checkbox-49").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked49){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked49 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk50(){
    


  var subject50 = document.getElementById("s50").value;
  var content50 = document.getElementById("c50").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject50 = subject50.trim();
    content50 = content50.trim();
  
    if(subject50 == "" || content50 == ""){
        content_missing_flag = false;
        var checked50 = document.getElementById("checkbox-50").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 50: missing content";
     
     	if(checked50 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-50").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked50 = document.getElementById("checkbox-50").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked50){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked50 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk51(){
    


  var subject51 = document.getElementById("s51").value;
  var content51 = document.getElementById("c51").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject51 = subject51.trim();
    content51 = content51.trim();
    
     if(subject51 == "" || content51 == ""){
       var checked51 = document.getElementById("checkbox-51").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 51: missing content";
      
     	if(checked51 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-51").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked51 = document.getElementById("checkbox-51").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked51){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked51 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk52(){
    


  var subject52 = document.getElementById("s52").value;
  var content52 = document.getElementById("c52").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject52 = subject52.trim();
    content52 = content52.trim();
  
    if(subject52 == "" || content52 == ""){
        content_missing_flag = false;
       var checked52 = document.getElementById("checkbox-52").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 52: missing content";
     
     	if(checked52 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-52").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked52 = document.getElementById("checkbox-52").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked52){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked52 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk53(){
    


  var subject53 = document.getElementById("s53").value;
  var content53 = document.getElementById("c53").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject53 = subject53.trim();
    content53 = content53.trim();
  
    if(subject53 == "" || content53 == ""){
        content_missing_flag = false;
        var checked53 = document.getElementById("checkbox-53").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 53: missing content";
     
     	if(checked53 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-53").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked53 = document.getElementById("checkbox-53").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked53){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked53 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk54(){
    


  var subject54 = document.getElementById("s54").value;
  var content54 = document.getElementById("c54").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject54 = subject54.trim();
    content54 = content54.trim();
  
    if(subject54 == "" || content54 == ""){
        content_missing_flag = false;
        var checked54 = document.getElementById("checkbox-54").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 54: missing content";
     
     	if(checked54 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-54").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked54 = document.getElementById("checkbox-54").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked54){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked54 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk55(){
    


  var subject55 = document.getElementById("s55").value;
  var content55 = document.getElementById("c55").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject55 = subject55.trim();
    content55 = content55.trim();
  
    if(subject55 == "" || content55 == ""){
        content_missing_flag = false;
        var checked55 = document.getElementById("checkbox-55").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 55: missing content";
     
     	if(checked55 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-55").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked55 = document.getElementById("checkbox-55").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked55){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked55 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk56(){
    


  var subject56 = document.getElementById("s56").value;
  var content56 = document.getElementById("c56").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject56 = subject56.trim();
    content56 = content56.trim();
  
    if(subject56 == "" || content56 == ""){
        content_missing_flag = false;
        var checked56 = document.getElementById("checkbox-56").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 56: missing content";
     
     	if(checked56 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-56").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked56 = document.getElementById("checkbox-56").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked56){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked56 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk57(){
    


  var subject57 = document.getElementById("s57").value;
  var content57 = document.getElementById("c57").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject57 = subject57.trim();
    content57 = content57.trim();
  
    if(subject57 == "" || content57 == ""){
        content_missing_flag = false;
        var checked57 = document.getElementById("checkbox-57").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 57: missing content";
     
     	if(checked57 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-57").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked57 = document.getElementById("checkbox-57").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked57 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked57 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


















 
 <script>
function tfs_chk58(){
    


  var subject58 = document.getElementById("s58").value;
  var content58 = document.getElementById("c58").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject58 = subject58.trim();
    content58 = content58.trim();
  
    if(subject58 == "" || content58 == ""){
        content_missing_flag = false;
        var checked58 = document.getElementById("checkbox-58").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 58: missing content";
     
     	if(checked58 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-58").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked58 = document.getElementById("checkbox-58").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked58){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked58 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk59(){
    


  var subject59 = document.getElementById("s59").value;
  var content59 = document.getElementById("c59").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject59 = subject59.trim();
    content59 = content59.trim();
  
    if(subject59 == "" || content59 == ""){
        content_missing_flag = false;
        var checked59 = document.getElementById("checkbox-59").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 59: missing content";
     
     	if(checked59 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-59").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked59 = document.getElementById("checkbox-59").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked59){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked59 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk60(){
    


  var subject60 = document.getElementById("s60").value;
  var content60 = document.getElementById("c60").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject60 = subject60.trim();
    content60 = content60.trim();
  
    if(subject60 == "" || content60 == ""){
        content_missing_flag = false;
        var checked60 = document.getElementById("checkbox-60").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 60: missing content";
     
     	if(checked60 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-60").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked60 = document.getElementById("checkbox-60").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked60){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked60 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk61(){
    


  var subject61 = document.getElementById("s61").value;
  var content61 = document.getElementById("c61").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject61 = subject61.trim();
    content61 = content61.trim();
    
     if(subject61 == "" || content61 == ""){
       var checked61 = document.getElementById("checkbox-61").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 61: missing content";
      
     	if(checked61 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-61").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked61 = document.getElementById("checkbox-61").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked61){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked61 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk62(){
    


  var subject62 = document.getElementById("s62").value;
  var content62 = document.getElementById("c62").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject62 = subject62.trim();
    content62 = content62.trim();
  
    if(subject62 == "" || content62 == ""){
        content_missing_flag = false;
       var checked62 = document.getElementById("checkbox-62").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 62: missing content";
     
     	if(checked62 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-62").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked62 = document.getElementById("checkbox-62").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked62){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked62 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk63(){
    


  var subject63 = document.getElementById("s63").value;
  var content63 = document.getElementById("c63").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject63 = subject63.trim();
    content63 = content63.trim();
  
    if(subject63 == "" || content63 == ""){
        content_missing_flag = false;
        var checked63 = document.getElementById("checkbox-63").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 63: missing content";
     
     	if(checked63 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-63").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked63 = document.getElementById("checkbox-63").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked63){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked63 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk64(){
    


  var subject64 = document.getElementById("s64").value;
  var content64 = document.getElementById("c64").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject64 = subject64.trim();
    content64 = content64.trim();
  
    if(subject64 == "" || content64 == ""){
        content_missing_flag = false;
        var checked64 = document.getElementById("checkbox-64").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 64: missing content";
     
     	if(checked64 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-64").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked64 = document.getElementById("checkbox-64").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked64){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked64 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk65(){
    


  var subject65 = document.getElementById("s65").value;
  var content65 = document.getElementById("c65").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject65 = subject65.trim();
    content65 = content65.trim();
  
    if(subject65 == "" || content65 == ""){
        content_missing_flag = false;
        var checked65 = document.getElementById("checkbox-65").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 65: missing content";
     
     	if(checked65 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-65").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked65 = document.getElementById("checkbox-65").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked65){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked65 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk66(){
    


  var subject66 = document.getElementById("s66").value;
  var content66 = document.getElementById("c66").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject66 = subject66.trim();
    content66 = content66.trim();
  
    if(subject66 == "" || content66 == ""){
        content_missing_flag = false;
        var checked66 = document.getElementById("checkbox-66").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 66: missing content";
     
     	if(checked66 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-66").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked66 = document.getElementById("checkbox-66").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked66){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked66 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk67(){
    


  var subject67 = document.getElementById("s67").value;
  var content67 = document.getElementById("c67").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject67 = subject67.trim();
    content67 = content67.trim();
  
    if(subject67 == "" || content67 == ""){
        content_missing_flag = false;
        var checked67 = document.getElementById("checkbox-67").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 67: missing content";
     
     	if(checked67 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-67").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked67 = document.getElementById("checkbox-67").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked67 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked67 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk68(){
    


  var subject68 = document.getElementById("s68").value;
  var content68 = document.getElementById("c68").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject68 = subject68.trim();
    content68 = content68.trim();
  
    if(subject68 == "" || content68 == ""){
        content_missing_flag = false;
        var checked68 = document.getElementById("checkbox-68").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 68: missing content";
     
     	if(checked68 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-68").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked68 = document.getElementById("checkbox-68").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked68){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked68 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk69(){
    


  var subject69 = document.getElementById("s69").value;
  var content69 = document.getElementById("c69").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject69 = subject69.trim();
    content69 = content69.trim();
  
    if(subject69 == "" || content69 == ""){
        content_missing_flag = false;
        var checked69 = document.getElementById("checkbox-69").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 69: missing content";
     
     	if(checked69 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-69").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked69 = document.getElementById("checkbox-69").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked69){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked69 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk70(){
    


  var subject70 = document.getElementById("s70").value;
  var content70 = document.getElementById("c70").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject70 = subject70.trim();
    content70 = content70.trim();
  
    if(subject70 == "" || content70 == ""){
        content_missing_flag = false;
        var checked70 = document.getElementById("checkbox-70").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 70: missing content";
     
     	if(checked70 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-70").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked70 = document.getElementById("checkbox-70").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked70){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked70 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk71(){
    


  var subject71 = document.getElementById("s71").value;
  var content71 = document.getElementById("c71").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject71 = subject71.trim();
    content71 = content71.trim();
    
     if(subject71 == "" || content71 == ""){
       var checked71 = document.getElementById("checkbox-71").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 71: missing content";
      
     	if(checked71 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-71").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked71 = document.getElementById("checkbox-71").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked71){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked71 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk72(){
    


  var subject72 = document.getElementById("s72").value;
  var content72 = document.getElementById("c72").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject72 = subject72.trim();
    content72 = content72.trim();
  
    if(subject72 == "" || content72 == ""){
        content_missing_flag = false;
       var checked72 = document.getElementById("checkbox-72").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 72: missing content";
     
     	if(checked72 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-72").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked72 = document.getElementById("checkbox-72").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked72){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked72 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk73(){
    


  var subject73 = document.getElementById("s73").value;
  var content73 = document.getElementById("c73").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject73 = subject73.trim();
    content73 = content73.trim();
  
    if(subject73 == "" || content73 == ""){
        content_missing_flag = false;
        var checked73 = document.getElementById("checkbox-73").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 73: missing content";
     
     	if(checked73 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-73").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked73 = document.getElementById("checkbox-73").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked73){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked73 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk74(){
    


  var subject74 = document.getElementById("s74").value;
  var content74 = document.getElementById("c74").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject74 = subject74.trim();
    content74 = content74.trim();
  
    if(subject74 == "" || content74 == ""){
        content_missing_flag = false;
        var checked74 = document.getElementById("checkbox-74").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 74: missing content";
     
     	if(checked74 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-74").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked74 = document.getElementById("checkbox-74").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked74){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked74 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk75(){
    


  var subject75 = document.getElementById("s75").value;
  var content75 = document.getElementById("c75").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject75 = subject75.trim();
    content75 = content75.trim();
  
    if(subject75 == "" || content75 == ""){
        content_missing_flag = false;
        var checked75 = document.getElementById("checkbox-75").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 75: missing content";
     
     	if(checked75 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-75").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked75 = document.getElementById("checkbox-75").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked75){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked75 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk76(){
    


  var subject76 = document.getElementById("s76").value;
  var content76 = document.getElementById("c76").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject76 = subject76.trim();
    content76 = content76.trim();
  
    if(subject76 == "" || content76 == ""){
        content_missing_flag = false;
        var checked76 = document.getElementById("checkbox-76").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 76: missing content";
     
     	if(checked76 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-76").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked76 = document.getElementById("checkbox-76").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked76){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked76 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk77(){
    


  var subject77 = document.getElementById("s77").value;
  var content77 = document.getElementById("c77").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject77 = subject77.trim();
    content77 = content77.trim();
  
    if(subject77 == "" || content77 == ""){
        content_missing_flag = false;
        var checked77 = document.getElementById("checkbox-77").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 77: missing content";
     
     	if(checked77 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-77").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked77 = document.getElementById("checkbox-77").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked77 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked77 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk78(){
    


  var subject78 = document.getElementById("s78").value;
  var content78 = document.getElementById("c78").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject78 = subject78.trim();
    content78 = content78.trim();
  
    if(subject78 == "" || content78 == ""){
        content_missing_flag = false;
        var checked78 = document.getElementById("checkbox-78").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 78: missing content";
     
     	if(checked78 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-78").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked78 = document.getElementById("checkbox-78").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked78){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked78 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk79(){
    


  var subject79 = document.getElementById("s79").value;
  var content79 = document.getElementById("c79").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject79 = subject79.trim();
    content79 = content79.trim();
  
    if(subject79 == "" || content79 == ""){
        content_missing_flag = false;
        var checked79 = document.getElementById("checkbox-79").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 79: missing content";
     
     	if(checked79 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-79").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked79 = document.getElementById("checkbox-79").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked79){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked79 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk80(){
    


  var subject80 = document.getElementById("s80").value;
  var content80 = document.getElementById("c80").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject80 = subject80.trim();
    content80 = content80.trim();
  
    if(subject80 == "" || content80 == ""){
        content_missing_flag = false;
        var checked80 = document.getElementById("checkbox-80").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 80: missing content";
     
     	if(checked80 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-80").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked80 = document.getElementById("checkbox-80").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked80){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked80 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk81(){
    


  var subject81 = document.getElementById("s81").value;
  var content81 = document.getElementById("c81").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject81 = subject81.trim();
    content81 = content81.trim();
    
     if(subject81 == "" || content81 == ""){
       var checked81 = document.getElementById("checkbox-81").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 81: missing content";
      
     	if(checked81 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-81").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked81 = document.getElementById("checkbox-81").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked81){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked81 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk82(){
    


  var subject82 = document.getElementById("s82").value;
  var content82 = document.getElementById("c82").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject82 = subject82.trim();
    content82 = content82.trim();
  
    if(subject82 == "" || content82 == ""){
        content_missing_flag = false;
       var checked82 = document.getElementById("checkbox-82").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 82: missing content";
     
     	if(checked82 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-82").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked82 = document.getElementById("checkbox-82").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked82){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked82 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk83(){
    


  var subject83 = document.getElementById("s83").value;
  var content83 = document.getElementById("c83").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject83 = subject83.trim();
    content83 = content83.trim();
  
    if(subject83 == "" || content83 == ""){
        content_missing_flag = false;
        var checked83 = document.getElementById("checkbox-83").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 83: missing content";
     
     	if(checked83 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-83").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked83 = document.getElementById("checkbox-83").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked83){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked83 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk84(){
    


  var subject84 = document.getElementById("s84").value;
  var content84 = document.getElementById("c84").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject84 = subject84.trim();
    content84 = content84.trim();
  
    if(subject84 == "" || content84 == ""){
        content_missing_flag = false;
        var checked84 = document.getElementById("checkbox-84").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 84: missing content";
     
     	if(checked84 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-84").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked84 = document.getElementById("checkbox-84").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked84){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked84 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk85(){
    


  var subject85 = document.getElementById("s85").value;
  var content85 = document.getElementById("c85").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject85 = subject85.trim();
    content85 = content85.trim();
  
    if(subject85 == "" || content85 == ""){
        content_missing_flag = false;
        var checked85 = document.getElementById("checkbox-85").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 85: missing content";
     
     	if(checked85 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-85").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked85 = document.getElementById("checkbox-85").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked85){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked85 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk86(){
    


  var subject86 = document.getElementById("s86").value;
  var content86 = document.getElementById("c86").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject86 = subject86.trim();
    content86 = content86.trim();
  
    if(subject86 == "" || content86 == ""){
        content_missing_flag = false;
        var checked86 = document.getElementById("checkbox-86").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 86: missing content";
     
     	if(checked86 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-86").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked86 = document.getElementById("checkbox-86").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked86){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked86 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk87(){
    


  var subject87 = document.getElementById("s87").value;
  var content87 = document.getElementById("c87").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject87 = subject87.trim();
    content87 = content87.trim();
  
    if(subject87 == "" || content87 == ""){
        content_missing_flag = false;
        var checked87 = document.getElementById("checkbox-87").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 87: missing content";
     
     	if(checked87 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-87").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked87 = document.getElementById("checkbox-87").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked87 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked87 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk88(){
    


  var subject88 = document.getElementById("s88").value;
  var content88 = document.getElementById("c88").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject88 = subject88.trim();
    content88 = content88.trim();
  
    if(subject88 == "" || content88 == ""){
        content_missing_flag = false;
        var checked88 = document.getElementById("checkbox-88").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 88: missing content";
     
     	if(checked88 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-88").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked88 = document.getElementById("checkbox-88").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked88){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked88 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk89(){
    


  var subject89 = document.getElementById("s89").value;
  var content89 = document.getElementById("c89").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject89 = subject89.trim();
    content89 = content89.trim();
  
    if(subject89 == "" || content89 == ""){
        content_missing_flag = false;
        var checked89 = document.getElementById("checkbox-89").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 89: missing content";
     
     	if(checked89 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-89").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked89 = document.getElementById("checkbox-89").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked89){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked89 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk90(){
    


  var subject90 = document.getElementById("s90").value;
  var content90 = document.getElementById("c90").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject90 = subject90.trim();
    content90 = content90.trim();
  
    if(subject90 == "" || content90 == ""){
        content_missing_flag = false;
        var checked90 = document.getElementById("checkbox-90").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 90: missing content";
     
     	if(checked90 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-90").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked90 = document.getElementById("checkbox-90").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked90){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked90 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


 
 <script>
function tfs_chk91(){
    


  var subject91 = document.getElementById("s91").value;
  var content91 = document.getElementById("c91").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  
  var content_missing_flag;

    subject91 = subject91.trim();
    content91 = content91.trim();
    
     if(subject91 == "" || content91 == ""){
       var checked91 = document.getElementById("checkbox-91").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 91: missing content";
      
     	if(checked91 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-91").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked91 = document.getElementById("checkbox-91").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  

  	if(content_missing_flag && checked91){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked91 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk92(){
    


  var subject92 = document.getElementById("s92").value;
  var content92 = document.getElementById("c92").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
 
  var content_missing_flag;
  
    subject92 = subject92.trim();
    content92 = content92.trim();
  
    if(subject92 == "" || content92 == ""){
        content_missing_flag = false;
       var checked92 = document.getElementById("checkbox-92").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 92: missing content";
     
     	if(checked92 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-92").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked92 = document.getElementById("checkbox-92").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked92){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked92 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk93(){
    


  var subject93 = document.getElementById("s93").value;
  var content93 = document.getElementById("c93").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-3").value;
  var content_missing_flag;
  
    subject93 = subject93.trim();
    content93 = content93.trim();
  
    if(subject93 == "" || content93 == ""){
        content_missing_flag = false;
        var checked93 = document.getElementById("checkbox-93").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 93: missing content";
     
     	if(checked93 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-93").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked93 = document.getElementById("checkbox-93").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked93){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked93 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>




 
 <script>
function tfs_chk94(){
    


  var subject94 = document.getElementById("s94").value;
  var content94 = document.getElementById("c94").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-4").value;
  var content_missing_flag;
  
    subject94 = subject94.trim();
    content94 = content94.trim();
  
    if(subject94 == "" || content94 == ""){
        content_missing_flag = false;
        var checked94 = document.getElementById("checkbox-94").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 94: missing content";
     
     	if(checked94 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-94").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked94 = document.getElementById("checkbox-94").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked94){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked94 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk95(){
    


  var subject95 = document.getElementById("s95").value;
  var content95 = document.getElementById("c95").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-5").value;
  var content_missing_flag;
  
    subject95 = subject95.trim();
    content95 = content95.trim();
  
    if(subject95 == "" || content95 == ""){
        content_missing_flag = false;
        var checked95 = document.getElementById("checkbox-95").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 95: missing content";
     
     	if(checked95 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-95").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked95 = document.getElementById("checkbox-95").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked95){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked95 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk96(){
    


  var subject96 = document.getElementById("s96").value;
  var content96 = document.getElementById("c96").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-6").value;
  var content_missing_flag;
  
    subject96 = subject96.trim();
    content96 = content96.trim();
  
    if(subject96 == "" || content96 == ""){
        content_missing_flag = false;
        var checked96 = document.getElementById("checkbox-96").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 96: missing content";
     
     	if(checked96 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-96").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked96 = document.getElementById("checkbox-96").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked96){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked96 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>






 
 <script>
function tfs_chk97(){
    


  var subject97 = document.getElementById("s97").value;
  var content97 = document.getElementById("c97").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-7").value;
  var content_missing_flag;
  
    subject97 = subject97.trim();
    content97 = content97.trim();
  
    if(subject97 == "" || content97 == ""){
        content_missing_flag = false;
        var checked97 = document.getElementById("checkbox-97").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 97: missing content";
     
     	if(checked97 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-97").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked97 = document.getElementById("checkbox-97").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if( content_missing_flag && checked97 ){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked97 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk98(){
    


  var subject98 = document.getElementById("s98").value;
  var content98 = document.getElementById("c98").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-8").value;
  var content_missing_flag;
  
    subject98 = subject98.trim();
    content98 = content98.trim();
  
    if(subject98 == "" || content98 == ""){
        content_missing_flag = false;
        var checked98 = document.getElementById("checkbox-98").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 98: missing content";
     
     	if(checked98 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-98").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked98 = document.getElementById("checkbox-98").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked98){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked98 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk99(){
    


  var subject99 = document.getElementById("s99").value;
  var content99 = document.getElementById("c99").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-9").value;
  var content_missing_flag;
  
    subject99 = subject99.trim();
    content99 = content99.trim();
  
    if(subject99 == "" || content99 == ""){
        content_missing_flag = false;
        var checked99 = document.getElementById("checkbox-99").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 99: missing content";
     
     	if(checked99 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-99").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked99 = document.getElementById("checkbox-99").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked99){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked99 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>





 
 <script>
function tfs_chk100(){
    


  var subject100 = document.getElementById("s100").value;
  var content100 = document.getElementById("c100").value;
  
  var hidnchkCount = document.getElementById("hidnchkCount").value;
  var checked_org = document.getElementById("checkbox-10").value;
  var content_missing_flag;
  
    subject100 = subject100.trim();
    content100 = content100.trim();
  
    if(subject100 == "" || content100 == ""){
        content_missing_flag = false;
        var checked100 = document.getElementById("checkbox-100").checked;
      document.getElementById("content_status").innerHTML = "Taskflow-suggest 100: missing content";
     
     	if(checked100 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
      
        document.getElementById("checkbox-100").checked = false;
     
  } else{
	  content_missing_flag = true;
	   checked100 = document.getElementById("checkbox-100").checked;
	     document.getElementById("content_status").innerHTML = "";
  }
  
  
  
 
  	if(content_missing_flag && checked100){
  	   hidnchkCount = Number(hidnchkCount) + Number(1);
         document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }else{
        
        	if(content_missing_flag == true && checked100 == false){
  	   hidnchkCount = Number(hidnchkCount) - Number(1);
  	    document.getElementById("chkCount").innerHTML = hidnchkCount;
         document.getElementById("hidnchkCount").value = hidnchkCount;
      }
       
        
          
      }
         
  

}
</script>


  
  
  
       
 <style type="text/css">
	
#frmContact {background:#FFFFFF;}
#frmContact div{margin-bottom: 1px}
#frmContact div label{margin-left: 5px}
.demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;background-color:#FFF;width:50%;}
.error{background-color: #FF6600;border:#AA4502 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:#2FC332;border:0;padding:10px 25px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}





body {    
    margin: 0 !important;
    padding: 0 !important;
}




.theSticky{
    height: 100%;
  background: pink;
    position: -webkit-sticky;
  position: sticky;
  top: 0;
  font-size: 20px;
   
}
	
/* Float four columns side by side */
.columntfs {
  float: left;
  width: 25%;
  padding: 0 10px;

}

.columntfs100 {
  float: left;
  width: 100%;
  padding: 0 0;

}


.columntfs50 {
  float: left;
  width: 50%;
  padding: 0 10px;

}



/* Remove extra left and right margins, due to padding */
.rowtfs {
    margin: 0 -5px;
   

     
    
}

/* Clear floats after the columns */
.rowtfs:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .columntfs {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  
  
  
  .grid-2columns_AA {
  display: grid;
  grid-template-columns: 100% ;

  width: 100%;

 border-radius:10px;
}


}

/* Style the counter cards */
.cardtfs {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffffff;
  border-radius: 10px;
}	
	
	
	
	.font_class_standard{
	    width: 95%;
    color: #808080;
    font-size: 12px;
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 300;
    
}



.font_class{
    color: #808080;
    font-size: 14px;
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900;
    
}

input[type=text] {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 400;
padding-top: 10px;
width: 95%;
color: #A9A9A9;
padding-bottom: 10px;
border:1px solid #ccc;
}




.buttonClass {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900;
width: 25%;
background-color: #0EBFE9;
color: #fff;
border:5px solid #0EBFE9;
font-size: 18px;
cursor: pointer;
padding: 12px;


}



.typeButton {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900;
width: 100%;
background-color: #CAE1FF;
color: #fff;
border: 5px solid #CAE1FF;
font-size: 12px;
cursor: pointer;

}






input[type=submit] {
-webkit-appearance: none;
-webkit-border-radius: 0;    
    
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900;
width:100%;
background-color: #ffffff;
color:#000;
border: 1px solid #ccc;
border-radius: 10px;
font-size:16px;
cursor:pointer;
padding-top: 18px;
padding-bottom: 18px;
padding-left: 35px;
padding-right: 35px;


}


input[type=submit]:hover {
    
-webkit-appearance: none;
-webkit-border-radius: 0;    
    
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900;
width:100%;
background-color: #ffffff;
color: orange;
border: 1px solid #ccc;
border-radius: 10px;
font-size:16px;
cursor:pointer;
padding-top: 18px;
padding-bottom: 18px;
padding-left: 35px;
padding-right: 35px;
}






input[type=textarea] {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 400;
width:100%;
text-align: center;
border: 1px solid rgba(131, 139, 139, 0);

border-radius: 5px;
}



.typeText{
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 400;	
width: 100%;
height: 45px;
border:1px solid #ccc;
font-size:14px;
color: #A9A9A9;
padding: 10px;
border-radius: 5px;

}


.typeText1{
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 400;	
width: 5%;
height: 10px;
border:1px solid #ccc;
font-size:14px;
color: #A9A9A9;


}




.typeTextarea{
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 400;	
width: 80%;
border:1px solid #BFD8D9;
font-size:14px;
color: #A9A9A9;
padding: 10px;
border-radius: 5px;
}








textarea::-webkit-input-placeholder {
    color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600;
}

textarea:-moz-placeholder { /* Firefox 18- */
    color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}

textarea::-moz-placeholder {  /* Firefox 19+ */
    color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}

textarea:-ms-input-placeholder {
    color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}

textarea::placeholder {
    color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}







::-webkit-input-placeholder { /* Chrome/Opera/Safari */
     color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}
::-moz-placeholder { /* Firefox 19+ */
      color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}
:-ms-input-placeholder { /* IE 10+ */
      color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}
:-moz-placeholder { /* Firefox 18- */
      color: #ccc;
	  font-size:20px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}











.flex_position_the_accordion{
    
    display: flex; 
    width: 100%;
    align-items: flex-end;  
    justify-content: center;
}




.grid-container_for_the_accordion {
  display: grid;
  grid-template-columns: auto;
  grid-row-gap: 1px;
  width: 65%;
  height: 50px;
}


.grid-visible {
  display: grid;
  grid-template-columns: 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5% 5%;

}




.grid-container_3col_submit_taskflow_suggest_summary {
  display: grid;
  grid-template-columns: auto auto auto;
   width: 70%;
 

}



.grid-container_3col_submit_taskflow_suggest {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: 50px;
  grid-row-gap: 1px;
  width: 70%;
  background: #fff;
  height: 50px;
}

.flex_align_tfs_btn{
    
    display: flex; 
    width: 100%;
    align-items: flex-end;  
    justify-content: center;
}




.grid-container_status {
  display: grid;
  grid-template-columns: auto 5% 10% ;
  width: 100%;
   height: 50px;
    background-color: #FFFFFF;
   
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   border-radius: 5px;
}




.flexClass{
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-family: ‘Arial Black’, Gadget, sans-serif;
    font-weight: bold;
    width: 100%;
    background-color: #fff;
    color: #0000EE;
    
    font-size: 12px;
    border-radius: 15px;
}




.grid-container_2col_status_and_datesInfo_3 {
  display: grid;
  grid-template-columns: auto auto;
justify-content: flex-end;
   width: 100%;
  height: 35px;
}



.grid-container_2col_status_and_datesInfo {
  display: grid;
  grid-template-columns: auto auto;

   width: 100%;
  height: 35px;
}

.grid-container_2row_created_and_madeIntoTask_datesInfo {
  display: grid;
  grid-template-columns: auto;
  grid-template-rows: 25px 25px;
  grid-row-gap: 1px;

  width: 100%;
  height: 50px;
}

.status{
    display: grid;
     grid-template-columns: auto;
     grid-template-rows: 25px 25px;
     height: 50px;
}




.grid-container_2col_tnum_and_chkbox {
  display: grid;
  grid-template-columns: auto auto;
     align-items: center;

   width: 100%;
  height: 35px;
    background-color: white;
}



.grid-item_status {
   width: 100%;
  height: 100%;
   text-align: left;
  }



.grid-item_summary_border {
   width: auto;
  height: 100%;
   text-align: left;
    }










.grid-container {
  display: grid;
  grid-template-columns: 8% 70% 22% ;
  background-color: #8B7D7B;
  padding: 10px;
}



.grid-item {
  background-color: #fff;
 padding: 15px;
 
  font-size: 30px;
  border-radius: 5px;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}


.grid-container1 {
   width: 98%;
  display: grid;
  grid-template-columns: 5% 70% 25% ;
}



.grid-item1 {
   border: 1px solid #616161;
   font-size: 12px;
 
}





.fileUpload {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900;
   
   	font-size: 16px;
    text-align: center;
	vertical-align: middle;
    color: pink;
     cursor: pointer;
	

  
}


.fileUpload input.upload {
 vertical-align: middle;
    filter: alpha(opacity=0);
    opacity: 0;
    cursor: pointer;
    z-index:-1;

		
	
  

} 




 .checkbox-custom, .radio-custom {
    opacity: 0;
   
 
}

.checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
    display: inline-block;
    vertical-align: middle;
   

    cursor: pointer;
}

.checkbox-custom-label, .radio-custom-label {
padding:5px;  
}

.checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
    content: '';
    background: #fff;
    border: 1px solid #ddd;
    display: inline-block;
    vertical-align: middle;
    width: 33px;
    height: 33px;
   

    
    text-align: center;
    
}


.checkbox-custom:checked + .checkbox-custom-label:before {
    background: #99d9d9;
}

   .checkbox-custom-label {
 font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: normal;
		 font-size: 1px;
    color: white;
}










    .ui-accordion-header {
        color: rgba(0,0,0, .7);
        width: 70%;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .ui-accordion-content {
        color: #999;
          width: 66%;
    }
    .ui-accordion-header:hover {
        color: rgba(0,0,0, .7);
         
    }
    .ui-accordion-header-active {
        border: 1px solid #6996AD;
        background: #fff;
        
    }
    
 
    .ui-accordion-header-active:hover {
        background: black;
        color: white;
        cursor: default;
         
    }









#stickyId {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: yellow;
  font-size: 20px;
  width: 65%;
}



	tr
{
margin:0;
padding:0;
}
td
{
margin:0;
padding:0;
}
table
{
cellspacing:0;
cellpadding:0;
}


#table_status td{
    
margin: 0;
padding: 0;
}


#table_status tr{
    
margin: 0;
padding: 0;
}


	

.grid-2columns_AA {
  display: grid;
  grid-template-columns: auto 15px 45% ;
   grid-row-gap: 1px;
  width: 100%;
height: 100px;
 border-radius:10px;
  background: #ffffff;
 font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 300;
}




.grid-2columns {
  display: grid;
  grid-template-columns: auto auto ;

  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

  border-radius:10px;
    background: #ffffff;
  
  
    
  
}

.grid-2columns1 {
  display: grid;
 
  justify-content: center;
  align-content: center;
  
  grid-template-columns: 55px 65px auto ;
  grid-row-gap: 1px;
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   padding-top: 5px;
  border-radius:10px;
  background: #ffffff;

   align-items: center;
 
}


.summaryClass{
    font-family: ‘Arial Black’, Gadget, sans-serif;
    font-weight: 600;
    font-size: 15px;
    padding-left: 10px;
    color: #65909A;
    border-radius:5px;
 
}

 
.summaryClass1{
    padding-left: 10px;
    border: 1px solid #E6E4E4;
    color: #999;
      border-radius:5px;
    text-align: center;
}

.item-algin-center{
  display: grid;
  grid-template-columns: 100%;
 
 font-family: ‘Arial Black’, Gadget, sans-serif;
    font-weight: 900;
  background: #ffffff;

  height: 55px;
  width: 55px;
    border: 1px solid #4CEDED;
    color: #000

   
    padding: 10px;
    
 align-items: center;
  justify-content: center;
 
  text-align:center;  
     border-radius: 10px;
    
}


.grid100{
   text-align:center;  
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 300;
      grid-template-columns: 100%;
    display: grid;
    width:100%;
      background: #ffffff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   color:lightcoral;
 font-size: 14px;  

 border-radius: 5px;
        
        
}




@media (min-width: 481px) and (max-width: 767px) {


    .ui-accordion-header {
        color: rgba(0,0,0, .7);
         width: 100%;
    }
    .ui-accordion-content {
        color: #999;
            width: 100%;
    }
    .ui-accordion-header:hover {
        color: rgba(0,0,0, .7);
           width: 100%;
    }
    .ui-accordion-header-active {
        border: 1px solid #6996AD;
        background: #fff;
          width: 100%;
    }
    
 
    .ui-accordion-header-active:hover {
        background: black;
        color: white;
        cursor: default;
         width: 100%;  
    }


  
  
  




 #frmContact{
     width: 100%;
     padding: 0;
     
 } 
   
    
}



@media (min-width: 320px) and (max-width: 480px) {
  
    .ui-accordion-header {
        color: rgba(0,0,0, .7);
         width: 100%;
    }
    .ui-accordion-content {
        color: #999;
            width: 100%;
    }
    .ui-accordion-header:hover {
        color: rgba(0,0,0, .7);
           width: 100%;
    }
    .ui-accordion-header-active {
        border: 1px solid #6996AD;
        background: #fff;
          width: 100%;
    }
    
 
    .ui-accordion-header-active:hover {
        background: black;
        color: white;
        cursor: default;
         width: 100%;  
    }


  


 

 #frmContact{
     width: 100%;
     padding: 0;
     
 } 
 
  
  
}


@media only screen and (max-width: 600px) {
    .ui-accordion-header {
        color: rgba(0,0,0, .7);
         width: 100%;
    }
    .ui-accordion-content {
        color: #999;
            width: 100%;
    }
    .ui-accordion-header:hover {
        color: rgba(0,0,0, .7);
           width: 100%;
    }
    .ui-accordion-header-active {
        border: 1px solid #6996AD;
        background: #fff;
          width: 100%;
    }
    
 
    .ui-accordion-header-active:hover {
        background: black;
        color: white;
        cursor: default;
         width: 100%;  
    }


  




 #frmContact{
     width: 100%;
     padding: 0;
     
 } 
 

}




.grid-container_3col_submit_taskflow_suggest_summary {
  display: grid;
  grid-template-columns: auto 15px auto 15px 25%;
   width: 100%;
 background: #ffffff;

}



.flex_align_tfs_btn{
    
    display: flex; 
    width: 100%;
    align-items: flex-end;  
    justify-content: center;
}




.grid-item_summary_borderq1 {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   width: auto;
  height: 100%;
   text-align: left;
    }



.grid-item_summary_border {
   width: auto;
  height: 100%;
   text-align: left;
    }




.colgrid_3{
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   text-align:left;  
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600;
      grid-template-columns: auto auto 40%;
    display: grid;
    height:75%;
      background: #ffffff;
      
   color:#ccc;
 font-size: 14px;  

 border-radius: 5px;

  align-items: center;       
        
}




	</style>   
  

  
  
  
  
</head>
<body>
 


 <form id="frmContact"  action="" method = "post">
     




     
     
     
     
     
<div class="theSticky" style="background:#ffffff">
 
<div >
  <div class="grid-2columns_AA">
      <div>       <div class="grid-2columns">
            <div style="padding-left: 10px" >Summary</div>
                 <div></div>
         
          <div class="summaryClass">Number of Taskflow-suggest submitted:</div>
          <div class="summaryClass1"><?php echo $submittedTotal?></div>
          
          
         <div  class="summaryClass">Number of Taskflow-suggest made into Task:</div>
        <div class="summaryClass1"><?php echo $madeIntoTaskTotal?></div>
        

           </div>
             </div>
             
             <div></div>
        
   <div><div class="grid-2columns1">
               <div  class ="item-algin-center" id="chkCount">

              </div>
           <div></div>
           
          <div><input    id="mybtn" type="submit" value="Submit Taskflow-suggest"  name="send" ></div>
          
            <div>  <div style="display: none ;"><input type="text" class="typeText" id="hidnchkCount" name="hidnchkCount"></div></div>
            <div></div>
        </div>
    </div>
  
 </div>    

<div class="grid100">
       <div id="content_status"></div>
 
     <div  id="mail-status"></div>
    
</div>

</div>

</div>
 

  
  <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" align="center"   class="flex_align_tfs_btn"> 
 <div style="" align="center"  class="grid-container_3col_submit_taskflow_suggest_summary">
     
     <div class="grid-item_summary_border">
         
             <div  style="display: grid;  grid-template-columns: auto auto; grid-row-gap: 3px;  font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900; font-size:18px; color: black; padding: 25px; border-radius: 5px ">
      
         <div style="color: #1B3F8B">Taskflow-suggest is a list of tasks you plan to do in order to complete the project.  Taskflow-suggests are listed by a subject and a brief description.  Please list the tasks here, click the checkbox next to the task and then click Submit Taskflow-suggest. </div><div></div>
     <div style="color: #26466D; font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 400"> Please wait for your Task-owner to make your Taskflow-suggest into task before you start working on the project.</div>
       
         
     </div>
         
     </div>
     
     <div class="grid-item_summary_border">
                <div style="display: grid;   grid-template-columns: auto auto; background: #999; ">
              
         <div></div><div></div>
         <div></div><div></div>
         <div></div><div></div>
         <div></div><div></div>
          
     </div>
     </div>
     <div class="grid-item_summary_border">
         
                <div style="display: grid;   grid-template-columns: auto auto;  background: #ccc;">
             
         <div></div><div></div>
         <div></div><div></div>
         <div></div><div></div>
         <div></div><div></div>
        
     </div>
     </div>
     
      
     </div>
  </div>   

<div style="background:#FAF8F8">


<div style="display:none" class="grid-visible">


 <div><input type="text" class="typeText1" id="v01"  value ="<?php echo $visible[0]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v02"  value ="<?php echo $visible[1]  ?>"> </div>
 

 <div><input type="text" class="typeText1" id="v03"  value ="<?php echo $visible[2]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v04"  value ="<?php echo $visible[3]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v05"  value ="<?php echo $visible[4]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v06"  value ="<?php echo $visible[5]  ?>"> </div>
 

 <div><input type="text" class="typeText1" id="v07"  value ="<?php echo $visible[6]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v08"  value ="<?php echo $visible[7]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v09"  value ="<?php echo $visible[8]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v10"  value ="<?php echo $visible[9]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v11"  value ="<?php echo $visible[10]  ?>"> </div>
 


 <div><input type="text" class="typeText1" id="v12"  value ="<?php echo $visible[11]  ?>"> </div>
 

 <div><input type="text" class="typeText1" id="v13"  value ="<?php echo $visible[12]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v14"  value ="<?php echo $visible[13]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v15"  value ="<?php echo $visible[14]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v16"  value ="<?php echo $visible[15]  ?>"> </div>
 

 <div><input type="text" class="typeText1" id="v17"  value ="<?php echo $visible[16]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v18"  value ="<?php echo $visible[17]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v19"  value ="<?php echo $visible[18]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v20"  value ="<?php echo $visible[19]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v21"  value ="<?php echo $visible[20]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v22"  value ="<?php echo $visible[21]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v23"  value ="<?php echo $visible[22]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v24"  value ="<?php echo $visible[23]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v25"  value ="<?php echo $visible[24]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v26"  value ="<?php echo $visible[25]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v27"  value ="<?php echo $visible[26]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v28"  value ="<?php echo $visible[27]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v29"  value ="<?php echo $visible[28]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v30"  value ="<?php echo $visible[29]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v31"  value ="<?php echo $visible[30]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v32"  value ="<?php echo $visible[31]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v33"  value ="<?php echo $visible[32]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v34"  value ="<?php echo $visible[33]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v35"  value ="<?php echo $visible[34]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v36"  value ="<?php echo $visible[35]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v37"  value ="<?php echo $visible[36]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v38"  value ="<?php echo $visible[37]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v39"  value ="<?php echo $visible[38]  ?>"> </div>
 
 
 <div><input type="text" class="typeText1" id="v40"  value ="<?php echo $visible[39]  ?>"> </div>
 
 <div><input type="text" class="typeText1" id="v41"  value ="<?php echo $visible[40]  ?>"> </div>


 
 <div><input type="text" class="typeText1" id="v42"  value ="<?php echo $visible[41]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v43"  value ="<?php echo $visible[42]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v44"  value ="<?php echo $visible[43]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v45"  value ="<?php echo $visible[44]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v46"  value ="<?php echo $visible[45]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v47"  value ="<?php echo $visible[46]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v48"  value ="<?php echo $visible[47]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v49"  value ="<?php echo $visible[48]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v50"  value ="<?php echo $visible[49]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v51"  value ="<?php echo $visible[50]  ?>"> </div>


 
 <div><input type="text" class="typeText1" id="v52"  value ="<?php echo $visible[51]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v53"  value ="<?php echo $visible[52]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v54"  value ="<?php echo $visible[53]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v55"  value ="<?php echo $visible[54]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v56"  value ="<?php echo $visible[55]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v57"  value ="<?php echo $visible[56]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v58"  value ="<?php echo $visible[57]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v59"  value ="<?php echo $visible[58]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v60"  value ="<?php echo $visible[59]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v61"  value ="<?php echo $visible[60]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v62"  value ="<?php echo $visible[61]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v63"  value ="<?php echo $visible[62]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v64"  value ="<?php echo $visible[63]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v65"  value ="<?php echo $visible[64]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v66"  value ="<?php echo $visible[65]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v67"  value ="<?php echo $visible[66]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v68"  value ="<?php echo $visible[67]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v69"  value ="<?php echo $visible[68]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v70"  value ="<?php echo $visible[69]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v71"  value ="<?php echo $visible[70]  ?>"> </div>


 
 <div><input type="text" class="typeText1" id="v72"  value ="<?php echo $visible[71]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v73"  value ="<?php echo $visible[72]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v74"  value ="<?php echo $visible[73]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v75"  value ="<?php echo $visible[74]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v76"  value ="<?php echo $visible[75]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v77"  value ="<?php echo $visible[76]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v78"  value ="<?php echo $visible[77]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v79"  value ="<?php echo $visible[78]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v80"  value ="<?php echo $visible[79]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v81"  value ="<?php echo $visible[80]  ?>"> </div>


 
 <div><input type="text" class="typeText1" id="v82"  value ="<?php echo $visible[81]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v83"  value ="<?php echo $visible[82]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v84"  value ="<?php echo $visible[83]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v85"  value ="<?php echo $visible[84]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v86"  value ="<?php echo $visible[85]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v87"  value ="<?php echo $visible[86]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v88"  value ="<?php echo $visible[87]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v89"  value ="<?php echo $visible[88]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v90"  value ="<?php echo $visible[89]  ?>"> </div>

 
 <div><input type="text" class="typeText1" id="v91"  value ="<?php echo $visible[90]  ?>"> </div>


 <div><input type="text" class="typeText1" id="v92"  value ="<?php echo $visible[91]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v93"  value ="<?php echo $visible[92]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v94"  value ="<?php echo $visible[93]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v95"  value ="<?php echo $visible[94]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v96"  value ="<?php echo $visible[95]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v97"  value ="<?php echo $visible[96]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v98"  value ="<?php echo $visible[97]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v99"  value ="<?php echo $visible[98]  ?>"> </div>

 <div><input type="text" class="typeText1" id="v100"  value ="<?php echo $visible[99]  ?>"> </div>





</div>


 
 
 
 
 
 
<div  style="" class="off_flex_position_the_accordion">
<div style="" class="off_grid-container_for_the_accordion">
    
<div  align="center" class="" id="accordion">
    
 
    <h3 style="text-align: left" >Taskflow-suggest 1 - 10</h3>

     <div  >
         <div   class="grid-container_status" style="text-align: center;">
        <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[0]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[0]?></div>
          </div>
       
      </div>
           <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 1 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs1_chkbx_none?>"  type="checkbox" id="checkbox-1" class="checkbox-custom" name="checkbox-1" onclick="tfs_chk1()" >
                          <label style= "<?php echo $tfs1_chkbx_none?>" for="checkbox-1" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 

 


     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs1_readonly ?> class="typeText" id="s1" name="s01" placeholder="Subject"    type="text" value ="<?php echo $subject[0] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs1_readonly ?> id="c1" class="typeTextarea" name="c01" rows="5" cols="90" placeholder="Enter Taskflow-suggest 1"  ><?php echo $content[0] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[1]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[1]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 2 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs2_chkbx_none?>" type="checkbox" id="checkbox-2" class="checkbox-custom" name="checkbox-2" onclick="tfs_chk2()" >
                          <label style= "<?php echo $tfs2_chkbx_none?>" for="checkbox-2" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs2_readonly ?> class="typeText" id="s2" name="s02" placeholder="Subject"    type="text" value ="<?php echo $subject[1] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs2_readonly ?>  class="typeTextarea"  id="c2"  name="c02" rows="5" cols="90" placeholder="Enter Taskflow-suggest 2"  ><?php echo $content[1] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[2]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[2]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 3 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs3_chkbx_none?>" type="checkbox" id="checkbox-3" class="checkbox-custom" name="checkbox-3" onclick="tfs_chk3()" >
                          <label style= "<?php echo $tfs3_chkbx_none?>" for="checkbox-3" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs3_readonly ?> class="typeText" id="s3" name="s03" placeholder="Subject"    type="text" value ="<?php echo $subject[2] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs3_readonly ?>  class="typeTextarea" id="c3" name="c03" rows="5" cols="90" placeholder="Enter Taskflow-suggest 3"  ><?php echo $content[2] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[3]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[3]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 4 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs4_chkbx_none ?>" type="checkbox" id="checkbox-4" class="checkbox-custom" name="checkbox-4" onclick="tfs_chk4()" >
                          <label style="<?php echo $tfs4_chkbx_none ?>" for="checkbox-4" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs4_readonly ?> class="typeText" id="s4" name="s04" placeholder="Subject"    type="text" value ="<?php echo $subject[3] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs4_readonly ?>  class="typeTextarea" id="c4" name="c04" rows="5" cols="90" placeholder="Enter Taskflow-suggest 4"  ><?php echo $content[3] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[4]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[4]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 5 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs5_chkbx_none ?>" type="checkbox" id="checkbox-5" class="checkbox-custom" name="checkbox-5" onclick="tfs_chk5()" >
                          <label style="<?php echo $tfs5_chkbx_none ?>" for="checkbox-5" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs5_readonly ?> class="typeText" id="s5" name="s05" placeholder="Subject"    type="text" value ="<?php echo $subject[4] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs5_readonly ?>  class="typeTextarea" id="c5" name="c05" rows="5" cols="90" placeholder="Enter Taskflow-suggest 5"  ><?php echo $content[4] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[5]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[5]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 6 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs6_chkbx_none ?>" type="checkbox" id="checkbox-6" class="checkbox-custom" name="checkbox-6" onclick="tfs_chk6()" >
                          <label style="<?php echo $tfs6_chkbx_none ?>" for="checkbox-6" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs6_readonly ?> class="typeText" id="s6" name="s06" placeholder="Subject"    type="text" value ="<?php echo $subject[5] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs6_readonly ?>  class="typeTextarea" id="c6" name="c06" rows="5" cols="90" placeholder="Enter Taskflow-suggest 6"  ><?php echo $content[5] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[6]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[6]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 7 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs7_chkbx_none ?>" type="checkbox" id="checkbox-7" class="checkbox-custom" name="checkbox-7" onclick="tfs_chk7()" >
                          <label style="<?php echo $tfs7_chkbx_none ?>" for="checkbox-7" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs7_readonly ?> class="typeText" id="s7" name="s07" placeholder="Subject"    type="text" value ="<?php echo $subject[6] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs7_readonly ?>  class="typeTextarea" id="c7" name="c07" rows="5" cols="90" placeholder="Enter Taskflow-suggest 7"  ><?php echo $content[6] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[7]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[7]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 8 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs8_chkbx_none ?>" type="checkbox" id="checkbox-8" class="checkbox-custom" name="checkbox-8" onclick="tfs_chk8()" >
                          <label style="<?php echo $tfs8_chkbx_none ?>" for="checkbox-8" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs8_readonly ?> class="typeText" id="s8" name="s08" placeholder="Subject"    type="text" value ="<?php echo $subject[7] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs8_readonly ?>  class="typeTextarea" id="c8" name="c08" rows="5" cols="90" placeholder="Enter Taskflow-suggest 8"  ><?php echo $content[7] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[8]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[8]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 9 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs9_chkbx_none ?>" type="checkbox" id="checkbox-9" class="checkbox-custom" name="checkbox-9" onclick="tfs_chk9()" >
                          <label style="<?php echo $tfs9_chkbx_none ?>" for="checkbox-9" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs9_readonly ?> class="typeText" id="s9" name="s09" placeholder="Subject"    type="text" value ="<?php echo $subject[8] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs9_readonly ?>  class="typeTextarea" id="c9" name="c09" rows="5" cols="90" placeholder="Enter Taskflow-suggest 9"  ><?php echo $content[8] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[9]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[9]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 10 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs10_chkbx_none ?>" type="checkbox" id="checkbox-10" class="checkbox-custom" name="checkbox-10" onclick="tfs_chk10()" >
                          <label style="<?php echo $tfs10_chkbx_none ?>" for="checkbox-10" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs10_readonly ?> class="typeText" id="s10" name="sub10" placeholder="Subject"    type="text" value ="<?php echo $subject[9] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs10_readonly ?>  class="typeTextarea"  id="c10" name="con10" rows="5" cols="90" placeholder="Enter Taskflow-suggest 10"  ><?php echo $content[9] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
  
      
      <h3 style="text-align: left" >Taskflow-suggest 11 - 20</h3>
      
      
  
     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[10]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[10]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 11 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs11_chkbx_none?>"  type="checkbox" id="checkbox-11" class="checkbox-custom" name="checkbox-11" onclick="tfs_chk11()" >
                          <label style= "<?php echo $tfs11_chkbx_none?>" for="checkbox-11" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs11_readonly ?> class="typeText" id="s11" name="s011" placeholder="Subject"    type="text" value ="<?php echo $subject[10] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs11_readonly ?> id="c11" class="typeTextarea" name="c011" rows="5" cols="90" placeholder="Enter Taskflow-suggest 11"  ><?php echo $content[10] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[11]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[11]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 12 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs12_chkbx_none?>" type="checkbox" id="checkbox-12" class="checkbox-custom" name="checkbox-12" onclick="tfs_chk12()" >
                          <label style= "<?php echo $tfs12_chkbx_none?>" for="checkbox-12" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs12_readonly ?> class="typeText" id="s12" name="s012" placeholder="Subject"    type="text" value ="<?php echo $subject[11] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs12_readonly ?>  class="typeTextarea"  id="c12"  name="c012" rows="5" cols="90" placeholder="Enter Taskflow-suggest 12"  ><?php echo $content[11] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[12]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[12]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 13 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs13_chkbx_none?>" type="checkbox" id="checkbox-13" class="checkbox-custom" name="checkbox-13" onclick="tfs_chk13()" >
                          <label style= "<?php echo $tfs13_chkbx_none?>" for="checkbox-13" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs13_readonly ?> class="typeText" id="s13" name="s013" placeholder="Subject"    type="text" value ="<?php echo $subject[12] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs13_readonly ?>  class="typeTextarea" id="c13" name="c013" rows="5" cols="90" placeholder="Enter Taskflow-suggest 13"  ><?php echo $content[12] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[13]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[13]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 14 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs14_chkbx_none ?>" type="checkbox" id="checkbox-14" class="checkbox-custom" name="checkbox-14" onclick="tfs_chk14()" >
                          <label style="<?php echo $tfs14_chkbx_none ?>" for="checkbox-14" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs14_readonly ?> class="typeText" id="s14" name="s014" placeholder="Subject"    type="text" value ="<?php echo $subject[13] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs14_readonly ?>  class="typeTextarea" id="c14" name="c014" rows="5" cols="90" placeholder="Enter Taskflow-suggest 14"  ><?php echo $content[13] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[14]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[14]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 15 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs15_chkbx_none ?>" type="checkbox" id="checkbox-15" class="checkbox-custom" name="checkbox-15" onclick="tfs_chk15()" >
                          <label style="<?php echo $tfs15_chkbx_none ?>" for="checkbox-15" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs15_readonly ?> class="typeText" id="s15" name="s015" placeholder="Subject"    type="text" value ="<?php echo $subject[14] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs15_readonly ?>  class="typeTextarea" id="c15" name="c015" rows="5" cols="90" placeholder="Enter Taskflow-suggest 15"  ><?php echo $content[14] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[15]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[15]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 16 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs16_chkbx_none ?>" type="checkbox" id="checkbox-16" class="checkbox-custom" name="checkbox-16" onclick="tfs_chk16()" >
                          <label style="<?php echo $tfs16_chkbx_none ?>" for="checkbox-16" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs16_readonly ?> class="typeText" id="s16" name="s016" placeholder="Subject"    type="text" value ="<?php echo $subject[15] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs16_readonly ?>  class="typeTextarea" id="c16" name="c016" rows="5" cols="90" placeholder="Enter Taskflow-suggest 16"  ><?php echo $content[15] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[16]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[16]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 17 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs17_chkbx_none ?>" type="checkbox" id="checkbox-17" class="checkbox-custom" name="checkbox-17" onclick="tfs_chk17()" >
                          <label style="<?php echo $tfs17_chkbx_none ?>" for="checkbox-17" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs17_readonly ?> class="typeText" id="s17" name="s017" placeholder="Subject"    type="text" value ="<?php echo $subject[16] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs17_readonly ?>  class="typeTextarea" id="c17" name="c017" rows="5" cols="90" placeholder="Enter Taskflow-suggest 17"  ><?php echo $content[16] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[17]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[17]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 18 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs18_chkbx_none ?>" type="checkbox" id="checkbox-18" class="checkbox-custom" name="checkbox-18" onclick="tfs_chk18()" >
                          <label style="<?php echo $tfs18_chkbx_none ?>" for="checkbox-18" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs18_readonly ?> class="typeText" id="s18" name="s018" placeholder="Subject"    type="text" value ="<?php echo $subject[17] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs18_readonly ?>  class="typeTextarea" id="c18" name="c018" rows="5" cols="90" placeholder="Enter Taskflow-suggest 18"  ><?php echo $content[17] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[18]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[18]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 19 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs19_chkbx_none ?>" type="checkbox" id="checkbox-19" class="checkbox-custom" name="checkbox-19" onclick="tfs_chk19()" >
                          <label style="<?php echo $tfs19_chkbx_none ?>" for="checkbox-19" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs19_readonly ?> class="typeText" id="s19" name="s019" placeholder="Subject"    type="text" value ="<?php echo $subject[18] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs19_readonly ?>  class="typeTextarea" id="c19" name="c019" rows="5" cols="90" placeholder="Enter Taskflow-suggest 19"  ><?php echo $content[18] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[19]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[19]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 20 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs20_chkbx_none ?>" type="checkbox" id="checkbox-20" class="checkbox-custom" name="checkbox-20" onclick="tfs_chk20()" >
                          <label style="<?php echo $tfs20_chkbx_none ?>" for="checkbox-20" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs20_readonly ?> class="typeText" id="s20" name="sub20" placeholder="Subject"    type="text" value ="<?php echo $subject[19] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs20_readonly ?>  class="typeTextarea"  id="c20" name="con20" rows="5" cols="90" placeholder="Enter Taskflow-suggest 20"  ><?php echo $content[19] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
  
  
  
  
      
      
  
  
  <h3 style="text-align: left" >Taskflow-suggest 21 - 30</h3>
  
  
  
  
     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[20]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[20]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 21 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs21_chkbx_none?>"  type="checkbox" id="checkbox-21" class="checkbox-custom" name="checkbox-21" onclick="tfs_chk21()" >
                          <label style= "<?php echo $tfs21_chkbx_none?>" for="checkbox-21" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs21_readonly ?> class="typeText" id="s21" name="s021" placeholder="Subject"    type="text" value ="<?php echo $subject[20] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs21_readonly ?> id="c21" class="typeTextarea" name="c021" rows="5" cols="90" placeholder="Enter Taskflow-suggest 21"  ><?php echo $content[20] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[21]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[21]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 22 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs22_chkbx_none?>" type="checkbox" id="checkbox-22" class="checkbox-custom" name="checkbox-22" onclick="tfs_chk22()" >
                          <label style= "<?php echo $tfs22_chkbx_none?>" for="checkbox-22" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs22_readonly ?> class="typeText" id="s22" name="s022" placeholder="Subject"    type="text" value ="<?php echo $subject[21] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs22_readonly ?>  class="typeTextarea"  id="c22"  name="c022" rows="5" cols="90" placeholder="Enter Taskflow-suggest 22"  ><?php echo $content[21] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[22]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[22]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 23 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs23_chkbx_none?>" type="checkbox" id="checkbox-23" class="checkbox-custom" name="checkbox-23" onclick="tfs_chk23()" >
                          <label style= "<?php echo $tfs23_chkbx_none?>" for="checkbox-23" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs23_readonly ?> class="typeText" id="s23" name="s023" placeholder="Subject"    type="text" value ="<?php echo $subject[22] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs23_readonly ?>  class="typeTextarea" id="c23" name="c023" rows="5" cols="90" placeholder="Enter Taskflow-suggest 23"  ><?php echo $content[22] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[23]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[23]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 24 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs24_chkbx_none ?>" type="checkbox" id="checkbox-24" class="checkbox-custom" name="checkbox-24" onclick="tfs_chk24()" >
                          <label style="<?php echo $tfs24_chkbx_none ?>" for="checkbox-24" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs24_readonly ?> class="typeText" id="s24" name="s024" placeholder="Subject"    type="text" value ="<?php echo $subject[23] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs24_readonly ?>  class="typeTextarea" id="c24" name="c024" rows="5" cols="90" placeholder="Enter Taskflow-suggest 24"  ><?php echo $content[23] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[24]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[24]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 25 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs25_chkbx_none ?>" type="checkbox" id="checkbox-25" class="checkbox-custom" name="checkbox-25" onclick="tfs_chk25()" >
                          <label style="<?php echo $tfs25_chkbx_none ?>" for="checkbox-25" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs25_readonly ?> class="typeText" id="s25" name="s025" placeholder="Subject"    type="text" value ="<?php echo $subject[24] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs25_readonly ?>  class="typeTextarea" id="c25" name="c025" rows="5" cols="90" placeholder="Enter Taskflow-suggest 25"  ><?php echo $content[24] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[25]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[25]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 26 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs26_chkbx_none ?>" type="checkbox" id="checkbox-26" class="checkbox-custom" name="checkbox-26" onclick="tfs_chk26()" >
                          <label style="<?php echo $tfs26_chkbx_none ?>" for="checkbox-26" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs26_readonly ?> class="typeText" id="s26" name="s026" placeholder="Subject"    type="text" value ="<?php echo $subject[25] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs26_readonly ?>  class="typeTextarea" id="c26" name="c026" rows="5" cols="90" placeholder="Enter Taskflow-suggest 26"  ><?php echo $content[25] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[26]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[26]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 27 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs27_chkbx_none ?>" type="checkbox" id="checkbox-27" class="checkbox-custom" name="checkbox-27" onclick="tfs_chk27()" >
                          <label style="<?php echo $tfs27_chkbx_none ?>" for="checkbox-27" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs27_readonly ?> class="typeText" id="s27" name="s027" placeholder="Subject"    type="text" value ="<?php echo $subject[26] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs27_readonly ?>  class="typeTextarea" id="c27" name="c027" rows="5" cols="90" placeholder="Enter Taskflow-suggest 27"  ><?php echo $content[26] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[27]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[27]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 28 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs28_chkbx_none ?>" type="checkbox" id="checkbox-28" class="checkbox-custom" name="checkbox-28" onclick="tfs_chk28()" >
                          <label style="<?php echo $tfs28_chkbx_none ?>" for="checkbox-28" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs28_readonly ?> class="typeText" id="s28" name="s028" placeholder="Subject"    type="text" value ="<?php echo $subject[27] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs28_readonly ?>  class="typeTextarea" id="c28" name="c028" rows="5" cols="90" placeholder="Enter Taskflow-suggest 28"  ><?php echo $content[27] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[28]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[28]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 29 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs29_chkbx_none ?>" type="checkbox" id="checkbox-29" class="checkbox-custom" name="checkbox-29" onclick="tfs_chk29()" >
                          <label style="<?php echo $tfs29_chkbx_none ?>" for="checkbox-29" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs29_readonly ?> class="typeText" id="s29" name="s029" placeholder="Subject"    type="text" value ="<?php echo $subject[28] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs29_readonly ?>  class="typeTextarea" id="c29" name="c029" rows="5" cols="90" placeholder="Enter Taskflow-suggest 29"  ><?php echo $content[28] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[29]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[29]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 30 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs30_chkbx_none ?>" type="checkbox" id="checkbox-30" class="checkbox-custom" name="checkbox-30" onclick="tfs_chk30()" >
                          <label style="<?php echo $tfs30_chkbx_none ?>" for="checkbox-30" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs30_readonly ?> class="typeText" id="s30" name="sub30" placeholder="Subject"    type="text" value ="<?php echo $subject[29] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs30_readonly ?>  class="typeTextarea"  id="c30" name="con30" rows="5" cols="90" placeholder="Enter Taskflow-suggest 30"  ><?php echo $content[29] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>


  
  
  
  
  
  
  
  
  
  <h3 style="text-align: left" >Taskflow-suggest 31 - 40</h3>
  
  

     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[30]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[30]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 31 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs31_chkbx_none?>"  type="checkbox" id="checkbox-31" class="checkbox-custom" name="checkbox-31" onclick="tfs_chk31()" >
                          <label style= "<?php echo $tfs31_chkbx_none?>" for="checkbox-31" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs31_readonly ?> class="typeText" id="s31" name="s031" placeholder="Subject"    type="text" value ="<?php echo $subject[30] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs31_readonly ?> id="c31" class="typeTextarea" name="c031" rows="5" cols="90" placeholder="Enter Taskflow-suggest 31"  ><?php echo $content[30] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[31]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[31]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 32 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs32_chkbx_none?>" type="checkbox" id="checkbox-32" class="checkbox-custom" name="checkbox-32" onclick="tfs_chk32()" >
                          <label style= "<?php echo $tfs32_chkbx_none?>" for="checkbox-32" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs32_readonly ?> class="typeText" id="s32" name="s032" placeholder="Subject"    type="text" value ="<?php echo $subject[31] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs32_readonly ?>  class="typeTextarea"  id="c32"  name="c032" rows="5" cols="90" placeholder="Enter Taskflow-suggest 32"  ><?php echo $content[31] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[32]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[32]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 33 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs33_chkbx_none?>" type="checkbox" id="checkbox-33" class="checkbox-custom" name="checkbox-33" onclick="tfs_chk33()" >
                          <label style= "<?php echo $tfs33_chkbx_none?>" for="checkbox-33" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs33_readonly ?> class="typeText" id="s33" name="s033" placeholder="Subject"    type="text" value ="<?php echo $subject[32] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs33_readonly ?>  class="typeTextarea" id="c33" name="c033" rows="5" cols="90" placeholder="Enter Taskflow-suggest 33"  ><?php echo $content[32] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[33]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[33]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 34 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs34_chkbx_none ?>" type="checkbox" id="checkbox-34" class="checkbox-custom" name="checkbox-34" onclick="tfs_chk34()" >
                          <label style="<?php echo $tfs34_chkbx_none ?>" for="checkbox-34" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs34_readonly ?> class="typeText" id="s34" name="s034" placeholder="Subject"    type="text" value ="<?php echo $subject[33] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs34_readonly ?>  class="typeTextarea" id="c34" name="c034" rows="5" cols="90" placeholder="Enter Taskflow-suggest 34"  ><?php echo $content[33] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[34]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[34]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 35 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs35_chkbx_none ?>" type="checkbox" id="checkbox-35" class="checkbox-custom" name="checkbox-35" onclick="tfs_chk35()" >
                          <label style="<?php echo $tfs35_chkbx_none ?>" for="checkbox-35" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs35_readonly ?> class="typeText" id="s35" name="s035" placeholder="Subject"    type="text" value ="<?php echo $subject[34] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs35_readonly ?>  class="typeTextarea" id="c35" name="c035" rows="5" cols="90" placeholder="Enter Taskflow-suggest 35"  ><?php echo $content[34] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[35]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[35]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 36 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs36_chkbx_none ?>" type="checkbox" id="checkbox-36" class="checkbox-custom" name="checkbox-36" onclick="tfs_chk36()" >
                          <label style="<?php echo $tfs36_chkbx_none ?>" for="checkbox-36" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs36_readonly ?> class="typeText" id="s36" name="s036" placeholder="Subject"    type="text" value ="<?php echo $subject[35] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs36_readonly ?>  class="typeTextarea" id="c36" name="c036" rows="5" cols="90" placeholder="Enter Taskflow-suggest 36"  ><?php echo $content[35] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[36]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[36]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 37 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs37_chkbx_none ?>" type="checkbox" id="checkbox-37" class="checkbox-custom" name="checkbox-37" onclick="tfs_chk37()" >
                          <label style="<?php echo $tfs37_chkbx_none ?>" for="checkbox-37" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs37_readonly ?> class="typeText" id="s37" name="s037" placeholder="Subject"    type="text" value ="<?php echo $subject[36] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs37_readonly ?>  class="typeTextarea" id="c37" name="c037" rows="5" cols="90" placeholder="Enter Taskflow-suggest 37"  ><?php echo $content[36] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[37]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[37]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 38 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs38_chkbx_none ?>" type="checkbox" id="checkbox-38" class="checkbox-custom" name="checkbox-38" onclick="tfs_chk38()" >
                          <label style="<?php echo $tfs38_chkbx_none ?>" for="checkbox-38" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs38_readonly ?> class="typeText" id="s38" name="s038" placeholder="Subject"    type="text" value ="<?php echo $subject[37] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs38_readonly ?>  class="typeTextarea" id="c38" name="c038" rows="5" cols="90" placeholder="Enter Taskflow-suggest 38"  ><?php echo $content[37] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[38]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[38]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 39 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs39_chkbx_none ?>" type="checkbox" id="checkbox-39" class="checkbox-custom" name="checkbox-39" onclick="tfs_chk39()" >
                          <label style="<?php echo $tfs39_chkbx_none ?>" for="checkbox-39" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs39_readonly ?> class="typeText" id="s39" name="s039" placeholder="Subject"    type="text" value ="<?php echo $subject[38] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs39_readonly ?>  class="typeTextarea" id="c39" name="c039" rows="5" cols="90" placeholder="Enter Taskflow-suggest 39"  ><?php echo $content[38] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[39]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[39]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 40 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs40_chkbx_none ?>" type="checkbox" id="checkbox-40" class="checkbox-custom" name="checkbox-40" onclick="tfs_chk40()" >
                          <label style="<?php echo $tfs40_chkbx_none ?>" for="checkbox-40" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs40_readonly ?> class="typeText" id="s40" name="sub40" placeholder="Subject"    type="text" value ="<?php echo $subject[39] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs40_readonly ?>  class="typeTextarea"  id="c40" name="con40" rows="5" cols="90" placeholder="Enter Taskflow-suggest 40"  ><?php echo $content[39] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
    <h3 style="text-align: left" >Taskflow-suggest 41 - 50</h3>
    

     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[40]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[40]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 41 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs41_chkbx_none?>"  type="checkbox" id="checkbox-41" class="checkbox-custom" name="checkbox-41" onclick="tfs_chk41()" >
                          <label style= "<?php echo $tfs41_chkbx_none?>" for="checkbox-41" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs41_readonly ?> class="typeText" id="s41" name="s041" placeholder="Subject"    type="text" value ="<?php echo $subject[40] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs41_readonly ?> id="c41" class="typeTextarea" name="c041" rows="5" cols="90" placeholder="Enter Taskflow-suggest 41"  ><?php echo $content[40] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[41]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[41]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 42 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs42_chkbx_none?>" type="checkbox" id="checkbox-42" class="checkbox-custom" name="checkbox-42" onclick="tfs_chk42()" >
                          <label style= "<?php echo $tfs42_chkbx_none?>" for="checkbox-42" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs42_readonly ?> class="typeText" id="s42" name="s042" placeholder="Subject"    type="text" value ="<?php echo $subject[41] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs42_readonly ?>  class="typeTextarea"  id="c42"  name="c042" rows="5" cols="90" placeholder="Enter Taskflow-suggest 42"  ><?php echo $content[41] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[42]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[42]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 43 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs43_chkbx_none?>" type="checkbox" id="checkbox-43" class="checkbox-custom" name="checkbox-43" onclick="tfs_chk43()" >
                          <label style= "<?php echo $tfs43_chkbx_none?>" for="checkbox-43" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs43_readonly ?> class="typeText" id="s43" name="s043" placeholder="Subject"    type="text" value ="<?php echo $subject[42] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs43_readonly ?>  class="typeTextarea" id="c43" name="c043" rows="5" cols="90" placeholder="Enter Taskflow-suggest 43"  ><?php echo $content[42] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[43]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[43]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 44 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs44_chkbx_none ?>" type="checkbox" id="checkbox-44" class="checkbox-custom" name="checkbox-44" onclick="tfs_chk44()" >
                          <label style="<?php echo $tfs44_chkbx_none ?>" for="checkbox-44" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs44_readonly ?> class="typeText" id="s44" name="s044" placeholder="Subject"    type="text" value ="<?php echo $subject[43] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs44_readonly ?>  class="typeTextarea" id="c44" name="c044" rows="5" cols="90" placeholder="Enter Taskflow-suggest 44"  ><?php echo $content[43] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[44]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[44]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 45 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs45_chkbx_none ?>" type="checkbox" id="checkbox-45" class="checkbox-custom" name="checkbox-45" onclick="tfs_chk45()" >
                          <label style="<?php echo $tfs45_chkbx_none ?>" for="checkbox-45" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs45_readonly ?> class="typeText" id="s45" name="s045" placeholder="Subject"    type="text" value ="<?php echo $subject[44] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs45_readonly ?>  class="typeTextarea" id="c45" name="c045" rows="5" cols="90" placeholder="Enter Taskflow-suggest 45"  ><?php echo $content[44] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[45]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[45]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 46 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs46_chkbx_none ?>" type="checkbox" id="checkbox-46" class="checkbox-custom" name="checkbox-46" onclick="tfs_chk46()" >
                          <label style="<?php echo $tfs46_chkbx_none ?>" for="checkbox-46" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs46_readonly ?> class="typeText" id="s46" name="s046" placeholder="Subject"    type="text" value ="<?php echo $subject[45] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs46_readonly ?>  class="typeTextarea" id="c46" name="c046" rows="5" cols="90" placeholder="Enter Taskflow-suggest 46"  ><?php echo $content[45] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[46]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[46]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 47 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs47_chkbx_none ?>" type="checkbox" id="checkbox-47" class="checkbox-custom" name="checkbox-47" onclick="tfs_chk47()" >
                          <label style="<?php echo $tfs47_chkbx_none ?>" for="checkbox-47" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs47_readonly ?> class="typeText" id="s47" name="s047" placeholder="Subject"    type="text" value ="<?php echo $subject[46] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs47_readonly ?>  class="typeTextarea" id="c47" name="c047" rows="5" cols="90" placeholder="Enter Taskflow-suggest 47"  ><?php echo $content[46] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[47]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[47]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 48 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs48_chkbx_none ?>" type="checkbox" id="checkbox-48" class="checkbox-custom" name="checkbox-48" onclick="tfs_chk48()" >
                          <label style="<?php echo $tfs48_chkbx_none ?>" for="checkbox-48" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs48_readonly ?> class="typeText" id="s48" name="s048" placeholder="Subject"    type="text" value ="<?php echo $subject[47] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs48_readonly ?>  class="typeTextarea" id="c48" name="c048" rows="5" cols="90" placeholder="Enter Taskflow-suggest 48"  ><?php echo $content[47] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[48]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[48]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 49 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs49_chkbx_none ?>" type="checkbox" id="checkbox-49" class="checkbox-custom" name="checkbox-49" onclick="tfs_chk49()" >
                          <label style="<?php echo $tfs49_chkbx_none ?>" for="checkbox-49" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs49_readonly ?> class="typeText" id="s49" name="s049" placeholder="Subject"    type="text" value ="<?php echo $subject[48] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs49_readonly ?>  class="typeTextarea" id="c49" name="c049" rows="5" cols="90" placeholder="Enter Taskflow-suggest 49"  ><?php echo $content[48] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[49]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[49]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 50 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs50_chkbx_none ?>" type="checkbox" id="checkbox-50" class="checkbox-custom" name="checkbox-50" onclick="tfs_chk50()" >
                          <label style="<?php echo $tfs50_chkbx_none ?>" for="checkbox-50" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs50_readonly ?> class="typeText" id="s50" name="sub50" placeholder="Subject"    type="text" value ="<?php echo $subject[49] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs50_readonly ?>  class="typeTextarea"  id="c50" name="con50" rows="5" cols="90" placeholder="Enter Taskflow-suggest 50"  ><?php echo $content[49] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
      <h3 style="text-align: left" >Taskflow-suggest 51 - 60</h3>
      
      

     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[50]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[50]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 51 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs51_chkbx_none?>"  type="checkbox" id="checkbox-51" class="checkbox-custom" name="checkbox-51" onclick="tfs_chk51()" >
                          <label style= "<?php echo $tfs51_chkbx_none?>" for="checkbox-51" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs51_readonly ?> class="typeText" id="s51" name="s051" placeholder="Subject"    type="text" value ="<?php echo $subject[50] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs51_readonly ?> id="c51" class="typeTextarea" name="c051" rows="5" cols="90" placeholder="Enter Taskflow-suggest 51"  ><?php echo $content[50] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[51]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[51]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 52 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs52_chkbx_none?>" type="checkbox" id="checkbox-52" class="checkbox-custom" name="checkbox-52" onclick="tfs_chk52()" >
                          <label style= "<?php echo $tfs52_chkbx_none?>" for="checkbox-52" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs52_readonly ?> class="typeText" id="s52" name="s052" placeholder="Subject"    type="text" value ="<?php echo $subject[51] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs52_readonly ?>  class="typeTextarea"  id="c52"  name="c052" rows="5" cols="90" placeholder="Enter Taskflow-suggest 52"  ><?php echo $content[51] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[52]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[52]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 53 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs53_chkbx_none?>" type="checkbox" id="checkbox-53" class="checkbox-custom" name="checkbox-53" onclick="tfs_chk53()" >
                          <label style= "<?php echo $tfs53_chkbx_none?>" for="checkbox-53" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs53_readonly ?> class="typeText" id="s53" name="s053" placeholder="Subject"    type="text" value ="<?php echo $subject[52] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs53_readonly ?>  class="typeTextarea" id="c53" name="c053" rows="5" cols="90" placeholder="Enter Taskflow-suggest 53"  ><?php echo $content[52] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[53]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[53]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 54 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs54_chkbx_none ?>" type="checkbox" id="checkbox-54" class="checkbox-custom" name="checkbox-54" onclick="tfs_chk54()" >
                          <label style="<?php echo $tfs54_chkbx_none ?>" for="checkbox-54" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs54_readonly ?> class="typeText" id="s54" name="s054" placeholder="Subject"    type="text" value ="<?php echo $subject[53] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs54_readonly ?>  class="typeTextarea" id="c54" name="c054" rows="5" cols="90" placeholder="Enter Taskflow-suggest 54"  ><?php echo $content[53] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[54]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[54]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 55 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs55_chkbx_none ?>" type="checkbox" id="checkbox-55" class="checkbox-custom" name="checkbox-55" onclick="tfs_chk55()" >
                          <label style="<?php echo $tfs55_chkbx_none ?>" for="checkbox-55" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs55_readonly ?> class="typeText" id="s55" name="s055" placeholder="Subject"    type="text" value ="<?php echo $subject[54] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs55_readonly ?>  class="typeTextarea" id="c55" name="c055" rows="5" cols="90" placeholder="Enter Taskflow-suggest 55"  ><?php echo $content[54] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[55]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[55]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 56 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs56_chkbx_none ?>" type="checkbox" id="checkbox-56" class="checkbox-custom" name="checkbox-56" onclick="tfs_chk56()" >
                          <label style="<?php echo $tfs56_chkbx_none ?>" for="checkbox-56" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs56_readonly ?> class="typeText" id="s56" name="s056" placeholder="Subject"    type="text" value ="<?php echo $subject[55] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs56_readonly ?>  class="typeTextarea" id="c56" name="c056" rows="5" cols="90" placeholder="Enter Taskflow-suggest 56"  ><?php echo $content[55] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[56]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[56]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 57 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs57_chkbx_none ?>" type="checkbox" id="checkbox-57" class="checkbox-custom" name="checkbox-57" onclick="tfs_chk57()" >
                          <label style="<?php echo $tfs57_chkbx_none ?>" for="checkbox-57" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs57_readonly ?> class="typeText" id="s57" name="s057" placeholder="Subject"    type="text" value ="<?php echo $subject[56] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs57_readonly ?>  class="typeTextarea" id="c57" name="c057" rows="5" cols="90" placeholder="Enter Taskflow-suggest 57"  ><?php echo $content[56] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[57]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[57]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 58 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs58_chkbx_none ?>" type="checkbox" id="checkbox-58" class="checkbox-custom" name="checkbox-58" onclick="tfs_chk58()" >
                          <label style="<?php echo $tfs58_chkbx_none ?>" for="checkbox-58" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs58_readonly ?> class="typeText" id="s58" name="s058" placeholder="Subject"    type="text" value ="<?php echo $subject[57] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs58_readonly ?>  class="typeTextarea" id="c58" name="c058" rows="5" cols="90" placeholder="Enter Taskflow-suggest 58"  ><?php echo $content[57] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[58]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[58]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 59 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs59_chkbx_none ?>" type="checkbox" id="checkbox-59" class="checkbox-custom" name="checkbox-59" onclick="tfs_chk59()" >
                          <label style="<?php echo $tfs59_chkbx_none ?>" for="checkbox-59" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs59_readonly ?> class="typeText" id="s59" name="s059" placeholder="Subject"    type="text" value ="<?php echo $subject[58] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs59_readonly ?>  class="typeTextarea" id="c59" name="c059" rows="5" cols="90" placeholder="Enter Taskflow-suggest 59"  ><?php echo $content[58] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[59]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[59]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 60 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs60_chkbx_none ?>" type="checkbox" id="checkbox-60" class="checkbox-custom" name="checkbox-60" onclick="tfs_chk60()" >
                          <label style="<?php echo $tfs60_chkbx_none ?>" for="checkbox-60" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs60_readonly ?> class="typeText" id="s60" name="sub60" placeholder="Subject"    type="text" value ="<?php echo $subject[59] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs60_readonly ?>  class="typeTextarea"  id="c60" name="con60" rows="5" cols="90" placeholder="Enter Taskflow-suggest 60"  ><?php echo $content[59] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
  
      <h3 style="text-align: left" >Taskflow-suggest 61 - 70</h3>
      
      
  
     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[60]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[60]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 61 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs61_chkbx_none?>"  type="checkbox" id="checkbox-61" class="checkbox-custom" name="checkbox-61" onclick="tfs_chk61()" >
                          <label style= "<?php echo $tfs61_chkbx_none?>" for="checkbox-61" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs61_readonly ?> class="typeText" id="s61" name="s061" placeholder="Subject"    type="text" value ="<?php echo $subject[60] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs61_readonly ?> id="c61" class="typeTextarea" name="c061" rows="5" cols="90" placeholder="Enter Taskflow-suggest 61"  ><?php echo $content[60] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[61]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[61]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 62 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs62_chkbx_none?>" type="checkbox" id="checkbox-62" class="checkbox-custom" name="checkbox-62" onclick="tfs_chk62()" >
                          <label style= "<?php echo $tfs62_chkbx_none?>" for="checkbox-62" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs62_readonly ?> class="typeText" id="s62" name="s062" placeholder="Subject"    type="text" value ="<?php echo $subject[61] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs62_readonly ?>  class="typeTextarea"  id="c62"  name="c062" rows="5" cols="90" placeholder="Enter Taskflow-suggest 62"  ><?php echo $content[61] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[62]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[62]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 63 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs63_chkbx_none?>" type="checkbox" id="checkbox-63" class="checkbox-custom" name="checkbox-63" onclick="tfs_chk63()" >
                          <label style= "<?php echo $tfs63_chkbx_none?>" for="checkbox-63" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs63_readonly ?> class="typeText" id="s63" name="s063" placeholder="Subject"    type="text" value ="<?php echo $subject[62] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs63_readonly ?>  class="typeTextarea" id="c63" name="c063" rows="5" cols="90" placeholder="Enter Taskflow-suggest 63"  ><?php echo $content[62] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[63]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[63]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 64 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs64_chkbx_none ?>" type="checkbox" id="checkbox-64" class="checkbox-custom" name="checkbox-64" onclick="tfs_chk64()" >
                          <label style="<?php echo $tfs64_chkbx_none ?>" for="checkbox-64" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs64_readonly ?> class="typeText" id="s64" name="s064" placeholder="Subject"    type="text" value ="<?php echo $subject[63] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs64_readonly ?>  class="typeTextarea" id="c64" name="c064" rows="5" cols="90" placeholder="Enter Taskflow-suggest 64"  ><?php echo $content[63] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[64]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[64]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 65 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs65_chkbx_none ?>" type="checkbox" id="checkbox-65" class="checkbox-custom" name="checkbox-65" onclick="tfs_chk65()" >
                          <label style="<?php echo $tfs65_chkbx_none ?>" for="checkbox-65" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs65_readonly ?> class="typeText" id="s65" name="s065" placeholder="Subject"    type="text" value ="<?php echo $subject[64] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs65_readonly ?>  class="typeTextarea" id="c65" name="c065" rows="5" cols="90" placeholder="Enter Taskflow-suggest 65"  ><?php echo $content[64] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[65]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[65]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 66 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs66_chkbx_none ?>" type="checkbox" id="checkbox-66" class="checkbox-custom" name="checkbox-66" onclick="tfs_chk66()" >
                          <label style="<?php echo $tfs66_chkbx_none ?>" for="checkbox-66" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs66_readonly ?> class="typeText" id="s66" name="s066" placeholder="Subject"    type="text" value ="<?php echo $subject[65] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs66_readonly ?>  class="typeTextarea" id="c66" name="c066" rows="5" cols="90" placeholder="Enter Taskflow-suggest 66"  ><?php echo $content[65] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[66]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[66]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 67 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs67_chkbx_none ?>" type="checkbox" id="checkbox-67" class="checkbox-custom" name="checkbox-67" onclick="tfs_chk67()" >
                          <label style="<?php echo $tfs67_chkbx_none ?>" for="checkbox-67" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs67_readonly ?> class="typeText" id="s67" name="s067" placeholder="Subject"    type="text" value ="<?php echo $subject[66] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs67_readonly ?>  class="typeTextarea" id="c67" name="c067" rows="5" cols="90" placeholder="Enter Taskflow-suggest 67"  ><?php echo $content[66] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[67]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[67]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 68 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs68_chkbx_none ?>" type="checkbox" id="checkbox-68" class="checkbox-custom" name="checkbox-68" onclick="tfs_chk68()" >
                          <label style="<?php echo $tfs68_chkbx_none ?>" for="checkbox-68" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs68_readonly ?> class="typeText" id="s68" name="s068" placeholder="Subject"    type="text" value ="<?php echo $subject[67] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs68_readonly ?>  class="typeTextarea" id="c68" name="c068" rows="5" cols="90" placeholder="Enter Taskflow-suggest 68"  ><?php echo $content[67] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[68]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[68]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 69 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs69_chkbx_none ?>" type="checkbox" id="checkbox-69" class="checkbox-custom" name="checkbox-69" onclick="tfs_chk69()" >
                          <label style="<?php echo $tfs69_chkbx_none ?>" for="checkbox-69" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs69_readonly ?> class="typeText" id="s69" name="s069" placeholder="Subject"    type="text" value ="<?php echo $subject[68] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs69_readonly ?>  class="typeTextarea" id="c69" name="c069" rows="5" cols="90" placeholder="Enter Taskflow-suggest 69"  ><?php echo $content[68] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[69]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[69]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 70 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs70_chkbx_none ?>" type="checkbox" id="checkbox-70" class="checkbox-custom" name="checkbox-70" onclick="tfs_chk70()" >
                          <label style="<?php echo $tfs70_chkbx_none ?>" for="checkbox-70" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs70_readonly ?> class="typeText" id="s70" name="sub70" placeholder="Subject"    type="text" value ="<?php echo $subject[69] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs70_readonly ?>  class="typeTextarea"  id="c70" name="con70" rows="5" cols="90" placeholder="Enter Taskflow-suggest 70"  ><?php echo $content[69] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
  
  
  
  
  
  
      <h3 style="text-align: left" >Taskflow-suggest 71 - 80</h3>
      
      
   
     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[70]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[70]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 71 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs71_chkbx_none?>"  type="checkbox" id="checkbox-71" class="checkbox-custom" name="checkbox-71" onclick="tfs_chk71()" >
                          <label style= "<?php echo $tfs71_chkbx_none?>" for="checkbox-71" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs71_readonly ?> class="typeText" id="s71" name="s071" placeholder="Subject"    type="text" value ="<?php echo $subject[70] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs71_readonly ?> id="c71" class="typeTextarea" name="c071" rows="5" cols="90" placeholder="Enter Taskflow-suggest 71"  ><?php echo $content[70] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[71]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[71]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 72 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs72_chkbx_none?>" type="checkbox" id="checkbox-72" class="checkbox-custom" name="checkbox-72" onclick="tfs_chk72()" >
                          <label style= "<?php echo $tfs72_chkbx_none?>" for="checkbox-72" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs72_readonly ?> class="typeText" id="s72" name="s072" placeholder="Subject"    type="text" value ="<?php echo $subject[71] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs72_readonly ?>  class="typeTextarea"  id="c72"  name="c072" rows="5" cols="90" placeholder="Enter Taskflow-suggest 72"  ><?php echo $content[71] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[72]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[72]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 73 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs73_chkbx_none?>" type="checkbox" id="checkbox-73" class="checkbox-custom" name="checkbox-73" onclick="tfs_chk73()" >
                          <label style= "<?php echo $tfs73_chkbx_none?>" for="checkbox-73" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs73_readonly ?> class="typeText" id="s73" name="s073" placeholder="Subject"    type="text" value ="<?php echo $subject[72] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs73_readonly ?>  class="typeTextarea" id="c73" name="c073" rows="5" cols="90" placeholder="Enter Taskflow-suggest 73"  ><?php echo $content[72] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[73]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[73]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 74 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs74_chkbx_none ?>" type="checkbox" id="checkbox-74" class="checkbox-custom" name="checkbox-74" onclick="tfs_chk74()" >
                          <label style="<?php echo $tfs74_chkbx_none ?>" for="checkbox-74" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs74_readonly ?> class="typeText" id="s74" name="s074" placeholder="Subject"    type="text" value ="<?php echo $subject[73] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs74_readonly ?>  class="typeTextarea" id="c74" name="c074" rows="5" cols="90" placeholder="Enter Taskflow-suggest 74"  ><?php echo $content[73] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[74]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[74]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 75 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs75_chkbx_none ?>" type="checkbox" id="checkbox-75" class="checkbox-custom" name="checkbox-75" onclick="tfs_chk75()" >
                          <label style="<?php echo $tfs75_chkbx_none ?>" for="checkbox-75" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs75_readonly ?> class="typeText" id="s75" name="s075" placeholder="Subject"    type="text" value ="<?php echo $subject[74] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs75_readonly ?>  class="typeTextarea" id="c75" name="c075" rows="5" cols="90" placeholder="Enter Taskflow-suggest 75"  ><?php echo $content[74] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[75]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[75]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 76 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs76_chkbx_none ?>" type="checkbox" id="checkbox-76" class="checkbox-custom" name="checkbox-76" onclick="tfs_chk76()" >
                          <label style="<?php echo $tfs76_chkbx_none ?>" for="checkbox-76" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs76_readonly ?> class="typeText" id="s76" name="s076" placeholder="Subject"    type="text" value ="<?php echo $subject[75] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs76_readonly ?>  class="typeTextarea" id="c76" name="c076" rows="5" cols="90" placeholder="Enter Taskflow-suggest 76"  ><?php echo $content[75] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[76]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[76]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 77 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs77_chkbx_none ?>" type="checkbox" id="checkbox-77" class="checkbox-custom" name="checkbox-77" onclick="tfs_chk77()" >
                          <label style="<?php echo $tfs77_chkbx_none ?>" for="checkbox-77" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs77_readonly ?> class="typeText" id="s77" name="s077" placeholder="Subject"    type="text" value ="<?php echo $subject[76] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs77_readonly ?>  class="typeTextarea" id="c77" name="c077" rows="5" cols="90" placeholder="Enter Taskflow-suggest 77"  ><?php echo $content[76] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[77]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[77]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 78 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs78_chkbx_none ?>" type="checkbox" id="checkbox-78" class="checkbox-custom" name="checkbox-78" onclick="tfs_chk78()" >
                          <label style="<?php echo $tfs78_chkbx_none ?>" for="checkbox-78" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs78_readonly ?> class="typeText" id="s78" name="s078" placeholder="Subject"    type="text" value ="<?php echo $subject[77] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs78_readonly ?>  class="typeTextarea" id="c78" name="c078" rows="5" cols="90" placeholder="Enter Taskflow-suggest 78"  ><?php echo $content[77] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[78]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[78]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 79 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs79_chkbx_none ?>" type="checkbox" id="checkbox-79" class="checkbox-custom" name="checkbox-79" onclick="tfs_chk79()" >
                          <label style="<?php echo $tfs79_chkbx_none ?>" for="checkbox-79" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs79_readonly ?> class="typeText" id="s79" name="s079" placeholder="Subject"    type="text" value ="<?php echo $subject[78] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs79_readonly ?>  class="typeTextarea" id="c79" name="c079" rows="5" cols="90" placeholder="Enter Taskflow-suggest 79"  ><?php echo $content[78] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[79]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[79]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 80 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs80_chkbx_none ?>" type="checkbox" id="checkbox-80" class="checkbox-custom" name="checkbox-80" onclick="tfs_chk80()" >
                          <label style="<?php echo $tfs80_chkbx_none ?>" for="checkbox-80" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs80_readonly ?> class="typeText" id="s80" name="sub80" placeholder="Subject"    type="text" value ="<?php echo $subject[79] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs80_readonly ?>  class="typeTextarea"  id="c80" name="con80" rows="5" cols="90" placeholder="Enter Taskflow-suggest 80"  ><?php echo $content[79] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
  
  
      <h3 style="text-align: left" >Taskflow-suggest 81 - 90</h3>
      
  
     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[80]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[80]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 81 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs81_chkbx_none?>"  type="checkbox" id="checkbox-81" class="checkbox-custom" name="checkbox-81" onclick="tfs_chk81()" >
                          <label style= "<?php echo $tfs81_chkbx_none?>" for="checkbox-81" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs81_readonly ?> class="typeText" id="s81" name="s081" placeholder="Subject"    type="text" value ="<?php echo $subject[80] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs81_readonly ?> id="c81" class="typeTextarea" name="c081" rows="5" cols="90" placeholder="Enter Taskflow-suggest 81"  ><?php echo $content[80] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[81]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[81]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 82 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs82_chkbx_none?>" type="checkbox" id="checkbox-82" class="checkbox-custom" name="checkbox-82" onclick="tfs_chk82()" >
                          <label style= "<?php echo $tfs82_chkbx_none?>" for="checkbox-82" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs82_readonly ?> class="typeText" id="s82" name="s082" placeholder="Subject"    type="text" value ="<?php echo $subject[81] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs82_readonly ?>  class="typeTextarea"  id="c82"  name="c082" rows="5" cols="90" placeholder="Enter Taskflow-suggest 82"  ><?php echo $content[81] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[82]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[82]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 83 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs83_chkbx_none?>" type="checkbox" id="checkbox-83" class="checkbox-custom" name="checkbox-83" onclick="tfs_chk83()" >
                          <label style= "<?php echo $tfs83_chkbx_none?>" for="checkbox-83" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs83_readonly ?> class="typeText" id="s83" name="s083" placeholder="Subject"    type="text" value ="<?php echo $subject[82] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs83_readonly ?>  class="typeTextarea" id="c83" name="c083" rows="5" cols="90" placeholder="Enter Taskflow-suggest 83"  ><?php echo $content[82] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[83]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[83]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 84 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs84_chkbx_none ?>" type="checkbox" id="checkbox-84" class="checkbox-custom" name="checkbox-84" onclick="tfs_chk84()" >
                          <label style="<?php echo $tfs84_chkbx_none ?>" for="checkbox-84" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs84_readonly ?> class="typeText" id="s84" name="s084" placeholder="Subject"    type="text" value ="<?php echo $subject[83] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs84_readonly ?>  class="typeTextarea" id="c84" name="c084" rows="5" cols="90" placeholder="Enter Taskflow-suggest 84"  ><?php echo $content[83] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[84]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[84]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 85 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs85_chkbx_none ?>" type="checkbox" id="checkbox-85" class="checkbox-custom" name="checkbox-85" onclick="tfs_chk85()" >
                          <label style="<?php echo $tfs85_chkbx_none ?>" for="checkbox-85" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs85_readonly ?> class="typeText" id="s85" name="s085" placeholder="Subject"    type="text" value ="<?php echo $subject[84] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs85_readonly ?>  class="typeTextarea" id="c85" name="c085" rows="5" cols="90" placeholder="Enter Taskflow-suggest 85"  ><?php echo $content[84] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[85]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[85]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 86 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs86_chkbx_none ?>" type="checkbox" id="checkbox-86" class="checkbox-custom" name="checkbox-86" onclick="tfs_chk86()" >
                          <label style="<?php echo $tfs86_chkbx_none ?>" for="checkbox-86" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs86_readonly ?> class="typeText" id="s86" name="s086" placeholder="Subject"    type="text" value ="<?php echo $subject[85] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs86_readonly ?>  class="typeTextarea" id="c86" name="c086" rows="5" cols="90" placeholder="Enter Taskflow-suggest 86"  ><?php echo $content[85] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[86]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[86]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 87 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs87_chkbx_none ?>" type="checkbox" id="checkbox-87" class="checkbox-custom" name="checkbox-87" onclick="tfs_chk87()" >
                          <label style="<?php echo $tfs87_chkbx_none ?>" for="checkbox-87" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs87_readonly ?> class="typeText" id="s87" name="s087" placeholder="Subject"    type="text" value ="<?php echo $subject[86] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs87_readonly ?>  class="typeTextarea" id="c87" name="c087" rows="5" cols="90" placeholder="Enter Taskflow-suggest 87"  ><?php echo $content[86] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[87]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[87]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 88 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs88_chkbx_none ?>" type="checkbox" id="checkbox-88" class="checkbox-custom" name="checkbox-88" onclick="tfs_chk88()" >
                          <label style="<?php echo $tfs88_chkbx_none ?>" for="checkbox-88" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs88_readonly ?> class="typeText" id="s88" name="s088" placeholder="Subject"    type="text" value ="<?php echo $subject[87] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs88_readonly ?>  class="typeTextarea" id="c88" name="c088" rows="5" cols="90" placeholder="Enter Taskflow-suggest 88"  ><?php echo $content[87] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[88]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[88]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 89 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs89_chkbx_none ?>" type="checkbox" id="checkbox-89" class="checkbox-custom" name="checkbox-89" onclick="tfs_chk89()" >
                          <label style="<?php echo $tfs89_chkbx_none ?>" for="checkbox-89" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs89_readonly ?> class="typeText" id="s89" name="s089" placeholder="Subject"    type="text" value ="<?php echo $subject[88] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs89_readonly ?>  class="typeTextarea" id="c89" name="c089" rows="5" cols="90" placeholder="Enter Taskflow-suggest 89"  ><?php echo $content[88] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[89]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[89]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 90 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs90_chkbx_none ?>" type="checkbox" id="checkbox-90" class="checkbox-custom" name="checkbox-90" onclick="tfs_chk90()" >
                          <label style="<?php echo $tfs90_chkbx_none ?>" for="checkbox-90" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs90_readonly ?> class="typeText" id="s90" name="sub90" placeholder="Subject"    type="text" value ="<?php echo $subject[89] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs90_readonly ?>  class="typeTextarea"  id="c90" name="con90" rows="5" cols="90" placeholder="Enter Taskflow-suggest 90"  ><?php echo $content[89] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>

  
  
  
  
  
  
  
      <h3 style="text-align: left" >Taskflow-suggest 91 - 100</h3>
      
      
     
 
     <div  >
      

     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[90]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[90]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 91 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs91_chkbx_none?>"  type="checkbox" id="checkbox-91" class="checkbox-custom" name="checkbox-91" onclick="tfs_chk91()" >
                          <label style= "<?php echo $tfs91_chkbx_none?>" for="checkbox-91" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 




     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs91_readonly ?> class="typeText" id="s91" name="s091" placeholder="Subject"    type="text" value ="<?php echo $subject[90] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs91_readonly ?> id="c91" class="typeTextarea" name="c091" rows="5" cols="90" placeholder="Enter Taskflow-suggest 91"  ><?php echo $content[90] ?></textarea>
             </div>
           
           
           </div>







     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[91]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[91]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 92 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs92_chkbx_none?>" type="checkbox" id="checkbox-92" class="checkbox-custom" name="checkbox-92" onclick="tfs_chk92()" >
                          <label style= "<?php echo $tfs92_chkbx_none?>" for="checkbox-92" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 





     
       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs92_readonly ?> class="typeText" id="s92" name="s092" placeholder="Subject"    type="text" value ="<?php echo $subject[91] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs92_readonly ?>  class="typeTextarea"  id="c92"  name="c092" rows="5" cols="90" placeholder="Enter Taskflow-suggest 92"  ><?php echo $content[91] ?></textarea>
             </div>
           
           
           </div>
  
  
   
  

  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[92]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[92]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 93 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style= "<?php echo $tfs93_chkbx_none?>" type="checkbox" id="checkbox-93" class="checkbox-custom" name="checkbox-93" onclick="tfs_chk93()" >
                          <label style= "<?php echo $tfs93_chkbx_none?>" for="checkbox-93" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs93_readonly ?> class="typeText" id="s93" name="s093" placeholder="Subject"    type="text" value ="<?php echo $subject[92] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs93_readonly ?>  class="typeTextarea" id="c93" name="c093" rows="5" cols="90" placeholder="Enter Taskflow-suggest 93"  ><?php echo $content[92] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
  
  

  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[93]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[93]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 94 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs94_chkbx_none ?>" type="checkbox" id="checkbox-94" class="checkbox-custom" name="checkbox-94" onclick="tfs_chk94()" >
                          <label style="<?php echo $tfs94_chkbx_none ?>" for="checkbox-94" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs94_readonly ?> class="typeText" id="s94" name="s094" placeholder="Subject"    type="text" value ="<?php echo $subject[93] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs94_readonly ?>  class="typeTextarea" id="c94" name="c094" rows="5" cols="90" placeholder="Enter Taskflow-suggest 94"  ><?php echo $content[93] ?></textarea>
             </div>
           
           
           </div>
  
  
 
  
  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[94]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[94]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 95 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs95_chkbx_none ?>" type="checkbox" id="checkbox-95" class="checkbox-custom" name="checkbox-95" onclick="tfs_chk95()" >
                          <label style="<?php echo $tfs95_chkbx_none ?>" for="checkbox-95" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs95_readonly ?> class="typeText" id="s95" name="s095" placeholder="Subject"    type="text" value ="<?php echo $subject[94] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs95_readonly ?>  class="typeTextarea" id="c95" name="c095" rows="5" cols="90" placeholder="Enter Taskflow-suggest 95"  ><?php echo $content[94] ?></textarea>
             </div>
           
           
           </div>
  
  
  


   
   
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[95]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[95]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 96 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs96_chkbx_none ?>" type="checkbox" id="checkbox-96" class="checkbox-custom" name="checkbox-96" onclick="tfs_chk96()" >
                          <label style="<?php echo $tfs96_chkbx_none ?>" for="checkbox-96" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs96_readonly ?> class="typeText" id="s96" name="s096" placeholder="Subject"    type="text" value ="<?php echo $subject[95] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs96_readonly ?>  class="typeTextarea" id="c96" name="c096" rows="5" cols="90" placeholder="Enter Taskflow-suggest 96"  ><?php echo $content[95] ?></textarea>
             </div>
           
           
           </div>
  
  
  
  
 
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[96]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[96]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 97 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs97_chkbx_none ?>" type="checkbox" id="checkbox-97" class="checkbox-custom" name="checkbox-97" onclick="tfs_chk97()" >
                          <label style="<?php echo $tfs97_chkbx_none ?>" for="checkbox-97" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs97_readonly ?> class="typeText" id="s97" name="s097" placeholder="Subject"    type="text" value ="<?php echo $subject[96] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs97_readonly ?>  class="typeTextarea" id="c97" name="c097" rows="5" cols="90" placeholder="Enter Taskflow-suggest 97"  ><?php echo $content[96] ?></textarea>
             </div>
           
           
           </div>
  
  
  

    
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[97]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[97]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 98 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs98_chkbx_none ?>" type="checkbox" id="checkbox-98" class="checkbox-custom" name="checkbox-98" onclick="tfs_chk98()" >
                          <label style="<?php echo $tfs98_chkbx_none ?>" for="checkbox-98" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs98_readonly ?> class="typeText" id="s98" name="s098" placeholder="Subject"    type="text" value ="<?php echo $subject[97] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs98_readonly ?>  class="typeTextarea" id="c98" name="c098" rows="5" cols="90" placeholder="Enter Taskflow-suggest 98"  ><?php echo $content[97] ?></textarea>
             </div>
           
           
           </div>
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[98]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[98]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 99 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs99_chkbx_none ?>" type="checkbox" id="checkbox-99" class="checkbox-custom" name="checkbox-99" onclick="tfs_chk99()" >
                          <label style="<?php echo $tfs99_chkbx_none ?>" for="checkbox-99" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs99_readonly ?> class="typeText" id="s99" name="s099" placeholder="Subject"    type="text" value ="<?php echo $subject[98] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs99_readonly ?>  class="typeTextarea" id="c99" name="c099" rows="5" cols="90" placeholder="Enter Taskflow-suggest 99"  ><?php echo $content[98] ?></textarea>
             </div>
           
           
           </div>
  
  

  

  

  
  
  
  
     <div   class="grid-container_status" style="text-align: center;">
      
      
      
      <div class="grid-container_2col_status_and_datesInfo" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right: 20px; color: black"> Status: </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"><?php echo $submitedOn[99]?></div>
          <div class="grid-item_status" ><?php echo $madeIntoTask[99]?></div>
          </div>
       
      </div>
      
          <div class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; font-size: 25px"> 100 </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
        <div style="" class="grid-container_2col_status_and_datesInfo_3" >
          
          <div  style="display: flex; align-items: center; justify-content: flex-end; padding-right:5px"> 
            <input style="<?php echo $tfs100_chkbx_none ?>" type="checkbox" id="checkbox-100" class="checkbox-custom" name="checkbox-100" onclick="tfs_chk100()" >
                          <label style="<?php echo $tfs100_chkbx_none ?>" for="checkbox-100" class="checkbox-custom-label">.</label>
          
          
          </div>
   
          <div class="grid-container_2row_created_and_madeIntoTask_datesInfo">
          
          <div class="grid-item_status"></div>
          <div class="grid-item_status" ></div>
          </div>
       
      </div>
      
      
      
   
      </div>
 


       <div class="grid-item">
           
           <div style = " text-align: left" >
               <input  <?php echo $tfs100_readonly ?> class="typeText" id="s100" name="sub100" placeholder="Subject"    type="text" value ="<?php echo $subject[99] ?>">
           </div>
             
             <div style = "padding-top: 5px; text-align: left">
                 <textarea  <?php echo $tfs100_readonly ?>  class="typeTextarea"  id="c100" name="con100" rows="5" cols="90" placeholder="Enter Taskflow-suggest 100"  ><?php echo $content[99] ?></textarea>
             </div>
           
           
           </div>
  
  
  
</div>



  
  
  
</div>
 
   </div>
  
</div>
 </div>
 </form>
</body>
</html>




