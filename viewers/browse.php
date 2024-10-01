<?php ?>

<body>


<main class="right-box">
    <!-- Before queryStringRef -->
<p>Indicate that user needs to select a race</p>

<!-- After queryStringRef -->
<h2>Results for $raceName</h2>
<div class="results-table">
<table>
<tr>
    <th> Position </th>
    <th> Racer Name</th>
    <th> Team Name</th>
    <th> Q1 </th>
    <th> Q2 </th>
    <th> Q3 </th>
</tr>

<!-- Load in the racer data from the race data. Spilt it into the correct TDs -->
<?php foreach ($variable as $key => $value) {
    # code...
    echo "<tr>";
        echo "<td></td>"; //
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
    echo "</tr>";
}
?>

</table>

</div>
</main>


<!-- list of all the races in the season, sorted -->
<!-- before -->
<aside class="left-box">
<table>
<tr>
    <th>RND</th>
    <th>Circuit</th>
</tr>

    <!-- <?php foreach ($variable as $key => $value) {
        // race/round whatever
        echo "<tr>";
            echo "<td>$lnumVar</td>";
            echo "<td>$raceName</td>";
            echo '<td><a href="goTo=>results.php?ref=XXX"><button type="submit">Results</button></a></td>';
        echo "</tr>";
        
    }


    ?> -->


</table>      
</aside>
</body>
</html>