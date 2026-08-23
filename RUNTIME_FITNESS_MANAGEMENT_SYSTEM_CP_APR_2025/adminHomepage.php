<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - RUNTIME FITNESS</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.10.7/build/spline-viewer.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #fdf8f2;
            color: #333;
            line-height: 1.6;
            animation: fadeInBody 1s ease-in;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        @keyframes fadeInBody {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        header {
            background-color: #fff;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-title {
            font-size: 1.6rem;
            font-weight: bold;
            color: #836953;
        }
        .nav-buttons {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .nav-buttons span {
            font-weight: 500;
        }
        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer
        }
        .logout {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
        }
        .dashboard-container {
            padding: 3rem 8%;
        }
        .dashboard-header {
            font-size: 2.2rem;
            color: #4d3d36;
            margin-bottom: 1.5rem;
            animation: slideIn 1s ease-out;
        }
        @keyframes slideIn {
            from { transform: translateX(-40px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            animation: fadeInCards 1.2s ease;
        }
        @keyframes fadeInCards {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .card {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 14px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.07);
            transition: 0.3s ease;
            margin-top: 2rem;
            width: 100%;
            height: 100%;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .card h3 {
            margin-bottom: 1rem;
            color: #5a4033;
        }
        .card p {
            font-size: 0.95rem;
            color: #333;
        }
        .card button {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #836953;
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .card button:hover {
            background-color: #a5836b;
        }
        .card i{
            display: block;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        footer {
            font-size: 0.9rem;
            text-align: center;
            padding: 1rem 0;
            background-color: #fff7f1;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
    
        <div class="nav-title">RUNTIME Admin Panel</div>
        <div class="nav-buttons">
            <span>Welcome back, <strong>Admin</strong></span>
            <form action="homepage.php" method="POST">
                <button class="logout">Logout</button>
            </form>
        </div>
    </header>


    <main style ="flex: 1;">
    <section class="dashboard-container">
        <h1 class="dashboard-header">Admin Dashboard</h1>

        <div class="dashboard-grid">
            <div class="card">
                <i class="fas fa-users fa-2x" style="color: #836953; margin-bottom: 10px;"></i>
                <h3>View Member Profiles</h3>
                <p>Browse all registered users, edit profiles, or deactivate accounts.</p>
                <button onclick="window.location.href='view_members.php'">View Members</button>
            </div>

            <div class="card">
                <i class="fas fa-chart-line fa-2x" style="color: #836953; margin-bottom: 10px;"></i>
                <h3>Registration Report</h3>
                <p>Generate the number of members registered — weekly, monthly, or annually.</p>
                <button onclick="window.location.href='report_registration.php'">Generate Report</button>
            </div>

            <div class="card">
                <i class="fas fa-clipboard-list fa-2x" style="color: #836953; margin-bottom: 10px;"></i>
                <h3>Activity Report</h3>
                <p>Check how many members actively tracked progress in a time frame.</p>
                <button onclick="window.location.href='report_activity.php'">Generate Report</button>
            </div>
        </div>
    </section>
    </main>
    <footer>
        &copy; 2025 RUNTIME FITNESS Admin Portal. All rights reserved.
    </footer>
</body>
</html>
