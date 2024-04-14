<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
        include_once('../system/libs/main.php');
        include_once('../system/libs/DController.php');
        include_once('../system/libs/Load.php');
        //$main = new main();

        $url = isset($_GET['url']) ? $_GET['url']: null ;
        //nếu đường dẫn tồn tại
        if($url!=NULL){
            $url = rtrim($url,'/');
            $url = explode('/',filter_var($url,FILTER_SANITIZE_URL));
        }else{
            unset($url);
        }

        //Nếu mặc định tồn tại url thì chạy như dưới    
        if(isset($url[0])){
            include_once('../app/controllers/'.$url[0].'.php');
            $ctlr = new $url[0]();
            if(isset($url[2])){
                $ctrler->{$url[1]}($url[2]);
            }else{
                if(isset($url[1])){
                    $ctrler->{$url[1]}();
                }else{

                }
            }
        }else{
            include_once('../app/controllers/index.php');
            $index = new index();//gọi index
            $index->homepage();
        }
       

        ?>
    </h1>
</body>
</html>