<?php
    include 'partials/Header.php'; 
?>
    <title>Dashboard</title>
</head>
<body>

<?php include 'partials/Navi.php';?>

    <h1>Student List</h1>
    <?php if(isset($_SESSION["info"])): ?>
        <h2 class="<?php echo $_SESSION["is_successful"]? "success":"fail"; ?>">
            <?php echo $_SESSION["info"]; ?></h2>
    <?php endif; ?>
    <form method="POST">
        <label for="studentName">Student Name:</label>
        <input type="text" name="studentName" placeholder="Enter Student Name">
        <label for="studentEmail">Student Email:</label>
        <input type="email" name="studentEmail" placeholder="Enter Student Email">
        <button type="submit" name="add_student">Add Student</button>
    </form>

    <?php while($student = $studentList->fetch_assoc()): ?>
        <div>
            <p>
                <?php echo $student['name'] . " " . $student['id'] .  ' ' . $student['email']; ?>
                
            </p>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $student['id'];?>">
                <button type="submit" name="delete">Delete</button>
            </form>
        </div>
    <?php endwhile;?>

<?php include 'partials/Footer.php'; ?>
