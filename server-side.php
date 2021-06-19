<?php
require '../vendor/autoload.php'; // include Composer's autoloade


$client = new MongoDB\Client(
    'mongodb+srv://xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.mongodb.net/?retryWrites=true&w=majority');

$userNumber = $_GET["un"];
$taskNumber = $_GET["tnum"];



 
function store_tfs_in_db($taskNumber, $subject, $content) {

    $submited  = "Submitted Taskflow-suggest on " . date("m/d/y g.i a"); 
    $submitBit = 1;


$client = new MongoDB\Client(
    'mongodb+srv://xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.net/?retryWrites=true&w=majority');
$collection = $client->tfs->$taskNumber;


$result = $collection->find();



$rowlocation = 1;

$IDsubmitBit = array();

       
      foreach ($result as $row) {

       $IDsubmitBit[] = $row["submitBit"];
       }
   
 

 $j = 0;
for($i = 0; $i<= count($IDsubmitBit); $i++){
    

$j += 1;


}

$rowlocation = $j;



$result = $collection->insertOne( [ 'subject' => $subject, 'content' => $content , 'submitBit' => $submitBit , 'submitedOn' => $submited, 'new' => $rowlocation, 'ID' => $rowlocation  ] );





 
 
  }
  
 







$sTotal = 0;
$subject1 = trim($_POST['s01']);
$content1 = trim($_POST['c01']);

$chk1=$_POST['checkbox-1'];
if($chk1 == "on"){
    $sTotal += 1;
    store_tfs_in_db($taskNumber, $subject1, $content1); 

}




$subject2 = trim($_POST['s02']);
$content2 = trim($_POST['c02']);

$chk2=$_POST['checkbox-2'];
if($chk2 == "on"){
  $sTotal += 1;
  store_tfs_in_db($taskNumber, $subject2, $content2);
}


$subject3 = trim($_POST['s03']);
$content3 = trim($_POST['c03']);

$chk3=$_POST['checkbox-3'];
if($chk3 == "on"){
  $sTotal += 1;
  store_tfs_in_db($taskNumber, $subject3, $content3);
}

$subject4 = trim($_POST['s04']);
$content4 = trim($_POST['c04']);

$chk4=$_POST['checkbox-4'];
if($chk4 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject4, $content4);
}


$subject5 = trim($_POST['s05']);
$content5 = trim($_POST['c05']);

$chk5=$_POST['checkbox-5'];
if($chk5 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject5, $content5);
}



$subject6 = trim($_POST['s06']);
$content6 = trim($_POST['c06']);

$chk6=$_POST['checkbox-6'];
if($chk6 == "on"){
  $sTotal += 1;

  
   store_tfs_in_db($taskNumber, $subject6, $content6);
}



$subject7 = trim($_POST['s07']);
$content7 = trim($_POST['c07']);

$chk7=$_POST['checkbox-7'];
if($chk7 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject7, $content7);
}


$subject8 = trim($_POST['s08']);
$content8 = trim($_POST['c08']);

$chk8=$_POST['checkbox-8'];
if($chk8 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject8, $content8);
}



$subject9 = trim($_POST['s09']);
$content9 = trim($_POST['c09']);

$chk9=$_POST['checkbox-9'];
if($chk9 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject9, $content9);
}



$subject10 = trim($_POST['sub10']);
$content10 = trim($_POST['con10']);

$chk10=$_POST['checkbox-10'];
if($chk10 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject10, $content10);
}


$subject11 = trim($_POST['s011']);
$content11 = trim($_POST['c011']);

$chk11=$_POST['checkbox-11'];
if($chk11 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject11, $content11);
}


$subject12 = $_POST['s012'];
$content12 = $_POST['c012'];

$chk12=$_POST['checkbox-12'];
if($chk12 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject12, $content12);
}



$subject13 = trim($_POST['s013']);
$content13 = trim($_POST['c013']);

$chk13=$_POST['checkbox-13'];
if($chk13 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject13, $content13);
}



$subject14 = trim($_POST['s014']);
$content14 = trim($_POST['c014']);

$chk14=$_POST['checkbox-14'];
if($chk14 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject14, $content14);
}



