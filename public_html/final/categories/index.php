<?php
include_once __DIR__ . '/../app.php';
$page_title = 'All Origami';
include_once __DIR__ . '/../_components/header.php';
?>

<?php include_once __DIR__ . '../../_components/headspace.php';?>


<body>


   
    <h1 class="title">
    All Origami Instructions
</h1>
    
<?php include __DIR__ . '/../_components/categories-nav.php'; ?>
        <?php
// get users data from database
$query = "SELECT * FROM instructions ORDER BY title ASC";
$result = mysqli_query($db_connection, $query);
?>

<div class="all-origami">
          
          <?php include __DIR__ . '/../_components/card.php'; ?>
</div>

 <?php include_once __DIR__ . '/../_components/footer.php'; ?>


    <?php include_once __DIR__ . '/../_components/footer.php';?>
</body>
</html>


