<html>
<head><title>Insert</title></head>
<body>
<?php
echo '<pre>Before Connect' . print_r($_POST, true) . '</pre>';
$code = $_POST['code'];
$year = $_POST['year'];
$category = $_POST['category'];
$title = $_POST['title'];
$topic = $_POST['topic'];
$subtopic = $_POST['subtopic'];


if (!empty($code) || !empty($year) || !empty($category) || !empty($title) ||
!empty($topic) || !empty($subtopic)) {

    //connection created
    $conn = new mysqli('localhost', 'root', '', 'webtest');
    if ($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(code, year, category, title, topic, subtopic)
            values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissss", $code, $year, $category, $title, $topic, $subtopic);
        $stmt->execute();
        echo "Input Success";
        $stmt->close();
        $conn->close();

    }
}
?>
</body>
</html>