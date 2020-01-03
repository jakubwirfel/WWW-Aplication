<?php include ("./server/server.php") ?>
<?php 
$hotel_name = $_GET['hotel_name'];
$query = "SELECT * FROM hotels WHERE name ='$hotel_name'";
$results = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($results) ) { 
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Villa for Rent</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="main_body">
<?php include ("./php_components/nav.php")?>
    <div class="bg_img_hotel" style= "background-image: url(<?php echo $row['main_img']?>)">
        <div class="bg_center_info_holder">
            <div class="holder_box">
                <div class="hotel_location">
                    <h1><?php echo $row['location']?></h1>
                </div>
                <div class="hotel_name">
                    <h1><?php echo $row['name']?></h1>
                </div>
            </div>
        </div>
    </div>
    <section class="info_box">
        <div class="center_info_holder">
            <div class="info_placeholder">
                <div class="info_column">
                    <div>
                        <img src="./assets/living_area.svg" alt="living area" />
                        <span>Living area: <?php echo $row['l_area']?>m2</span>
                    </div>
                    <div>
                        <img src="./assets/persons.svg" alt="persons" />
                        <span>Persons: <?php echo $row['persons']?></span>
                    </div>
                    <div>
                        <img src="./assets/persons.svg" alt="bedrooms" />
                        <span>Persons (optimal): <?php echo $row['persons']-1?></span>
                    </div>
                    <div>
                        <img src="./assets/bedrooms.svg" alt="bathrooms" />
                        <span>Bedrooms: <?php echo $row['bedrooms']?></span>
                    </div>
                    <div>
                        <img src="./assets/bathrooms.svg" alt="bathrooms" />
                        <span>Bathrooms: <?php echo $row['bathrooms']?></span>
                    </div>
                </div>
                <div class="info_column">
                    <div>
                        <img src="./assets/toilets.svg" alt="living area" />
                        <span>Separete toilets: <?php echo $row['seperate_toilet']?></span>
                    </div>
                    <div>
                        <img src="./assets/distance_to_sea.svg" alt="persons" />
                        <span>Distance to sea: <?php echo $row['distance_to_sea']?></span>
                    </div>
                    <div>
                        <img src="./assets/year_of_build.svg" alt="bedrooms" />
                        <span>Year of build: <?php echo $row['year_of_build']?></span>
                    </div>
                    <div>
                        <img src="./assets/pets.svg" alt="bathrooms" />
                        <span>Pets:  <?php echo $row['pets']?></span>
                    </div>
                    <div>
                        <img src="./assets/young_groups.svg" alt="bathrooms" />
                        <span>Young groups: <?php echo $row['young_groups']?></span>
                    </div>
                </div>
            </div>
            <div class="price_hotel">
                    <div class="price-holder">
                        <p>FROM <span> <?php echo $row['hotel_price']?>$ </span> DAILY</p>
                    </div>
                    <div class="price-holder">
                        <p>FROM <span> <?php echo $row['hotel_price']*7?>$ </span> WEEKLY</p>
                    </div>
                    <a href="reservation.php?hotel_name=<?php echo $row['name']?>" class="button-holder reservation_button">
                        Reserve
                    </a>
            </div>
        </div>
    </section>
    <main class="main_page_hotel" >
    <article class="about_hotel"> 
        <h1>Your stay in <span><?php echo $row['name']?></span></h1>
        <div class="text_holder">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br><br><br>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br><br><br> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br><br><br>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. <br><br><br>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <br><br><br>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
        </div>
    </article>
    <section class="photo_grid">
    <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <img src="<?php echo $row['main_img']?>" alt="Gallery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="<?php echo $row['main_img']?>" alt="Gallery image 2" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="<?php echo $row['main_img']?>" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="<?php echo $row['main_img']?>" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="<?php echo $row['main_img']?>" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="<?php echo $row['main_img']?>" alt="Gallery image 6" class="gallery__img">
                </figure>
            </div>
    </div>
    </section>
    <div class="section_title"><h1>Facilities</h1></div>
    <section class="facilities">
        <div class="facilities_box">
            <div class="row">
                <div class="column">
                    <div>
                        <img src="./assets/living_area.svg" alt="living area" />
                        <span>Living area: <?php echo $row['l_area']?>m2</span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/persons.svg" alt="persons" />
                        <span>Persons: <?php echo $row['persons']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/persons.svg" alt="bedrooms" />
                        <span>Persons (optimal): <?php echo $row['persons']-1?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/bedrooms.svg" alt="bathrooms" />
                        <span>Bedrooms: <?php echo $row['bedrooms']?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div>
                        <img src="./assets/bathrooms.svg" alt="bathrooms" />
                        <span>Bathrooms: <?php echo $row['bathrooms']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/toilets.svg" alt="living area" />
                        <span>Separete toilets: <?php echo $row['seperate_toilet']?></span>
                    </div>
                </div>
                 <div class="column">
                    <div>
                        <img src="./assets/distance_to_sea.svg" alt="persons" />
                        <span>Distance to sea: <?php echo $row['distance_to_sea']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/year_of_build.svg" alt="bedrooms" />
                        <span>Year of build: <?php echo $row['year_of_build']?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div>
                        <img src="./assets/pets.svg" alt="bathrooms" />
                        <span>Pets:  <?php echo $row['pets']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/young_groups.svg" alt="bathrooms" />
                        <span>Young groups: <?php echo $row['young_groups']?></span>
                    </div>
                </div>
                <div class="column">
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="section_title"><h1>Amenities</h1></div>
    <section class="facilities">
        <div class="facilities_box">
            <div class="row">
            <?php if ($row['espresso'] == 1){?>
                <div class="column">
                    <div>
                        <img src="./assets/espresso_machine.svg" alt="living area" />
                        <span>Espresso machine</span>
                    </div>
                </div>
            <?php }?>
            <?php if ($row['baby'] == 1){?>
                <div class="column">
                    <div>
                        <img src="./assets/feeding_chair_babay_cot.svg" alt="persons" />
                        <span>Feeding chair and babay cot</span>
                    </div>
                </div>
            <?php }?>
            <?php if ($row['grill'] == 1){?>
                <div class="column">
                    <div>
                        <img src="./assets/outdoor_grill.svg" alt="bedrooms" />
                        <span>Outdoor grill</span>
                    </div>
                </div>
            <?php }?>
            <?php if ($row['parking'] == 1){?>
                <div class="column">
                    <div>
                        <img src="./assets/parking.svg" alt="bathrooms" />
                        <span>Parking</span>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php }?>
            <?php if ($row['pool'] == 1){?>
                <div class="column">
                    <div>
                        <img src="./assets/pool.svg" alt="bathrooms" />
                        <span>Pool</span>
                    </div>
                </div>
            <?php }?>
            <?php if ($row['tv'] == 1){?>
                <div class="column">
                    <div>
                        <img src="./assets/sat_tv.svg" alt="living area" />
                        <span>Sat tv</span>
                    </div>
                </div>
            <?php }?>
            <?php if ($row['washing'] == 1){?>
                 <div class="column">
                    <div>
                        <img src="./assets/washing_machine.svg" alt="persons" />
                        <span>Washing machine</span>
                    </div>
                </div>
            <?php }?>
            <?php if ($row['wifi'] == 1){?>
                <div class="column">
                    <div>
                        <img src="./assets/wifi.svg" alt="bedrooms" />
                        <span>Wifi</span>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </section>
    <hr>
    <div class="section_title"><h1>Distances</h1></div>
    <section class="facilities">
        <div class="facilities_box">
            <div class="row">
                <div class="column">
                    <div>
                        <img src="./assets/distance_airport.svg" alt="living area" />
                        <span>Nearest airport: <?php echo $row['airport']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/distance_beach.svg" alt="persons" />
                        <span>Nearest beach: <?php echo $row['beach']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/distance_city.svg" alt="bedrooms" />
                        <span>Nearest city: <?php echo $row['city']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/distance_pharmacy.svg" alt="bathrooms" />
                        <span>Nearest pharmacy: <?php echo $row['pharmacy']?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div>
                        <img src="./assets/distance_pub_bar.svg" alt="bathrooms" />
                        <span>Nearest pub/bar: <?php echo $row['pub']?></span>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="./assets/distance_restaurant.svg" alt="living area" />
                        <span>Nearest restaurant: <?php echo $row['restaurant']?></span>
                    </div>
                </div>
                 <div class="column">
                    <div>
                        <img src="./assets/distance_to_sea.svg" alt="persons" />
                        <span>Nearest to sea: <?php echo $row['sea']?></span>
                    </div>
                </div>
                <div class="column">
                   
                </div>
            </div>
        </div>
    </section>
    <div class="fix"></div>
    </main>
    <script>
        window.onscroll = () => {
            const nav = document.querySelector('#navbar');
            if (this.scrollY <= 1) nav.className = '';
            else nav.className = 'scroll';
        };
    </script>
</body>
</html>
    <?php }?>