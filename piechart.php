<?php
  $con = mysqli_connect("localhost","root","","charts");
  if($con){
    echo "database connected";
 
  }
?>


<?php
  $con = mysqli_connect("localhost","root","","charts");
  if($con){
   
    
    $sql = "DELETE FROM `chart` ";
    $query = mysqli_multi_query($con, $sql);
  }
?>

<?php
  require 'simple_html_dom.php';


  $html = file_get_html('https://covidlive.com.au/report/active-cases-by-lga');

  
   
$list0 = strip_tags($html->find('td[class="COL1 LGA"]',0)->plaintext);      
$list1 = strip_tags($html->find('td[class="COL1 LGA"]',1)->plaintext);
$list2 = strip_tags($html->find('td[class="COL1 LGA"]',2)->plaintext);
$list3 = strip_tags($html->find('td[class="COL1 LGA"]',3)->plaintext);
$list4 = strip_tags($html->find('td[class="COL1 LGA"]',4)->plaintext);
$list5 = strip_tags($html->find('td[class="COL1 LGA"]',5)->plaintext);
$list6 = strip_tags($html->find('td[class="COL1 LGA"]',6)->plaintext);
$list7 = strip_tags($html->find('td[class="COL1 LGA"]',7)->plaintext);
$list8 = strip_tags($html->find('td[class="COL1 LGA"]',8)->plaintext);
$list9 = strip_tags($html->find('td[class="COL1 LGA"]',9)->plaintext);
$list10 = strip_tags($html->find('td[class="COL1 LGA"]',10)->plaintext);
$list11 = strip_tags($html->find('td[class="COL1 LGA"]',11)->plaintext);
$list12 = strip_tags($html->find('td[class="COL1 LGA"]',12)->plaintext);
$list13 = strip_tags($html->find('td[class="COL1 LGA"]',13)->plaintext);
$list14 = strip_tags($html->find('td[class="COL1 LGA"]',14)->plaintext);
$list15 = strip_tags($html->find('td[class="COL1 LGA"]',15)->plaintext);
$list16 = strip_tags($html->find('td[class="COL1 LGA"]',16)->plaintext);
$list17 = strip_tags($html->find('td[class="COL1 LGA"]',17)->plaintext);
$list18 = strip_tags($html->find('td[class="COL1 LGA"]',18)->plaintext);
$list19 = strip_tags($html->find('td[class="COL1 LGA"]',19)->plaintext);
$list20 = strip_tags($html->find('td[class="COL1 LGA"]',20)->plaintext);
$list21 = strip_tags($html->find('td[class="COL1 LGA"]',21)->plaintext);
$list22 = strip_tags($html->find('td[class="COL1 LGA"]',22)->plaintext);
$list23 = strip_tags($html->find('td[class="COL1 LGA"]',23)->plaintext);
$list24 = strip_tags($html->find('td[class="COL1 LGA"]',24)->plaintext);
$list25 = strip_tags($html->find('td[class="COL1 LGA"]',25)->plaintext);
$list26 = strip_tags($html->find('td[class="COL1 LGA"]',26)->plaintext);
$list27 = strip_tags($html->find('td[class="COL1 LGA"]',27)->plaintext);
$list28 = strip_tags($html->find('td[class="COL1 LGA"]',28)->plaintext);
$list29 = strip_tags($html->find('td[class="COL1 LGA"]',29)->plaintext);
$list30 = strip_tags($html->find('td[class="COL1 LGA"]',30)->plaintext);
$list31 = strip_tags($html->find('td[class="COL1 LGA"]',31)->plaintext);
$list32 = strip_tags($html->find('td[class="COL1 LGA"]',32)->plaintext);
$list33 = strip_tags($html->find('td[class="COL1 LGA"]',33)->plaintext);
$list34 = strip_tags($html->find('td[class="COL1 LGA"]',34)->plaintext);
$list35 = strip_tags($html->find('td[class="COL1 LGA"]',35)->plaintext);
$list36 = strip_tags($html->find('td[class="COL1 LGA"]',36)->plaintext);
$list37 = strip_tags($html->find('td[class="COL1 LGA"]',37)->plaintext);
$list38 = strip_tags($html->find('td[class="COL1 LGA"]',38)->plaintext);
$list39 = strip_tags($html->find('td[class="COL1 LGA"]',39)->plaintext);
$list40 = strip_tags($html->find('td[class="COL1 LGA"]',40)->plaintext);
$list41 = strip_tags($html->find('td[class="COL1 LGA"]',41)->plaintext);
$list42 = strip_tags($html->find('td[class="COL1 LGA"]',42)->plaintext);
$list43 = strip_tags($html->find('td[class="COL1 LGA"]',43)->plaintext);
$list44 = strip_tags($html->find('td[class="COL1 LGA"]',44)->plaintext);
$list45 = strip_tags($html->find('td[class="COL1 LGA"]',45)->plaintext);
$list46 = strip_tags($html->find('td[class="COL1 LGA"]',46)->plaintext);
$list47 = strip_tags($html->find('td[class="COL1 LGA"]',47)->plaintext);
$list48 = strip_tags($html->find('td[class="COL1 LGA"]',48)->plaintext);
$list49 = strip_tags($html->find('td[class="COL1 LGA"]',49)->plaintext);
$list50 = strip_tags($html->find('td[class="COL1 LGA"]',50)->plaintext);
$list51 = strip_tags($html->find('td[class="COL1 LGA"]',51)->plaintext);
$list52 = strip_tags($html->find('td[class="COL1 LGA"]',52)->plaintext);
$list53 = strip_tags($html->find('td[class="COL1 LGA"]',53)->plaintext);
$list54 = strip_tags($html->find('td[class="COL1 LGA"]',54)->plaintext);
$list55 = strip_tags($html->find('td[class="COL1 LGA"]',55)->plaintext);
$list56 = strip_tags($html->find('td[class="COL1 LGA"]',56)->plaintext);
$list57 = strip_tags($html->find('td[class="COL1 LGA"]',57)->plaintext);
$list58 = strip_tags($html->find('td[class="COL1 LGA"]',58)->plaintext);
$list59 = strip_tags($html->find('td[class="COL1 LGA"]',59)->plaintext);
$list60 = strip_tags($html->find('td[class="COL1 LGA"]',60)->plaintext);
$list61 = strip_tags($html->find('td[class="COL1 LGA"]',61)->plaintext);
$list62 = strip_tags($html->find('td[class="COL1 LGA"]',62)->plaintext);
$list63 = strip_tags($html->find('td[class="COL1 LGA"]',63)->plaintext);
$list64 = strip_tags($html->find('td[class="COL1 LGA"]',64)->plaintext);
$list65 = strip_tags($html->find('td[class="COL1 LGA"]',65)->plaintext);
$list66 = strip_tags($html->find('td[class="COL1 LGA"]',66)->plaintext);
$list67 = strip_tags($html->find('td[class="COL1 LGA"]',67)->plaintext);
$list68 = strip_tags($html->find('td[class="COL1 LGA"]',68)->plaintext);
$list69 = strip_tags($html->find('td[class="COL1 LGA"]',69)->plaintext);
$list70 = strip_tags($html->find('td[class="COL1 LGA"]',70)->plaintext);
$list71 = strip_tags($html->find('td[class="COL1 LGA"]',71)->plaintext);
$list72 = strip_tags($html->find('td[class="COL1 LGA"]',72)->plaintext);
$list73 = strip_tags($html->find('td[class="COL1 LGA"]',73)->plaintext);
$list74 = strip_tags($html->find('td[class="COL1 LGA"]',74)->plaintext);
$list75 = strip_tags($html->find('td[class="COL1 LGA"]',75)->plaintext);
$list76 = strip_tags($html->find('td[class="COL1 LGA"]',76)->plaintext);
$list77 = strip_tags($html->find('td[class="COL1 LGA"]',77)->plaintext);
$list78 = strip_tags($html->find('td[class="COL1 LGA"]',78)->plaintext);
$list79 = strip_tags($html->find('td[class="COL1 LGA"]',79)->plaintext);
$list80 = strip_tags($html->find('td[class="COL1 LGA"]',80)->plaintext);



