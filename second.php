<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Second page</title>
</head>
<body>
    <div class="page-container">
        <section class="content-container">
            <aside class="left-sidebar">
                <h3>Theory</h3>
                <ul class="list">
                    <li>Opening</li>
                    <li>Middlegame</li>
                    <li>Tactics</li>
                    <li>Strategy</li>
                    <li>Endgame</li>
                </ul>    
            </aside>
            <section class="main-content">
                <header class="header" id="home">
                    <div class="header-links">
                        <a class="header-link" href="./index.html">Main page</a>
                        <a class="header-link" href="./second.php">Second page</a>
                    </div>
                    <div class="header-content">
                        <h1>Chess Page</h1>
                    </div>
                </header>
                <section class="text-content">
                    <section class="center-content">
                        <nav class="navbar">
                            <p>
                                <a class="navbar-link" href="#home">Home</a> |
                                <a class="navbar-link" href="#images-container">Images</a> |
                                <a class="navbar-link" href="#social-media">Social Media</a>
                            </p>
                        </nav>
                        <div class="tabs-creation">
                            <div class="tabs-container">
                                <div class="tabs">
                                <?php
                                $tabsData = json_decode(file_get_contents('tabs.json'), true);

                                if (empty($tabsData)) { ?>
                                    <h3 class="tabs-creation__empty">
                                        Currently no tabs created
                                    </h3>
                                <?php } else { ?>
                                    <ul class="tabs-list">
                                        <?php
                                        $i = 0;
                                        $firstTabContent;
                                        foreach ($tabsData as $tab) {
                                            if ($i == 0) {
                                                $firstTabContent = $tab["content"];
                                            }
                                            ?>
                                            <li class="<?php echo ($i === 0 ? 'active-tab' : '') ?>">
                                                <button><?php echo $tab['title']; $i++ ?></button>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <div class="tabs-content">
                                        <?php echo $firstTabContent ?>
                                    </div>

                                    <form action="drop-tabs.php" method="POST">
                                        <button type="submit" class="btn btn--danger" style="margin-left: auto;">Drop all tabs</button>
                                    </form>
                                <?php } ?>

                                </div>
                            </div>
                        </div>
                    </section>
                    <aside class="right-sidebar" id="images-container">
                        <img class="image" src="images/chessboard1.jpg" alt="">
                        <img class="image" src="images/chessboard2.jpg" alt="">
                        <img class="image" src="images/chessboard3.jpg" alt="">
                    </aside>
                </section>
            </section>
        </section>
        <footer class="footer" id="social-media">
            <div class="footer-content">
                <h2>Play Chess</h2>
            </div>
            <div class="footer-links">
                <a href="">link</a>
                <a href="">link</a>
                <a href="">link</a>
            </div>
        </footer>
    </div>
    
    <script src="second.js"></script>                          

</body>
</html>