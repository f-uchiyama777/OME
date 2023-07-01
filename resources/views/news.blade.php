<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>青梅シニアイーグル</title>
    <meta name="description" content="Title">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- gl-header -->
        <header class ="gl-header">
            <h1 class="top-main-header">青梅シニアイーグル</h1>
            <nav class="gl-nav">
                <ul>
                    <li><a href="">お知らせ</a></li>
                    <li><a href="">チーム紹介</a></li>
                    <li><a href="">スケジュール</a></li>
                    <li><a href="">試合結果</a></li>
                    <li><a href="">新規会員募集</a></li>
                    <li><a href="">問い合わせ</a></li>
                </ul>
            </nav>
        </header>
    <!-- gl-header -->
    <!-- section -->
    <section class="main-top">
        <div class="main-image">
        <img id="pic" src="/images/top.png" alt="青梅シニアイーグル">
        <script>

            'use strict';

            const img = ["/images/top.png", "/images/baseball1.jpg"];

            let count = -1;

            picChange(); // 関数を実行

            function picChange() {

              count++;

              // カウントが最大になれば配列を初期値に戻すため「0」を指定する
              if (count == img.length) count = 0;

              // 画像選択
              document.getElementById("pic").src = img[count];

              // 1秒ごとに実行
              setTimeout("picChange()", 5000);

            }

            </script>
        </div>
        <p>News</p>
        <p>スケジュール</p>
    </section>
    <!-- section -->
    <!-- top-main -->
     <main class="top-main">
    <!-- top-main -->
    <!-- top-topics -->
    <section class="top-topics">
        <ul>
            <li><a href="">リンク</a></li>
        </ul>
    </section>
     </main>
</body>
</html>
