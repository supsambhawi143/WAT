<?php
session_start();  //starting session
//Make connection to database
include('../connection/connection.php');
if (isset($_SESSION)) {
    if (!isset($_SESSION['username'])) {
        header('Location:login.php');
    }
} else {
    header('Location:login.php');
}
$typeQuery = mysqli_query($connection, "SELECT DISTINCT Type from allproducts");
while ($Type = mysqli_fetch_assoc($typeQuery)) {
    $Types[] = $Type;
}
$query = "SELECT * from allproducts where 1=1 ";
if (!empty($_POST)) {
    if (!empty($_POST['Type'])) {
        $query = $query . " and Type like '%" . $_POST['Type'] . "%'";
    }
}

    $categoryQuery = mysqli_query($connection, "SELECT DISTINCT category from allproducts");
    while ($cat = mysqli_fetch_assoc($categoryQuery)) {
        $categories[] = $cat;
    }
    
    $query = "SELECT * from allproducts where 1=1 ";
    if (!empty($_POST)) {
        if (!empty($_POST['search'])) {
            $query = $query . " and (productName like '%" . $_POST['search'] . "%')";
            $query = $query . " or (description like '%" . $_POST['search'] . "%')";
        }
        if (!empty($_POST['category'])) {
            $query = $query . " and category like '%" . $_POST['category'] . "%'";
        }
        if (!empty($_POST['Type'])) {
            $query = $query . " and Type like '%" . $_POST['Type'] . "%'";
        }
        if (!empty($_POST['priceorder'])) {
            $query = $query . " ORDER By price " . $_POST['priceorder'];
        }
    }
    $result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="styllee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <h1 style="font-size:180%;">HEALTHLY DERMA</h1>
    </div>
    <p align="right">
       Return to dashboard <a href="dashboard.php">Dashboard</a>|<a href="logout.php">Logout</a>
    </p>
    <h2>OUR PRODUCTS </h2>
    <div class="topnav">

        <form method="POST" action="sortsearch.php">
            <?php
            error_reporting(0);
            ?>
            <div class="search-container">
                <input type="text" name="search" placeholder="Search" value="<?php if (isset($_POST['search']))
                echo $_POST['search']; ?>">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>

    <form method="POST" action="sortsearch.php">
        <?php
        error_reporting(0);
        ?>
        <div id="mySidenav" class="sidenav">
            <h2><Strong>Search by multiple criteria:</Strong></h2>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <p>Search by Type:<select name="Type">
                    <option value="">--select type --</option>
                    <?php
                    foreach ($Types as $Type) {
                        $TypeTitle = $Type['Type']
                            ?>
                        <option value="<?php echo $TypeTitle; ?>" <?php if (isset($_POST['Type']))if ($_POST['Type'] == $TypeTitle)
                          echo "selected"; ?>>
                            <?php echo $TypeTitle ?>
                        </option>
                        <?php
                    } ?>
                </select></p>

            <p>Sort by:<br />
                <input name="priceorder" type="radio" value="asc" <?php if ($_POST['priceorder'] == "asc")
                echo "checked"; ?> />Lowest Price
                <input name="priceorder" type="radio" value="desc" <?php if ($_POST['priceorder'] == "desc")
                echo "checked"; ?> />Highest price<br /><br />
                <input type="submit" id="submit" value="Submit">
            </p>

        </div>

        <p style="text-align:right">
        Search by category:<select name="category">
                <option value="">--select category --</option>
                <?php
                foreach ($categories as $category) {
                    $categoryTitle = $category['category']
                        ?>
                    <option value="<?php echo $categoryTitle; ?>" <?php if (isset($_POST['category']))if ($_POST['category'] == $categoryTitle)
                      echo "selected"; ?>>
                        <?php echo $categoryTitle ?>
                    </option>
                    <?php
                } ?>
            </select> |
            Sort by:
            <input name="priceorder" type="radio" value="asc" <?php if ($_POST['priceorder'] == "asc")
            echo "checked"; ?> />Lowest Price
            <input name="priceorder" type="radio" value="desc" <?php if ($_POST['priceorder'] == "desc")
            echo "checked"; ?> />Highest price
            <input type="submit" id="submit" value="Submit">
        </p>
        <span style="font-size:20px;cursor:pointer;float:left;" onclick="openNav()">&#9776; Filter</span>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </form><br /><br />
    <table>
        <?php
         //Use a while loop to iterate through your $result array and display
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="section">
                <img width="200" height="150" src="../crud/images/<?php echo $row['product_im'] ?>" alt"img"><br />
                <div class="section1">
                    PRODUCT NAME: <?php echo $row['productName']; ?><br />
                    CATEGORY: <?php echo $row['category']; ?><br />
                    PRICE: &pound<?php echo $row['price']; ?><br />
                    <?php echo "<a href=details.php?id=" . $row['product_id'].">Details</a>"; ?>
                </div>
            </div>
            <?php
        }
        ?>
    </table>
</body>
</html>