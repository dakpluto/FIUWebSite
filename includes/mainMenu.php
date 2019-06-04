<!DOCTYPE html>
<html>
  <head>
    <title>Harrison, M - mainMenu.php</title>
    <style type="text/css">
      nav {
        text-align: center;
      }

      nav ul {
        background: #f2f3f3;
        background: linear-gradient(top, #f2f3f3 0%, #f3a953 100%);
        background: -moz-linear-gradient(top, #f2f3f3 0%, #f3a953 100%);
        background: -webkit-linear-gradient(top, #f2f3f3 0%,#f3a953 100%);
        box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
        padding: 0 20px;
        border-radius: 10px;
        list-style: none;
        position: relative;
        display: inline-table;
      }

      nav ul::after {
        content: "";
        clear: both;
        display: block;
	    }

      nav ul li {
        float: left;
      }

      nav ul li:hover {
        background: #366ed8;
        background: linear-gradient(top, #366ed8 0%, #064acb 40%);
        background: -moz-linear-gradient(top, #366ed8 0%, #064acb 40%);
        background: -webkit-linear-gradient(top, #366ed8 0%,#064acb 40%);
      }

      nav ul li a {
        display: block; padding: 25px 40px;
        color: #064acb;
        text-decoration: none;
	    }

      nav ul li:hover a {
        color: #f3a953;
      }

      nav ul li:hover > ul {
        display: block;
      }

      nav ul ul {
        display: none;
        background: #366ed8;
        border-radius: 0px;
        padding: 0;
        position: absolute; top: 100%;
      }

      nav ul ul li {
    		float: none;
    		border-top: 1px solid white; /*#6b727c; */ /*border top */
    		border-bottom: 1px solid #575f6a; /*border down */
    		position: relative;
	    }

      nav ul ul li a {
        padding: 10px 40px;
        color: #fff;
      }

      nav ul ul li a:hover {
        background: #064acb;
      }
    </style>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="pgm1.html">Program 1</a>
          <ul>
            <li><a href="page1.html">page1</a></li>
            <li><a href="page2.html">page2</a></li>
            <li><a href="page3.html">page3</a></li>
            <li><a href="page4.html">page4</a></li>
            <li><a href="../index.html">Home</a></li>
          </ul>
        </li>
        <li><a href="/program2.php">Program 2</a></li>
        <li><a href="../index.html">Home</a></li>
      </ul>
    </nav>
  </body>
</html>
