<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>California</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stateStyle.css">
</head>

<body>
    <?php
    require_once("../config.php");

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
        <h1 id="nav-title"><a id="logo" href="../home.php?userID=<?= $UserID ?>">Map Album</a></h1>
        <nav>
            <ul>
                <li><a href="../gallery.php?userID=<?= $UserID ?>">Gallery</a></li>
                <li><a href="../about.php?userID=<?= $UserID ?>">About</a></li>
                <li><a href="../contact.php?userID=<?= $UserID ?>">Contact</a></li>
            </ul>
        </nav>
        <a id="login" href="../login.php">
            <?= $Name ?>
        </a>
    </header>

    <div id="input-menu" class="form-hidden">
        <form action="" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload[]" multiple="multiple" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <?php
        // Check if image file is a actual image or fake image
        if ((isset($UserID)) && ($UserID != 0)) {
            if (isset($_POST["submit"])) {

                $AlbumTable = "photo_albums";
                $PhotosTable = "photos";
                $UserTable = "user_info";

                $sql = "INSERT INTO $AlbumTable VALUES (NULL, 'TX', '$UserID')";
                $pdo->exec($sql);

                $q = "SELECT albumID FROM $AlbumTable ORDER BY albumID DESC LIMIT 1;";

                $result = $pdo->query($q);

                while ($row = $result->fetch()) {
                    $aID = $row["albumID"];
                }

                for ($i = 0; $i < count($_FILES["fileToUpload"]["name"]); $i++) {

                    $target_dir = realpath(dirname(getcwd())) . "\\photos\\";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
                    if ($check !== false) {
                        // echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        // echo "File is not an image.";
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        // echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"][$i])) . " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    $photo = "photos/" . $_FILES["fileToUpload"]["name"][$i];
                    // INSERT PHOTO
                    $sql = "INSERT INTO $PhotosTable VALUES (NULL, '$photo', '$aID')";
                    $pdo->exec($sql);

                }
            }
        }
        ?>
    </div>
    <!-- <img id="pinPlaced" src="pin.svg"> -->

    <div id="pinFixed">
        <svg id="pin2" width="101.26379mm" height="151.3492mm" viewBox="0 0 101.26379 151.3492" version="1.1" id="svg5"
            inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" sodipodi:docname="pin.svg"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25"
                inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"
                inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false" inkscape:zoom="0.89263468"
                inkscape:cx="154.03838" inkscape:cy="336.08374" inkscape:window-width="2560"
                inkscape:window-height="1377" inkscape:window-x="1912" inkscape:window-y="-8"
                inkscape:window-maximized="1" inkscape:current-layer="layer1" />
            <defs id="defs2" />
            <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1"
                transform="translate(-53.296647,-59.445556)">
                <g id="g5372" transform="translate(-12.449102,5.0389222)">
                    <ellipse style="fill:#c01014;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path234"
                        cx="129.52994" cy="94.553894" rx="37.347305" ry="40.014969" />
                    <path
                        style="font-variation-settings:normal;opacity:1;fill:#080101;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;stop-color:#000000;stop-opacity:1"
                        d="m 66.691614,205.11377 31.122755,-90.7006 28.455091,19.56287 z" id="path5367" />
                </g>
            </g>
        </svg>
    </div>


    <div id="pinHover" class="form-hidden">
        <svg id="pin" width="101.26379mm" height="151.3492mm" viewBox="0 0 101.26379 151.3492" version="1.1" id="svg5"
            inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" sodipodi:docname="pin.svg"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25"
                inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"
                inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false" inkscape:zoom="0.89263468"
                inkscape:cx="154.03838" inkscape:cy="336.08374" inkscape:window-width="2560"
                inkscape:window-height="1377" inkscape:window-x="1912" inkscape:window-y="-8"
                inkscape:window-maximized="1" inkscape:current-layer="layer1" />
            <defs id="defs2" />
            <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1"
                transform="translate(-53.296647,-59.445556)">
                <g id="g5372" transform="translate(-12.449102,5.0389222)">
                    <ellipse style="fill:#c01014;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path234"
                        cx="129.52994" cy="94.553894" rx="37.347305" ry="40.014969" />
                    <path
                        style="font-variation-settings:normal;opacity:1;fill:#080101;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;stop-color:#000000;stop-opacity:1"
                        d="m 66.691614,205.11377 31.122755,-90.7006 28.455091,19.56287 z" id="path5367" />
                </g>
            </g>
        </svg>
    </div>

    <script>
    <?php require_once("./pinClick.js"); ?>
    </script>

    <!-- Created with Inkscape (http://www.inkscape.org/) -->
    <div id="map-div">
        <svg id="map" width="145.02501mm" height="144.2755mm" viewBox="0 0 145.02501 144.2755" version="1.1"
            id="svg4996" inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" sodipodi:docname="Texas.svg"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <sodipodi:namedview id="namedview4998" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25"
                inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"
                inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false" inkscape:zoom="1.2623761"
                inkscape:cx="301.41573" inkscape:cy="364.39221" inkscape:window-width="1350"
                inkscape:window-height="1205" inkscape:window-x="1972" inkscape:window-y="52"
                inkscape:window-maximized="0" inkscape:current-layer="layer1" />
            <defs id="defs4993" />
            <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1"
                transform="translate(-17.00246,-33.086802)">
                <path
                    style="font-variation-settings:normal;vector-effect:none;fill:#fff3ae;fill-opacity:1;stroke:#000000;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;-inkscape-stroke:none;stop-color:#000000"
                    d="m 60.71581,34.17149 30.96316,2.80633 -1.12253,25.35052 8.13835,1.96443 9.91571,6.26747 2.7128,-1.40316 3.74176,4.39658 7.57709,-1.30961 1.77734,1.68378 1.02899,-1.68378 4.77075,1.02896 1.21608,1.59028 12.81557,-2.10476 6.17395,4.02241 1.26283,-0.93543 3.32083,1.68378 0.0935,16.83797 2.94667,6.40779 0.51448,1.26286 0.60804,5.47235 1.73056,2.38537 -1.07574,2.85311 0.37417,10.19633 -1.54347,3.8821 -9.86893,3.6482 -0.28065,-4.25624 -4.30302,2.0112 1.54347,4.49011 2.75955,-0.18708 -1.35638,3.55467 -2.85311,-1.12252 -12.76879,6.64165 -4.77076,2.66602 -5.51913,5.05138 -7.62386,0.5145 4.724,0.74835 -0.98224,6.17392 -3.6482,0.0468 5.14493,15.20095 -0.42096,3.74179 -5.23848,-2.94667 -9.30765,-0.23384 -5.19173,-4.67722 -4.25625,-6.08039 -1.87089,-9.58829 -4.16272,-3.08697 -6.59487,-14.54613 -6.64165,-8.27868 -15.94932,-5.09815 -3.88207,3.08694 -3.92888,7.57709 -14.35904,-8.98025 -1.21608,-4.86431 -2.99342,-9.30765 -14.82677,-17.25893 0.0935,-3.36759 37.04354,3.97563 4.02241,-43.54488 z"
                    id="path315" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6735"
                    d="m 59.237246,51.456686 c 1.388716,0.341424 2.769809,0.71039 4.156083,1.061629 1.446969,0.329888 2.878288,0.726165 4.341209,0.980653 0.897655,0.119047 1.790494,0.270432 2.691477,0.363197 0.626123,0.05433 1.255151,0.05604 1.88314,0.05859 0.627319,0.0073 1.247142,-0.119111 1.863693,-0.220229 0.899811,-0.10874 1.795084,-0.241334 2.698665,-0.316046 1.377165,-0.05931 2.753757,-0.116944 4.130429,-0.190808 1.193925,-0.06811 2.389415,-0.09575 3.585022,-0.108962 0.946293,0.03022 1.887043,-0.06478 2.829132,-0.134468 0.639132,-0.0079 1.266438,-0.118314 1.896784,-0.209318 0.209328,-0.03026 0.420209,-0.04541 0.631053,-0.05982 0.706128,-0.0488 0.637119,-1.047416 -0.06901,-0.998618 v 0 c -0.23564,0.01645 -0.471318,0.03374 -0.70526,0.06773 -0.607433,0.08792 -1.211275,0.196192 -1.827445,0.201749 -0.921231,0.06821 -1.840931,0.162513 -2.766324,0.1318 -1.2098,0.0134 -2.419483,0.04146 -3.627581,0.110338 -1.386401,0.07439 -2.772743,0.131514 -4.159567,0.192798 -0.930101,0.07743 -1.851951,0.212406 -2.77803,0.325835 -0.561607,0.09225 -1.12635,0.211613 -1.697514,0.20702 -0.595217,-0.0024 -1.191416,-0.0034 -1.784966,-0.05337 -0.878028,-0.08984 -1.747819,-0.239199 -2.622733,-0.353722 -1.438121,-0.248335 -2.843913,-0.643054 -4.266565,-0.964762 -1.372346,-0.346956 -2.738921,-0.714218 -4.114053,-1.050012 -0.677963,-0.203389 -0.965597,0.755395 -0.287637,0.958784 z" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6737"
                    d="m 115.63875,74.107574 c 0.0286,0.676682 0.24649,1.319445 0.43962,1.961877 0.15235,0.602859 0.21503,1.227167 0.28045,1.844691 0.0794,0.840121 0.10091,1.684134 0.11432,2.527427 -0.0341,0.958932 0.0861,1.907966 0.26033,2.848647 0.14527,1.067104 0.53074,2.069468 0.99941,3.031749 0.44431,0.896565 1.04368,1.698647 1.66278,2.479371 0.46143,0.578697 0.96466,1.119524 1.47058,1.659083 0.30378,0.367237 0.58302,0.752734 0.86994,1.132925 0.27872,0.353772 0.54222,0.721302 0.69714,1.146656 0.16913,0.506638 0.3374,1.013299 0.51025,1.518828 0.15822,0.497795 0.20119,1.017394 0.22837,1.535678 0.0297,0.522875 -0.009,1.047414 0.0437,1.568493 0.0955,0.607848 0.13523,1.220946 0.1551,1.835195 0.0207,0.907226 0.0467,1.813006 -0.0335,2.717546 -0.0855,0.66202 -0.0547,1.33643 -0.21113,1.98735 -0.22016,0.9137 -0.67729,1.74206 -1.08946,2.57911 -0.47346,1.02455 -1.01064,2.01629 -1.57252,2.9947 -0.46212,0.71188 -0.84936,1.46537 -1.20098,2.23663 -0.2716,0.76107 -0.62639,1.48454 -1.03091,2.18267 -0.40116,0.7611 -0.85319,1.49147 -1.29487,2.22966 -0.34352,0.47344 -0.62319,0.99 -0.96332,1.46555 -0.34249,0.52247 -0.72359,1.01719 -1.08321,1.52742 -0.49355,0.76487 -1.10345,1.43905 -1.66718,2.14955 -0.62026,0.7514 -1.16227,1.56297 -1.77823,2.31707 -0.41122,0.49928 -0.79126,1.02137 -1.19342,1.52733 -0.3673,0.454 -0.83436,0.81759 -1.29136,1.17731 -0.56504,0.39841 -1.04992,0.88567 -1.517,1.3924 -0.55177,0.5508 -1.05103,1.14427 -1.61519,1.6834 -0.57169,0.53624 -1.18136,1.03435 -1.81821,1.49128 -0.87493,0.72967 -1.73982,1.46889 -2.63002,2.1804 -1.30129,1.07411 -2.632405,2.10783 -3.897031,3.22548 -1.307343,1.17952 -2.333075,2.60127 -3.310496,4.05285 -0.628523,0.99772 -1.152141,2.04575 -1.583108,3.14193 -0.409853,1.13757 -0.793652,2.2868 -1.1015,3.45645 -0.29242,1.00034 -0.602522,1.99518 -0.823817,3.01424 -0.142407,0.66494 -0.16759,1.34557 -0.180581,2.02301 -0.008,0.0628 -0.01603,0.12557 -0.02402,0.18836 -0.08108,0.70315 0.913331,0.81782 0.994413,0.11466 v 0 c 0.01013,-0.0947 0.02029,-0.18935 0.03044,-0.28403 0.01148,-0.6126 0.03063,-1.22853 0.158083,-1.83015 0.217001,-1.00514 0.528053,-1.98479 0.813684,-2.9719 0.296466,-1.13231 0.67069,-2.24362 1.065204,-3.34516 0.4025,-1.02904 0.894618,-2.01089 1.481559,-2.94837 0.929838,-1.38124 1.900359,-2.73795 3.143154,-3.86194 1.251853,-1.10708 2.571046,-2.12924 3.858986,-3.1935 0.87693,-0.7009 1.73138,-1.42619 2.58942,-2.1496 0.67381,-0.48542 1.32084,-1.0114 1.92573,-1.58062 0.57934,-0.55454 1.09408,-1.16255 1.66022,-1.72933 0.42991,-0.46902 0.876,-0.91777 1.39937,-1.28341 0.51782,-0.40789 1.04223,-0.82447 1.45603,-1.34133 0.39902,-0.50317 0.77781,-1.02079 1.18549,-1.51747 0.61726,-0.75929 1.16589,-1.57143 1.78714,-2.32817 0.57347,-0.72671 1.19821,-1.41357 1.7011,-2.19499 0.35771,-0.51013 0.73997,-1.00278 1.08126,-1.52467 0.35101,-0.4995 0.65203,-1.03219 1.00547,-1.5302 0.44397,-0.7424 0.89828,-1.47748 1.30238,-2.24244 0.41927,-0.72649 0.79377,-1.47698 1.07525,-2.2687 0.33838,-0.74308 0.71216,-1.46793 1.15812,-2.15318 0.57243,-0.99683 1.11928,-2.0076 1.60252,-3.05101 0.4462,-0.90618 0.93407,-1.80531 1.16677,-2.79614 0.15665,-0.69933 0.15788,-1.41356 0.23292,-2.12466 0.0827,-0.9448 0.0604,-1.89067 0.0368,-2.838173 -0.0212,-0.640742 -0.0617,-1.280534 -0.16087,-1.914682 -0.0661,-0.498292 0.008,-1.00848 -0.0388,-1.509305 -0.0328,-0.610475 -0.0905,-1.221576 -0.28083,-1.806524 -0.17643,-0.515721 -0.34754,-1.032788 -0.52123,-1.549313 -0.1983,-0.510992 -0.48946,-0.969714 -0.83448,-1.395484 -0.30849,-0.408255 -0.6072,-0.823809 -0.93854,-1.214371 -0.4871,-0.51948 -0.97256,-1.038881 -1.41649,-1.596382 -0.57452,-0.72439 -1.13466,-1.466022 -1.54806,-2.297555 -0.4332,-0.879504 -0.78343,-1.797595 -0.91439,-2.775045 -0.16629,-0.885341 -0.2771,-1.778325 -0.2435,-2.681134 -0.014,-0.873329 -0.0368,-1.747385 -0.11981,-2.617359 -0.0725,-0.679145 -0.1426,-1.365554 -0.31725,-2.027134 -0.1653,-0.549243 -0.35788,-1.096666 -0.3972,-1.673545 0,-0.707813 -1.001,-0.707813 -1.001,0 z" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6739"
                    d="m 126.30452,144.27855 c -1.43069,-0.43111 -2.53721,-1.4749 -3.56388,-2.50911 -1.38837,-1.52965 -2.67005,-3.15202 -3.89888,-4.81116 -0.93359,-1.36025 -1.81846,-2.75245 -2.75227,-4.11259 -0.79974,-1.10415 -1.51891,-2.26269 -2.24742,-3.41421 -0.37006,-0.60888 -0.65192,-1.26558 -1.04655,-1.85989 -0.34241,-0.48201 -0.18342,-0.24855 -0.47931,-0.69875 -0.48386,-0.73861 -1.05812,-1.38024 -1.73778,-1.94116 -1.07828,-0.84153 -2.35469,-1.41322 -3.60973,-1.94032 -0.93924,-0.36764 -1.89874,-0.68082 -2.8364,-1.05151 -0.71224,-0.28438 -1.38827,-0.64597 -2.07989,-0.97543 -1.45424,-0.66572 -2.959133,-1.20052 -4.487953,-1.66494 -2.017382,-0.53578 -4.065389,-0.94916 -6.103914,-1.39623 -1.685118,-0.39284 -3.373067,-0.76976 -5.063683,-1.13819 -1.906384,-0.46097 -3.831259,-0.82635 -5.760979,-1.17331 -2.838405,-0.48299 -5.698358,-0.81186 -8.558628,-1.13163 -3.185136,-0.32111 -6.380954,-0.51956 -9.579242,-0.6463 -2.86063,-0.0996 -5.723192,-0.11224 -8.585227,-0.11938 -2.459312,-0.003 -4.918628,-1.8e-4 -7.37794,0.002 -1.533784,0.006 -3.071151,0.0564 -4.600306,0.18059 -0.907723,0.0884 -1.815841,0.17104 -2.726779,0.21736 -0.544803,0.0375 -1.085191,0.0277 -1.62734,-0.0312 -0.487582,-0.0177 -0.951517,-0.1576 -1.425111,-0.25675 -0.03873,-0.0141 -0.08296,-0.0179 -0.116198,-0.0423 -0.04059,-0.0298 -0.311072,-0.80314 -0.328315,-0.84989 -0.227452,-0.68166 -0.392717,-1.38239 -0.562692,-2.08026 -0.188138,-0.64152 -0.440776,-1.25707 -0.570668,-1.91448 -0.129721,-0.57153 -0.24427,-1.144 -0.414917,-1.70527 -0.230876,-0.60258 -0.515927,-1.17645 -0.868995,-1.71612 -0.473403,-0.63143 -1.006089,-1.21627 -1.575997,-1.76191 -0.493447,-0.44658 -0.940268,-0.9466 -1.376273,-1.44937 -0.358972,-0.39844 -0.737863,-0.77871 -1.066686,-1.20319 -0.492973,-0.51494 -0.991011,-1.025 -1.490566,-1.533542 -0.39096,-0.458499 -0.838313,-0.860155 -1.260263,-1.288621 -0.4406,-0.450868 -0.893971,-0.8914 -1.317385,-1.358582 -0.317201,-0.365776 -0.577772,-0.769319 -0.847096,-1.169911 -0.1921,-0.272108 -0.103118,-0.138605 -0.268452,-0.399497 -0.380421,-0.596892 -1.224554,-0.0589 -0.844133,0.537996 v 0 c 0.18818,0.293886 0.09376,0.154156 0.281936,0.420092 0.296635,0.44101 0.587418,0.883639 0.937733,1.285399 0.434452,0.474937 0.893151,0.928102 1.344351,1.387046 0.421885,0.427977 0.868252,0.829733 1.259215,1.28755 0.472907,0.48141 0.941215,0.96735 1.415268,1.44758 0.342323,0.43669 0.726617,0.83553 1.100756,1.24456 0.457808,0.5251 0.924654,1.04905 1.440854,1.51698 0.517776,0.49125 0.996837,1.02271 1.431132,1.58857 0.304774,0.45745 0.54078,0.94882 0.747377,1.45776 0.162972,0.5291 0.26585,1.07031 0.390636,1.60907 0.135794,0.67035 0.374415,1.30409 0.579622,1.95484 0.179106,0.73491 0.353798,1.47279 0.596129,2.18982 0.232771,0.63064 0.442675,1.3423 1.179646,1.52571 0.505381,0.10448 1.001881,0.25127 1.521623,0.27197 0.594806,0.0638 1.188288,0.0764 1.785754,0.0357 0.921121,-0.047 1.839492,-0.12959 2.757346,-0.21938 1.502139,-0.12353 3.012846,-0.17007 4.519574,-0.17727 2.45822,-0.002 4.916443,-0.005 7.374663,-0.002 2.849663,0.007 5.699847,0.0196 8.548113,0.1186 3.174378,0.12563 6.346282,0.32263 9.507635,0.64088 2.838204,0.3173 5.676125,0.64323 8.49271,1.12203 1.917692,0.34479 3.830531,0.70777 5.724972,1.16616 1.6902,0.36833 3.377713,0.74518 5.062421,1.13792 2.012886,0.44133 4.034859,0.85037 6.027608,1.37631 1.481285,0.44914 2.939034,0.96718 4.348354,1.61088 0.71215,0.33889 1.40837,0.71105 2.1422,1.00253 0.93148,0.36821 1.88409,0.68058 2.81777,1.04394 1.16647,0.48688 2.35578,1.01615 3.36134,1.79079 0.60533,0.49348 1.10692,1.06415 1.53679,1.71789 0.23149,0.35091 0.49059,0.68607 0.70092,1.05049 0.28333,0.4909 0.50992,1.01387 0.81503,1.49281 0.73523,1.16213 1.4614,2.33115 2.26819,3.44571 0.94094,1.36968 1.83073,2.77293 2.77303,4.14169 1.25781,1.69816 2.57009,3.35872 3.99405,4.92177 1.18149,1.18257 2.46869,2.36281 4.13154,2.79365 0.7007,0.1001 0.84226,-0.89084 0.14156,-0.99094 z" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6741"
                    d="m 59.113199,114.22408 c 0.348049,-0.0844 0.69859,-0.15912 1.044149,-0.2532 4.801118,-1.30702 9.509858,-2.96187 14.214401,-4.573 3.808719,-1.35106 7.609001,-2.73592 11.343309,-4.28329 0.45416,-0.18819 3.575605,-1.53141 4.11826,-1.76464 2.724598,-1.12283 5.298692,-2.55352 7.918598,-3.89061 0.343027,-0.170384 0.687282,-0.338317 1.029084,-0.511146 1.151118,-0.582051 0.822471,-0.448405 1.98186,-0.977826 1.02169,-0.466539 2.06597,-0.881187 3.10131,-1.315992 2.14583,-0.868826 4.33791,-1.606672 6.56214,-2.245286 2.03144,-0.544087 4.05486,-1.114335 6.12151,-1.510049 1.79118,-0.342124 3.60218,-0.557302 5.41813,-0.711536 1.04572,-0.101978 2.09866,-0.06894 3.14198,-0.19178 0.45252,-0.06976 0.90714,-0.1148 1.36454,-0.131001 1.06969,-0.01757 2.12943,0.22837 3.16804,0.458534 1.66922,0.43448 3.36171,0.75297 5.06222,1.033229 1.08152,0.16587 2.15942,0.356317 3.23288,0.567849 0.89756,0.158957 1.80816,0.221462 2.71126,0.3414 1.0867,0.178017 2.15666,0.438086 3.22783,0.690232 0.91177,0.216209 1.85194,0.228814 2.78375,0.24779 1.09886,0.01347 2.19783,0.0089 3.29674,0.007 0.9893,0.039 1.96994,-0.0556 2.94762,-0.194115 0.50221,-0.09365 0.9988,-0.213394 1.4998,-0.312933 0.69421,-0.138131 0.49886,-1.119883 -0.19534,-0.981755 v 0 c -0.48278,0.0962 -0.96179,0.209415 -1.44498,0.303599 -0.93178,0.132204 -1.86579,0.223562 -2.80882,0.184205 -1.09158,0.0019 -2.18323,0.0065 -3.27475,-0.0067 -0.86136,-0.01733 -1.73132,-0.02373 -2.57469,-0.221367 -1.10346,-0.259691 -2.2059,-0.527219 -3.32579,-0.708199 -0.88241,-0.116465 -1.77167,-0.179928 -2.6491,-0.331171 -1.08368,-0.213543 -2.17185,-0.405776 -3.26363,-0.573413 -1.68268,-0.277318 -3.3573,-0.592606 -5.00893,-1.022954 -1.12174,-0.247401 -2.26517,-0.507238 -3.42044,-0.481472 -0.48461,0.01799 -0.96669,0.06306 -1.44616,0.137316 -1.03182,0.123502 -2.07475,0.08174 -3.10882,0.188402 -1.85074,0.157458 -3.69645,0.377044 -5.52195,0.725868 -2.09592,0.402876 -4.1492,0.977273 -6.20928,1.531027 -2.26183,0.650052 -4.49139,1.400054 -6.67336,2.284466 -1.04869,0.440438 -2.1063,0.860623 -3.14096,1.333666 -1.187143,0.542759 -0.843047,0.401622 -1.999925,0.986573 -0.345061,0.174475 -0.692578,0.344049 -1.038868,0.516073 -2.600094,1.327457 -5.154721,2.747766 -7.858768,3.862516 -0.515953,0.22176 -3.664301,1.57647 -4.096969,1.75578 -3.717909,1.54081 -7.501641,2.91947 -11.29365,4.26481 -4.989443,1.70875 -9.981102,3.45006 -15.086441,4.78384 -0.699582,0.10763 -0.547372,1.09699 0.15221,0.98936 z" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6743"
                    d="m 128.5903,93.652644 c 0.75949,-0.852499 1.61483,-1.610831 2.45543,-2.380917 0.9898,-0.872366 1.99916,-1.721861 3.02559,-2.550816 0.86892,-0.715068 1.76842,-1.386226 2.72934,-1.972736 1.20517,-0.682257 2.45934,-1.262886 3.775,-1.694596 1.30704,-0.450638 2.67256,-0.680767 3.99511,-1.074163 1.23587,-0.355132 2.4542,-0.765773 3.68447,-1.139251 1.13658,-0.311134 2.27651,-0.609436 3.41551,-0.911444 0.73273,-0.191305 1.48619,-0.270158 2.23072,-0.398735 0.47919,-0.103124 0.97179,-0.101076 1.45345,-0.17974 0.0715,-0.014 0.14298,-0.02798 0.21446,-0.04197 0.69458,-0.136224 0.50193,-1.11851 -0.19265,-0.982287 v 0 c -0.0652,0.01281 -0.13036,0.02564 -0.19553,0.03844 -0.47577,0.09498 -0.97611,0.05826 -1.45012,0.179158 -0.77348,0.133641 -1.55634,0.215746 -2.31697,0.417586 -1.15038,0.305247 -2.30195,0.605827 -3.44966,0.921152 -1.22885,0.373081 -2.44583,0.783106 -3.68023,1.137978 -1.33036,0.399378 -2.70792,0.623055 -4.02209,1.082641 -1.38767,0.459822 -2.7146,1.066639 -3.98473,1.791875 -0.99524,0.612767 -1.93418,1.302824 -2.83502,2.047338 -1.04258,0.842007 -2.06774,1.705025 -3.07282,2.591466 -0.85134,0.779918 -1.71754,1.548183 -2.48707,2.411201 -0.5005,0.500502 0.20731,1.208315 0.70781,0.707814 z" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6745"
                    d="m 128.62954,92.688237 c -0.38725,0.625441 -0.8118,1.220706 -1.23951,1.818458 -0.4744,0.678841 -0.95687,1.344797 -1.37359,2.06148 -0.29871,0.449222 -0.63045,0.876003 -0.92738,1.325528 -0.38112,0.499218 -0.64502,1.071255 -0.87026,1.653929 -0.20331,0.657548 -0.35056,1.329288 -0.5543,1.987118 -0.10981,0.43377 -0.21781,0.86494 -0.3365,1.29627 -0.0642,0.32231 -0.0367,0.16024 -0.0825,0.48619 -0.0966,0.70119 0.89501,0.83783 0.99163,0.13664 v 0 c 0.0332,-0.24764 0.014,-0.12829 0.0563,-0.35826 0.1148,-0.4209 0.22292,-0.8412 0.32729,-1.26471 0.19729,-0.63712 0.34587,-1.2859 0.53297,-1.925418 0.19652,-0.519697 0.43485,-1.024858 0.77531,-1.467186 0.2953,-0.468574 0.65799,-0.896496 0.95286,-1.367004 0.40082,-0.689589 0.86655,-1.32905 1.32263,-1.982589 0.44243,-0.619993 0.88146,-1.237835 1.28343,-1.885437 0.36417,-0.606946 -0.49418,-1.121955 -0.85835,-0.515009 z" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6747"
                    d="m 128.91885,94.177042 c 0.45,1.016225 0.99796,1.989336 1.55625,2.949869 0.85453,1.423067 1.59783,2.907409 2.40328,4.357949 0.69791,1.22053 1.27346,2.50917 1.77049,3.82307 0.55125,1.47882 1.13304,2.94433 1.646,4.43718 0.50485,1.31234 0.94686,2.64543 1.35394,3.99068 0.20064,0.7 0.39863,1.39868 0.56527,2.10754 0.12617,0.70032 0.24447,1.40301 0.35014,2.10702 0.069,0.64694 0.10235,1.29313 0.26182,1.92591 0.16237,0.58817 0.3176,1.18205 0.52532,1.75649 0.24556,0.63186 0.42464,1.286 0.65875,1.92193 0.22333,0.59568 0.47619,1.19093 0.78698,1.74761 0.31415,0.52778 0.60581,1.06853 0.94551,1.58101 0.28789,0.46363 0.77058,0.6992 1.19516,1.00714 0.2088,0.19432 0.33492,0.44144 0.5261,0.65207 0.49243,0.50844 1.21148,-0.18796 0.71905,-0.6964 v 0 c -0.21018,-0.16902 -0.38304,-0.62904 -0.66604,-0.77215 -0.3292,-0.23013 -0.7044,-0.40684 -0.94066,-0.74483 -0.32754,-0.49106 -0.6048,-1.01225 -0.90714,-1.51842 -0.28972,-0.50748 -0.51407,-1.05828 -0.72006,-1.60313 -0.23548,-0.63392 -0.40988,-1.28839 -0.65735,-1.9181 -0.20048,-0.54273 -0.34092,-1.10815 -0.49667,-1.66448 -0.16084,-0.59633 -0.15822,-1.21439 -0.24093,-1.82369 -0.11035,-0.73077 -0.23149,-1.46055 -0.36554,-2.18706 -0.17146,-0.72932 -0.3753,-1.44819 -0.58161,-2.16839 -0.41068,-1.35711 -0.85606,-2.7022 -1.36538,-4.02609 -0.51654,-1.50274 -1.10146,-2.97831 -1.65673,-4.46687 -0.51647,-1.35806 -1.10852,-2.69188 -1.83129,-3.95399 -0.80871,-1.456269 -1.55483,-2.946606 -2.41305,-4.375154 -0.52455,-0.901825 -1.03481,-1.815862 -1.47198,-2.763258 -0.22383,-0.671492 -1.17347,-0.354947 -0.94963,0.316544 z" />
                <path style="fill:#a52020;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.264583"
                    id="path6749"
                    d="m 112.56717,126.01717 c 1.36539,-0.0875 2.72966,-0.2004 4.09222,-0.32501 1.53547,-0.17002 3.08043,-0.20355 4.62054,-0.30443 1.19898,-0.098 2.4001,-0.15806 3.60253,-0.18868 1.11878,-0.0101 2.23891,-0.0488 3.35699,0.002 0.96774,0.0572 1.93835,0.14377 2.89033,0.33032 1.05114,0.23499 2.10419,0.46165 3.15536,0.69674 0.92667,0.23253 1.84283,0.50352 2.78237,0.68031 0.86612,0.18995 1.74736,0.27849 2.63101,0.3299 0.64269,-0.0288 1.31644,0.12678 1.95614,0.0129 0.16134,-0.0287 0.31616,-0.0864 0.47424,-0.12961 0.15646,-0.0721 0.31989,-0.13077 0.46939,-0.2164 0.95601,-0.54761 1.95886,-1.46388 2.78943,-2.19052 1.04315,-0.94502 2.10018,-1.871 3.25546,-2.67758 0.77158,-0.56496 1.64306,-0.96428 2.52356,-1.32549 1.05364,-0.36634 2.13956,-0.624 3.22361,-0.8813 0.72606,-0.22135 1.47436,-0.3453 2.21305,-0.51031 0.44653,-0.12763 0.9045,-0.1774 1.36633,-0.20216 0.41121,-0.0132 0.82085,-0.0113 1.23087,-0.0465 0.7049,-0.0641 0.61431,-1.06095 -0.0906,-0.99689 v 0 c -0.39752,0.0387 -0.79609,0.0246 -1.19492,0.0439 -0.51734,0.0288 -1.0314,0.0848 -1.53214,0.22524 -0.74122,0.16952 -1.49495,0.28786 -2.2238,0.5128 -1.1348,0.26946 -2.2719,0.53951 -3.37282,0.92933 -0.94816,0.39013 -1.885,0.82338 -2.71675,1.43104 -1.18383,0.82893 -2.2722,1.7739 -3.3411,2.74468 -0.78296,0.68552 -1.67025,1.4978 -2.55915,2.03934 -0.10452,0.0637 -0.21953,0.10828 -0.32929,0.16241 -0.66144,0.23435 -1.39603,0.0578 -2.0837,0.0758 -0.84134,-0.0484 -1.68025,-0.13258 -2.50469,-0.31448 -0.92841,-0.17267 -1.83181,-0.44782 -2.74813,-0.67329 -1.06078,-0.23702 -2.12329,-0.46631 -3.18416,-0.70273 -1.00094,-0.19039 -2.01803,-0.29195 -3.0352,-0.34743 -1.14161,-0.05 -2.28494,-0.0156 -3.42722,-0.003 -1.21581,0.0311 -2.43032,0.0915 -3.64266,0.19051 -1.54858,0.10218 -3.10221,0.13479 -4.64613,0.30644 -1.33227,0.12209 -2.66628,0.23011 -4.00097,0.32084 -0.70781,0 -0.70781,1.001 0,1.001 z" />
                <circle style="fill:#0c8500;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path2396-29-77"
                    cx="71.496254" cy="52.15963" r="1.4820359" />
                <circle style="fill:#0c8500;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path2396-29-3"
                    cx="118.65435" cy="114.19872" r="1.4820359" />
                <circle style="fill:#0c8500;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path2396-29-7"
                    cx="110.0611" cy="125.93585" r="1.4820359" />
                <circle style="fill:#0c8500;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path2396-29-4"
                    cx="142.54779" cy="127.40299" r="1.4820359" />
                <circle style="fill:#0c8500;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path2396-29"
                    cx="128.29558" cy="93.029976" r="1.4820359" />
                <circle style="fill:#0c8500;fill-opacity:1;stroke:#000000;stroke-width:0.264583" id="path2396-29-76"
                    cx="23.290209" cy="95.125893" r="1.4820359" />
                <circle id="path8566" style="fill:#000000;stroke:#000000;stroke-width:0.264583" cx="132.69699"
                    cy="202.85594" r="0.0069863768" />
            </g>
        </svg>
    </div>
</body>

</html>