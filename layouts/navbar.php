<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIM</title>
    <link href="..\css\style.css" rel="stylesheet">
    <script src="..\js\script.js" defer></script>
</head>
<body>
    <div id="app">
        <div class= "Container">
            <nav class="navigate">
                <div class="side-nav">
                    <div class="nav-container">
                        
                            <h1 class="nav-header">
                                <span>
                                    <span class="nav-title u-react-glyph" title="CIM">
                                        <i>CIM</i>
                                    </span> 
                                    <em>CIM</em>
                                </span>
                            </h1>
                            <ul class="nav-mid-container">
                                <li>
                                    <a target title="New-Customer" class="nav-mid-container-list-1 marg_low" href="">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="New-Customer">
                                                <img src="..\img\reminder-paper-with-a-pin.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">New Customer</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="infonav" target title="Information" class="nav-mid-container-list-1 marg_low" href="" onclick="return infoclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="information">
                                                <img src="..\img\help.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a target title="Appointments" class="nav-mid-container-list-1 marg_low" href="" onclick="return birthclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="Appointments">
                                                <img src="..\img\birth.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Appointments</span>
                                    </a>
                                </li>
                                <li>
                                    <a target title="Involve" class="nav-mid-container-list-1 marg_low" href="" onclick="return involveclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="Involve">
                                                <img src="..\img\involve.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Involvement</span>
                                    </a>
                                </li>
                                <li>
                                    <a target title="Contacts" class="nav-mid-container-list-1 marg_low" href="" onclick="return contactsclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="Contacts">
                                                <img src="..\img\telephone.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Contacts</span>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>