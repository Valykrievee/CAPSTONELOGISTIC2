<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurement Module</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-link.active {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .main-content {
            padding: 20px;
            margin-top: 20px;
        }
        .section {
            display: none;
        }
        .section.active {
            display: block;
        }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand font-weight-bold display-4 m-3" href="#">Procurement </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active m-3" href="#" data-target="dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="supplier-management">Supplier Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="product-catalog">Product Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="purchase-requisitions">Purchase Requisitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="purchase-orders">Purchase Orders</a>
                </li>
                
            </ul>
            <!-- Right side (Settings and Logout) -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="settingsDropdown">
                        <a class="dropdown-item" href="#">Profile Settings</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-12 main-content">
                

                <!-- Dashboard Overview -->
                <section id="dashboard" class="section active">
                    <h2>Dashboard Overview</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Key Metrics</h5>
                                    <p class="card-text">Overview of pending requests, orders, and deliveries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Supplier Performance</h5>
                                    <p class="card-text">Charts showing supplier performance metrics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Stock Levels</h5>
                                    <p class="card-text">Overview of current stock levels and low stock alerts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Supplier Management -->
                <section id="supplier-management" class="section">
                    <h2>Supplier Management</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Supplier Name</th>
                                <th>Supplier ID</th>
                                <th>Contact Info</th>
                                <th>Rating</th>
                                <th>Categories</th>
                                <th>Contract Details</th>
                                <th>Payment Methods</th>
                                <th>Compliance Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Supplier A</td>
                                <td>12345</td>
                                <td>Phone: 123-456-7890<br>Email: supplier@example.com<br>Address: 123 Supplier St.</td>
                                <td>4.5/5</td>
                                <td>Food, Beverages</td>
                                <td>Terms: 30 days net<br>Renewal Date: 2025-12-31</td>
                                <td>Bank Transfer</td>
                                <td>Certified</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- Product Catalog -->
                <section id="product-catalog" class="section">
                    <h2>Product Catalog</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>SKU</th>
                                <th>Supplier</th>
                                <th>Category</th>
                                <th>Unit of Measure</th>
                                <th>Pricing</th>
                                <th>Lead Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Product X</td>
                                <td>XYZ123</td>
                                <td>Supplier A</td>
                                <td>Food</td>
                                <td>kg</td>
                                <td>$10.00 (bulk discount available)</td>
                                <td>3 days</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- Purchase Requisitions -->
                <section id="purchase-requisitions" class="section">
                    <h2>Purchase Requisitions</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Date</th>
                                <th>Requestor</th>
                                <th>Status</th>
                                <th>Total Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>REQ123</td>
                                <td>2024-09-15</td>
                                <td>John Doe</td>
                                <td>Approved</td>
                                <td>$500.00</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-success btn-sm">Approve</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- Purchase Orders -->
                <section id="purchase-orders" class="section">
                    <h2>Purchase Orders</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>PO Number</th>
                                <th>Supplier</th>
                                <th>Status</th>
                                <th>Total Amount</th>
                                <th>Delivery Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PO456</td>
                                <td>Supplier B</td>
                                <td>Shipped</td>
                                <td>$1,000.00</td>
                                <td>2024-09-20</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Amend</button>
                                    <button class="btn btn-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

               
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
   

</body>
</html>
