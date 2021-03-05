<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HF CSV file  download</title>
</head>
<body>
    <?php 
    
        $url = "HF.csv"; 
        
        echo "Your file is being checked. <br>"; 
        
        // Use basename() function to return 
        // the base name of file 
        $file_name = basename($url);  
        
        $info = pathinfo($file_name); 
        
        // Checking if the file is a 
        // CSV file or not 
        if ($info["extension"] == "csv") { 
        
            /* Informing the browser that 
            the file type of the concerned 
            file is a MIME type (Multipurpose 
            Internet Mail Extension type). 
            Hence, no need to play the file 
            but to directly download it on 
            the client's machine. */
            header("Content-Description: File Transfer");  
            header("Content-Type: application/octet-stream");  
            header( 
            "Content-Disposition: attachment; filename=\""
            . $file_name . "\"");  
            echo "File downloaded successfully"; 
            readfile ($url); 
        }  
        
        else echo "Sorry, that's not a CSV file"; 
        
        exit();  
    ?> 
</body>
</html>