$cases0 = $html->find('td[class="COL3 ACTIVE"]',0)->plaintext;
$cases1 = $html->find('td[class="COL3 ACTIVE"]',1)->plaintext;
$cases2 = $html->find('td[class="COL3 ACTIVE"]',2)->plaintext;
$cases3 = $html->find('td[class="COL3 ACTIVE"]',3)->plaintext;
$cases4 = $html->find('td[class="COL3 ACTIVE"]',4)->plaintext;
$cases5 = $html->find('td[class="COL3 ACTIVE"]',5)->plaintext;
$cases6 = $html->find('td[class="COL3 ACTIVE"]',6)->plaintext;
$cases7 = $html->find('td[class="COL3 ACTIVE"]',7)->plaintext;
$cases8 = $html->find('td[class="COL3 ACTIVE"]',8)->plaintext;
$cases9 = $html->find('td[class="COL3 ACTIVE"]',9)->plaintext;
$cases10 = $html->find('td[class="COL3 ACTIVE"]',10)->plaintext;
$cases11 = $html->find('td[class="COL3 ACTIVE"]',11)->plaintext;
$cases12 = $html->find('td[class="COL3 ACTIVE"]',12)->plaintext;
$cases13 = $html->find('td[class="COL3 ACTIVE"]',13)->plaintext;
$cases14 = $html->find('td[class="COL3 ACTIVE"]',14)->plaintext;
$cases15 = $html->find('td[class="COL3 ACTIVE"]',15)->plaintext;
$cases16 = $html->find('td[class="COL3 ACTIVE"]',16)->plaintext;
$cases17 = $html->find('td[class="COL3 ACTIVE"]',17)->plaintext;
$cases18 = $html->find('td[class="COL3 ACTIVE"]',18)->plaintext;
$cases19 = $html->find('td[class="COL3 ACTIVE"]',19)->plaintext;
$cases20 = $html->find('td[class="COL3 ACTIVE"]',20)->plaintext;
$cases21 = $html->find('td[class="COL3 ACTIVE"]',21)->plaintext;
$cases22 = $html->find('td[class="COL3 ACTIVE"]',22)->plaintext;
$cases23 = $html->find('td[class="COL3 ACTIVE"]',23)->plaintext;
$cases24 = $html->find('td[class="COL3 ACTIVE"]',24)->plaintext;
$cases25 = $html->find('td[class="COL3 ACTIVE"]',25)->plaintext;
$cases26 = $html->find('td[class="COL3 ACTIVE"]',26)->plaintext;
$cases27 = $html->find('td[class="COL3 ACTIVE"]',27)->plaintext;
$cases28 = $html->find('td[class="COL3 ACTIVE"]',28)->plaintext;
$cases29 = $html->find('td[class="COL3 ACTIVE"]',29)->plaintext;
$cases30 = $html->find('td[class="COL3 ACTIVE"]',30)->plaintext;
$cases31 = $html->find('td[class="COL3 ACTIVE"]',31)->plaintext;
$cases32 = $html->find('td[class="COL3 ACTIVE"]',32)->plaintext;
$cases33 = $html->find('td[class="COL3 ACTIVE"]',33)->plaintext;
$cases34 = $html->find('td[class="COL3 ACTIVE"]',34)->plaintext;
$cases35 = $html->find('td[class="COL3 ACTIVE"]',35)->plaintext;
$cases36 = $html->find('td[class="COL3 ACTIVE"]',36)->plaintext;
$cases37 = $html->find('td[class="COL3 ACTIVE"]',37)->plaintext;
$cases38 = $html->find('td[class="COL3 ACTIVE"]',38)->plaintext;
$cases39 = $html->find('td[class="COL3 ACTIVE"]',39)->plaintext;
$cases40 = $html->find('td[class="COL3 ACTIVE"]',40)->plaintext;
$cases41 = $html->find('td[class="COL3 ACTIVE"]',41)->plaintext;
$cases42 = $html->find('td[class="COL3 ACTIVE"]',42)->plaintext;
$cases43 = $html->find('td[class="COL3 ACTIVE"]',43)->plaintext;
$cases44 = $html->find('td[class="COL3 ACTIVE"]',44)->plaintext;
$cases45 = $html->find('td[class="COL3 ACTIVE"]',45)->plaintext;
$cases46 = $html->find('td[class="COL3 ACTIVE"]',46)->plaintext;
$cases47 = $html->find('td[class="COL3 ACTIVE"]',47)->plaintext;
$cases48 = $html->find('td[class="COL3 ACTIVE"]',48)->plaintext;
$cases49 = $html->find('td[class="COL3 ACTIVE"]',49)->plaintext;
$cases50 = $html->find('td[class="COL3 ACTIVE"]',50)->plaintext;
$cases51 = $html->find('td[class="COL3 ACTIVE"]',51)->plaintext;
$cases52 = $html->find('td[class="COL3 ACTIVE"]',52)->plaintext;
$cases53 = $html->find('td[class="COL3 ACTIVE"]',53)->plaintext;
$cases54 = $html->find('td[class="COL3 ACTIVE"]',54)->plaintext;
$cases55 = $html->find('td[class="COL3 ACTIVE"]',55)->plaintext;
$cases56 = $html->find('td[class="COL3 ACTIVE"]',56)->plaintext;
$cases57 = $html->find('td[class="COL3 ACTIVE"]',57)->plaintext;
$cases58 = $html->find('td[class="COL3 ACTIVE"]',58)->plaintext;
$cases59 = $html->find('td[class="COL3 ACTIVE"]',59)->plaintext;
$cases60 = $html->find('td[class="COL3 ACTIVE"]',60)->plaintext;
$cases61 = $html->find('td[class="COL3 ACTIVE"]',61)->plaintext;
$cases62 = $html->find('td[class="COL3 ACTIVE"]',62)->plaintext;
$cases63 = $html->find('td[class="COL3 ACTIVE"]',63)->plaintext;
$cases64 = $html->find('td[class="COL3 ACTIVE"]',64)->plaintext;
$cases65 = $html->find('td[class="COL3 ACTIVE"]',65)->plaintext;
$cases66 = $html->find('td[class="COL3 ACTIVE"]',66)->plaintext;
$cases67 = $html->find('td[class="COL3 ACTIVE"]',67)->plaintext;
$cases68 = $html->find('td[class="COL3 ACTIVE"]',68)->plaintext;
$cases69 = $html->find('td[class="COL3 ACTIVE"]',69)->plaintext;
$cases70 = $html->find('td[class="COL3 ACTIVE"]',70)->plaintext;
$cases71 = $html->find('td[class="COL3 ACTIVE"]',71)->plaintext;
$cases72 = $html->find('td[class="COL3 ACTIVE"]',72)->plaintext;
$cases73 = $html->find('td[class="COL3 ACTIVE"]',73)->plaintext;
$cases74 = $html->find('td[class="COL3 ACTIVE"]',74)->plaintext;
$cases75 = $html->find('td[class="COL3 ACTIVE"]',75)->plaintext;
$cases76 = $html->find('td[class="COL3 ACTIVE"]',76)->plaintext;
$cases77 = $html->find('td[class="COL3 ACTIVE"]',77)->plaintext;
$cases78 = $html->find('td[class="COL3 ACTIVE"]',78)->plaintext;
$cases79 = $html->find('td[class="COL3 ACTIVE"]',79)->plaintext;
$cases80 = $html->find('td[class="COL3 ACTIVE"]',80)->plaintext;



