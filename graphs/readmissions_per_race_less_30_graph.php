<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_per_race_less_30.php'; ?>
<h1>Doughnut Chart</h1>
<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => round($caucasian_less30 * 100 / 11357, 2), "legendText" => "Caucasian", "label" => "Caucasian"),
        array("y" => round($african_american_less30 * 100 / 11357, 2), "legendText" => "African American", "label" => "African American"),
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