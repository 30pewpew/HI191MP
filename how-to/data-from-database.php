<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>

<h1>Render Data From Database</h1>

<?php
     
    $dataPoints = array();
    //Best practice is to create a separate file for handling connection to database
    try{
         // Creating a new connection.
        // Replace your-hostname, your-db, your-username, your-password according to your database
        $link = new \PDO(   'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                            'root', //'root',
                            '', //'',
                            array(
                                \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                \PDO::ATTR_PERSISTENT => false
                            )
                        );
        
        $handle = $link->prepare('select x, y from datapoints'); 
        $handle->execute(); 
        $result = $handle->fetchAll(\PDO::FETCH_OBJ);
            
        foreach($result as $row){
            array_push($dataPoints, array("x"=> $row->x, "y"=> $row->y));
        }
        $link = null;
    }
    catch(\PDOException $ex){
        print($ex->getMessage());
    }
        
    ?>
<div id="chartContainer"></div>

<script type="text/javascript">
$(function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2",
        zoomEnabled: true,
        animationEnabled: true,
        title: {
            text: "Line Chart with Data-Points from DataBase"
        },
        data: [
        {
            type: "line",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }
        ]
    });
    chart.render();
});
</script>

<?php include '../footer.php'; ?>