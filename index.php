<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIM</title>
    <link href="css\style.css" rel="stylesheet">
    <script src="js\script.js" defer></script>
</head>
<body>
    
    <!--<div id="app">
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
                                                <img src="img\reminder-paper-with-a-pin.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">New Customer</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="infonav" target title="Information" class="nav-mid-container-list-1 marg_low" href="" onclick="return infoclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="information">
                                                <img src="img\help.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a target title="Appointments" class="nav-mid-container-list-1 marg_low" href="" onclick="return birthclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="Appointments">
                                                <img src="img\birth.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Appointments</span>
                                    </a>
                                </li>
                                <li>
                                    <a target title="Involve" class="nav-mid-container-list-1 marg_low" href="" onclick="return involveclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="Involve">
                                                <img src="img\involve.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Involvement</span>
                                    </a>
                                </li>
                                <li>
                                    <a target title="Contacts" class="nav-mid-container-list-1 marg_low" href="" onclick="return contactsclick();">
                                        <span class="nav-mid-container-list-1-span1">
                                            <span class="nav-mid-container-list-1-span1-span" title="Contacts">
                                                <img src="img\telephone.png">
                                            </span>
                                        </span>
                                        <span class="nav-mid-container-list-1-span2">Contacts</span>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </nav>
            <div class="body-area">
                <div class="body-area-title">
                    <div>
                        <div class="title-container">
                          <div class="title-container-wrapper">
                              <h2 id="header" class="title-value">New Customer</h2>
                          </div>  
                        </div>
                    </div>
                </div>
                <div class="body-area-content">
                    <div class="body-area-hidden-header" aria-hidden="true">
                        <div class="hidden-header">
                            <h2 class="title-value">New Customer</h2>
                        </div>
                    </div>
                    <div id="main-layout-content" class="main-body" aria-labelledby="header-title">
                        <div class="inner-body-layer">
                            <div class="main-main-body">
                                <div>
                                    <div class="first-section">
                                            <form class="form-style-7">
                                                    <ul>
                                                    <li>
                                                        <label for="Customers">Customer</label>
                                                        <input style="background-color: #f1f1f2" type="text" name="name" maxlength="70" placeholder="Full Name">                        
                                                        <input style="background-color: #f1f1f2" type="text" name="company" maxlength="70" placeholder="Company">               
                                                        <input style="background-color: #f1f1f2" type="text" name="work_function" maxlength="70" placeholder="Work Function">                        
                                                        <input style="background-color: #f1f1f2" type="text" name="phone" maxlength="70" placeholder="Phone">
                                                        <input style="background-color: #f1f1f2" type="text" name="email" maxlength="70" placeholder="Email">
                                                        <span>Enter customers details here</span>
                                                    </li>
                                                    <li>
                                                        <label for="sales_informations">Sales Information</label>
                                                        <input style="background-color: #f1f1f2" type="text" name="estimated_sale" maxlength="70" placeholder="Estimated Sale">    
                                                        <p class="contact">Last Contact: </p>
                                                        <input style="background-color: #f1f1f2" type="date" name="lastcontact" maxlength="70" placeholder="Last Contact">                        
                                                        <input style="background-color: #f1f1f2" type="text" name="nxt_action" maxlength="70" placeholder="Next Action">
                                                        <p class="contact">Next Contact: </p>
                                                        <input style="background-color: #f1f1f2" type="date" name="nextcontact" maxlength="70" placeholder="Next Contact">                                               
                                                        <span>Enter sales information here</span>
                                                    </li>
                                                    <li>
                                                        <label for="name">Lead Information</label><br/>
                                                        <p class="contact">Lead Status: </p>
                                                        <select style="background-color: #f1f1f2" name="leadstatus" maxlength="70" aria-placeholder="Lead Status">
                                                            <option></option>
                                                        </select>  
                                                        <p class="contact">Lead Source: </p>                     
                                                        <select style="background-color: #f1f1f2" name="leadsource" maxlength="70" aria-placeholder="Lead Source">
                                                            <option></option>
                                                        </select>
                                                        <span>Enter lead information here</span>
                                                    </li>
                                                    <li>                    
                                                        <input type="submit" value="Add" >
                                                        <input type="reset" value="Cancel">
                                                    </li>
                                                    </ul>
                                                </form>
                                    </div>
                                    <div class="second-section">

                                    </div>
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
</html>-->