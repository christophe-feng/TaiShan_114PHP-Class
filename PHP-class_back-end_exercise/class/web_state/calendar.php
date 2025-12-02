<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpetual Calendar - A Calendar of Sonnets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* 設定 CSS 變數 */
        /* :root 代表所有元素 */
        :root {
            --primary-color: #2c3e50;
            --accent-color: #c0392b;
            --bg-color: #fdfbf7;
            --text-color: #333;
            --light-gray: #e0e0e0;
            --hover-bg: #ececec;
            --today-bg: #fff3cd;
            --weekend-color: #e74c3c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            overflow: hidden;
            /* var() 代表 CSS 變數 */
            /* var → variable 變數 */
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        /* Sonnet Section */
        .sonnet {
            width: 40%;
            height: 100%;
            padding: 40px;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
            /* z-index 控制css元素堆疊順序（垂直層次）的屬性 */
            /* z-index 越大，元素越靠前 */
            z-index: 10;
        }

        .sonnet::before {
            content: '';
            position: absolute;
            /* inset 代表四個方向的值（上、右、下、左） */
            inset: 0;
            /* 背景漸層 */
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 100%);
            backdrop-filter: blur(2px);
            z-index: 1;
        }

        .sonnet-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            max-height: 90vh;
            /* 滾動條 */
            overflow-y: auto;
        }

        .sonnet-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
            font-style: italic;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 15px;
        }

        .sonnet-content .poem {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            line-height: 1.5;
            white-space: pre-line;
            text-align: left;
        }

        /* Author Information */
        .sonnet-footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            text-align: right;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            font-style: italic;
        }

        /* Calendar Section */
        .calendar {
            width: 60%;
            height: 100%;
            padding: 10px 30px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
        }

        .calendar-wrapper {
            width: 100%;
            max-width: 800px;
        }

        /* 移除 calendar-header 的 flex 佈局，因為只剩年份導航在裡面 */
        .calendar-header {
            width: 100%;
            margin-bottom: 5px;
            padding: 0;
        }

        .year-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 5px;
            padding: 0;
        }

        .year-nav h1 {
            font-family: 'Playfair Display', serif;
            /* rem 計算字體大小的單位，1rem = 16px */
            font-size: 3rem;
            color: var(--primary-color);
            font-weight: 700;
            margin: 0;
        }

        .month-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
            padding: 10px 0;
        }

        .month-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--primary-color);
            font-weight: 400;
        }

        /* New Wrapper for Today Button */
        .today-wrapper {
            display: flex;
            justify-content: center;
            width: 100%;
            /* 在月份導航和日期網格間提供間距 */
            margin: 15px 0 20px 0;
        }

        .nav-btn {
            text-decoration: none;
            color: var(--primary-color);
            padding: 8px 15px;
            border: 1px solid var(--light-gray);
            border-radius: 30px;
            /* 過度效果 */
            /* ease 緩入緩出 */
            transition: all 0.3s ease;
            font-size: 0.9rem;
            /* 文字大小寫轉換 */
            /* uppercase 全大寫，lowercase 全小寫，capitalize 每個單字首字大寫，none 不轉換 */
            text-transform: uppercase;
            /* 字母間距 */
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            /* 滑鼠游標樣式 */
            /* pointer 手指（點擊） */
            cursor: pointer;
            /* 空白處理 */
            /* nowrap 不換行 */
            white-space: nowrap;
        }

        .nav-btn:hover {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        /* Grid and Day Cells styles */
        .calendar-grid {
            display: grid;
            /* fr → fraction 分數單位 */
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            padding: 30px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.02);
        }

        .day-cell {
            /* aspect-ratio 面積比 */
            aspect-ratio: 1.75;
            /* Keeping user's aspect ratio of 1.75 */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
            color: var(--text-color);
        }

        .day-header {
            font-weight: 500;
            color: var(--primary-color);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            border-bottom: 1px solid var(--light-gray);
            border-radius: 0;
            aspect-ratio: auto;
            padding-bottom: 15px;
            margin-bottom: 10px;
            cursor: default;
        }

        .day-cell:not(.day-header):not(.other-month):hover {
            background-color: var(--hover-bg);
            /* 縮放大小 */
            transform: scale(1.1);
        }

        .day-cell.today {
            background-color: var(--primary-color) !important;
            color: white !important;
            box-shadow: 0 4px 10px rgba(44, 62, 80, 0.3);
            font-weight: bold;
        }

        .day-cell.weekend {
            color: var(--weekend-color);
        }

        .day-cell.other-month {
            color: #ccc;
            opacity: 0.5;
            cursor: default;
        }

        /* Mobile Adjustments */
        @media (max-width: 900px) {
            body {
                flex-direction: column;
                overflow: auto;
            }

            .sonnet,
            .calendar {
                width: 100%;
                height: auto;
                min-height: 50vh;
            }

            .sonnet {
                position: sticky;
                top: 0;
            }

            /* Mobile header cleanup - calendar-header now only contains year-nav */
            .calendar-header {
                /* Resetting mobile flex properties */
                flex-direction: row;
                justify-content: flex-start;
                gap: 0;
            }

            .month-nav {
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 10px;
            }

            .month-title {
                flex-basis: 100%;
                text-align: center;
                order: 1;
            }

            .month-nav>a {
                flex: 1 1 45%;
                margin: 0;
                order: 2;
            }

            /* Today button remains centered on mobile due to .today-wrapper */
        }
    </style>
