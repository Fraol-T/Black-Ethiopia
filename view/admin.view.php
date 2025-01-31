<table>
        <thead>
            <tr>
                <td colspan="4"><h2>About Me</h2></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>Info</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $query = "SELECT * FROM about";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo "<td class='title'>" . $row['name'] . "</td>";
                        echo "<td class='dis'>" . $row['intro'] . "</td>";
                    
                ?>
            </tr>
            <tr>
                <?php
                    if (isset($_POST['update_about'])) {
                        $name = $_POST['name'];
                        $intro = $_POST['intro'];

                        $query = "UPDATE about SET name = :name, intro = :intro where id = '1'";
                        $stmt = $conn->prepare($query);
                        $stmt->bindParam(':name', $name);
                        $stmt->bindParam(':intro', $intro);
                        $stmt->execute();
                        header("Location: portfolio.php?update=success");
                        exit();
                    }
                ?>
                <form method="post">
                    <td><input type="text" name="name" placeholder="Change name"></td>
                    <td><input type="text" name="intro" placeholder="change introduction"></td>
                    <td><input type="submit" name="update_about" value="Change"></td>
                </form>
            </tr>
        </tbody>
    </table>

    <hr>

    <table>
        <thead>
            <tr>
                <td colspan="4"><h2>Skills</h2></td>
            </tr>
            <tr>
                <td>Skills</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
                <?php
                        $query = "SELECT * FROM skills";
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr><td class='title'>" . $row['skills'] . "</td>
                                    <td><a href='delete.php?id=" . $row['id'] . "&table=skills' onclick='return confirm(\"Are you sure?\")' class='delete'>Delete</a></td></tr>";
                        } ;    
                ?>
                <?php
                    if (isset($_POST['add_skill'])) {
                        $skills = $_POST['skills'];

                        $query = "INSERT INTO skills (skills) VALUES (:skills)";
                        $stmt = $conn->prepare($query);
                        $stmt->bindParam(':skills', $skills);
                        $stmt->execute();
                        header("Location: portfolio.php?update=success");
                        exit();
                    }
                ?>
            <form method="post">
                    <td><input type="text" name="skills" placeholder="add skill"></td>
                    <td><input type="submit" name="add_skill" value="Add"></td>
                </form>
        </tbody>
    </table>

    <hr>

    <table>
        <thead>
            <tr>
                <td colspan="4"><h2>Portfolio</h2></td>
            </tr>
            <tr>
                <td>projects</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $query = "SELECT * FROM work";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr><td class='title'>" . $row['project'] . "</td>
                            <td><a href='delete.php?id=" . $row['id'] . "&table=work' onclick='return confirm(\"Are you sure?\")' class='delete'>Delete</a></td></tr>";
                } ;    
            ?>
            <?php
                if (isset($_POST['add_project'])) {
                    $project = $_POST['project'];

                    $query = "INSERT INTO work (project) VALUES (:project)";
                    $stmt = $conn->prepare($query);
                    $stmt->bindParam(':project', $project);
                    $stmt->execute();
                    header("Location: portfolio.php?update=success");
                    exit();
                }
            ?>
            <form method="post">
                    <td><input type="text" name="project" placeholder="add project"></td>
                    <td><input type="submit" name="add_project" value="Add"></td>
                </form>
        </tbody>
    </table>

    <hr>

    <table>
        <thead>
            <tr>
                <td colspan="4"><h2>Contact</h2></td>
            </tr>
            <tr>
                <td>email</td>
                <td>phone</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $query = "SELECT * FROM contact ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo "<td>".$contact['phone']."</td>
                              <td>".$contact['email']."</td>";
                ?>
            </tr>
            <tr>
                <?php
                    if (isset($_POST['update_contact'])) {
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];

                        $query = "UPDATE contact SET phone = :phone, email = :email WHERE id='1' ";
                        $stmt = $conn->prepare($query);
                        $stmt->bindParam(':phone', $phone);
                        $stmt->bindParam(':email', $email);
                        $stmt->execute();
                        header("Location: portfolio.php?update=success");
                        exit();
                    }
                ?>
                <form method="post">
                    <td><input type="text" name="phone" placeholder="change phone"></td>
                    <td><input type="email" name="email" placeholder="change email"></td>
                    <td><input type="submit" name="update_contact" value="Change"></td>
                </form>
            </tr>
        </tbody>
    </table>