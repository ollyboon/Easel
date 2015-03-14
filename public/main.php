<!DOCTYPE html>
<html>
    
    <body>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <?php include_once("../public/imgdisplay.php"); ?>
        
            <style type="text/css">
                body {
                    margin: 0 auto 20px;
                    padding: 0;
                    background: #f5f5f1;
                    text-align: center;
                }
                td {
                    padding: 0 0 50px;
                    text-align: center;
                    font: 9px sans-serif;
                }
                table {
                    width: 100%;
                }
                img {
                    display: block;
                    margin: 20px auto 10px;
                    max-width: 300px;
                    max-height:300px;
                    outline: none;
                }
                img:active {
                    max-width: 100%;
                }
                a:focus {
                    outline: none;
                }
            </style>

    </body>
</html>