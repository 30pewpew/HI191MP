<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_by_time.php'; ?>
<h1>Doughnut Chart</h1>
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