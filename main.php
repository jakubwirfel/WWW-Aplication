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
            <div class="filter_box">
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
            </div>
            <div class="test"></div>
        </main>
    </body>
</html>