<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel and Restaurant Audit Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="audstyle.css">
</head>
<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold display-4 m-3" href="#">Audit Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active m-3" href="#" data-target="dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="audit-schedule">Audit Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="audit-reports">Audit Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="compliance-tracking">Compliance Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-3" href="#" data-target="audit-history">Audit History</a>
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
                                    <h5 class="card-title">Audit Metrics</h5>
                                    <p class="card-text">Overview of pending audits, completed audits, and audit results specific to hotel and restaurant operations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Audit Performance</h5>
                                    <p class="card-text">Charts showing audit performance metrics and trends in different departments like kitchen, housekeeping, and guest services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Compliance Status</h5>
                                    <p class="card-text">Overview of current compliance status with health and safety regulations, food safety standards, and hospitality regulations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Audit Schedule -->
                <section id="audit-schedule" class="section">
                    <h2>Audit Schedule</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Auditor</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="audit-schedule-body">
                            <tr>
                                <td>2024-09-15</td>
                                <td>Kitchen</td>
                                <td>Jane Smith</td>
                                <td>Scheduled</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm" onclick="editAudit(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteAudit(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addAuditModal">Add Audit</button>
                </section>

                <!-- Audit Reports -->
                <section id="audit-reports" class="section">
                    <h2>Audit Reports</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Report ID</th>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Auditor</th>
                                <th>Summary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>REP123</td>
                                <td>2024-09-10</td>
                                <td>Housekeeping</td>
                                <td>Jane Smith</td>
                                <td>Housekeeping audit completed with recommendations for improved cleaning protocols.</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- Compliance Tracking -->
                <section id="compliance-tracking" class="section">
                    <h2>Compliance Tracking</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Compliance ID</th>
                                <th>Requirement</th>
                                <th>Status</th>
                                <th>Next Review Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>COMP456</td>
                                <td>Food Safety</td>
                                <td>Compliant</td>
                                <td>2024-12-31</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- Audit History -->
                <section id="audit-history" class="section">
                    <h2>Audit History</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Audit ID</th>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Auditor</th>
                                <th>Findings</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AUD789</td>
                                <td>2024-06-01</td>
                                <td>Guest Services</td>
                                <td>John Doe</td>
                                <td>Reviewed guest feedback and service quality.</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- Add Audit Modal -->
                <div class="modal fade" id="addAuditModal" tabindex="-1" role="dialog" aria-labelledby="addAuditModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addAuditModalLabel">Add Audit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="audit-date">Date</label>
                                        <input type="date" class="form-control" id="audit-date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="department">Department</label>
                                        <select class="form-control" id="department" required>
                                            <option>Kitchen</option>
                                            <option>Housekeeping</option>
                                            <option>Guest Services</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="auditor">Auditor</label>
                                        <input type="text" class="form-control" id="auditor" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" required>
                                            <option>Scheduled</option>
                                            <option>Completed</option>
                                            <option>Pending</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="comments">Comments</label>
                                        <textarea class="form-control" id="comments" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scriptaud.js"></script>
</body>
</html>