</head>

<body>
    <?php
    // --- 1. 鎖定語言為英文 (en) ---
    $lang = 'en';

    // 專門用於月份名稱的本地化陣列
    $localized_months = [
        'en' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    ];

    function T($key, $lang)
    {
        // 翻譯陣列中只保留英文鍵值
        $translations = [
            'en' => [
                'prev_year' => '◄ Prev Year',
                'next_year' => 'Next Year ►',
                'prev_month' => '◄ Prev Month',
                'next_month' => 'Next Month ►',
                'back_to_today' => 'Today',
                'year' => '',
                'month' => '',
                'weekdays' => ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            ],
        ];
        return $translations[$lang][$key] ?? $key;
    }

    // --- 2. 十四行詩內容 (不變) ---
    $sonnets = [
        1 => [
            'title' => 'January',
            'poem' => 'O winter! frozen pulse and heart of fire,
What loss is theirs who from thy kingdom turn
Dismayed, and think thy snow a sculptured urn
Of death! Far sooner in midsummer tire
The streams than under ice. June could not hire
Her roses to forego the strength they learn
In sleeping on thy breast. No fires can burn
The bridges thou dost lay where men desire
In vain to build.

O Heart, when Love\'s sun goes
To northward, and the sounds of singing cease,
Keep warm by inner fires, and rest in peace.
Sleep on content, as sleeps the patient rose.
Walk boldly on the white untrodden snows,
The winter is the winter\'s own release.',
            'image' => 'https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?w=800'
        ],
        // ... (Sonnet 2 to 11 remain the same) ...
        2 => [
            'title' => 'February',
            'poem' => 'Still lie the sheltering snows, undimmed and white;
And reigns the winter\'s pregnant silence still;
No sign of spring, save that the catkins fill,
And willow stems grow daily red and bright.
These are days when ancients held a rite
Of expiation for the old year\'s ill,
And prayer to purify the new year\'s will:
Fit days, ere yet the spring rains blur the sight,
Ere yet the bounding blood grows hot with haste,
And dreaming thoughts grow heavy with a greed
The ardent summer\'s joy to have and taste;
Fit days, to give to last year\'s losses heed,
To reckon clear the new life\'s sterner need;
Fit days, for Feast of Expiation placed!',
            'image' => 'https://images.unsplash.com/photo-1612208695882-02f2322b7fee?w=800'
        ],
        3 => [
            'title' => 'March',
            'poem' => 'Month which the warring ancients strangely styled
The month of war,--as if in their fierce ways
Were any month of peace!--in thy rough days
I find no war in Nature, though the wild
Winds clash and clang, and broken boughs are piled
At feet of writhing trees. The violets raise
Their heads without affright, without amaze,
And sleep through all the din, as sleeps a child.
And he who watches well may well discern
Sweet expectation in each living thing.
Like pregnant mother the sweet earth doth yearn;
In secret joy makes ready for the spring;
And hidden, sacred, in her breast doth bear
Annunciation lilies for the year.',
            'image' => 'https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=800'
        ],
        4 => [
            'title' => 'April',
            'poem' => 'No days such honored days as these! When yet
Fair Aphrodite reigned, men seeking wide
For some fair thing which should forever bide
On earth, her beauteous memory to set
In fitting frame that no age could forget,
Her name in lovely April\'s name did hide,
And leave it there, eternally allied
To all the fairest flowers Spring did beget.
And when fair Aphrodite passed from earth,
Her shrines forgotten and her feasts of mirth,
A holier symbol still in seal and sign,
Sweet April took, of kingdom most divine,
When Christ ascended, in the time of birth
Of spring anemones, in Palestine.',
            'image' => 'https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=800'
        ],
        5 => [
            'title' => 'May',
            'poem' => 'O month when they who love must love and wed!
Were one to go to worlds where May is naught,
And seek to tell the memories he had brought
From earth of thee, what were most fitly said?
I know not if the rosy showers shed
From apple-boughs, or if the soft green wrought
In fields, or if the robin\'s call be fraught
The most with thy delight. Perhaps they read
Thee best who in the ancient time did say
Thou wert the sacred month unto the old:
No blossom blooms upon thy brightest day
So subtly sweet as memories which unfold
In aged hearts which in thy sunshine lie,
To sun themselves once more before they die.',
            'image' => 'https://images.unsplash.com/photo-1492552181161-62217fc3076d?w=800'
        ],
        6 => [
            'title' => 'June',
            'poem' => 'O month whose promise and fulfilment blend,
And burst in one! it seems the earth can store
In all her roomy house no treasure more;
Of all her wealth no farthing have to spend
On fruit, when once this stintless flowering end.
And yet no tiniest flower shall fall before
It hath made ready at its hidden core
Its tithe of seed, which we may count and tend
Till harvest. Joy of blossomed love, for thee
Seems it no fairer thing can yet have birth?
No room is left for deeper ecstasy?
Watch well if seeds grow strong, to scatter free
Germs for thy future summers on the earth.
A joy which is but joy soon comes to dearth.',
            'image' => 'https://images.unsplash.com/photo-1464820453369-31d2c0b651af?w=800'
        ],
        7 => [
            'title' => 'July',
            'poem' => 'Some flowers are withered and some joys have died;
The garden reeks with an East Indian scent
From beds where gillyflowers stand weak and spent;
The white heat pales the skies from side to side;
But in still lakes and rivers, cool, content,
Like starry blooms on a new firmament,
White lilies float and regally abide.
In vain the cruel skies their hot rays shed;
The lily does not feel their brazen glare.
In vain the pallid clouds refuse to share
Their dews; the lily feels no thirst, no dread.
Unharmed she lifts her queenly face and head;
She drinks of living waters and keeps fair.',
            'image' => 'https://images.unsplash.com/photo-1501594907352-04cda38ebc29?w=800'
        ],
        8 => [
            'title' => 'August',
            'poem' => 'Silence again. The glorious symphony
Hath need of pause and interval of peace.
Some subtle signal bids all sweet sounds cease,
Save hum of insects\' aimless industry.
Pathetic summer seeks by blazonry
Of color to conceal her swift decrease.
Weak subterfuge! Each mocking day doth fleece
A blossom, and lay bare her poverty.
Poor middle-agèd summer! Vain this show!
Whole fields of golden-rod cannot offset
One meadow with a single violet;
And well the singing thrush and lily know,
Spite of all artifice which her regret
Can deck in splendid guise, their time to go!',
            'image' => 'https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?w=800'
        ],
        9 => [
            'title' => 'September',
            'poem' => 'O golden month! How high thy gold is heaped!
The yellow birch-leaves shine like bright coins strung
On wands; the chestnut\'s yellow pennons tongue
To every wind its harvest challenge. Steeped
In yellow, still lie fields where wheat was reaped;
And yellow still the corn sheaves, stacked among
The yellow gourds, which from the earth have wrung
Her utmost gold. To highest boughs have leaped
The purple grape,--last thing to ripen, late
By very reason of its precious cost.
O Heart, remember, vintages are lost
If grapes do not for freezing night-dews wait.
Think, while thou sunnest thyself in Joy\'s estate,
Mayhap thou canst not ripen without frost!',
            'image' => 'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?w=800'
        ],
        10 => [
            'title' => 'October',
            'poem' => 'The month of carnival of all the year,
When Nature lets the wild earth go its way
And spend whole seasons on a single day.
The spring-time holds her white and purple dear;
October, lavish, flaunts them far and near;
The summer charily her reds doth lay
Like jewels on her costliest array;
October, scornful, burns them on a bier.
The winter hoards his pearls of frost in sign
Of kingdom: whiter pearls than winter knew,
Or Empress wore, in Egypt\'s ancient line,
October, feasting \'neath her dome of blue,
Drinks at a single draught, slow filtered through
Sunshiny air, as in a tingling wine!',
            'image' => 'https://images.unsplash.com/photo-1445346366695-5bf62de05412?w=800'
        ],
        11 => [
            'title' => 'November',
            'poem' => 'This is the treacherous month when autumn days
With summer\'s voice come bearing summer\'s gifts.
Beguiled, the pale down-trodden aster lifts
Her head and blooms again. The soft, warm haze
Makes moist once more the sere and dusty ways,
And, creeping through where dead leaves lie in drifts,
The violet returns. Snow noiseless sifts
Ere night, an icy shroud, which morning\'s rays
Will idly shine upon and slowly melt,
Too late to bid the violet live again.
The treachery, at last, too late, is plain;
Bare are the places where the sweet flowers dwelt.
What joy sufficient hath November felt?
What profit from the violet\'s day of pain?',
            'image' => 'https://images.unsplash.com/photo-1509803874385-db7c23652552?w=800'
        ],
        12 => [
            'title' => 'December',
            'poem' => 'The lakes of ice gleam bluer than the lakes
Of water \'neath the summer sunshine gleamed:
Far fairer than when placidly it streamed,
The brook its frozen architecture makes,
And under bridges white its swift way takes.
Snow comes and goes as messenger who dreamed
Might linger on the road; or one who deemed
His message hostile gently for their sakes
Who listened might reveal it by degrees.
We gird against the cold of winter wind
Our loins now with mighty bands of sleep,
In longest, darkest nights take rest and ease,
And every shortening day, as shadows creep
O\'er the brief noontide, fresh surprises find.',
            'image' => 'https://images.unsplash.com/photo-1512474932049-78ac69ede12c?w=800'
        ]
    ];

    // --- 3. 日期與導航邏輯 ---
    $today = strtotime("now");
    $targetDay = (isset($_GET['date'])) ? $_GET['date'] : date("Y-m-d");
    $Ttime = strtotime($targetDay);

    $monthInt = date("n", $Ttime);
    $year = date("Y", $Ttime);

    $firstDayMonth = date("Y-m-1", $Ttime);
    $firstWeek = date("w", strtotime($firstDayMonth));
    $tableFirstDay = strtotime("-$firstWeek days", strtotime($firstDayMonth));

    // Nav dates: 
    $nav_query = "";
    $prev = date("Y-m-d", strtotime("-1 month", $Ttime));
    $next = date("Y-m-d", strtotime("+1 month", $Ttime));
    $prevYear = date("Y-m-d", strtotime("-1 year", $Ttime));
    $nextYear = date("Y-m-d", strtotime("+1 year", $Ttime));
    $today_date = date("Y-m-d", $today);

    // Get localized month name (English only):
    $monthTitle = $localized_months['en'][$monthInt - 1];

    ?>

    <div class="sonnet" style="background-image: url('<?php echo $sonnets[$monthInt]['image']; ?>');">
        <div class="sonnet-content">
            <h3><?php echo $sonnets[$monthInt]['title']; ?></h3>
            <div class="poem"><?php echo $sonnets[$monthInt]['poem']; ?></div>
            <div class="sonnet-footer">
                A Calendar of Sonnets<br>
                — Helen Hunt Jackson (1886)
            </div>
        </div>
    </div>

    <div class="calendar">
        <div class="calendar-wrapper">

            <div class="calendar-header">
            </div>

            <div class="year-nav">
                <a href='?date=<?php echo $prevYear . $nav_query; ?>' class="nav-btn"><?php echo T('prev_year', $lang); ?></a>
                <h1><?php echo $year; ?><?php echo T('year', $lang); ?></h1>
                <a href='?date=<?php echo $nextYear . $nav_query; ?>' class="nav-btn"><?php echo T('next_year', $lang); ?></a>
            </div>

            <div class="month-nav">
                <a href='?date=<?php echo $prev . $nav_query; ?>' class="nav-btn"><?php echo T('prev_month', $lang); ?></a>
                <div class="month-title"><?php echo $monthTitle; ?></div>
                <a href='?date=<?php echo $next . $nav_query; ?>' class="nav-btn"><?php echo T('next_month', $lang); ?></a>
            </div>

            <div class="today-wrapper">
                <a href='?date=<?php echo $today_date . $nav_query; ?>' class="nav-btn"><?php echo T('back_to_today', $lang); ?></a>
            </div>

            <div class='calendar-grid'>
                <?php foreach (T('weekdays', $lang) as $dayName) : ?>
                    <div class="day-cell day-header"><?php echo $dayName; ?></div>
                <?php endforeach; ?>

                <?php
                for ($i = 0; $i < 42; $i++) {
                    $datetime = strtotime("+$i days", $tableFirstDay);
                    $dateYMD = date("Y-m-d", $datetime);

                    $isToday = ($dateYMD == date("Y-m-d", $today));
                    $isWeekend = (date("w", $datetime) == 0 || date("w", $datetime) == 6);
                    $isCurrentMonth = ($monthInt == date("n", $datetime));

                    $class = "day-cell";

                    if ($isToday) {
                        $class .= " today";
                    }
                    if ($isWeekend) {
                        $class .= " weekend";
                    }
                    if (!$isCurrentMonth) {
                        $class .= " other-month";
                    } else {
                        $class .= " clickable";
                    }

                    echo "<div class='$class'>";
                    echo date("j", $datetime);
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>