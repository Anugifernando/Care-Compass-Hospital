<?php include 'inc/header.php'; ?>
<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Doctors</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h4 class="color-primary fs-1">Our <span class="color-secondary">Doctors</span> </h4>
            </div>
        </div>
        <div class="row">

            <?php

            include 'db.php';

            $sql = "SELECT id, full_name, img, desciption, contact FROM doctors";
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
                            <h5 class="card-title text-white text-center mb-3">Dr ' . $row['full_name'] . '</h5>
                            <p class="text-white ">' . $row['desciption'] . '</p>
                            <p class="text-white ">' . $row['contact'] . '</p>
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
    var menu_tab = document.getElementById('doctors');

    menu_tab.classList.add('active');
</script>
<?php include 'inc/footer.php'; ?>