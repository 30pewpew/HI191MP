<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_per_race.php'; ?>
<h1>Table for Readmissions per Race</h1>

 <table style="width:20%">
  <tr>
    <th>Race</th>
    <th>Count</th>
  </tr>
  <tr>
    <td>Caucasian</td>
    <td><font color=white><?php echo $caucasian; ?></td>
  </tr>
  <tr>
    <td>African American</td>
    <td><font color=white><?php echo $african_american; ?></td>
  </tr>
  <tr>
    <td>Asian</td>
    <td><font color=white><?php echo $asian; ?></td>
  </tr>
  <tr>
    <td>Hispanic</td>
    <td><font color=white><?php echo $hispanic; ?></td>
  </tr>
  <tr>
    <td>Other</td>
    <td><font color=white><?php echo $other; ?></td>
  </tr>
  <tr>
    <td>Unknown</td>
    <td><font color=white><?php echo $unknown; ?></td>
  </tr>
</table> 

<h5><i>The pie chart below shows that the Caucasians comprise majority of the races at 76.15% and the Asians comprise the least at 0.48%.</i></h5>

<h1>Pie Chart for Readmissions per Race</h1>



<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => round($caucasian * 100 / 46902, 2), "legendText" => "Caucasian", "label" => "Caucasian"),
        array("y" => round($african_american * 100 / 46902, 2), "legendText" => "African American", "label" => "African American"),
        array("y" => round($asian * 100 / 46902, 2), "legendText" => "Asian", "label" => "Asian"),
        array("y" => round($hispanic * 100 / 46902, 2), "legendText" => "Hispanic", "label" => "Hispanic"),
        array("y" => round($other * 100 / 46902, 2), "legendText" => "Other", "label" => "Other"),
        array("y" => round($unknown * 100 / 46902, 2), "legendText" => "Unknown", "label" => "Unknown"),
    );    
?>

 
<script type="text/javascript">
    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Readmissions per Race"
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