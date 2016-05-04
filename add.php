<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog Items</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
            <!-- Begining of Header Section -->
            <header>
                <h1>myBlog</h1>
                <h3>Because the internet needs to know what i think</h3>
            </header>
            <!-- End of Header Section -->
            <!-- Begining of Navigation Section -->
            <nav>

                <ul>
                    <li><a href="blog.php?category=all">All Blog Items</a></li>
                    <li><a href="blog.php?category=work">Work Items</a></li>
                    <li><a href="blog.php?category=uni">University Items</a></li>
                    <li><a href="blog.php?category=family">Family Items</a></li>
                    <li><a href="add.php">Insert a Blog Item</a></li>

                </ul>
                <div class="clearer"></div>
            </nav>
            <!-- End of Navigation Section -->
            <!-- Begining of Main Section -->
            <main>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                    <label> Entry Title: &nbsp; &nbsp;<input type="text" name="title" required></label><br/>
                    <label>Entry Summary: <textarea name="summary" rows="5" cols="15" required></textarea></label><br/>
                    <label>
                        Category:
                        <select name="category" required>
                            <option name="work"> Work</option>
                            <option name="Uni">University</option>
                            <option name="fam">Family</option>
                        </select><br/>
                    </label>
                    <label>Submitted By: <input type="text" name="author"></label><br/>
                    <input type="submit" value="Submit">
                </form>
            </main>
            <!-- End of Main Section -->
            <!-- Begining of Footer Section -->
            <footer>
                <div class="clearer"></div>
                <p>Designed by Malick Farouk, 2016</p>
            </footer>
            <!-- End of Footer Section -->
</body>
</html>
        <?php if($_SERVER['REQUEST_METHOD']=='GET'){
            header ("location:add.php");
        }
        elseif($_SERVER['REQUEST_METHOD']=='POST'){
            $title=$_POST['title'];
            $summary = $_POST['summary'];
            $categ = $_POST['category'];
            $submitter = $_POST['author'];


            $sql="INSERT INTO blogview (entryTitle,entrySummary,category, submitter) VALUES ($title,$summary,$categ,$submitter)";
            $res=mysqli_query($sercon,$sql);
        }else{header("location:index.php");}
        ?>