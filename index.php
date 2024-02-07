<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Listes des dossiers</title>
    <style>
        html[data-theme="dark"] {
            background-color: #000000;
        }
        html[data-theme="dark"] .mode {            
            background-color: #3a3e3e;
        }
        html[data-theme="light"] {
            background-color: whitesmoke;
        }
        html[data-theme="light"] .mode {            
            background-color: #000000;

        }
        section {
            display: flex;
            flex-wrap: wrap;
            width: 60%;
            margin: 0 auto;
        }
        .dossier {
            width: 250px;            
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            cursor: pointer;
            background-color: #000000;
            margin: 17px;
            border-radius: 15px;
            box-shadow: 5px 5px 5px gray;
            text-decoration: none;
            color : white;
            font-size: 2em;
        }
        .dossier:hover {
            opacity: 0.7;
        }

        .mode {
            position: fixed;
            right: 0;
            bottom: 0;
            margin: 15px;
            padding: 5px;
            border-radius: 40px;
            background-color: #000000;
            width: 75px;
            height: 35px;
        }
        .mode #switch {
            background-color: gray;
            border-radius: 50%;
            height: 35px;
            width: 35px;
            cursor: pointer;
            position: relative;
            left: 0%;
            transition: left 1s ;
        }
        .true {
            left: 50% !important;
        }
    </style>
</head>
<body>
    <section>
    <?php
        $dossiers = scandir("."); // Récupère le contenu du répertoire courant
        foreach ($dossiers as $dossier) { 
            if  (!in_array($dossier, [".", "..", ".git", ".vscode", ".gitignore", "index.php"])) {
                    echo "<div class='dossier' onclick=location.href='./$dossier'>";
                    echo is_dir($dossier) ? "<span><box-icon name='folder-open' color='#fff' size='50px'></box-icon></span>" : '';
                    if (!is_dir($dossier))
                    switch (explode(".", $dossier)[1]) {
                        case 'js': 
                            echo "<span><box-icon name='file-js' type='solid' color='#fff' size='50px'></box-icon></span>";
                            break;
                        case 'html':
                            echo "<span><box-icon name='file-html' type='solid' color='#fff' size='50px'></box-icon></span>";
                            break;
                        case 'css':
                            echo "<span><box-icon name='file-css' type='solid' color='#fff' size='50px'></box-icon></span>";
                            break;
                        case 'json':
                            echo "<span><box-icon name='file-json' type='solid' color='#fff' size='50px'></box-icon></span>";
                            break;
                        case 'md':
                            echo "<span><box-icon name='file-md' type='solid' color='#fff' size='50px'></box-icon></span>";
                            break;
                        case 'php':
                            echo "<span><box-icon name='php' type='logo' color='#fff' size='50px'></box-icon></span>";
                            break;
                        default: 
                            echo "<span><box-icon type='solid' name='file-blank' color='#fff' size='50px'></box-icon></span>";
                            break;
                    };
                    echo "$dossier</div>";
            }
        }
    ?>
    </section>
    <div class="mode"><div id="switch" onclick="toggleDarkMode()"></div></div>
    <!-- Dark Mode Script -->
    <script type="text/javascript">            
        document.getElementById('switch').classList.add(localStorage.getItem('darkModeIndex'));
        if (localStorage.getItem('darkModeIndex') == "true") document.documentElement.setAttribute('data-theme', 'dark')

        function toggleDarkMode(){        
            var Toggle = localStorage.getItem('darkModeIndex')     

            if (Toggle == 'false') {        
                document.documentElement.setAttribute('data-theme', 'dark')
                localStorage.removeItem('darkModeIndex')
                localStorage.setItem('darkModeIndex', 'true')
                document.getElementById('switch').classList.add('true');
            } else {
                localStorage.removeItem('darkModeIndex')
                localStorage.setItem('darkModeIndex', 'false')
                document.documentElement.setAttribute('data-theme', 'light')
                document.getElementById('switch').classList.remove('true');

            }
        }
    </script>
</body>
</html>