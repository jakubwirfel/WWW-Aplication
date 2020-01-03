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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body class="main_body">
<?php include ("./php_components/nav.php")?>
    <main class="main_page" >
        <div class="header_fix"></div>
        <section class="user_reservation">
            <h1 class="title">Your reservations:</h1>
            <div class="line"></div>
                <?php 
                    if ($_SESSION['confirm'] === "start" && isset($_SESSION['username']))  {
                        $username = $_SESSION['username'];
                        $query_user = "SELECT `id_user` FROM users WHERE username = '$username'";
                        $results_user = mysqli_query($db, $query_user);
                        $user_row =  mysqli_fetch_array($results_user);
                        $user_id  = $user_row['id_user'];
                        
                        $query_reservations = "SELECT `id_reservation`,`client_name`,`client_surname`,`client_phone`,`client_email`,`adults`,`children`,`check_in`,`check_out`,`price`,`name` FROM reservation JOIN hotels ON reservation.id_hotel = hotels.id_hotel WHERE id_user = '$user_id'";
                        $results_reservations = mysqli_query($db, $query_reservations);
                    } else {
                        header('location: index.php');
                    }
                    while ($row = mysqli_fetch_array($results_reservations) ) { 
                ?>
            <div class="reservations_box">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Hotel informations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reservation id</td>
                            <td><?php echo $row['id_reservation']?></td>
                        </tr>
                        <tr>
                            <td>Villa name</td>
                            <td><?php echo $row['name']?></td>
                        </tr>
                        <tr>
                            <td>Check in</td>
                            <td><?php echo $row['check_in']?></td>
                        </tr>
                        <tr>
                            <td>Check out</td>
                            <td><?php echo $row['check_out']?></td>
                        </tr>
                        <tr>
                            <td>Adults</td>
                            <td><?php echo $row['adults']?></td>
                        </tr>
                        <tr>
                            <td>Children</td>
                            <td><?php echo $row['children']?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><?php echo $row['price']?></td>
                        </tr>
                        <thead>
                            <tr>
                                <th colspan="2">Client informations</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Client name</td>
                            <td><?php echo $row['client_name']?></td>
                        </tr>
                        <tr>
                            <td>Client surname</td>
                            <td><?php echo $row['client_surname']?></td>
                        </tr>
                        <tr>
                            <td>Client phone number</td>
                            <td><?php echo $row['client_phone']?></td>
                        </tr>
                        <tr>
                            <td>Client email</td>
                            <td><?php echo $row['client_email']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="line"></div>
            <?php } ?> 
        </section>
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