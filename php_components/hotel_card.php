<?php 
    if (isset($_GET['filter'])) {
        $location = $_GET['destination'];
        $checkin = $_GET['checkin'];
        $checkout = $_GET['checkout'];
        $adults = $_GET['adults'];
        $children = $_GET['children'];

        $persons = $adults + $children;
        $_SESSION["hotel_location"] = $location;
        $_SESSION["hotel_persons"] = $persons;
        $query = "SELECT * FROM hotels WHERE location LIKE '$location%' AND persons >= $persons";
        $results = mysqli_query($db, $query);
    } else {
        $query = "SELECT * FROM hotels";
        $results = mysqli_query($db, $query);
    }

    if (isset($_GET['reset'])) {
        unset($_SESSION["hotel_location"]);
        unset($_SESSION["hotel_persons"]);
        $query = "SELECT * FROM hotels";
        $results = mysqli_query($db, $query);
    } elseif (isset($_GET['reset']) || isset($_GET['lowest'])) {
        $query = "SELECT * FROM hotels ORDER BY `price` ASC";
        $results = mysqli_query($db, $query);
    } elseif (isset($_GET['reset']) || isset($_GET['highest'])) {
        $query = "SELECT * FROM hotels ORDER BY `price` DESC";
        $results = mysqli_query($db, $query);
    } elseif (isset($_GET['reset']) || isset($_GET['normal'])) {
        $query = "SELECT * FROM hotels";
        $results = mysqli_query($db, $query);
    }

    if (isset($_SESSION["hotel_location"]) && (isset($_GET['highest']))) {
        $location = $_SESSION["hotel_location"];
        $persons = $_SESSION["hotel_persons"];
        $query = "SELECT * FROM hotels WHERE location LIKE '$location%' AND persons >= $persons ORDER BY `price` DESC";
        $results = mysqli_query($db, $query);
    } elseif (isset($_SESSION["hotel_location"]) && (isset($_GET['lowest']))) {
        $location = $_SESSION["hotel_location"];
        $persons = $_SESSION["hotel_persons"];
        $query = "SELECT * FROM hotels WHERE location LIKE '$location%' AND persons >= $persons ORDER BY `price` ASC";
        $results = mysqli_query($db, $query);
    } elseif (isset($_SESSION["hotel_location"]) && (isset($_GET['normal']))) {
        $location = $_SESSION["hotel_location"];
        $persons = $_SESSION["hotel_persons"];
        $query = "SELECT * FROM hotels WHERE location LIKE '$location%' AND persons >= $persons";
        $results = mysqli_query($db, $query);
    } 

    while ($row = mysqli_fetch_array($results) ) { 
?>
<a href="./hotel.php"><article class="hotel_card">
    <figure class="img_card_hotel">
        <img src="<?php echo $row['main_img']?>" alt="<?php echo $row['name']?> picture"/>
    </figure>
    <div class="hotel_card_box">
        <div class="hotel_card_location">
            <p><?php echo $row['location']?></p> | <p><?php echo $row['place']?></p>
        </div>
        <div class="hotel_card_name">
            <h1><?php echo $row['name']?></h1>
        </div>
        <div class="hotel_card_info_box">
            <div class="hotel_card_area">
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
            <div class="hotel_card_price">
                <h1>FROM</h1>
                <span class="daily_contet"><?php echo $row['price']?>$</span>
                <span>DAILY</span>
                <span class="weekly_contet"><?php echo $row['price']*7?>$</span>
                <span>WEEKLY</span>
            </div>
        </div>
    </div>
</article></a>
<?php   } ?>