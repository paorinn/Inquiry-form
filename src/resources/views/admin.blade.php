<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a href="/" class="header_logo">
                FashionablyLate
            </a>
        </div>
        <div class="form__button--register">
            <button class="form__button--register-submit" type="submit">logout</button>
        </div>
    </header>

    <main>
        <div class="content-form__content">
            <div class="content-form__heading">
                <h2>Admin</h2>
            </div>
            <div class="content-form__search">
                <form action="/admin" class="form" method="get">
                    <input type="search" class="search-tag" name="search" placeholder="名前やメールアドレスを入力してください" value="" />
                    <select name="select__name" id="">
                      <option value="" disabled selected style="display:none;">性別</option>
                        <option value="全て">全て</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                        <input type="date" name="example" value="">
                        <button class="form__button-search" type="search">検索</button>
                        <button class="form__button-reset" type="reset">リセット</button>
                </form>
                <button class="form__button-export" type="export">エクスポート</button>
            </div>
            
    </main>
</body>
</html>