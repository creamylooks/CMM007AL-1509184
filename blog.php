<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? include("connection.php");
        $show=$_GET['category'];
        switch($show){
            case 'all':
                echo "All Blog Items";
                break;
            case 'work':
                echo "Work Items";
                break;
            case'uni':
                echo "University Items";
                break;
            case 'family':
                echo "Family Items";
        }
        ?>
    </title>
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
    <article>
        <?
        switch($show) {
            case 'all':
                $sql = "SELECT entryTitle,category, entrySummary, submitter FROM blogview";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                        <h2>{$answer['blogview']} by {$answer['submitter']} </h2>
                        <p>{$answer['category']}</p>
                        <p>{$answer['entrySummary']}</p>
                  </section>";
                    $row--;
                }
                break;
            case 'work':
                $sql = "SELECT entryTitle,category, entrySummary, submitter FROM blogview WHERE category = 'Work'";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                        <h2>{$answer['blogview']} by {$answer['submitter']} </h2>
                        <p>{$answer['category']}</p>
                        <p>{$answer['entrySummary']}</p>
                  </section>";
                    $row--;
                }
                break;
            case 'uni':
                $sql = "SELECT entryTitle,category, entrySummary, submitter FROM blogview WHERE category = 'University'";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                         <h2>{$answer['blogview']} by {$answer['submitter']} </h2>
                        <p>{$answer['category']}</p>
                        <p>{$answer['entrySummary']}</p>
                  </section>";
                    $row--;
                }
                break;
            case 'family':
                $sql = "SELECT entryTitle,category, entrySummary, submitter FROM blogview WHERE category = 'Family'";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                        <h2>{$answer['blogview']} by {$answer['submitter']} </h2>
                        <p>{$answer['category']}</p>
                        <p>{$answer['entrySummary']}</p>
                  </section>";
                    $row--;
                }
        }
        ?>
    </article>
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