$subject15 = trim($_POST['s015']);
$content15 = trim($_POST['c015']);

$chk15=$_POST['checkbox-15'];
if($chk15 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject15, $content15);
}


$subject16 = trim($_POST['s016']);
$content16 = trim($_POST['c016']);

$chk16=$_POST['checkbox-16'];
if($chk16 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject16, $content16);
}



$subject17 = trim($_POST['s017']);
$content17 = trim($_POST['c017']);

$chk17=$_POST['checkbox-17'];
if($chk17 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject17, $content17);
}


$subject18 = trim($_POST['s018']);
$content18 = trim($_POST['c018']);

$chk18=$_POST['checkbox-18'];
if($chk18 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject18, $content18);
}




$subject19 = trim($_POST['s019']);
$content19 = trim($_POST['c019']);

$chk19=$_POST['checkbox-19'];

if($chk19 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject19, $content19);
}


$subject20 = trim($_POST['sub20']);
$content20 = trim($_POST['con20']);

$chk20=$_POST['checkbox-20'];

if($chk20 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject20, $content20);
}



$subject21 = trim($_POST['s021']);
$content21 = trim($_POST['c021']);

$chk21=$_POST['checkbox-21'];

if($chk21 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject21, $content21);
}




$subject22 = trim($_POST['s022']);
$content22 = trim($_POST['c022']);

$chk22=$_POST['checkbox-22'];

if($chk22 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject22, $content22);
}


$subject23 = trim($_POST['s023']);
$content23 = trim($_POST['c023']);

$chk23=$_POST['checkbox-23'];

if($chk23 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject23, $content23);
}



$subject24 = trim($_POST['s024']);
$content24 = trim($_POST['c024']);

$chk24=$_POST['checkbox-24'];

if($chk24 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject24, $content24);
}




$subject25 = trim($_POST['s025']);
$content25 = trim($_POST['c025']);

$chk25 = $_POST['checkbox-25'];

if($chk25 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject25, $content25);
}



$subject26 = trim($_POST['s026']);
$content26 = trim($_POST['c026']);

$chk26 = $_POST['checkbox-26'];

if($chk26 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject26, $content26);
}



$subject27 = trim($_POST['s027']);
$content27 = trim($_POST['c027']);

$chk27 = $_POST['checkbox-27'];

if($chk27 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject27, $content27);
}




$subject28 = trim($_POST['s028']);
$content28 = trim($_POST['c028']);

$chk28 = $_POST['checkbox-28'];

if($chk28 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject28, $content28);
}




$subject29 = trim($_POST['s029']);
$content29 = trim($_POST['c029']);

$chk29 = $_POST['checkbox-29'];

if($chk29 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject29, $content29);
}


$subject30 = trim($_POST['sub30']);
$content30 = trim($_POST['con30']);

$chk30=$_POST['checkbox-30'];

if($chk30 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject30, $content30);
}




$subject31 = trim($_POST['s031']);
$content31 = trim($_POST['c031']);

$chk31 = $_POST['checkbox-31'];

if($chk31 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject31, $content31);
}





$subject32 = trim($_POST['s032']);
$content32 = trim($_POST['c032']);

$chk32 = $_POST['checkbox-32'];

if($chk32 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject32, $content32);
}



$subject33 = trim($_POST['s033']);
$content33 = trim($_POST['c033']);

$chk33 = $_POST['checkbox-33'];

if($chk33 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject33, $content33);
}



$subject34 = trim($_POST['s034']);
$content34 = trim($_POST['c034']);

$chk34 = $_POST['checkbox-34'];

if($chk34 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject34, $content34);
}




$subject35 = trim($_POST['s035']);
$content35 = trim($_POST['c035']);

$chk35 = $_POST['checkbox-35'];

if($chk35 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject35, $content35);
}




$subject36 = trim($_POST['s036']);
$content36 = trim($_POST['c036']);

$chk36 = $_POST['checkbox-36'];

if($chk36 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject36, $content36);
}




$subject37 = trim($_POST['s037']);
$content37 = trim($_POST['c037']);

$chk37 = $_POST['checkbox-37'];

if($chk37 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject37, $content37);
}



