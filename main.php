<?php include ("./server/server.php") ?>
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body class="main_body">
    <div class="bg_img"></div>
        <main class="main_page">
            <?php include "nav.php"?>
            <section class="filter_box">
                <div class="filter">
                <h1>Rent your heaven on Earth</h1>
                <form autocomplete="off" id="filter-form" class="filter_form" action="/" accept-charset="UTF-8" method="post">
                <div class="filter_group">
                    <label>Destination</label>
                    <input name="destination"  type="text" id="destination" class="input_button" placeholder="Anywhere"/>
                </div>
                <div class="filter_group_row">
                    <div class="filter_group_row_box">
                        <label>Checkin</label>
                        <input name="checkin" type="date" id="checkin" class="input_row left" value="dd-mm-rrrr"/>
                    </div>
                    <div class="filter_group_row_box">
                        <label>Checkout</label>
                        <input name="checkout" type="date" id="checkout" class="input_row right" value="dd-mm-rrrr"/>
                    </div>
                </div>
                <div class="filter_group_row">
                    <div class="filter_group_row_box">
                        <label>Adults</label>
                        <select name="adults" id="adults" class="input_row left">
                            <option selected value="1">1 adult</option>
                            <option value="2">2 adults</option>
                            <option value="3">3 adults</option>
                            <option value="4">4 adults</option>
                            <option value="5">5 adults</option>
                            <option value="6">6 adults</option>
                            <option value="7">7 adults</option>
                            <option value="8">8 adults</option>
                        </select>
                    </div>
                    <div class="filter_group_row_box">
                        <label>Children</label>
                        <select name="kids" id="kids" class="input_row right">
                            <option selected value="0">0 children</option>
                            <option value="1">1 children</option>
                            <option value="2">2 children</option>
                            <option value="3">3 children</option>
                            <option value="4">4 children</option>
                            <option value="5">5 children</option>
                        </select>
                    </div>
                </div>
                <input type="submit" name="filter" value="SEARCH" class="submit_button" />
                </form>
                </div>
            </section>
            <section class="content_change">
                    <div class="title">
                        <h1>Villas for you</h1>
                    </div>
                    <div class="sort">
                        <p>Sort by:</p>
                        <div class="dropdown_box">
                            <span>--<i class="fas fa-angle-down"></i></span>
                            <div class="dropdown-content">
                                <a href="#">--</a>
                                <a href="#">Popular</a>
                                <a href="#">Lowest price</a>
                                <a href="#">Highest price</a>
                            </div>
                        </div>
                    </div>
                    <div class="map_show_box">
                       <span>Show map</span>
                       <i class="fas fa-map"></i>
                    </div>
            </section>
            <section class="map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d65178314.71238159!2d12.084603761196673!3d4.379495949476939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1575569956335!5m2!1spl!2spl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </section>
            <section class="hotels grid_box"> 
            <?php 
                $query = "SELECT * FROM hotels";
                $results = mysqli_query($db, $query);
                $query_img = "SELECT * FROM hotels_img";
                $results_img = mysqli_query($db, $query_img);
                while ($row = mysqli_fetch_array($results) ) { 
                    $row_img = mysqli_fetch_array($results_img) 
            ?>
                <article>
                    <figure class="img_hotel">
                        <img src="<?php echo $row_img['url']?>"/>
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
                                    <img src="./assets/living_area.svg" alt="living area"/>
                                    <span>Living area: <?php echo $row['l_area']?></span>
                                </div>
                                <div>
                                    <img src="./assets/persons.svg" alt="persons"/>
                                    <span>Persons: <?php echo $row['persons']?></span>
                                </div>
                                <div>
                                    <img src="./assets/bedrooms.svg" alt="bedrooms"/>
                                    <span>Bedrooms: <?php echo $row['bedrooms']?></span>
                                </div>
                                <div>
                                    <img src="./assets/bathrooms.svg" alt="bathrooms"/>
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
            </section>
        </main>
        <script type="text/javascript">
            window.onscroll = () => {
                const nav = document.querySelector('#navbar');
                if(this.scrollY <= 1) nav.className = ''; else nav.className = 'scroll';
            };
        </script>
    </body>
</html>