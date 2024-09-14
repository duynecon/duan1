
<?php
    require_once 'view/header.php';

    if(isset($_GET['pg'])) {
        switch ($_GET['pg']) {
            case 'category':
                require_once 'view/category.php';
                break;
            case 'product':
                require_once 'view/product.php';
                break;
            case 'order':
                require_once 'view/order.php';
                break;
            case 'user':
                require_once 'view/user.php';
                break;
            default:
                require_once 'view/home.php';
                break;
        }
    }else {
        require_once 'view/home.php';
    }
    
    require_once 'view/footer.php';
?>