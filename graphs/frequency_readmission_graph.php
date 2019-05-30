<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../frequency_readmission.php'; ?>
<h1>Doughnut Chart</h1>
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