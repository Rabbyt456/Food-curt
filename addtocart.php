<?php
session_start();

// যদি cart না থাকে, তবে খালি array বানাও
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// AJAX থেকে data আসছে কি না চেক করো
if (isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    
    // যদি item আগে থেকেই থাকে, quantity বাড়াও
    if (isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id]++;
    } else {
        $_SESSION['cart'][$item_id] = 1;
    }

    // মোট কতগুলো আইটেম আছে বের করো
    $total_items = array_sum($_SESSION['cart']);
    
    echo $total_items; // JavaScript এ এটা পাঠাবে
    exit;
}
?>
