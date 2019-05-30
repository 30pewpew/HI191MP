<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_by_time.php'; ?>
<h1>Table for Readmissions by Total Number of Days Confined</h1>

 <table style="width:20%">
  <tr>
    <th>Time</th>
    <th>Count</th>
  </tr>
  <tr>
    <td>6 days or less</td>
    <td><font color=white><?php echo $less_week; ?></td>
  </tr>
  <tr>
    <td>7 - 13 days</td>
    <td><font color=white><?php echo $week_more; ?></td>
  </tr>
  <tr>
    <td>14 days</td>
    <td><font color=white><?php echo $two_weeks; ?></td>
  </tr>
</table> 

<h5><i>The pie chart below shows that the 6 days or less time is highest at 77.69% and the 14 days time is lowest at 1.09%.</i></h5>

<h1>Pie Chart for Readmissions by Total Number of Days Confined</h1>

<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => round($less_week * 100 / 46902, 2), "legendText" => "6 days or less", "label" => "6 days or less"),
        array("y" => round($week_more * 100 / 46902, 2), "legendText" => "7 to 13 days", "label" => "7 - 13 days"),
        array("y" => round($two_weeks * 100 / 46902, 2), "legendText" => "14 days", "label" => "14 days"),
    );
?>

<script type="text/javascript">
    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Readmissions by Total Number of Days in Hospital"
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