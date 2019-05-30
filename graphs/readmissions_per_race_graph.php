<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_per_race.php'; ?>
<h1>Doughnut Chart</h1>
<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => round($caucasian * 100 / 46902, 2), "legendText" => "Caucasian", "label" => "Caucasian"),
        array("y" => round($african_american * 100 / 46902, 2), "legendText" => "African American", "label" => "African American"),
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