$sql = "INSERT INTO chart (newcases, number, population)
VALUES ('$list0', '$cases0','270487');";
$sql .= "INSERT INTO chart (newcases, number,population )
VALUES ('$list1', '$cases1','209523');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list2', '$cases2','164184');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list3', '$cases3','233471');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list4', '$cases4','131631');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list5', '$cases5','164895');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list6', '$cases6','353872');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list7', '$cases7','168201');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list8', '$cases8','97751');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list9', '$cases9','93448');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list10', '$cases10','178955');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list11', '$cases11','230238');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list12', '$cases12','106862');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list13', '$cases13','142643');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list14', '$cases14','156511');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list15', '$cases15','202847');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list16', '$cases16','185767');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list17', '$cases17','115601');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list18', '$cases18','178739');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list19', '$cases19','101495');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list20', '$cases20','12814');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list21', '$cases21','11845');";

$query = mysqli_multi_query($con, $sql);

 
mysqli_close($con);

?>


<?php


$con = mysqli_connect("localhost","root","","charts");


$sql = "INSERT INTO chart (newcases, number,population)
VALUES ('$list22', '$cases22','109505');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list23', '$cases23','36320');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list24', '$cases24','53396');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list25', '$cases25','14037');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list26', '$cases26','183199');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list27', '$cases27','6124');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list28', '$cases28','37622');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list29', '$cases29','112159');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list30', '$cases30','13186');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list31', '$cases31','21564');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list32', '$cases32','16020');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list33', '$cases33','47316');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list34', '$cases34','10472');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list35', '$cases35','19674');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list36', '$cases36','23722');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list37', '$cases37,'118093');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list38', '$cases38','168201');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list39', '$cases39','258934');";


