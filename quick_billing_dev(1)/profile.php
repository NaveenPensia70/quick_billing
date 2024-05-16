<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wdth=device-width, initial-scale=1.0">
    <title>Home-QuickBilling</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Website_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">

</head>

<body>
    <!-- START OF SIDE BAR -->
    <?php
    // Start a PHP session
    session_start();

    // Check if the username is set in the session
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        
    } else {
        // Handle the case when the username is not set (e.g., user not logged in)
    }
    ?>
    <div class="sidebar">
        <a href="#" class="logo">
           
            <a href="Official_Website.html"><img src="Logo1.png" alt="Logo" class="logo"></a>
        </a>
        <ul class="side-menu">
            <!-- <li><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            
            <li class="active"><a href="#"><i class='bx bxs-analyse'></i>Analytics</a></li>
            <li><a href="#"><i class='bx bx-message-square-dots'></i>Tickets</a></li> -->
            <li><a href="#" class="profile"><i class='bx bx-group'></i> 
                
                       <P><?php echo $username; ?></P></a></li>
            <!-- <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li> -->
            <li><a href="invoice.php"><i class='bx bx-store-alt'></i>add new bill</a></li>
            <li><a href="purchased.html"><i class='bx bx-store-alt'></i>add new purchase</a></li>
            <li><a href="totaldetail.php"><i class='bx bx-store-alt'></i>stock detail</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="loginofficial.html" class="logout"><i class='bx bx-log-out-circle'></i>Logout</a>
            </li>
        </ul>
    </div>
    <!-- END OF SIDE BAR -->
    <!-- MAIN CONTENT -->
    <div class="content">
        <!-- START OF NAV BAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search..">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <!-- <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
             -->
            <!-- <a href="#" class="profile">
                
<i class="fa fa-user" style="font-size:24px"></i>

       <P><?php echo $username; ?></P> -->
            </a>
        </nav>
        <!-- END OF NAV BAR -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Welcome back chief !</h1>
                    <!-- <ul class="breadcrumb">
                        <li><a href="#">
                                Analytics
                            </a></li>
                        /
                        <li><a href="#" class="active">Shop</a></li>
                    </ul> -->
                </div>
                <!-- <a href="#" class="report"><i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a> -->
            </div>
            <!-- START OF INSIGHTS -->
            <ul class="insights">
                <li>
                    <i class='bx bx-dollar-circle'></i> 
                    <span class="info">
                        <h3> <?php
                // Check if the totalAmount is set in the session
                if (isset($_SESSION['totalAmount'])) {
                    // Display the totalAmount
                    echo "₹";
                    echo $_SESSION['totalAmount'];
                } else {
                    // Display a default message if totalAmount is not set
                    echo "0";
                }
                ?></h3>
                        <p>Total Purchase Amount</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-dollar-circle'></i> 
                    <span class="info">
                        <h3>₹0</h3>
                        <p>Total sale</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-dollar-circle'></i>                 
                       <span class="info">
                        <h3>₹0</h3>
                        <p>total Stock</p>
                    </span>
                </li>
                <!-- <li>
                  
                    <span class="info">
                        <h3>$6,742</h3>
                        <p>Total Sales</p>
                    </span>
                </li> -->

            </ul>
            <!-- END OF INSIGHTS -->
            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Recent Orders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Order Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="photos/feature_1.jpg" alt="">
                                    <p>User 1</p>
                                </td>
                                <td>10-9-2023</td>
                                <td><span class="status completed">Completed</span></td>

                            </tr>
                            <tr>
                                <td>
                                    <img src="photos/feature_2.jpg" alt="">
                                    <p>User 2</p>
                                </td>
                                <td>11-9-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="photos/feature_3.jpg" alt="">
                                    <p>User 3</p>
                                </td>
                                <td>12-9-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <!-- <i class='bx bx-note'></i> -->
                        <h3>Add Item in you Inventory</h3>
                        <!-- <i class='bx bx-filter'></i> -->
                        <i class='bx bx-plus' ></i>
                    </div>
                    <!-- <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Start Our Meeting</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Analyze Our Site</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Play Football</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul> -->
                </div>
                <!-- End of Reminders -->
            </div>
        </main>
    </div>


    <script >
        const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');
sideLinks.forEach(item =>{
    const li = item.parentElement;
    item.addEventListener('click', () =>{
        sideLinks.forEach(i =>{
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});
const menuBar = document.querySelector('.content nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

menuBar.addEventListener('click', () =>{
    sideBar.classList.toggle('close');
});

const searchBtn = document.querySelector('.content nav form .form-input button');
const searchBtnIcon = document.querySelector('.content nav form .form-input button .bx');
const searchForm = document.querySelector('.content nav form');
searchBtn.addEventListener('click', function(e){
    if(window.innerWidth < 576){
        e.preventDefault;
        searchForm.classList.toggle('show')
        if(searchForm.classList.contains('show')){
            searchBtnIcon.classList.replace('bx-search', 'bx-x');
        }
        else{
            searchBtnIcon.classList.replace('bx-x', 'bx-search');
        }
    }
});
window.addEventListener('resize', () => {
    if(window.innerWidth < 768){
        sideBar.classList.add('close');
    }
    else{
        sideBar.classList.remove('close');
    }
    if(window.innerWidth > 576){
        searchBtnIcon.classList.replace('bx-x', 'bx-search')
        searchForm.classList.remove('show');
    }
});
const toggler = document.getElementById('theme-toggle');
toggler.addEventListener('change', function () {
    if(this.checked){
        document.body.classList.add('dark');
    }
    else{
        document.body.classList.remove('dark');
}
});
    </script>
</body>

</html>