<?php 
$location = " ";
$persons = " ";
    if (isset($_GET['lowest'])) {
        $query = "SELECT * FROM hotels ORDER BY price ASC";
        $results = mysqli_query($db, $query);
    } elseif (isset($_GET['highest'])){
        $query = "SELECT * FROM hotels ORDER BY price DESC";
        $results = mysqli_query($db, $query);
    }else {
        $query = "SELECT * FROM hotels";
        $results = mysqli_query($db, $query);
    }
    if (isset($_SESSION['filter']) && (isset($_GET['highest']))) {
        echo $location;
        unset($_SESSION['filter']);
        unset($_GET['highest']);
    }
    if (isset($_GET['filter'])) {
        $_SESSION['filter'] = "start";
        $location = $_GET['destination'];
        $checkin = $_GET['checkin'];
        $checkout = $_GET['checkout'];
        $adults = $_GET['adults'];
        $children = $_GET['children'];

        $persons = $adults + $children;

        $query = "SELECT * FROM hotels WHERE location LIKE '$location%' AND persons >= $persons";
        $results = mysqli_query($db, $query);
    }
    while ($row = mysqli_fetch_array($results) ) { 
?>
<article>
    <figure class="img_hotel">
        <img src="<?php echo $row['main_img']?>" alt="<?php echo $row['name']?> picture"/>
    </figure>
    <div class="hotel_box">
        <div class="hotel_location">
            <p><?php echo $row['location']?></p> | <p><?php echo $row['place']?></p>
        </div>
        <div class="hotel_name">
            <h1><?php echo $row['name']?></h1>
        </div>
        <div class="hotel_info_box">
            <div class="hotel_area">
                <div>
                    <img src="./assets/living_area.svg" alt="living area" />
                    <span>Living area: <?php echo $row['l_area']?>m2</span>
                </div>
                <div>
                    <img src="./assets/persons.svg" alt="persons" />
                    <span>Persons: <?php echo $row['persons']?></span>
                </div>
                <div>
                    <img src="./assets/bedrooms.svg" alt="bedrooms" />
                    <span>Bedrooms: <?php echo $row['bedrooms']?></span>
                </div>
                <div>
                    <img src="./assets/bathrooms.svg" alt="bathrooms" />
                    <span>Bathrooms: <?php echo $row['bathrooms']?></span>
                </div>
            </div>
            <div class="hotel_price">
                <h1>FROM</h1>
                <span class="daily_contet"><?php echo $row['price']?>$</span>
                <span>DAILY</span>
                <span class="weekly_contet"><?php echo $row['price']*7?>$</span>
                <span>WEEKLY</span>
            </div>
        </div>
    </div>
</article>
<?php   } ?>