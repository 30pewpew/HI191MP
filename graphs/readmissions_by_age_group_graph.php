<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<?php include '../readmissions_by_age_group.php'; ?>
<h1>Doughnut Chart</h1>
<div id="chartContainer"></div>

<?php
    $dataPoints = array(
        array("y" => ($zero * 100 / 101766), "legendText" => "zero", "label" => "[0 - 10]"),
        array("y" => ($ten * 100 / 101766), "legendText" => "ten", "label" => "[10 - 20]"),
        array("y" => ($twenty * 100 / 101766), "legendText" => "twenty", "label" => "[20 - 30]"),
        array("y" => ($thirty * 100 / 101766), "legendText" => "thirty", "label" => "[30 - 40]"),
        array("y" => ($forty * 100 / 101766), "legendText" => "forty", "label" => "[40 - 50]"),
        array("y" => ($fifty * 100 / 101766), "legendText" => "fifty", "label" => "[50 - 60]"),
        array("y" => ($sixty * 100 / 101766), "legendText" => "sixty", "label" => "[60 - 70]"),
        array("y" => ($seventy * 100 / 101766), "legendText" => "seventy", "label" => "[70 - 80]"),
        array("y" => ($eighty * 100 / 101766), "legendText" => "eighty", "label" => "[80 - 90]"),
        array("y" => ($ninety * 100 / 101766), "legendText" => "ninety", "label" => "[90 - 100]"),
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
                type: "doughnut",
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