$subject38 = trim($_POST['s038']);
$content38 = trim($_POST['c038']);

$chk38 = $_POST['checkbox-38'];

if($chk38 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject38, $content38);
}


$subject39 = trim($_POST['s039']);
$content39 = trim($_POST['c039']);

$chk39 = $_POST['checkbox-39'];

if($chk39 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject39, $content39);
}



$subject40 = trim($_POST['sub40']);
$content40 = trim($_POST['con40']);

$chk40=$_POST['checkbox-40'];

if($chk40 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject40, $content40);
}



$subject41 = trim($_POST['s041']);
$content41 = trim($_POST['c041']);

$chk41 = $_POST['checkbox-41'];

if($chk41 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject41, $content41);
}



$subject42 = trim($_POST['s042']);
$content42 = trim($_POST['c042']);

$chk42 = $_POST['checkbox-42'];

if($chk42 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject42, $content42);
}



$subject43 = trim($_POST['s043']);
$content43 = trim($_POST['c043']);

$chk43 = $_POST['checkbox-43'];

if($chk43 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject43, $content43);
}




$subject44 = trim($_POST['s044']);
$content44 = trim($_POST['c044']);

$chk44 = $_POST['checkbox-44'];

if($chk44 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject44, $content44);
}


$subject45 = trim($_POST['s045']);
$content45 = trim($_POST['c045']);

$chk45 = $_POST['checkbox-45'];

if($chk45 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject45, $content45);
}


$subject46 = trim($_POST['s046']);
$content46 = trim($_POST['c046']);

$chk46 = $_POST['checkbox-46'];

if($chk46 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject46, $content46);
}



$subject47 = trim($_POST['s047']);
$content47 = trim($_POST['c047']);

$chk47 = $_POST['checkbox-47'];

if($chk47 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject47, $content47);
}


$subject48 = trim($_POST['s048']);
$content48 = trim($_POST['c048']);

$chk48 = $_POST['checkbox-48'];

if($chk48 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject48, $content48);
}


$subject49 = trim($_POST['s049']);
$content49 = trim($_POST['c049']);

$chk49 = $_POST['checkbox-49'];

if($chk49 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject49, $content49);
}






$subject50 = trim($_POST['sub50']);
$content50 = trim($_POST['con50']);

$chk50=$_POST['checkbox-50'];

if($chk50 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject50, $content50);
}



$subject51 = trim($_POST['s051']);
$content51 = trim($_POST['c051']);

$chk51 = $_POST['checkbox-51'];

if($chk51 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject51, $content51);
}




$subject52 = trim($_POST['s052']);
$content52 = trim($_POST['c052']);

$chk52 = $_POST['checkbox-52'];

if($chk52 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject52, $content52);
}


$subject53 = trim($_POST['s053']);
$content53 = trim($_POST['c053']);

$chk53 = $_POST['checkbox-53'];

if($chk53 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject53, $content53);
}



$subject54 = trim($_POST['s054']);
$content54 = trim($_POST['c054']);

$chk54 = $_POST['checkbox-54'];

if($chk54 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject54, $content54);
}


$subject55 = trim($_POST['s055']);
$content55 = trim($_POST['c055']);

$chk55 = $_POST['checkbox-55'];

if($chk55 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject55, $content55);
}



$subject56 = trim($_POST['s056']);
$content56 = trim($_POST['c056']);

$chk56 = $_POST['checkbox-56'];

if($chk56 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject56, $content56);
}



$subject57 = trim($_POST['s057']);
$content57 = trim($_POST['c057']);

$chk57 = $_POST['checkbox-57'];

if($chk57 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject57, $content57);
}



$subject58 = trim($_POST['s058']);
$content58 = trim($_POST['c058']);

$chk58 = $_POST['checkbox-58'];

if($chk58 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject58, $content58);
}



$subject59 = trim($_POST['s059']);
$content59 = trim($_POST['c059']);

$chk59 = $_POST['checkbox-59'];

if($chk59 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject59, $content59);
}



$subject60 = trim($_POST['sub60']);
$content60 = trim($_POST['con60']);

$chk60=$_POST['checkbox-60'];

if($chk60 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject60, $content60);
}


