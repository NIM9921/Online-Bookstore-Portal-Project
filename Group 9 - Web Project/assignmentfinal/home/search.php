<!doctype html>
<html lang="en">
<style>
table {
  border-collapse: collapse;
  width: 95%;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

th {
  background-color: #008CBA;
  color: white;
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}
td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color: #8ccded;}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <title>Search</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
    <a href="#" class="active" >Home</a>
      <a href="../bookdetail/bookdetail.html" >Book Details</a>
        <a href="../bookcatalogue/bookcatelog.html">Book Catelog</a>
        <a href="../FloorPlanV3/index.php">Floor Plan</a>
        <a href="../inqueris/new inq 2.html">Inquires</a>
        <a href="../home/Contactus.html" >Contact Us</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="search-container">
            <form action="/assignment/search.php">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    </br></br></br></br></br></br></br>
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <table class="center">
                                <thead>
                                <tr>
                                    <th>Book Title</th>
                                    <th>Author</th>
                                    <th>ISBN</th>
                                    <th>Publisher</th>
                                    <th>Price</th>
                                    <th>Published Date</th>
                                    <th>Description</th>
                                    <th>Language</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","1234","bookstore");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM bookdetail WHERE CONCAT(title,author,isbn,publisher,price,date,language_id,category_id) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['title']; ?></td>
                                                    <td><?= $items['author']; ?></td>
                                                    <td><?= $items['isbn']; ?></td>
                                                    <td><?= $items['publisher']; ?></td>
                                                    <td><?= $items['price']; ?></td>
                                                    <td><?= $items['date']; ?></td>
                                                    <td><?= $items['description']; ?></td>
                                                    <td><?= $items['language_id']; ?></td>
                                                    <td><?= $items['category_id']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Script src="home.js"></Script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>