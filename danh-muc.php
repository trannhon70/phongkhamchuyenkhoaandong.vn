<?php include_once "inc/header.php" ?>
<?php
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$current_url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$slug = basename(parse_url($current_url, PHP_URL_PATH), '.html');

$getPostDetail = null;

$postDetail = $bai_viet->getBaiViet_bySlug($slug);

if (isset($postDetail) && isset($postDetail['name_khoa'])) {
    $getPostDetail = $postDetail;
} else {
    $postTinTuc = $bai_viet->getBaiVietDauTienByBenh($slug);
    if ($postTinTuc) {
        $getPostDetail = $postTinTuc;
    } else {
        $getPostDetail = null;
    }
}
// var_dump($getPostDetail);
function setTitleAndScroll()
{
    global $getPostDetail; // Đảm bảo truy cập biến toàn cục
    if ($getPostDetail && isset($getPostDetail['tieu_de'])) {
        // Lấy các giá trị từ $getPostDetail
        $title = isset($getPostDetail['tieu_de']) ? $getPostDetail['tieu_de'] : 'Default Title';
        $description = isset($getPostDetail['descriptions']) ? $getPostDetail['descriptions'] : 'Default Description';
        $keywords = isset($getPostDetail['keyword']) ? $getPostDetail['keyword'] : 'default, keywords';
        $image = isset($getPostDetail['img']) ? $getPostDetail['img'] : '/path/to/default-image.jpg';

        // Chuyển đổi các giá trị sang dạng an toàn cho HTML và JavaScript
        $safeTitle = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $safeDescription = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
        $safeKeywords = htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8');
        $safeImage = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');

        // Đảm bảo rằng bạn chèn vào trong thẻ <head>
        echo "<title>$safeTitle</title>\n";
        echo "<meta name='description' content='$safeDescription'>\n";
        echo "<meta name='keywords' content='$safeKeywords'>\n";
        echo "<meta property='og:title' content='$safeTitle'>\n";
        echo "<meta property='og:description' content='$safeDescription'>\n";
        echo "<meta property='og:image' content='https://andongclinic.vn/admin/uploads/$safeImage'>\n";
        echo "<meta property='og:image:width' content='1200'>\n";
        echo "<meta property='og:image:height' content='630'>\n";
        echo "<meta property='og:type' content='article'>\n";
        echo "<meta property='og:url' content='https://andongclinic.vn/{$getPostDetail['slug']}.html'>\n";
    }
}
setTitleAndScroll();
?>

<link rel="stylesheet" href="css/danh_muc.min.css">

</head>

<body>
    <?php if (isset($getPostDetail)) { ?>
        <?php include "layout/header_layout.php" ?>
        <main>
            <article>
                <?php include_once "./layout/hethong_layout.php" ?>
            </article>
        </main>
         <?php include_once "inc/footer.php" ?>
    <?php } else { ?> 
        <div style="display:flex;align-items:center;justify-content:center;color:red;font-size:30px;height:100vh">link bài viết này không tồn tại!</div> 
    <?php } ?>