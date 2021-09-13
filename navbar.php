<!-- navbar --> 
      <!DOCTYPE html>
      <html>
      <head>
        <style type="text/css">
            .btn {
                border: 2px solid black;
                background-color: skyblue;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
                margin: 5px;
              }
            .df:hover {
               color: white;
                font-size: 16px;
                background-color: #9dc5c3;
                background-image: linear-gradient(315deg, #a895f0 0%, #0979a5 74%);
               }
            .navbar{
                background: rgb(2,0,36);
                 background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(37,158,160,1) 50%, rgba(11,38,75,1) 100%);
            }

        </style>
      </head>
      <body>
      
      <nav  class="navbar navbar-expand-md navbar-light ">
      <a class="navbar-brand" href="index.php"><img src="img/logoimg.jfif" height = "70px" width = "80px"></a>
      
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="index.php">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="aboutme.php">About Me</a>
              </li>
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="contact.php">Contact Me</a>
              </li>
          </div>
       </nav>
     </body>
     </html>
