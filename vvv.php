<?php
header("content-Type: text/html; charset=utf-8");
$file = simplexml_load_file("cancel.xml");
$persen = $file->xpath("persen");
$i = isset($_GET["n"]) ? $_GET["n"] : 1;
$null = 0;
$result = isset($persen["$i"]) ? $persen["$i"] : array();
if (isset($result) && $result != null) {
    $result = (array) $result;
} else {
    $null = 1;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="jq3.2.1.js"></script>
        <title>dsakfjds</title>
    <body>
        <?php if ($null == 0) { ?>
            <table>
                <tr><td>id</td><td><?php echo $result["id"]; ?></td></tr>
                <tr><td>姓名</td><td><?php echo $result["name"]; ?></td></tr>
                <tr><td>性别</td><td><?php echo $result["sex"]; ?></td></tr>
                
            </table>
        <?php } else { ?>
            <span>暂无</span>
        <?php } ?>
        <button id="last"><<</button>
        <button id="next">>></button>
    </body>
</html>
<script>
    $("#last").click(function () {
        window.location.href = "vvv.php?n=<?php echo $i - 1; ?>";
    });
    $("#next").click(function () {
        window.location.href = "vvv.php?n=<?php echo $i + 1; ?>";
    });
</script>