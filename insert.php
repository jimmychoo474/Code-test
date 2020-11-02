<?php

$con = mysqli_connect("localhost","root","","charts");

$name= $_POST['name'];
$population=$_POST['population'];


$sql = "UPDATE chart SET population='$population' WHERE newcases='$name' ";



if(mysqli_query($con,$sql))
{
    echo 'Update success.....LGA population replaced, press back to go back !';



}
else{
    echo'Invalid LGA , press back to go back!';
}


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


