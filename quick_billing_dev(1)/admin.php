<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" href="photos/favicon.png">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>
                <span><i class='bx bx-code-alt'></i></span> <span>Admin Panel</span>
            </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active">
                        <span><i class='bx bx-code-alt'></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class='bx bx-group'></i></span>
                        <span>Customers</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class='bx bx-task'></i></span>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class='bx bx-shopping-bag'></i></span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class='bx bx-store-alt'></i></span>
                        <span>Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class='bx bx-user-circle'></i></span>
                        <span>Accounts</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="">
                        <span><i class='bx bx-task'></i></span>
                        <span>Tasks</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span>
                        <i class='bx bx-menu'></i>
                    </span>
                </label>

                Dashboard
            </h2>
            <div class="search-wrapper">
                <span><i class='bx bx-search'></i></span>
                <input type="search" placeholder="Search here">
            </div>
            <div class="user-wrapper">
                <img src="favicon.png" alt="" width="40px" height="40px">
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
                <div>
                    <h4><P><?php echo $username; ?></h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>

                    </div>
                    <div>
                        <span>
                            <i class='bx bx-group'></i>
                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span>
                            <span><i class='bx bx-task'></i></span>

                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span>
                            <i class='bx bx-shopping-bag'></i>
                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span>
                            <i class='bx bx-money'></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- This is made extra, you can change it as per your requirement -->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Recent Items
                            </h3>
                            <button>See All <span><i class='bx bx-right-arrow-alt'></i></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <!-- You can change these according to your requirements. -->
                                            <td>Project Title</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>Web Development</td>
                                            <td>
                                                <span class="status purple"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                In Progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quick Billing</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>Web Development</td>
                                            <td>
                                                <span class="status purple"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                In Progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quick Billing</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quick Billing</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quick Billing</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                New Customer
                            </h3>
                            <button>See All <span><i class='bx bx-right-arrow-alt'></i></span></button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <!-- Here the image of customer will come -->
                                    <img src="" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Customer 1</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span><i class='bx bx-group'></i></span>
                                    <span><i class='bx bx-message'></i></span>
                                    <span><i class='bx bx-phone'></i></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <!-- Here the image of customer will come -->
                                    <img src="" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Customer 2</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span><i class='bx bx-group'></i></span>
                                    <span><i class='bx bx-message'></i></span>
                                    <span><i class='bx bx-phone'></i></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <!-- Here the image of customer will come -->
                                    <img src="" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Customer 3</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span><i class='bx bx-group'></i></span>
                                    <span><i class='bx bx-message'></i></span>
                                    <span><i class='bx bx-phone'></i></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Customer 4</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span><i class='bx bx-group'></i></span>
                                    <span><i class='bx bx-message'></i></span>
                                    <span><i class='bx bx-phone'></i></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <!-- Here the image of customer will come -->
                                    <img src="" alt="" width="40px" height="40px">
                                    <div>
                                        <h4>Customer 5</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <!-- User circle Icon -->
                                    <!-- Comment Icon -->
                                    <!-- Phone / Call Icon -->
                                    <span><i class='bx bx-group'></i></span>
                                    <span><i class='bx bx-message'></i></span>
                                    <span><i class='bx bx-phone'></i></span>
                                </div>
                            </div>
                            <br><br>
                            <!-- Change it as you want -->
                                <button class="crud">Create</button>
                                <button class="crud">Read</button>
                                <button class="crud">Update</button>


                        </div>
                    </div>
                </div>
        </main>
    </div>
</body>

</html>