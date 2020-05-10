<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_per_race_less_30.php'; ?>
<h1>Table for Readmissions per Race < 30 days</h1>

 <table style="width:20%">
  <tr>
    <th>Race</th>
    <th>Count</th>
  </tr>
  <tr>
    <td>Caucasian</td>
    <td><font color=black><?php echo $caucasian_less30; ?></td>
  </tr>
  <tr>
    <td>African American</td>
    <td><font color=black><?php echo $african_american_less30; ?></td>
  </tr>
  <tr>
    <td>Asian</td>
    <td><font color=black><?php echo $asian_less30; ?></td>
  </tr>
  <tr>
    <td>Hispanic</td>
    <td><font color=black><?php echo $hispanic_less30; ?></td>
  </tr>
  <tr>
    <td>Other</td>
    <td><font color=black><?php echo $other_less30; ?></td>
  </tr>
  <tr>
    <td>Unknown</td>
    <td><font color=black><?php echo $unknown_less30; ?></td>
  </tr>
</table> 

<h5><i>The pie chart below shows that the Caucasians comprise majority of the races readmitted < 30 days at 75.65% and the Asians  comprise the least at 0.57% of the races readmitted < 30 days.</i></h5>

<h1>Pie Chart for Readmissions by Race < 30 days</h1>
<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => round($caucasian_less30 * 100 / 11357, 2), "legendText" => "Caucasian", "label" => "Caucasian"),
        array("y" => round($african_american_less30 * 100 / 11357, 2), "legendText" => "African American", "label" => "African American"),
        array("y" => round($asian_less30 * 100 / 11357, 2), "legendText" => "Asian", "label" => "Asian"),
        array("y" => round($hispanic_less30 * 100 / 11357, 2), "legendText" => "Hispanic", "label" => "Hispanic"),
        array("y" => round($other_less30 * 100 / 11357, 2), "legendText" => "Other", "label" => "Other"),
        array("y" => round($unknown_less30 * 100 / 11357, 2), "legendText" => "Unknown", "label" => "Unknown"),
    );
?>

<script type="text/javascript">
    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Readmissions per Race (in less than 30 days)"
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