$query = mysqli_multi_query($con, $sql);

 
mysqli_close($con);

?>

<?php

$con = mysqli_connect("localhost","root","","charts");

$sql = "INSERT INTO chart (newcases, number,population)
VALUES ('$list40', '$cases40','15975');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list41', '$cases41','5588');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list42', '$cases42','19921');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list43', '$cases43','16701');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list44', '$cases44','0');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list45', '$cases45','165782');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list46', '$cases46','164538');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list47', '$cases47','75561');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list48', '$cases48','7504');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list49', '$cases49','50231');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list50', '$cases50','127573');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list51', '$cases51','9176');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list52', '$cases52','118558');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list53', '$cases53','55777');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list54', '$cases54','46082');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list55', '$cases55','29925');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list56', '$cases56','130294');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list57', '$cases57','35049');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list58', '$cases58','185767');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list59', '$cases59','19754');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list60', '$cases60','16953');";


$query = mysqli_multi_query($con, $sql);

 
mysqli_close($con);

?>


<?php


$con = mysqli_connect("localhost","root","","charts");


$sql = "INSERT INTO chart (newcases, number,population)
VALUES ('$list61', '$cases61'.'14570');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list62', '$cases62','65094');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list63', '$cases63','11402');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list64', '$cases64','0');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list65', '$cases65','7472');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list66', '$cases66','2940');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list67', '$cases67','29914');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list68', '$cases68','16100');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list69', '$cases69','117768');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list70', '$cases70','10781');";

