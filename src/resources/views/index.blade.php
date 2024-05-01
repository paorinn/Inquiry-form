<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <a href="/" class="header_logo">
            FashionablyLate
        </a>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="例:山田">
                            <input type="text" name="name" placeholder="例:太郎">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="radio" name="radio" value="男性">男性
                            <input type="radio" name="radio" value="女性">女性
                            <input type="radio" name="radio" value="その他">その他
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="080">
                            <input type="tel" name="tel" placeholder="1234">
                            <input type="tel" name="tel" placeholder="5678">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷１−２−３">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション１０１">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="select" id="">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tittle">
                        <span class="form__label--item">お問い合わせた内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <textarea name="message" id="" cols="30" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                    </div>
                </div>
            </form>
            <button class="form__button-button" type="button">確認画面</button>
        </div>
    </main>
</body>
</html>