<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_by_age_group.php'; ?>
<h1>Table for Readmissions by Age Group</h1>

 <table style="width:40%">
  <tr>
    <th>Readmissions by Age Group</th>
    <th>Count</th>
  </tr>
  <tr>
    <td>[0 - 10)</td>
    <td><font color=white><?php echo $zero; ?></td>
  </tr>
  <tr>
    <td>[10 - 20)</td>
    <td><font color=white><?php echo $ten; ?></td>
  </tr>
  <tr>
    <td>[20 - 30)</td>
    <td><font color=white><?php echo $twenty; ?></td>
  </tr>
  <tr>
    <td>[30 - 40)</td>
    <td><font color=white><?php echo $thirty; ?></td>
  </tr>
  <tr>
    <td>[40 - 50)</td>
    <td><font color=white><?php echo $forty; ?></td>
  </tr>
  <tr>
    <td>[50 - 60)</td>
    <td><font color=white><?php echo $fifty; ?></td>
  </tr>
  <tr>
    <td>[60 - 70)</td>
    <td><font color=white><?php echo $sixty; ?></td>
  </tr>
  <tr>
    <td>[70 - 80)</td>
    <td><font color=white><?php echo $seventy; ?></td>
  </tr>
  <tr>
    <td>[80 - 90)</td>
    <td><font color=white><?php echo $eighty; ?></td>
  </tr>
  <tr>
    <td>[90 - 100)</td>
    <td><font color=white><?php echo $ninety; ?></td>
  </tr>


</table> 

<h5><i>The pie chart below shows that the [70-80) age group is highest at 26.75% and the [0-10) age group is lowest at 0.06%.</i></h5>

<h1>Pie Chart for Readmissions by Age Group</h1>
<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => round($zero * 100 / 46902, 2), "legendText" => "0 - 10", "label" => "[0 - 10)"),
        array("y" => round($ten * 100 / 46902, 2), "legendText" => "10 - 19", "label" => "[10 - 20)"),
        array("y" => round($twenty * 100 / 46902, 2), "legendText" => "20 - 29", "label" => "[20 - 30)"),
        array("y" => round($thirty * 100 / 46902, 2), "legendText" => "30 - 39", "label" => "[30 - 40)"),
        array("y" => round($forty * 100 / 46902, 2), "legendText" => "40 - 49", "label" => "[40 - 50)"),
        array("y" => round($fifty * 100 / 46902, 2), "legendText" => "50 - 59", "label" => "[50 - 60)"),
        array("y" => round($sixty * 100 / 46902, 2), "legendText" => "60 - 69", "label" => "[60 - 70)"),
        array("y" => round($seventy * 100 / 46902, 2), "legendText" => "70 - 79", "label" => "[70 - 80)"),
        array("y" => round($eighty * 100 / 46902, 2), "legendText" => "80 - 89", "label" => "[80 - 90)"),
        array("y" => round($ninety * 100 / 46902, 2), "legendText" => "90 - 99", "label" => "[90 - 100)"),
    );
?>



<script type="text/javascript">
    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Readmissions By Age Group"
            },
            animationEnabled: true,
            legend: {
                fontSize: 20,
                fontFamily: "Helvetica"
            },
            theme: "light2",
            data: [
            {
                type: "pie",
                indexLabelFontFamily: "Garamond",
                indexLabelFontSize: 20,
                indexLabel: "{label} {y}%",
                startAngle: -20,
                showInLegend: true,
                toolTipContent: "{legendText} {y}%",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        chart.render();
    });
</script>



<?php include '../footer.php'; ?>