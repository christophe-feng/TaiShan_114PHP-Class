<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆作業 - A Calendar of Sonnets</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            display: flex;
            font-family: 'Georgia', serif;
        }

        .sonnet {
            width: 35%;
            height: 100vh;
            padding: 30px;
            box-sizing: border-box;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            overflow-y: auto;
        }
        
        .sonnet::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        
        .sonnet-content {
            position: relative;
            z-index: 2;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
        
        .sonnet-content h3 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .sonnet-content .poem {
            font-size: 16px;
            line-height: 1.8;
            white-space: pre-line;
        }

        .calendar {
            width: 65%;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;
            background: #f5f5f5;
        }

        .container{
            width: 500px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        .container div{
            display: inline-block;
            width: calc(500px / 7);
            height: 40px;
            line-height: 40px;
            text-align: center;
            border: 1px solid #999;
            box-sizing: border-box;
            margin: -1px 0 0 -1px;
        }
        
        .year-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin: 20px auto;
            width: 500px;
        }
        
        .year-nav h1 {
            font-size: 32px;
            color: #333;
        }
        
        .year-nav a {
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        
        .year-nav a:hover {
            background: #45a049;
        }
        
        h2{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 500px;
            padding: 15px 10px;
            margin: auto;
            box-sizing: border-box;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        h2 a {
            padding: 8px 16px;
            background: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        
        h2 a:hover {
            background: #0b7dda;
        }
        
        h2 div {
            font-size: 24px;
            font-weight: bold;
        }
        
        .today {
            background: #ffffcc !important;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
    // 十四行詩內容（Helen Hunt Jackson的A Calendar of Sonnets）
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
            'image' => 'https://images.unsplash.com/photo-1553448926-43ca302b29fd?w=800'
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
To sun themselves once more before they die.

',
            'image' => 'https://images.unsplash.com/photo-1495107334109-81e5019750c9?w=800'
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
            'image' => 'https://images.unsplash.com/photo-1478562672393-6d2b64f7a1f8?w=800'
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

    $today = strtotime("now");
    $targetDay = (isset($_GET['date'])) ? $_GET['date'] : date("Y-m-d");
    $Ttime = strtotime($targetDay);
    $month = date("m", $Ttime);
    $year = date("Y", $Ttime);
    
    $firstDayMonth = date("Y-m-1", $Ttime);
    $firstWeek = date("w", strtotime($firstDayMonth));
    $monthDays = date("t", $Ttime);
    $monthWeeks = ceil(($monthDays + $firstWeek) / 7);
    $tableFirstDay = strtotime("-$firstWeek days", strtotime($firstDayMonth));

    $prev = date("Y-m-d", strtotime("-1 month", $Ttime));
    $next = date("Y-m-d", strtotime("+1 month", $Ttime));
    $prevYear = date("Y-m-d", strtotime("-1 year", $Ttime));
    $nextYear = date("Y-m-d", strtotime("+1 year", $Ttime));
    
    $monthInt = intval($month);
    ?>
    
    <div class="sonnet" style="background-image: url('<?php echo $sonnets[$monthInt]['image']; ?>');">
        <div class="sonnet-content">
            <h3><?php echo $sonnets[$monthInt]['title']; ?></h3>
            <div class="poem"><?php echo $sonnets[$monthInt]['poem']; ?></div>
        </div>
    </div>
    
    <div class="calendar">
        <div class="year-nav">
            <a href='?date=<?php echo $prevYear; ?>'>◄ 前一年</a>
            <h1><?php echo $year; ?> 年</h1>
            <a href='?date=<?php echo $nextYear; ?>'>後一年 ►</a>
        </div>
        
        <?php 
        echo "<h2>";
        echo "<a href='?date=$prev'>◄ 上一月</a>";
        echo "<div>" . $month . " 月</div>";
        echo "<a href='?date=$next'>下一月 ►</a>";
        echo "</h2>";

        echo "<div class='container'>";
        echo "<div style='background:#e3f2fd;font-weight:bold;'>日</div>";
        echo "<div style='background:#e3f2fd;font-weight:bold;'>一</div>";
        echo "<div style='background:#e3f2fd;font-weight:bold;'>二</div>";
        echo "<div style='background:#e3f2fd;font-weight:bold;'>三</div>";
        echo "<div style='background:#e3f2fd;font-weight:bold;'>四</div>";
        echo "<div style='background:#e3f2fd;font-weight:bold;'>五</div>";
        echo "<div style='background:#e3f2fd;font-weight:bold;'>六</div>";

        for($i = 0; $i < 42; $i++){
            $datetime = strtotime("+$i days", $tableFirstDay);
            $isToday = (date("Y-m-d", $datetime) == date("Y-m-d", $today));
            $isWeekend = (date("w", $datetime) == 0 || date("w", $datetime) == 6);
            $isCurrentMonth = ($month == date("m", $datetime));
            
            $style = "";
            $class = "";
            
            if($isToday) {
                $class = "today";
            } elseif($isWeekend) {
                $style = "background:#ffe4e1;";
            }
            
            echo "<div class='$class' style='$style'>";
            
            if(!$isCurrentMonth){
                echo "<span style='color:#ccc'>";
            } else {
                echo "<span>";
            }
            echo date("d", $datetime);
            echo "</span>";
            echo "</div>";
        }

        echo "</div>";
        ?>
    </div>
</body>
</html>