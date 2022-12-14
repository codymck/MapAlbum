<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once("config.php");

    if (isset($_GET['userID']) && ($_GET['userID'] != 0)) {
        $UserID = $_GET['userID'];

        $TableName = "user_info";

        $sql = "SELECT email FROM $TableName WHERE userID = '$UserID'";

        $result = $pdo->query($sql);

        // retrieve albumID based on userID
        if ($row = $result->fetch()) {
            $Name = $row["email"];
            $Name = strtok($Name, '@');
        }

    } else {
        $UserID = 0;
        $Name = "Log-In";
    }
    ?>

    <header>
        <h1 id="nav-title"><a id="logo" href="home.php?userID=<?= $UserID ?>">Map Album</a></h1>
        <nav>
            <ul>
                <li><a href="gallery.php?userID=<?= $UserID ?>">Gallery</a></li>
                <li><a href="about.php?userID=<?= $UserID ?>">About</a></li>
                <li><a href="contact.php?userID=<?= $UserID ?>">Contact</a></li>
            </ul>
        </nav>
        <a id="login" href="login.php">
            <?= $Name ?>
        </a>
    </header>

    <!-- Created with Inkscape (http://www.inkscape.org/) -->
    <div id="USA-MAP">
        <svg viewBox="0 0 555.92627 365.45964" version="1.1" id="svg5" xml:space="preserve"
            inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" sodipodi:docname="USmapcrop.svg"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25"
                inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"
                inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false" inkscape:zoom="0.5"
                inkscape:cx="853" inkscape:cy="716" inkscape:window-width="2035" inkscape:window-height="1205"
                inkscape:window-x="2193" inkscape:window-y="75" inkscape:window-maximized="0"
                inkscape:current-layer="layer1" />
            <defs id="defs2">
                <linearGradient id="linearGradient6866" inkscape:swatch="solid">
                    <stop style="stop-color:#000000;stop-opacity:1;" offset="0" id="stop6864" />
                </linearGradient>
                <linearGradient id="linearGradient4583" inkscape:swatch="solid">
                    <stop style="stop-color:#000000;stop-opacity:1;" offset="0" id="stop4581" />
                </linearGradient>
                <linearGradient id="linearGradient4577" inkscape:swatch="solid">
                    <stop style="stop-color:#d00000;stop-opacity:1;" offset="0" id="stop4575" />
                </linearGradient>
            </defs>
            <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1"
                transform="translate(-149.9426,-84.054525)">
                <a href="states/California.php?userID=<?= $UserID ?>">
                    <path
                        style="fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                        d="m 166.13474,165.71379 39.05475,12.53494 -9.63506,31.61798 1.1693,1.59026 -2.3386,4.81753 0.56126,1.54348 41.25305,62.30052 c 0,0 0.5145,0.79512 0.93545,2.05798 0.42095,1.26286 2.19829,6.92229 2.19829,6.92229 l -0.14032,0.60804 -4.11595,5.23846 -1.12253,1.73059 c 0,0 -1.96443,4.72398 -2.15152,5.33201 -0.18709,0.60804 -0.56127,1.1693 -0.56127,1.1693 l 2.1983,5.33205 -1.07577,0.28061 -29.09228,-2.57246 -0.37418,-1.87087 -2.19829,-0.0936 2.38538,-6.08039 -4.2095,-5.1917 0.42095,-3.97563 -7.29645,-0.0468 1.82411,-4.11594 -12.34785,-9.58829 c 0,0 -6.40779,-2.05798 -8.37222,-2.43215 -1.96443,-0.37418 -1.91766,-5.00462 -1.59026,-6.64165 0.32741,-1.63703 0.56127,-8.23191 0.56127,-8.23191 l -3.74177,-4.34981 -2.29184,-6.45456 -1.30962,-3.32083 c 0,0 -0.56126,-1.35639 -0.56126,-2.24506 0,-0.88867 0.14031,-2.43215 0.14031,-2.43215 l -2.19829,-1.21608 c 0,0 0.28063,-5.42557 0.51449,-7.39 0.23386,-1.96443 0.98222,-4.91108 0.98222,-4.91108 l 0.8419,-0.74835 0.88867,-0.0468 1.73057,1.35639 -0.32741,-4.95785 c 0,0 0.14032,-0.56127 0.8419,-0.60804 0.70159,-0.0468 6.45456,-0.0468 6.2207,-0.0935 -0.23386,-0.0468 -7.0626,-0.5145 -7.0626,-0.5145 0,0 -2.05797,0.74836 -3.32082,1.3564 -1.26285,0.60803 -3.55468,-0.37418 -3.83532,-1.26285 -0.28063,-0.88867 -0.28063,-2.01121 0.46772,-2.47893 0.74836,-0.46772 1.91766,-1.35639 1.30963,-2.33861 -0.60804,-0.98221 -4.02241,-8.18512 -4.02241,-8.18512 l -2.80633,-1.26285 c 0,0 0.51449,-0.98222 1.87089,-1.82412 1.35639,-0.8419 1.63702,-4.81753 1.63702,-4.81753 0,0 0.88867,-3.695 0.8419,-4.58367 -0.0468,-0.88868 -2.99342,-8.55931 -2.99342,-8.55931 l 5.51912,-6.50133 0.0468,-3.18051 2.71279,-5.89329 -0.0468,-1.16931 -1.21607,-2.8531 2.24506,-0.88867 z"
                        id="path8399" />
                </a>
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 165.79453,165.36458 0.0661,-7.17682 -1.81901,-4.0349 3.47266,-0.59531 9.22734,-15.21354 4.53099,-12.00547 5.09323,-6.21771 0.13229,-5.95312 10.08724,5.25859 0.0331,5.22552 11.24479,4.69636 0.99219,0.33072 21.56354,0.79375 17.42942,4.53099 4.46485,8.40052 c 0,0 0.62838,0.29766 -0.39688,0.8599 -1.02526,0.56224 -3.73724,2.4474 -3.73724,2.4474 l -0.39687,0.42994 -5.09323,16.17266 -6.77995,22.45651 -29.26953,-7.5737 z"
                    id="path9127" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 187.29192,114.13463 0.0992,-6.05234 0.59532,2.94349 1.4552,-1.09141 c 0,0 1.75287,-1.75286 0.66146,-3.07578 -1.0914,-1.32291 -1.5875,-1.62057 -1.5875,-1.62057 l 3.00964,-10.054167 c 0,0 -0.92604,-3.935677 -0.39688,-5.853906 0.52917,-1.918229 0.56224,-3.108854 0.56224,-3.108854 l 7.44141,6.58151 8.6651,2.447396 -1.19062,10.417971 3.24114,-5.42396 2.54662,-0.23151 c 0,0 -0.72761,-4.06797 -0.56224,-5.291668 0.16536,-1.223698 0.49609,-5.55625 0.33073,-6.019271 -0.16537,-0.46302 -0.76068,-2.745052 -0.76068,-2.745052 l 0.95912,-0.165364 47.4927,12.170833 -6.84609,21.728902 -4.99401,15.1474 -17.4625,-4.96094 -20.80287,-0.52916 -12.50156,-5.09323 -0.42995,-6.38308 z"
                    id="path296" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 206.04426,178.3953 30.49323,7.80521 26.39219,6.08542 -7.73906,34.32969 -6.61459,28.50885 -2.3151,11.11251 c 0,0 -0.39688,-0.1323 -2.77813,-1.5875 -2.38125,-1.45522 -4.43177,0.19843 -4.43177,0.19843 l -2.38125,7.27604 0.72761,5.82084 -0.79375,1.85208 -36.24792,-54.50417 -5.42396,-8.59896 2.71198,-5.29166 -1.38906,-2.31511 z"
                    id="path299" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 260.08541,98.226559 8.06979,2.182811 -3.24114,10.45104 3.9026,6.87917 2.05052,2.91042 0.79375,3.70416 0.8599,3.43959 0.92604,1.71979 0.52917,3.10885 0.39687,2.24896 -1.65364,3.30729 -0.72761,1.78594 -0.52916,4.7625 v 0.85989 l 2.64583,-0.79375 0.13229,0.66146 2.05052,10.58333 4.96094,7.34219 12.96458,1.78594 1.52136,1.91823 2.77812,-0.0661 -6.61458,31.08854 -49.80782,-10.84791 -5.4901,-1.38907 11.77396,-38.62916 4.6302,-3.30729 -4.6302,-9.06198 z"
                    id="path301" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 263.79501,192.28037 28.11007,5.84652 -2.29182,12.95589 19.03626,3.83532 -5.84652,40.64501 -1.54347,10.00926 -52.52515,-9.49476 z"
                    id="path303" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 228.20139,312.29776 1.87089,-3.50793 2.43215,0.3274 1.30963,-0.42093 -2.5257,-5.37882 2.8531,-6.73518 5.09817,-6.82873 0.37417,-0.7016 -1.07576,-3.08695 -1.82411,-5.09817 0.88867,-3.27404 -0.51449,-5.42557 2.29183,-7.0626 c 0,0 2.05798,-1.82412 3.97564,-0.32742 1.91766,1.49672 2.89987,1.49672 2.89987,1.49672 l 0.42095,-0.56126 2.0112,-9.5883 52.43159,9.44799 -7.29644,48.92368 -3.64823,23.80702 -22.35711,-3.36759 z"
                    id="path305" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 268.22135,100.47552 -3.10885,10.51718 3.43958,5.88698 c 0,0 1.71979,2.71198 2.4474,3.37344 0.7276,0.66146 1.4552,6.61458 1.4552,6.61458 l 0.72761,1.85209 0.52916,0.7276 0.79375,5.02708 c 0,0 -1.12447,3.10886 -1.85208,4.36563 -0.7276,1.25677 -0.7276,6.48229 -0.7276,6.48229 l 2.64583,-0.59531 2.05052,10.9802 4.7625,7.27605 12.56771,1.91823 2.05052,2.11666 2.71198,-0.0661 1.25677,-6.87917 62.97083,9.12812 6.35,-50.79999 -48.68333,-8.73125 -33.73437,-6.01927 z"
                    id="path307" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 300.0902,160.33498 -10.28986,50.32685 18.89596,4.11595 48.54951,6.26747 5.79975,-51.63647 z"
                    id="path309" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 301.30628,265.38526 7.67064,-50.32684 48.45598,6.17392 19.6443,1.96443 -4.67722,51.44938 -10.5705,-0.56126 z"
                    id="path311" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 289.89387,338.44338 8.51255,1.30964 1.30961,-5.51913 18.98951,2.99341 v -3.08694 l 37.41772,4.0224 5.70622,-63.7037 -60.42964,-8.6996 z"
                    id="path313" />
                <a href="states/Texas.php?userID=<?= $UserID ?>">
                    <path
                        style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                        d="m 361.64239,280.25881 30.96316,2.80633 -1.12253,25.35052 8.13835,1.96443 9.91571,6.26747 2.7128,-1.40316 3.74176,4.39658 7.57709,-1.30961 1.77734,1.68378 1.02899,-1.68378 4.77075,1.02896 1.21608,1.59028 12.81557,-2.10476 6.17395,4.02241 1.26283,-0.93543 3.32083,1.68378 0.0935,16.83797 2.94667,6.40779 0.51448,1.26286 0.60804,5.47235 1.73056,2.38537 -1.07574,2.85311 0.37417,10.19633 -1.54347,3.8821 -9.86893,3.6482 -0.28065,-4.25624 -4.30302,2.0112 1.54347,4.49011 2.75955,-0.18708 -1.35638,3.55467 -2.85311,-1.12252 -12.76879,6.64165 -4.77076,2.66602 -5.51913,5.05138 -7.62386,0.5145 4.724,0.74835 -0.98224,6.17392 -3.6482,0.0468 5.14493,15.20095 -0.42096,3.74179 -5.23848,-2.94667 -9.30765,-0.23384 -5.19173,-4.67722 -4.25625,-6.08039 -1.87089,-9.58829 -4.16272,-3.08697 -6.59487,-14.54613 -6.64165,-8.27868 -15.94932,-5.09815 -3.88207,3.08694 -3.92888,7.57709 -14.35904,-8.98025 -1.21608,-4.86431 -2.99342,-9.30765 -14.82677,-17.25893 0.0935,-3.36759 37.04354,3.97563 4.02241,-43.54488 z"
                        id="path315" />
                </a>
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 369.50012,118.24003 59.21354,3.46114 -1.02897,3.08697 1.12252,4.20949 -0.28064,3.18051 2.89989,12.16076 1.21607,16.55735 -68.10028,-4.11595 z"
                    id="path317" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 364.82289,157.15448 -4.49013,38.25963 39.75634,2.71278 17.67988,6.36102 6.17392,-2.15152 9.16736,3.74177 v -8.98026 l -2.05798,-3.46113 2.3386,-0.28064 -0.65482,-32.27279 z"
                    id="path319" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 360.23923,195.50765 -2.89989,25.16343 19.83139,2.05797 -0.93543,12.72203 66.41647,1.96443 -1.21607,-5.61266 -3.18051,-3.18051 -0.37417,-8.13835 -3.74179,-10.28988 -0.65479,-4.20949 -9.26089,-3.46114 -6.54812,2.15152 -17.58633,-6.45456 z"
                    id="path321" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 376.14174,235.82526 -3.55467,38.6338 77.73535,3.27406 -0.74835,-26.94077 -3.55471,-3.55468 2.24507,-4.95785 -5.98683,-4.86431 z"
                    id="path323" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 361.82948,274.45906 -0.28065,5.61266 31.05672,2.99342 -0.93544,24.97635 8.04482,2.05798 9.82215,6.45453 2.99342,-1.59025 3.64823,4.2095 7.48355,-1.12252 1.96443,1.6838 0.74835,-1.6838 5.0514,1.21607 1.3096,1.59026 12.62849,-2.05799 6.36103,3.92888 0.93543,-1.02899 -2.43215,-39.19508 0.18709,-5.0514 z"
                    id="path325" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 428.62013,121.98181 h 15.90254 l 7.29644,4.30304 4.11596,0.37417 8.60608,2.33861 0.65482,0.0936 2.3386,-1.59026 1.49672,1.96443 -0.56129,2.15152 4.30305,0.37418 4.67723,1.49671 12.81557,-1.49671 4.77075,1.40317 -13.93812,8.60607 -2.43213,4.11595 -4.30305,2.05798 -0.46773,0.93544 -0.4677,2.15152 -0.3742,1.87089 -0.46771,7.57709 -2.33862,2.80633 -2.99342,0.18709 1.30964,6.26747 -1.77734,5.98684 4.95784,5.42557 1.8709,0.28063 3.1805,3.83532 3.36759,1.49671 -0.0935,2.05797 2.43213,0.74836 -0.0935,3.74177 -49.11077,0.18709 -0.3742,-32.83406 -1.21605,-16.18317 -3.08697,-12.34785 0.46773,-3.46114 -1.12255,-4.39659 z"
                    id="path327" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 431.53541,194.00572 1.98438,3.30729 -0.0661,8.40052 0.99219,4.96094 3.63802,10.05417 0.33073,7.73906 3.24114,3.63802 36.71094,-0.59531 3.9026,3.24114 3.63803,-7.60677 -0.19844,-4.03489 8.86354,-8.7974 -0.66146,-1.85208 -5.4901,-6.21771 -5.15938,-4.36562 0.72761,-5.49011 -1.91823,-2.84427 z"
                    id="path329" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 441.90343,232.50443 1.07574,5.00463 5.42557,4.72398 -2.15151,5.0514 3.50792,3.60146 0.60804,24.36829 0.18709,2.43215 -0.14033,4.53692 0.0468,1.73056 46.95926,-0.7016 0.56126,1.12255 0.0936,2.3386 0.70156,1.54347 4.30306,-0.28061 1.12252,-4.72401 0.14033,-1.96442 3.18051,-0.23387 1.35638,-1.77734 -1.49672,-2.24506 -3.36759,-1.77734 -1.12252,-6.82874 -8.18512,-7.7174 1.91764,-3.27405 -0.70157,-3.97563 -3.08697,-1.07577 -2.19829,-1.21607 -7.48355,-7.9045 -0.84191,-8.79316 -4.25624,-2.89988 z"
                    id="path331" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 450.45312,284.0302 2.38125,37.70313 3.37344,2.05052 -0.0661,5.95313 33.80052,-0.19844 1.05833,-4.89479 -1.5875,-5.29167 9.32657,-17.99167 0.59531,-2.24896 3.77031,-7.54062 -0.33073,-3.63802 -3.9026,0.26458 -0.99219,-1.5875 -0.46302,-3.10885 z"
                    id="path333" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 456.20781,329.86927 -0.0661,10.51718 3.57188,7.54063 0.52916,5.68854 1.98438,2.51354 -1.05834,2.64584 -0.19843,0.66145 0.33073,9.6573 -1.45521,3.83645 5.42396,-0.92604 0.92604,-3.70416 0.59531,3.24114 1.78594,1.05833 8.00364,1.98438 5.22552,-0.19844 -3.43958,-3.43958 6.28385,-0.39688 0.46303,3.24115 3.70416,0.8599 -1.12448,2.44739 1.52136,0.72761 2.18281,-0.1323 0.52917,1.7198 2.91041,0.33072 1.71979,1.32292 c 0,0 1.32292,-4.63021 1.32292,-4.36562 0,0.26458 1.5875,2.38125 1.5875,2.38125 l 3.63802,-0.19844 -0.7276,-4.36563 3.50573,2.51355 1.32291,3.24114 5.42394,-2.57969 -4.49789,-2.05052 -1.05834,-3.43958 2.71198,-0.59531 -0.39687,-4.29948 -2.57969,2.44739 h -2.38125 l -0.26458,-1.78593 3.175,-1.05834 -3.96875,0.0661 -4.16719,1.32292 -1.85209,-1.52136 -2.97656,-1.05833 2.77813,-2.24896 5.68854,-0.26458 5.09323,2.44739 -3.50573,-5.62239 -0.26458,-5.02709 -19.77761,1.25677 0.46302,-1.71979 6.74688,-16.27187 -1.78594,-8.66511 z"
                    id="path335" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 487.92722,205.79753 26.84724,-1.02899 0.93544,-3.18051 -2.52569,-10.05601 3.22726,-10.05602 -0.18709,-2.10475 4.34983,-9.86892 -0.18709,-1.82412 -4.30305,6.54811 -2.10473,1.63702 -3.08697,5.3788 -0.18709,-1.12253 3.69498,-7.01583 0.46773,-2.47892 -4.95784,-8.46576 -11.73982,-5.42557 -4.6772,0.28063 -4.16274,-3.55469 -4.06916,0.18709 0.60803,-3.22728 -1.49672,-1.1693 -11.03823,3.50791 -0.51448,7.10937 -0.23387,1.21608 -2.10476,2.43215 -2.94663,0.46772 1.21607,5.65943 -1.77733,6.08039 5.05139,5.47234 2.01121,0.37418 2.80633,3.695 3.36759,1.44993 -0.0468,1.91766 2.57246,1.12253 -0.0468,3.41437 -0.14031,0.60804 1.87089,2.89988 -1.12255,4.11595 0.0936,1.1693 z"
                    id="path316" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 489.08229,206.04426 25.73072,-1.05833 5.22553,8.99583 2.44739,36.57865 -2.05052,7.40833 -1.5875,7.01146 -1.85208,6.4823 -2.11667,2.97656 -5.15937,-0.59531 -1.91823,3.175 -3.57188,-1.78594 -1.19062,-6.81302 -8.00365,-7.47449 1.85208,-3.37343 -1.05833,-4.29948 c 0,0 -4.29948,-1.32292 -4.96094,-1.91823 -0.66146,-0.59531 -7.40833,-8.00365 -7.40833,-8.00365 l -0.8599,-8.79739 3.63802,-7.9375 -0.33072,-3.77032 8.86354,-8.59895 -1.12448,-2.31511 z"
                    id="path318" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 504.29583,281.58281 -0.0662,1.98437 13.69219,-1.05833 v -1.98437 l 47.69112,-3.24115 5.29166,-4.96094 0.0662,-1.71979 7.80521,-6.94532 0.52916,-3.10885 -3.24114,-3.30729 -0.0661,-3.37344 0.52917,-2.38125 -2.91042,-0.0661 -3.43958,-2.57968 -2.57969,0.79375 -5.35781,-0.46302 -1.78594,-1.25678 -9.85573,-2.3151 -0.66146,3.70417 -5.4901,3.63802 -0.26458,2.64583 -4.69636,5.55625 -1.32291,-0.33073 -2.24896,-1.78594 -1.45521,3.70417 -4.16719,0.59531 -1.71979,0.99219 -3.50573,-1.05833 h -1.71979 l -1.58747,0.99218 -0.39688,1.65366 -2.71198,0.0661 -1.52135,5.88698 -2.05052,2.38125 -5.42396,-0.33073 -1.65365,3.43959 1.19063,1.98437 -1.91823,1.78594 z"
                    id="path320" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 504.22968,283.56718 -1.05833,4.69636 0.0661,3.63802 -3.83645,7.54062 -0.19844,1.65365 0.33073,0.7276 19.51302,-0.0661 29.17028,-1.65365 11.04636,-1.52135 3.57187,-3.63802 5.29167,-1.85209 10.51719,-8.79739 3.43958,-2.24896 0.92604,-1.65365 2.38125,-1.65364 1.45521,-3.24115 -24.6724,2.24896 -43.72236,2.91042 -0.59532,1.65364 z"
                    id="path322" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 498.87192,301.91432 20.53299,0.0468 0.0935,1.30963 0.46773,1.1693 -1.02899,33.30178 -0.32742,6.64165 0.3742,11.31885 0.4677,7.57711 -7.62386,0.18709 -3.78854,1.77734 -3.64824,-5.94008 -0.42095,-4.58367 -19.17657,1.26285 6.96904,-17.77341 -1.54347,-8.41901 0.93543,-5.33202 -1.44991,-5.00462 z"
                    id="path324" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 489.37716,153.0853 1.44995,-2.75956 10.52372,-3.97563 -0.0467,-2.89988 8.37221,-4.34981 0.65482,0.0935 0.79512,1.87089 -5.79975,3.92886 0.28062,4.67722 2.24507,-1.77734 6.73521,3.55468 h 4.44333 l 3.41437,1.63703 0.23386,-2.38538 5.65944,-2.8531 7.53031,-1.49671 0.18711,3.22728 1.54347,0.88867 4.30303,-0.93545 5.00462,5.28526 0.23386,0.70158 3.08698,0.18709 -9.72863,0.56126 -0.84187,0.88868 0.42092,1.82411 0.56129,0.74836 1.87087,-0.8419 1.96445,1.82411 4.91106,1.63703 3.36759,0.14031 2.99342,4.25627 -1.35639,0.98221 1.59026,5.09817 0.46773,2.0112 -1.1693,5.79975 -2.89989,0.98222 -0.37417,1.1693 c 0,0 -0.18709,1.91766 -0.18709,2.10475 0,0.18709 0.8419,0.74836 0.8419,0.74836 0,0 0.56126,0.23386 0.79513,0.23386 0.23386,0 0.88866,0 0.88866,0 0,0 0.79512,-0.23386 1.02899,-0.46773 0.23386,-0.23386 0.8419,-0.74835 1.02899,-0.93544 0.18708,-0.18709 0.46773,-0.42095 0.60804,-0.74835 0.1403,-0.32741 0.23386,-0.65481 0.28064,-0.93545 0.0468,-0.28063 0.0468,-0.60804 0.0468,-0.79513 0,-0.18708 0,-0.28063 0,-0.28063 h 1.12255 l 2.19829,-1.26285 1.1693,-0.42095 1.35639,0.56127 0.37417,0.60804 1.12255,1.96443 1.77734,3.22728 0.79512,3.88209 c 0,0 0.3274,2.5257 0.3274,2.75956 0,0.23386 0.8419,1.82411 0.8419,1.82411 l 0.32742,1.26285 c 0,0 -0.28064,0.65481 -0.28064,0.88867 0,0.23386 -0.18709,1.40317 -0.28064,1.63703 -0.0935,0.23386 -0.28062,0.42095 -0.70157,0.56126 -0.42096,0.14032 -0.98222,0.18709 -1.21608,0.28064 -0.23387,0.0935 -1.73056,7.34323 -1.73056,7.34323 l -1.96445,3.88209 -16.27672,1.91766 -0.37417,-1.40317 -20.43944,1.59025 4.34983,-5.19171 0.88866,-12.62848 -4.02241,-6.26747 0.14031,-6.2207 0.79513,-3.08696 c 0,0 -0.0935,-1.30962 -0.0935,-1.63703 0,-0.3274 -0.0936,-2.61924 -0.0936,-2.61924 v -0.60804 l 7.29647,-7.0626 v 4.30305 l 1.49672,-0.23387 0.93543,-2.29183 -0.23386,-1.02899 -0.65482,-1.54348 3.60146,-2.75956 -0.0935,-2.29184 -0.98222,-0.88867 0.70157,-0.42095 0.14034,-0.98221 -1.07577,-1.44994 -1.91765,-1.49671 -4.30305,-1.02899 -7.29647,3.50792 -1.96442,4.77076 -0.79513,-3.46114 -3.08697,1.1693 c 0,0 -1.87087,1.87089 -1.91765,2.05798 -0.0468,0.18708 -1.59025,2.89987 -1.59025,2.89987 l -0.56126,3.74177 -5.51913,-7.99804 -11.59949,-5.79975 -4.2095,0.42095 -4.86431,-3.695 z"
                    id="path326" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 519.35813,301.86757 0.56126,2.15151 0.28065,2.24507 -1.30964,35.17265 -0.18708,5.23848 0.8419,16.46381 3.36759,-1.12253 1.12252,-9.26089 2.43216,9.72863 -2.52569,2.24504 5.42557,-1.4967 0.84191,-0.93546 -0.65482,-8.41899 27.50203,-1.59025 -1.21607,-9.82215 2.3386,-8.41899 -4.77076,-7.95126 -5.79975,-25.63114 z"
                    id="path328" />
                <a href="states/Florida.php?userID=<?= $UserID ?>">
                    <path
                        style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                        d="m 529.82809,354.0125 0.46302,8.26822 1.52136,-0.33072 2.64583,-2.31511 -0.39687,3.83646 5.29166,-0.33073 v -1.38906 l -2.84427,-0.59531 3.83646,-1.98438 3.04271,0.66146 -1.45521,2.11667 5.15937,-0.39688 1.98438,1.45521 2.11667,-2.57969 1.38906,2.4474 -1.45521,1.38906 3.83646,5.09323 7.9375,-2.57969 5.75469,-4.29948 2.97656,1.12448 0.19844,2.31511 4.82864,0.79375 0.13229,1.52135 3.43959,2.18281 0.66145,3.57188 2.91042,-1.05834 2.64583,3.63802 -1.19062,12.63386 2.57969,2.71198 0.33073,-1.71979 2.64583,-1.25677 v 4.16718 l -3.10885,1.98438 0.13229,2.24896 2.44739,4.49791 5.88698,-0.85989 0.13229,3.57187 h -3.24114 l 1.19062,3.90261 5.42396,-2.11667 3.37344,7.73906 5.55625,0.8599 0.13229,1.5875 -2.3151,2.71198 3.0427,1.05833 -2.24895,2.57969 5.68854,0.7276 4.36562,-3.57187 -1.05833,-2.18282 0.33073,-1.78593 c 0,0 0.26458,-0.66146 0.26458,-1.05834 0,-0.39687 0,-1.91823 0,-1.91823 l 1.25677,-1.19062 1.19063,-1.25677 -0.13229,-7.01146 c 0,0 -5.35782,-13.36146 -7.27605,-16.53646 -1.91822,-3.175 -5.35781,-8.73125 -5.35781,-8.73125 l 2.18281,-0.92604 -5.15937,-5.6224 1.25677,-1.19062 c 0,0 -5.82083,-12.7 -5.82083,-13.03073 0,-0.33073 -0.99219,-6.68073 -0.99219,-6.68073 l -5.4901,0.33073 -1.7198,4.23333 -1.52135,-1.4552 -30.69167,1.25677 -2.05052,-2.77813 z"
                        id="path330" />
                </a>
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 520.20004,214.21652 2.3386,36.01457 -3.55468,15.15417 h 2.3386 l 0.74835,-1.68379 0.8419,-0.65481 c 0,0 0.28064,-0.28063 1.12252,0 0.84191,0.28063 2.61924,0.74835 2.61924,0.74835 l 0.74838,0.28064 1.30961,0.0935 1.40316,-0.74835 4.11596,-1.12254 1.77734,-3.55468 2.24507,1.96443 c 0,0 0.93544,0.18709 1.40317,0.0935 0.4677,-0.0935 4.20949,-5.14494 4.20949,-5.14494 l 0.56126,-2.80633 5.14493,-3.64823 0.93546,-3.46114 -4.58369,-34.51786 -20.48621,1.6838 -2.80633,1.87088 -1.87087,-0.46772 z"
                    id="path332" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 546.43922,213.09399 4.20949,32.31956 10.05602,2.43215 1.49669,1.07577 5.09818,0.51449 3.13373,-0.79513 2.94666,2.43216 3.5079,0.28063 0.51448,-2.15152 1.77737,-1.63703 0.37417,-3.695 2.52569,-0.23386 0.79512,-4.63044 2.66602,-0.14032 3.92885,-7.53032 2.15154,-0.79513 -4.25627,-26.09886 -2.47894,-0.0935 -9.21411,5.84652 -2.10473,-0.51449 -5.84653,4.06918 -1.96442,-0.37418 2.0112,-1.26285 -5.19173,-1.40316 z"
                    id="path334" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 547.95205,300.63281 25.99531,-2.84427 -1.05833,3.175 17.39635,17.4625 8.13594,9.65729 -0.39687,3.70417 4.23333,0.19843 0.66146,1.45521 -2.64584,3.24115 0.1323,2.38125 -2.51355,1.85208 -0.19843,4.69635 -0.79375,2.84428 c 0,0 -0.52917,0.0661 0.0661,1.12447 0.59531,1.05834 -0.46302,1.5875 -0.46302,1.5875 l -4.23333,0.26459 -1.52136,3.37344 -1.5875,-1.05834 -30.29479,1.32292 -1.91823,-2.05052 -0.99218,-10.45104 2.44739,-8.66511 -4.7625,-7.73906 z"
                    id="path336" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 573.48434,298.18541 7.54063,-3.70416 13.4276,-1.12448 6.28385,3.24114 10.3849,-1.52135 13.75833,10.98021 -4.63021,5.55625 -0.19843,0.92604 v 1.45521 l -2.57969,4.43177 -2.18281,-1.5875 -0.39688,2.84427 -0.39687,1.32292 -6.01927,5.02708 -0.39688,0.52917 -1.38906,-0.33073 -3.04271,0.79375 2.57969,2.57968 -5.68854,0.79375 -2.84427,-3.10885 -24.27552,-26.1276 -0.46303,-1.38907 z"
                    id="path338" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 559.67574,298.96768 14.54613,-1.30961 6.7352,-3.41437 13.33006,-1.07577 6.59487,3.32082 10.43019,-1.59026 14.03167,11.13179 0.79513,-0.79512 0.79513,-0.0468 0.4677,-1.63703 3.04019,0.28064 0.0468,-0.56126 c 0,0 -0.70159,-2.38538 -0.46773,-2.29185 0.23387,0.0936 3.13375,2.99342 3.13375,2.99342 l -0.46773,-3.55468 1.68381,-1.87089 0.0935,-1.26286 1.77734,-2.29182 -0.98221,-0.74835 1.87089,-2.05798 2.38538,-0.60804 3.22728,-1.07577 2.57247,-0.88865 1.87089,-0.46773 c 0,0 0.60804,-2.71278 0.56126,-2.89989 -0.0468,-0.18709 -0.98221,-0.74835 -1.26285,-0.74835 -0.28062,0 -1.91765,0.14034 -1.91765,0.14034 0,0 -0.7016,1.02896 -0.93546,1.1693 -0.23384,0.14031 -1.77734,0.37417 -1.77734,0.37417 l -2.3386,-1.30963 1.1693,-1.21608 2.19829,-0.3274 h 1.26286 l 0.60804,0.14031 0.28061,-1.40316 0.65482,-0.60804 2.33863,-0.74835 0.70157,-1.26286 V 279.604 l -3.46115,-0.84191 3.78854,-0.37417 c 0,0 1.12255,-0.51451 1.30964,-0.93546 0.18708,-0.42095 0.70156,-1.77734 0.65481,-2.15151 -0.0468,-0.37418 -1.16932,-1.40317 -1.16932,-1.40317 l -0.51449,-0.88868 0.74835,-1.30961 2.33863,1.59025 -4.2095,-6.73518 -0.93546,-1.02899 -60.61673,9.77538 -0.93543,3.41436 -2.52569,1.68381 -1.16932,1.91765 -14.0784,11.17854 -4.86431,1.44994 z"
                    id="path340" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 571.16924,271.06562 -0.52917,1.65365 -4.10104,3.83646 1.12448,0.52916 17.59479,-1.65364 62.30937,-10.25261 -0.0661,-1.25678 -0.46302,-1.25677 0.39687,-1.32291 -2.38125,0.59531 -1.98437,0.39687 -1.38907,0.26459 -2.97656,-1.65365 -2.77812,-1.38906 -3.43959,-0.52917 1.78594,-0.52916 4.10104,0.85989 2.84427,1.52136 h 0.92605 l -2.38125,-2.91042 -0.19844,-1.5875 -2.77813,-2.44739 2.97657,0.0661 -0.8599,-1.52135 c 0,0 -0.52917,-2.18282 -0.46302,-2.4474 0.0661,-0.26458 0.0661,-1.32292 0.0661,-1.32292 l -4.16718,-2.18281 -4.82865,-0.66146 h -0.46302 c 0,0 -0.8599,-1.52135 -0.8599,-1.78593 0,-0.26459 0.26459,-1.45521 0.33073,-1.78594 0.0661,-0.33073 1.12448,-1.45521 1.12448,-1.45521 0,0 -1.85208,-0.46302 -1.98437,-0.92604 -0.13229,-0.46302 -0.52917,-1.71979 -0.66146,-2.11667 -0.13229,-0.39687 -1.38906,-1.05833 -1.38906,-1.05833 l -1.5875,-0.46302 -1.25677,-1.45521 -0.72761,-0.8599 -1.05833,-0.46302 -1.32292,0.59532 -2.97656,3.70416 -1.78594,0.19844 -0.52916,2.51354 -2.97657,2.84427 -3.0427,5.09323 -4.96094,-1.05833 0.26458,3.37344 -3.37344,1.65364 -1.91823,1.78594 -0.92604,1.45521 -0.59531,3.70416 -0.26458,0.59532 -4.49792,0.0661 -1.5875,1.91823 -2.64583,-1.5875 -2.97657,4.43178 -5.35781,-3.70417 -0.59531,2.77812 z"
                    id="path342" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 620.1833,233.69322 -1.19063,-2.77812 -7.20989,0.26458 -4.43177,3.57187 -0.92604,1.38907 -1.52136,2.38125 -0.92604,0.92604 -0.39687,-1.12448 -0.79375,-7.34219 -10.91407,1.45521 -0.59531,-1.78594 -1.98437,1.19063 -3.43959,7.20989 h -2.57969 l -0.46302,0.99219 -0.59531,3.63802 -2.51354,0.52917 -0.59531,3.175 -0.13229,1.05833 -1.38907,0.92604 -0.92604,2.64584 -0.59531,2.84427 0.0661,1.98437 2.71198,2.91042 5.82084,4.56406 3.10885,-4.36562 2.64583,1.52135 1.45521,-1.71979 4.56407,-0.26458 0.66145,-3.96875 1.38907,-1.78594 3.30729,-2.31511 1.85208,-1.05833 -0.46302,-3.50573 4.89479,1.32292 3.10886,-4.89479 2.97656,-2.77813 0.39687,-2.57969 2.11667,-0.46302 z"
                    id="path344" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 602.98538,230.7828 39.29063,-6.15156 0.52916,2.18281 c 0,0 -1.19062,0.33073 -1.5875,0.46303 -0.39687,0.13229 -1.5875,0.52916 -1.71979,0.79375 -0.13229,0.26458 -0.7276,1.78593 -0.7276,1.78593 l -1.12448,1.45521 -0.99219,1.12448 -1.05833,0.0661 1.19062,1.5875 1.32292,1.12448 c 0,0 0.66146,0.52916 0.33073,0.7276 -0.33073,0.19844 -0.72761,0.33073 -1.12448,1.05833 -0.39688,0.72761 -0.52917,1.19063 -0.39688,1.85209 0.1323,0.66145 0.8599,1.25677 0.66146,1.91823 -0.19843,0.66145 -0.46302,1.12447 -0.13229,1.65364 0.33073,0.52917 1.25677,1.05833 1.25677,1.38906 0,0.33073 -0.0661,0.59532 0.59531,0.59532 0.66146,0 1.45521,-0.19844 1.85209,-0.59532 0.39687,-0.39687 0.66146,-0.66146 0.85989,-0.92604 0.19844,-0.26458 0.59532,-0.13229 0.19844,-0.7276 -0.39687,-0.59532 -0.39687,-0.59532 -0.85989,-1.05834 -0.46303,-0.46302 -0.92605,-0.92604 -1.05834,-1.25677 -0.13229,-0.33073 -0.19844,-0.39687 -0.19844,-0.7276 0,-0.33073 -0.0661,-0.46302 0.52917,-0.92604 0.59531,-0.46302 0.92604,-0.59531 0.92604,-0.99219 0,-0.39687 -0.0661,-0.46302 -0.52916,-1.19062 -0.46302,-0.72761 -0.33073,-0.66146 -0.72761,-1.19063 -0.39687,-0.52917 -1.05833,-0.79375 -0.92604,-1.71979 0.13229,-0.92604 -0.19844,-0.79375 0.26458,-1.19063 0.46302,-0.39687 0.19844,-0.26458 1.12448,-0.92604 0.92604,-0.66146 1.05834,-0.59531 1.32292,-0.92604 0.26458,-0.33073 0.66146,-0.99219 0.7276,-1.32292 0.0661,-0.33073 0.33073,-0.59531 0.33073,-0.59531 l 1.85209,7.2099 2.18281,6.81302 7.20989,-0.66146 -1.12447,5.55625 -6.35,3.30729 0.13229,-2.05052 c 0,0 -0.46302,-1.32292 -0.8599,-1.78594 -0.39687,-0.46302 -0.66146,-1.38906 -1.25677,-1.38906 -0.59531,0 -2.71198,0.39687 -2.71198,0.39687 l -0.92604,-0.59531 -1.91823,0.66146 1.98438,2.97656 -2.51355,0.59532 c 0,0 -3.63802,-2.71198 -4.10104,-2.71198 -0.46302,0 -5.62239,-0.92605 -5.62239,-0.92605 l -0.72761,-2.05052 0.52917,-2.18281 1.38906,-0.7276 -2.44739,-0.59531 -0.8599,-2.71198 -3.37344,-1.65365 -2.38125,-2.3151 -1.05833,0.13229 -1.45521,-2.64584 -7.34219,0.46303 -3.77031,3.43958 -3.30729,4.23333 z"
                    id="path442" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 642.4083,224.96197 1.05833,-1.12448 c 0,0 1.98438,1.12448 1.98438,1.65365 0,0.52916 0.7276,2.51354 0.7276,2.51354 l 1.78594,1.65365 c 0,0 0.46302,0.85989 0.59531,1.12447 0.13229,0.26459 1.71979,0.79375 1.71979,0.79375 l 0.59532,0.79375 0.26458,0.79375 0.0661,0.79375 0.79375,0.19844 1.32292,-0.0661 0.79375,-0.1323 1.05833,0.19844 c 0,0 1.7198,0.92604 1.45521,0.92604 -0.26458,0 0.52917,1.05834 0.52917,1.05834 l -0.52917,0.79375 -0.79375,0.85989 -1.32291,0.8599 2.11666,0.46302 -1.05833,1.45521 -0.99219,0.99218 -7.34219,0.46303 z"
                    id="path446" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 643.49145,223.52418 1.73059,1.21608 0.79512,1.59025 3.60146,0.18709 0.37417,1.96443 4.11594,-9.49475 0.23386,-7.53032 -0.88868,-0.88867 -2.71277,0.28063 2.71277,-6.03361 -7.62386,-2.57247 -2.24504,2.57247 -0.23387,7.53032 3.88207,3.27405 -0.1403,2.8531 -2.66603,1.82412 -0.84187,1.77734 z"
                    id="path448" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 587.08422,204.39436 6.7352,-3.74177 0.65479,2.5257 41.53369,-8.79317 4.30305,3.18051 0.8419,2.80633 4.49011,1.68379 -2.24504,3.27406 -0.0936,7.01582 3.74177,3.46114 -0.28062,2.5257 -2.80633,2.43215 -0.56126,2.15152 -0.46773,1.30962 -50.88811,7.95127 z"
                    id="path450" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 593.63234,200.55905 7.8577,-9.54152 -2.71278,-3.92887 v -2.33861 l 11.13177,-3.08696 2.33862,1.02899 5.70619,-1.40317 5.8933,-5.05139 -1.49672,-3.55469 0.56129,-1.4967 -1.8709,-1.6838 8.79317,-13.56393 15.52837,-4.30304 2.52568,7.67064 -0.28062,4.67721 2.05796,6.08038 1.12255,-0.0935 2.52568,9.63506 0.0936,9.63507 2.24507,10.38342 -0.74837,2.89988 0.60803,0.88867 -1.49669,3.1805 4.39658,-2.15151 9.54151,-6.08038 -0.88866,2.10474 1.35639,0.14032 4.30303,-2.15152 -0.70157,1.40316 -9.96247,7.62387 -2.29184,-1.16931 -5.42558,3.04019 -1.63703,-0.56126 -0.28061,-1.21608 0.84188,-1.73057 -0.0935,-1.26285 -11.88013,-4.30304 -1.1693,-2.80633 -4.25627,-3.27405 -41.29982,8.69963 z"
                    id="path454" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 653.64103,189.56759 17.35245,-3.78855 1.91768,8.79317 -7.43678,3.08696 -2.99344,0.98222 -6.92227,4.72399 -0.65481,-1.12254 0.79512,-2.99342 z"
                    id="path456" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 670.91715,185.63827 2.11667,8.69818 3.60495,-2.14974 0.0992,-1.28984 1.25677,0.46302 1.5875,-0.8599 -1.48828,-2.8112 -2.0836,-0.95911 -0.99219,-2.51354 z"
                    id="path458" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 653.58694,179.58593 v 9.72344 l 17.06563,-3.57188 4.69635,-1.98437 1.05834,2.51354 2.24895,1.12448 1.25678,2.97656 2.24895,-2.91042 2.05052,1.5875 2.71198,-2.18281 1.45521,-0.39687 1.38906,0.39687 -0.33072,-3.77031 -3.10886,-2.84427 -0.33073,0.7276 2.11667,2.38125 -0.66146,1.38906 -2.11667,0.79375 -1.38906,-0.0661 -0.85989,-1.05833 -1.32292,-1.05834 -0.13229,-1.38906 -1.52136,-1.52135 -2.51354,-0.19844 -0.7276,-1.32292 2.05052,-4.03489 -1.38906,-0.79375 -1.19063,-2.24896 -1.65364,0.7276 -1.52136,1.5875 -0.33073,0.59531 z"
                    id="path460" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 645.31872,151.67239 16.93333,-4.7625 0.19844,3.90261 1.05833,1.32291 0.0661,2.4474 -2.77813,2.77812 0.33073,3.24115 -0.33073,3.9026 -0.46302,1.98438 0.13229,3.9026 0.59531,1.78594 -0.0661,5.02708 -7.40834,2.11667 -2.57968,-9.45886 -1.38907,-0.0661 -1.85208,-5.6224 v -5.55625 z"
                    id="path462" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 662.31819,147.37291 0.46303,-3.50573 1.12447,-0.33073 1.05834,-0.33073 10.84791,28.64115 -1.38906,0.7276 c 0,0 -0.59531,0.59531 -0.85989,0.8599 -0.26459,0.26458 -1.19063,0.85989 -1.19063,0.85989 l -2.18281,0.8599 -9.06198,2.3151 0.19844,-5.15937 -0.72761,-3.175 v -2.71198 l 0.59532,-4.49792 c 0,0 0.19843,-1.32291 0.19843,-1.65364 0,-0.33073 -0.13229,-1.91823 -0.19843,-2.38125 -0.0661,-0.46302 0.59531,-1.5875 0.59531,-1.5875 l 1.98437,-1.38906 -0.19843,-2.97657 -0.99219,-1.91822 z"
                    id="path464" />
                <path
                    style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                    d="m 665.03017,142.94114 2.71198,-1.32292 v -3.30729 l 1.45521,-1.38906 -0.52917,-2.24896 0.92605,-1.85208 -2.24896,-8.06979 5.29166,-13.16302 1.65365,1.45521 0.7276,0.26458 1.45521,-0.52917 c 0,0 0.59532,-0.99219 0.8599,-1.12448 0.26458,-0.13229 1.05833,-0.52916 1.05833,-0.52916 l 8.33438,2.24895 6.15156,17.26407 0.79375,0.46302 6.01927,0.39687 4.96094,7.54063 -2.18282,2.97656 -1.85208,0.19844 -0.66146,1.65364 -1.85208,-0.19843 1.05833,1.85208 h -1.38906 l -0.79375,0.85989 v 0.52917 l -1.65365,-0.33073 -0.79375,-0.39687 v 0.99218 l -1.78593,0.19844 c 0,0 -0.99219,-0.7276 -1.19063,-0.33073 -0.19844,0.39688 -0.79375,1.91823 -0.79375,1.91823 l -2.05052,-2.38125 -0.13229,8.92969 -2.57969,-1.19063 -2.05052,4.0349 1.19063,2.71198 -1.12448,-0.39688 -0.99219,-1.65364 -1.65365,1.05833 0.92605,1.98437 -2.57969,2.57969 h 0.92604 l 0.52917,2.05052 -2.05052,0.52917 0.0661,2.3151 -2.71198,1.98438 z"
                    id="path466" />
                <g id="g543" transform="translate(-0.33201483,-32.146207)">
                    <path id="path468"
                        style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                        d="m 329.73698,429.81563 -4.23333,0.13229 -1.91823,0.99219 v 2.38125 l 2.11667,1.38906 3.9026,-0.92604 z m -10.98021,2.18281 c -0.13229,0.33072 -2.57968,3.04271 -2.57968,3.04271 l 0.39687,1.25677 0.79375,0.33073 1.52135,-1.12448 1.05834,-0.66146 v -1.32292 l 0.46302,-0.26458 z m 29.96407,5.68854 -1.38907,1.52135 -2.57968,0.46303 2.18281,5.15937 2.18281,-1.71979 1.25677,1.19062 2.64583,-0.13229 -0.33072,-2.44739 -2.71198,-1.32292 z m 9.59114,7.73906 -1.65364,2.51354 8.06979,0.0661 2.57968,-2.11667 -9.06197,-0.19843 z m 10.25261,2.84427 -2.91042,2.11667 -3.96875,-0.33073 2.24896,3.43958 1.85208,-0.46302 -0.33073,-1.65364 1.38906,-1.05834 3.175,1.32292 1.19063,2.4474 c 0,0 4.49792,0.0662 5.09323,0.13229 0.59532,0.0661 1.12448,-2.11667 1.12448,-2.11667 l -4.43177,-2.64583 -2.24896,0.59531 z m 0.19843,6.21771 -2.64583,1.5875 -0.0661,0.46302 1.52136,1.38907 2.38125,-1.78594 z m 10.51719,6.28386 0.13229,4.6302 -3.04271,1.7198 0.66146,3.0427 0.92604,1.32292 0.52917,5.55625 3.04271,3.175 3.96875,-4.10104 6.61458,-2.24896 2.24896,-1.71979 -2.38125,-2.51354 -2.38125,-3.57188 z" />
                </g>
                <g id="g587" transform="translate(20.595333,-49.674242)">
                    <path id="path545"
                        style="font-variation-settings:normal;opacity:1;vector-effect:none;fill:#fff5f5;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000;stop-opacity:1"
                        d="m 245.79792,400.44687 -13.16303,2.64584 -6.01927,3.83645 -5.15937,1.19063 2.3151,4.16719 -0.13229,4.7625 1.65365,1.38906 0.92604,4.49792 -3.43958,-0.26459 -1.19063,-4.49791 -10.18646,2.05052 1.38906,2.97656 0.33073,4.49792 6.41615,3.175 4.10104,-1.19063 -0.19844,6.74688 -8.20208,2.38125 -0.99219,3.10885 -3.43958,-3.04271 -5.95313,3.63802 2.57969,4.89479 -1.65364,5.68855 4.49791,2.44739 -1.12448,6.87917 4.16719,-0.8599 4.49792,5.15938 4.69635,-1.78594 -5.75469,6.74688 -12.36927,4.36562 -3.63802,3.30729 h -1.32291 l -0.66146,-0.85989 c 0,0 -2.24896,-0.39688 -2.51354,-0.52917 -0.26458,-0.1323 -1.52136,-0.13229 -1.52136,-0.13229 l -1.25677,0.66146 h -2.05052 l -0.13229,0.7276 -1.05833,1.05833 c 0,0 -1.12449,-0.39688 -1.38907,-0.59531 -0.26459,-0.19844 -1.32291,0.26458 -1.32291,0.26458 l -2.11667,0.92605 -0.79375,-0.52917 -2.05052,-0.19844 -0.72761,2.51354 -0.85989,0.19844 c 0,0 -1.32292,-1.98438 -1.32292,-2.38125 0,-0.39688 -5.4901,2.64583 -5.4901,2.64583 l -1.19063,0.26459 -1.38906,0.26458 -1.19062,-0.0661 c 0,0 -2.38126,-0.46303 -2.64584,-0.26459 -0.26459,0.19844 0,1.05834 0,1.05834 l 2.05052,-0.0661 2.51354,0.79375 2.31511,-1.25677 0.59531,0.66146 1.85208,-0.33073 1.12448,-1.25677 2.05052,0.26458 1.5875,0.92604 2.31511,-0.52916 1.12448,-1.32292 0.79375,0.26458 2.71198,-1.05833 2.24896,-0.46302 1.25677,1.19062 1.32291,-1.78593 2.38125,0.99218 1.12448,-1.32291 1.78594,0.59531 2.57969,-0.33073 3.70416,-0.26458 18.12396,-4.7625 9.92188,-7.14375 1.05833,-4.23334 5.15938,-4.89479 2.24895,1.05833 -2.11666,7.80521 10.84791,-2.91041 1.7198,-5.42396 7.9375,6.21771 8.86354,2.51354 7.80521,4.7625 3.175,4.7625 4.6302,-0.13229 2.64584,2.51354 2.38125,-0.26459 -0.66146,5.02709 -1.85208,-2.51354 -2.77813,2.64583 1.5875,1.05833 2.38125,2.24896 2.24896,-1.71979 h 1.45521 v 2.11667 l 0.39687,3.43958 1.71979,2.64583 2.51355,1.45521 0.66145,-1.05833 c 0,0 -1.5875,-2.51354 -1.5875,-3.175 0,-0.66145 -0.92604,-2.77813 -0.92604,-2.77813 l 1.5875,-1.19062 2.91042,4.23333 3.57187,0.66146 -3.83645,-9.39271 -13.36146,-13.89062 -5.15938,2.38125 -3.70416,-5.15938 -6.87917,-1.5875 3.04271,-51.59375 -17.72709,-6.08542 z m -48.15417,23.48177 c -0.26458,0.52917 -1.45521,4.0349 -1.45521,4.0349 l 2.38125,0.39687 1.91823,3.10886 c 0,0 3.77032,0.79376 3.63802,0.52917 -0.13229,-0.26458 -1.65365,-5.55625 -2.24896,-5.55625 h -2.3151 l -1.52136,-2.38125 z m -11.1125,12.36927 c 0,0 -1.38906,2.24897 -1.45521,2.64584 -0.0661,0.39688 0.19843,2.11667 0.26458,2.38125 0.0661,0.26459 1.25677,0.7276 1.25677,0.7276 0,0 1.05834,-0.85989 1.38907,-1.19062 0.33073,-0.33073 0.59531,-1.19063 0.33073,-1.38907 -0.26458,-0.19843 -0.92605,-0.0661 -0.92605,-0.79375 0,-0.72759 0.0661,-1.05833 0,-1.52135 -0.0661,-0.46302 -0.85989,-0.8599 -0.85989,-0.8599 z m 15.80885,11.31094 -3.77031,0.79375 1.38906,2.84427 3.57188,-0.46302 z m -17.79323,8.59896 -4.6302,0.79375 3.175,2.91042 1.85208,-1.91823 z m -51.72604,6.15156 c -0.66146,0 -1.25677,0.0661 -1.25677,0.0661 l -1.05833,0.39687 c 0,0 0.19843,0.92605 0.39687,1.25677 0.19844,0.33073 -0.0661,0.52918 0.52917,0.59532 0.59531,0.0661 1.05833,0.0661 1.5875,0.0661 0.52916,0 0.92604,-0.0661 0.92604,-0.0661 0,0 0.52917,-0.66147 0.52917,-1.05834 0,-0.39688 0.46302,-0.5953 -0.33073,-0.85989 -0.79375,-0.26458 -0.66146,-0.39688 -1.32292,-0.39688 z m 49.34479,0.19844 c 0,0 -0.99218,0.59531 -0.99218,1.05833 0,0.46302 -0.26459,0.99219 0.52916,1.12448 0.79375,0.13229 0.8599,0.19844 1.32292,0.13229 0.46302,-0.0661 1.4552,-0.46302 1.52135,-0.92604 0.0661,-0.46302 0.33073,-0.39687 -0.13229,-0.7276 -0.46303,-0.33072 -0.46303,-0.52917 -0.79375,-0.52917 -0.33073,0 -1.45521,-0.13229 -1.45521,-0.13229 z m -47.36041,3.9026 c -0.26458,0 -0.79375,0.52917 -0.79375,0.52917 0,0 -0.52917,1.32291 -0.52917,1.71979 0,0.39687 -0.0661,-0.26457 0,0.59532 0.0661,0.85989 0.0661,0.92604 0.33073,1.38906 0.26458,0.46302 0.0661,0.7276 0.59531,0.85989 0.52917,0.13229 1.85209,0 1.98438,-0.26458 0.1323,-0.26459 0.46301,-0.19843 0.13229,-0.92604 -0.33073,-0.7276 -0.39688,-0.39687 -0.66146,-1.38906 -0.26459,-0.99219 -0.26458,-1.12449 -0.26458,-1.52136 0,-0.39688 0.19839,-0.72761 -0.0661,-0.79375 -0.26459,-0.0661 -0.46301,-0.19844 -0.7276,-0.19844 z m 3.10885,0.99219 c -0.26459,0.13229 -0.59531,1.19062 -0.52917,1.45521 0.0661,0.26458 0.46303,0.92604 0.46303,0.92604 0,0 0.13228,0.46302 0.52916,0.46302 0.39687,0 0.59532,0.19845 0.8599,-0.19843 0.26459,-0.39687 0.39687,-0.33073 0.39687,-0.79375 0,-0.46302 0.26454,-0.66146 -0.0661,-0.99219 -0.33073,-0.33073 -0.19844,-0.33074 -0.66146,-0.52917 l -0.46302,-0.19844 z m 96.70521,3.70417 -1.98438,2.77812 -1.5875,0.0661 -0.46302,1.65365 -1.52135,-0.39688 -1.05833,0.52917 -0.52917,0.92604 -0.0661,-0.39688 -0.0661,2.18282 c 0,0 0.6615,0.8599 0.0661,1.12448 -0.59532,0.26458 -1.85208,1.65364 -1.85208,1.65364 l 4.0349,-2.3151 c 0,0 5.55624,-3.63803 5.29166,-3.70417 -0.26459,-0.0661 -1.32291,-1.12448 -1.32291,-1.12448 l 1.71979,-2.18281 z m -90.68594,1.38906 -0.59531,1.78594 -0.39688,0.59531 c 0,0 0.19844,0.39688 0.52917,0.72761 0.33073,0.33073 1.52135,0.79374 1.78594,0.85989 0.26458,0.0661 0.8599,-0.0662 1.12448,0.33073 0.26459,0.39687 0.46302,1.12448 0.46302,1.12448 0,0 0.79375,0.39688 1.38906,0.39687 0.59531,0 0.85989,-0.0661 1.38906,-0.0661 0.52917,0 0.59531,0.0662 1.12448,-0.13229 0.52917,-0.19843 0.99219,-0.99218 0.99219,-1.25677 0,-0.26458 -0.0661,-0.66147 -0.59531,-0.92605 -0.52916,-0.26457 -1.05834,-0.52916 -1.91823,-0.52916 h -1.05833 c 0,0 -0.0661,-1.05834 -0.66146,-1.05834 h -0.99219 l -0.92604,-1.12447 -0.8599,-0.66146 z m 9.65729,5.29167 -0.79375,0.19844 -0.26458,0.92604 -0.13229,1.05833 1.32292,0.79375 2.44739,0.26458 0.92604,0.52917 1.05834,1.5875 1.65364,-0.19844 -0.26458,-1.32291 -1.78594,-3.24115 -2.71198,0.13229 z m 8.00365,3.63802 -0.26458,0.79375 0.46302,1.45521 0.92604,-0.26459 0.19844,-1.19062 z m 60.72187,0.39687 -0.59531,1.05834 -0.99219,0.26458 -0.19843,1.71979 2.24896,-0.19844 c 0,0 0.7276,-1.12448 0.7276,-1.38906 v -1.45521 z" />
                </g>
            </g>
        </svg>
    </div>


</body>

</html>

</html>