$subject61 = trim($_POST['s061']);
$content61 = trim($_POST['c061']);

$chk61 = $_POST['checkbox-61'];

if($chk61 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject61, $content61);
}




$subject62 = trim($_POST['s062']);
$content62 = trim($_POST['c062']);

$chk62 = $_POST['checkbox-62'];

if($chk62 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject62, $content62);
}



$subject63 = trim($_POST['s063']);
$content63 = trim($_POST['c063']);

$chk63 = $_POST['checkbox-63'];

if($chk63 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject63, $content63);
}


$subject64 = trim($_POST['s064']);
$content64 = trim($_POST['c064']);

$chk64 = $_POST['checkbox-64'];

if($chk64 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject64, $content64);
}



$subject65 = trim($_POST['s065']);
$content65 = trim($_POST['c065']);

$chk65 = $_POST['checkbox-65'];

if($chk65 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject65, $content65);
}


$subject66 = trim($_POST['s066']);
$content66 = trim($_POST['c066']);

$chk66 = $_POST['checkbox-66'];

if($chk66 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject66, $content66);
}



$subject67 = trim($_POST['s067']);
$content67 = trim($_POST['c067']);

$chk67 = $_POST['checkbox-67'];

if($chk67 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject67, $content67);
}


$subject68 = trim($_POST['s068']);
$content68 = trim($_POST['c068']);

$chk68 = $_POST['checkbox-68'];

if($chk68 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject68, $content68);
}


$subject69 = trim($_POST['s069']);
$content69 = trim($_POST['c069']);

$chk69 = $_POST['checkbox-69'];

if($chk69 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject69, $content69);
}


$subject70 = trim($_POST['sub70']);
$content70 = trim($_POST['con70']);

$chk70=$_POST['checkbox-70'];

if($chk70 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject70, $content70);
}


$subject71 = trim($_POST['s071']);
$content71 = trim($_POST['c071']);

$chk71 = $_POST['checkbox-71'];

if($chk71 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject71, $content71);
}



$subject72 = trim($_POST['s072']);
$content72 = trim($_POST['c072']);

$chk72 = $_POST['checkbox-72'];

if($chk72 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject72, $content72);
}


$subject73 = trim($_POST['s073']);
$content73 = trim($_POST['c073']);

$chk73 = $_POST['checkbox-73'];

if($chk73 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject73, $content73);
}


$subject74 = trim($_POST['s074']);
$content74 = trim($_POST['c074']);

$chk74 = $_POST['checkbox-74'];

if($chk74 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject74, $content74);
}


$subject75 = trim($_POST['s075']);
$content75 = trim($_POST['c075']);

$chk75 = $_POST['checkbox-75'];

if($chk75 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject75, $content75);
}



$subject76 = trim($_POST['s076']);
$content76 = trim($_POST['c076']);

$chk76 = $_POST['checkbox-76'];

if($chk76 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject76, $content76);
}


$subject77 = trim($_POST['s077']);
$content77 = trim($_POST['c077']);

$chk77 = $_POST['checkbox-77'];

if($chk77 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject77, $content77);
}



$subject78 = trim($_POST['s078']);
$content78 = trim($_POST['c078']);

$chk78 = $_POST['checkbox-78'];

if($chk78 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject78, $content78);
}



$subject79 = trim($_POST['s079']);
$content79 = trim($_POST['c079']);

$chk79 = $_POST['checkbox-79'];

if($chk79 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject79, $content79);
}


$subject80 = trim($_POST['sub80']);
$content80 = trim($_POST['con80']);

$chk80=$_POST['checkbox-80'];

if($chk80 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject80, $content80);
}



$subject81 = trim($_POST['s081']);
$content81 = trim($_POST['c081']);

$chk81 = $_POST['checkbox-81'];

if($chk81 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject81, $content81);
}


$subject82 = trim($_POST['s082']);
$content82 = trim($_POST['c082']);

$chk82 = $_POST['checkbox-82'];

if($chk82 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject82, $content82);
}


$subject83 = trim($_POST['s083']);
$content83 = trim($_POST['c083']);

$chk83 = $_POST['checkbox-83'];