$query = mysqli_multi_query($con, $sql);

 
mysqli_close($con);

?>

<?php

$con = mysqli_connect("localhost","root","","charts");



$sql = "INSERT INTO chart (newcases, number,population)
VALUES ('$list71', '$cases71','33456');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list72', '$cases72','20649');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list73', '$cases73','6040');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list74', '$cases74','29187');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list75', '$cases75','35181');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list76', '$cases76','44380');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list77', '$cases77','3841');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list78', '$cases78','42083');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list79', '$cases79','101495');";
$sql .= "INSERT INTO chart (newcases, number,population)
VALUES ('$list80', '$cases80','6639 ');";

                        
 


 $query = mysqli_multi_query($con, $sql);

 
mysqli_close($con);


?>





<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['newcases', 'number'],
         <?php


         $con = mysqli_connect("localhost","root","","charts");

         


         $sql = "SELECT * FROM chart";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['newcases']."',".$result['number']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Daily active cases'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>





</html>


    
    <table>
        <tr>
     <th>LGA</th>
     <th style="padding:20px"> Active Cases</th>
     <th style="padding:40px">Population</th>
     
    
 

        </tr>


<?php

$sql = "SELECT newcases, number,population FROM chart";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row["newcases"].'<td>';
    echo '<td>'.$row["number"].'<td>';
    echo '<td>'.$row["population"].'<td>';
    echo '<tr>';
  }
} else {
  echo "0 results";
}



$con->close();

?>
</table>




<html>
<body>

<h2>UPDATE LGA POPULATION</h2>

<form action="insert.php" method="POST">

  
  LGA Name <input type="text" name="name" ><br>
 
  Population <input type="text"  name="population" ><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>

