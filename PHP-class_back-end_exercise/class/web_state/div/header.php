        <!--index.php-->
        <header class="header">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-mark">TF</div>
                    <div>
                    <?php
                    switch($_GET['pos']){
                        case "index":
                            echo "<h1>TechFlow Solutions"{$_GET['pos']}"</h1>";
                            echo "<p>創新科技 • 卓越服務</p>";
                        break;
                        case "about":
                            echo "<h1>TechFlow Solutions"{$_GET['pos']}"</h1>";
                            echo "<p>創新科技 • 卓越服務</p>";
                        break;
                        case "news":
                            echo "<h1>TechFlow Solutions"{$_GET['pos']}"</h1>";
                            echo "<p>創新科技 • 卓越服務</p>";      
                        break;
                        case "contact":
                            echo "<h1>TechFlow Solutions"{$_GET['pos']}"</h1>";
                            echo "<p>創新科技 • 卓越服務</p>";
                        break;
                        case "services":
                            echo "<h1>TechFlow Solutions"{$_GET['pos']}"</h1>";
                            echo "<p>創新科技 • 卓越服務</p>";
                        break;
                    }
                       ?> 
                    </div>
                </div>
                
                <!-- 導覽列 -->
                <?php include "navbar.php";?>
            </div>
        </header>