if($chk83 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject83, $content83);
}

$subject84 = trim($_POST['s084']);
$content84 = trim($_POST['c084']);

$chk84 = $_POST['checkbox-84'];

if($chk84 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject84, $content84);
}


$subject85 = trim($_POST['s085']);
$content85 = trim($_POST['c085']);

$chk85 = $_POST['checkbox-85'];

if($chk85 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject85, $content85);
}




$subject86 = trim($_POST['s086']);
$content86 = trim($_POST['c086']);

$chk86 = $_POST['checkbox-86'];

if($chk86 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject86, $content86);
}


$subject87 = trim($_POST['s087']);
$content87 = trim($_POST['c087']);

$chk87 = $_POST['checkbox-87'];

if($chk87 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject87, $content87);
}



$subject88 = trim($_POST['s088']);
$content88 = trim($_POST['c088']);

$chk88 = $_POST['checkbox-88'];

if($chk88 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject88, $content88);
}



$subject89 = trim($_POST['s089']);
$content89 = trim($_POST['c089']);

$chk89 = $_POST['checkbox-89'];

if($chk89 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject89, $content89);
}


$subject90 = trim($_POST['sub90']);
$content90 = trim($_POST['con90']);

$chk90=$_POST['checkbox-90'];

if($chk90 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject90, $content90);
}



$subject91 = trim($_POST['s091']);
$content91 = trim($_POST['c091']);

$chk91 = $_POST['checkbox-91'];

if($chk91 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject91, $content91);
}


$subject92 = trim($_POST['s092']);
$content92 = trim($_POST['c092']);

$chk92 = $_POST['checkbox-92'];

if($chk92 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject92, $content92);
}


$subject93 = trim($_POST['s093']);
$content93 = trim($_POST['c093']);

$chk93 = $_POST['checkbox-93'];

if($chk93 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject93, $content93);
}



$subject94 = trim($_POST['s094']);
$content94 = trim($_POST['c094']);

$chk94 = $_POST['checkbox-94'];

if($chk94 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject94, $content94);
}



$subject95 = trim($_POST['s095']);
$content95 = trim($_POST['c095']);

$chk95 = $_POST['checkbox-95'];

if($chk95 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject95, $content95);
}



$subject96 = trim($_POST['s096']);
$content96 = trim($_POST['c096']);

$chk96 = $_POST['checkbox-96'];

if($chk96 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject96, $content96);
}



$subject97 = trim($_POST['s097']);
$content97 = trim($_POST['c097']);

$chk97 = $_POST['checkbox-97'];

if($chk97 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject97, $content97);
}


$subject98 = trim($_POST['s098']);
$content98 = trim($_POST['c098']);

$chk98 = $_POST['checkbox-98'];

if($chk98 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject98, $content98);
}


$subject99 = trim($_POST['s099']);
$content99 = trim($_POST['c099']);

$chk99 = $_POST['checkbox-99'];

if($chk99 == "on"){

  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject99, $content99);
}

$subject100 = trim($_POST['sub100']);
$content100 = trim($_POST['con100']);

$chk100=$_POST['checkbox-100'];

if($chk100 == "on"){
  $sTotal += 1;
   store_tfs_in_db($taskNumber, $subject100, $content100);
}



if($sTotal > 0 ){
    


$collection = $client->taskAdmin->taskAdmintable;
$result = $collection->find(array("taskID" => $taskNumber));



foreach ($result as $row) {

       $taskownerId =  $row["taskownersId"];         
}

    

$collection->updateOne(['taskID' => $taskNumber], ['$set' => ['s4AprvTfs' => 1 ]]); 
 
 


$collection = $client->tfs->$taskNumber;
 
$collection->updateOne(['ID' => 1], ['$set' => ['sTotal' => $sTotal ]]); 
            
 

 
 
     
           
        $msgLink = "24";


         $ch = curl_init("https://task.help/taskAdmin/mobile_confirmation1.php?msg=$msgLink&un=$taskownerId&tnum=$taskNumber&st=$sTotal");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch);       
                        
     
 
 
 
 
 

   echo 1; 
    
}

else
{
 
 echo 2;
    
}






?>
