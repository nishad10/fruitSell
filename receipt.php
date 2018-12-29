<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    

    <title>Receipt</title>

    <!-- CSS -->
    <link href="bootstrapcss/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Receipt</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Receipt</h1>
            <hr>
            <h2>Customer Name : <?php echo $_GET["name"]; ?></h2>
            <br>
            <!-- Table to show what the user has purchased -->
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Cost</th>
                </tr>
                <tr>
                    <td>Apples</td>
                    <td><?php echo $_GET["apples"] ?></td>
                    <td>$0.69</td>
                    <td><?php echo number_format(($_GET["apples"] * 0.69), 2) ?></td>
                </tr>
                <tr>
                    <td>Oranges</td>
                    <td><?php echo $_GET["oranges"] ?></td>
                    <td>$0.59</td>
                    <td><?php echo number_format(($_GET["oranges"] * 0.59), 2) ?></td>
                </tr>
                <tr>
                    <td>Bananas</td>
                    <td><?php echo $_GET["bananas"] ?></td>
                    <td>$0.39</td>
                    <td><?php echo number_format(($_GET["bananas"] * 0.39), 2) ?></td>
                </tr>
            </table>
            <!-- Show payment method -->
            <h3>Payment method : <?php echo $_GET["payment"] ?></h3>
            <br>
            <!-- Total cost of the receipt -->
            <h3 class="text-right">Total Cost : <?php echo $_GET["total"] ?></h3>
        </div>
    </div>
</body>
</html>