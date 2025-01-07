<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Lalu Pangeran Fauzan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #e0e0f1; /* Light gray with a slight tint of blue */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding-top: 20px;
            background: #333; /* Dark gray background */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 36px;
            color: #e8491d; /* Orange color for header text */
        }
        .project {
            margin-bottom: 40px;
        }
        .project h2 {
            margin-bottom: 10px;
            text-align: center;
            color: #e8491d; /* Orange color for project titles */
            font-size: 24px;
        }
        .project img {
            width: 100%;
            max-width: 800px;
            height: auto;
            display: block;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            transition: transform 0.3s ease-in-out;
            filter: brightness(110%); /* Brightness effect */
        }
        .project img:hover {
            transform: scale(1.05);
            filter: brightness(100%); /* Reset brightness on hover */
        }
        .skills {
            margin-top: 20px;
            text-align: center;
            color: #e8491d; /* Orange color for skill section */
        }
        .skills h2 {
            border-bottom: 2px solid #e8491d;
            padding-bottom: 5px;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .skills ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .skills li {
            text-align: center;
            width: 150px;
            margin: 10px;
            position: relative;
            font-size: 14px;
        }
        .skill-bar {
            width: 200px; /* Width for horizontal bars */
            height: 30px; /* Height of the bars */
            margin: 0 auto;
            position: relative;
            background-color: #ebebeb; /* Light gray background for bars */
            border-radius: 5px;
            overflow: hidden;
        }
        .skill-bar .bar {
            height: 100%;
            background-color: #e8491d; /* Color of the progress bar */
            transition: width 1s ease; /* Animation for width change */
        }
        .skill-bar span {
            position: absolute;
            top: 50%;
            left: 10px; /* Adjust text position */
            transform: translateY(-50%);
            color: #333; /* Dark gray color for text */
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>MY FAVORITE PROJECT </h1>
        </header>
        
        <div class="project">
            <h2>Project Website Toko Tria</h2>
            <img src="img/tokotria (1).jpeg" alt="Website Toko Tria 1">
            <img src="img/tokotria (2).jpeg" alt="Website Toko Tria 2">
            <img src="img/tokotria (3).jpeg" alt="Website Toko Tria 3">
        </div>
        
        <div class="project">
            <h2>Project Website Tiket Bioskop</h2>
            <img src="img/bioskop (1).jpeg" alt="Website Tiket Bioskop 1">
            <img src="img/bioskop (2).jpeg" alt="Website Tiket Bioskop 2">
            <img src="img/bioskop (3).jpeg" alt="Website Tiket Bioskop 3">
        </div>
        
        <div class="project">
            <h2>Project Website SIM TKBP | BPS Bima</h2>
            <img src="img/bps (1).jpeg" alt="Website BPS Kabupaten Bima 1">
            <img src="img/bps (2).jpeg" alt="Website BPS Kabupaten Bima 2">
            <img src="img/bps (3).jpeg" alt="Website BPS Kabupaten Bima 3">
        </div>
        
        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <li>
                    <div class="skill-bar">
                        <span>Social Media Management</span>
                        <div class="bar" style="width: 98%;"></div>
                    </div>
                </li>
                <li>
                    <div class="skill-bar">
                        <span>Hardware Deployment</span>
                        <div class="bar" style="width: 80%;"></div>
                    </div>
                </li>
                <li>
                    <div class="skill-bar">
                        <span>Database Management</span>
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                </li>
                <li>
                    <div class="skill-bar">
                        <span>Programming</span>
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                </li>
                <li>
                    <div class="skill-bar">
                        <span>UI/UX Design</span>
                        <div class="bar" style="width: 95%;"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
