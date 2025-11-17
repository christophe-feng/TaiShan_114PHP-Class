                <nav class="navbar">
                    <span> <?=$pos;?></span>
                    <a href="index.php?pos=index" class="nav-link <?=($pos=='index')?'active':'';?>" >
                        首頁
                    </a>
                    <a href="news.php?pos=news" class="nav-link <?=($pos=='news')?'active':'';?>" >
                        公告欄
                    </a>
                    <a href="about.php?pos=about" class="nav-link <?=($pos=='about')?'active':'';?>" >
                        關於我們
                    </a>
                    <a href="services.php?pos=services" class="nav-link <?=($pos=='services')?'active':'';?>">
                        服務介紹
                    </a>
                    <a href="contact.php?pos=contact" class="nav-link <?=($pos=='contact')?'active':'';?>">
                        聯絡我們
                    </a>
                </nav>