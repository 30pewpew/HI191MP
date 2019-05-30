<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../frequency_readmission.php'; ?>
<h1>Table for Frequency of Readmission</h1>

 <table style="width:20%">
  <tr>
    <th>Frequency</th>
    <th>Count</th>
  </tr>
  <tr>
    <td>NO</td>
    <td><font color=white><?php echo $readmitted_no; ?></td>
  </tr>
  <tr>
    <td>< 30 Days</td>
    <td><font color=white><?php echo $readmitted_less30; ?></td>
  </tr>
  <tr>
    <td>> 30 Days</td>
    <td><font color=white><?php echo $readmitted_more30; ?></td>
  </tr>

</table> 

<h5><i>The pie chart below shows that the NO frequency is highest at 53.91% and the < 30 days is lowest at 11.16%.</i></h5>

<h1>Pie Chart for Frequency of Readmission</h1>
<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => round($readmitted_no * 100 / 101766, 2), "legendText" => "NO", "label" => "NO"),
        array("y" => round($readmitted_less30 * 100 / 101766, 2), "legendText" => "< 30 days", "label" => "< 30 days"),
        array("y" => round($readmitted_more30 * 100 / 101766, 2), "legendText" => "> 30 days", "label" => "> 30 days"),
    );
?>

<script type="text/javascript">
    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Readmission Frequency"
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