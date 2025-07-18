<?php include 'inc/header.php'; ?>

<!-- <section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Dashboard</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
</section> -->
<hr>

<?php

include 'db.php';

$sql = "SELECT Id, full_name, email FROM users WHERE Id='" . $_SESSION['user_id'] . "'";
$result = $conn->query($sql);

// echo $result["Id"];

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc()['full_name'];
} 
else{
    echo 'no data';
}

?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-start ">
                    <div class="nav flex-column nav-pills me-3 text-left w-25" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link secondary text-white text-left rounded-0 mb-2 py-3" href="dashboard.php">Dashboard</a>

                        <a class="nav-link primary text-white text-left rounded-0 mb-2 py-3" href="medical-records.php">Medical Records</a>

                        <a class="nav-link primary text-white text-left rounded-0 mb-2 py-3" href="lab-test-results.php">Lab Test Results</a>

                        <a class="nav-link primary text-white text-left rounded-0 mb-2 py-3" href="appoinment-history.php">Appoinment History</a>

                        <a class="nav-link bg-danger text-left rounded-0 text-white mb-2 py-3" href="logout.php">Logout</a>




                    </div>
                    <div class="tab-content w-75 " id="v-pills-tabContent">
                        <div class="tab-pane fade show active secondary p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <h5>Welcome  
                            <?= 
                           $user
                            ?>.</h5>
                            <p>Effortlessly access and oversee all your details in one location</p>
                            <ul>
                                <li><strong>Medical Records</strong>: View and update your medical history.</li>
                                <li><strong>Lab Test Results</strong>: Easily check your latest test results.</li>
                                <li><strong>Appointment History</strong>: Track your previous and upcoming visits.</li>
                                <li><strong>Logout</strong>: Securely exit when finished.</li>
                            </ul>
                            <p>Stay organized and take charge of your healthcare journey!</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include 'inc/footer.php'; ?>