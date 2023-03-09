<!DOCTYPE html>
    <html>
        <head>

            <meta charset="utf-8">
            <title>Number Check</title>

        </head>

        <body>

            <form>

                <tr>

                    <label for="num">Numbers:</label>
                    <input type="number" id="num" name="num"><br>

                </tr>
                <tr>
                    
                    <?php
                        if(isset($_GET['num'])){
                            $num = $_GET['num'];
                            if (is_numeric($num)){
                                if ($num < 0) {
                                    echo "Number Is Negative";
                                }else if ($num == 0) {
                                    echo "Number Is Zero";
                                }else if ($num > 0) {
                                    echo "Number Is Positive";
                                }
                            }
                            else
                                echo "Please Enter A Valid Number";
                        }
                        else
                            echo "Please Enter A Number";
                        
                    ?>    

                </tr>
                
            </form>

        </body>

    </html>