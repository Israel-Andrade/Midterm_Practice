<!DOCTYPE html>
<html>
    <head>
        <title>
            Practice Exam
        </title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    
    <?php
    include 'credentials.php';
    $sql = "SELECT * FROM mp_town WHERE mp_town.population >50000 AND mp_town.population <80000";

    $sql2 = "SELECT mp_town.town_name, mp_county.county_name, mp_town.population
FROM mp_town
INNER JOIN mp_county ON mp_town.county_id = mp_county.county_id
ORDER BY mp_town.population DESC ";
    
    $sql3 = "SELECT SUM(mp_town.population), mp_county.county_name from mp_town, mp_county where mp_town.county_id = mp_county.county_id group by mp_county.county_id order by mp_county.county_name;";
    ?>
</html>