<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
define("ITEMS_PER_PAGE", 3);
$users = [
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan'],
    ['first' => 'Areg', 'last' =>'Ghazaryan']
];


$currentPage =1;
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
}
$totalPagecount = ceil(count($users)/ ITEMS_PER_PAGE);
$start = ($currentPage-1) * ITEMS_PER_PAGE;
$limit = ITEMS_PER_PAGE;
if($start + $limit>count($users)) {
  $limit = count($users) - $start;
}
?>
<table class="table table-bordered" id="table">
<thead>
<th class="success">#</th>
<th class="success">First name </th>
<th class="success">Last name </th>
</thead>
<tbody class="table-hover">
<?php
for ($i = $start; $i < $start + $limit; $i++ )  {
        echo '<tr>';
        echo '<td>'  .$i.  '</td>';
        echo '<td>'.$users[$i]['first'].'</td>';
        echo '<td>'.$users[$i]['last'].'</td>';
        echo "</tr>";
}
?>
</tbody>
    <?php
    for ($v = $currentPage; 1 < $v; $v--) {
        if($v == $currentPage-1)
           break;
    };
    for ($x = $currentPage; $x <= $totalPagecount-1;  $x++) {
        if($x == $currentPage+1)
      break;
    };
    ?>
    <nav id="nav">
    <ul class="pagination">
        <li>
            <a href="http://127.0.0.1/ACA%20HOME%20WORKS/HOME%20WORK%20DAY%2017/index2.php?page= <?php echo $v ?>" aria-label="Previous">

                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li><a href="http://127.0.0.1/ACA%20HOME%20WORKS/HOME%20WORK%20DAY%2017/index2.php?page=1">1</a></li>
        <li><a href="http://127.0.0.1/ACA%20HOME%20WORKS/HOME%20WORK%20DAY%2017/index2.php?page=2">2</a></li>
        <li><a href="http://127.0.0.1/ACA%20HOME%20WORKS/HOME%20WORK%20DAY%2017/index2.php?page=3">3</a></li>
        <li><a href="http://127.0.0.1/ACA%20HOME%20WORKS/HOME%20WORK%20DAY%2017/index2.php?page=4">4</a></li>
        <li><a href="http://127.0.0.1/ACA%20HOME%20WORKS/HOME%20WORK%20DAY%2017/index2.php?page=5">5</a></li>
        <li>
            <a href="http://127.0.0.1/ACA%20HOME%20WORKS/HOME%20WORK%20DAY%2017/index2.php?page=<?php echo $x ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>


</html>

