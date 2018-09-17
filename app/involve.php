<?php
require 'includes\connect.inc.php'; 
require '..\layouts\navbar.php';
require 'includes\funcs.inc.php';

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIM-involve</title>
    <link href="..\css\style.css" rel="stylesheet">
    <script src="..\js\script.js" defer></script>
</head>
<body>
<div class="body-area">
    <div class="body-area-title">
        <div>
            <div class="title-container">
                <div class="title-container-wrapper">
                    <h2 id="header" class="title-value">Involvement</h2>
                </div>  
            </div>
        </div>
    </div>
    <div class="body-area-content">
        <div class="body-area-hidden-header" aria-hidden="true">
            <div class="hidden-header">
                <h2 class="title-value">Involvement</h2>
            </div>
        </div>
        <div id="main-layout-content" class="main-body" aria-labelledby="header-title">
            <div class="inner-body-layer">
                <div class="main-main-body">
                    <div>
                    </div>
                            </div>
                            <div id="footer" class="footer-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php mysqli_close($connection); ?>