<?php include 'inc/header.php'; ?>
<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Services
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row">

            <?php

            include 'db.php';

            if (isset($_GET['query'])) {
                $query = $_GET['query'];

                echo '
                <div class="col-md-12 text-center mb-5">
                <h4 class="color-primary fs-1">Search <span class="color-secondary">Results</span> </h2>
            </div>
                ';

                $sql = "SELECT * FROM services 
            WHERE title LIKE ? OR description LIKE ?";

                $stmt = $conn->prepare($sql);

                $searchTerm = '%' . $query . '%';
                $stmt->bind_param('ss', $searchTerm, $searchTerm);
                $stmt->execute();

                $result = $stmt->get_result();

                // Fetch results
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        
                            echo '
                            <div class="col-md-3 mb-3">
                                <div class="card secondary rounded-0 border">
                                    <img src="img/' . $row['img'] . '" class="w-100 card-img-top" alt="...">
                                    <div class="card-body py-4">
                                        <h5 class="card-title text-white text-center mb-3">' . $row['title'] . '</h5>
                                        <p class="text-white ">' . $row['description'] . '</p>
                                        <div class="text-center">
                                            <a href="index.php#appoinment" class="btn btn-primary btn-compass primary ">Make Appoinment</a>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            '; 
                    }
                } else {
                    echo "<p>No results found for '" . htmlspecialchars($query) . "'.</p>";
                }

                $stmt->close();
            }



            ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h4 class="color-primary fs-1">Our <span class="color-secondary">Services</span> </h2>
            </div>
        </div>
        <div class="row">

            <?php


            $sql = "SELECT id, title, img, description FROM services";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";


                    echo '
                        <div class="col-md-3 mb-3">
                            <div class="card secondary rounded-0 border">
                                <img src="img/' . $row['img'] . '" class="w-100 card-img-top" alt="...">
                                <div class="card-body py-4">
                                    <h5 class="card-title text-white text-center mb-3">' . $row['title'] . '</h5>
                                    <p class="text-white ">' . $row['description'] . '</p>
                                    <div class="text-center">
                                        <a href="index.php#appoinment" class="btn btn-primary btn-compass primary ">Make Appoinment</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                }
            }

            ?>

            
        </div>
    </div>
</section>
<script>
    var menu_tab = document.getElementById('services');

    menu_tab.classList.add('active');
</script>



<?php include 'inc/footer.php'; ?>