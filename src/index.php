
<?php include_once('./src/config/const.php');?>


<!DOCTYPE html>

<html>



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>テストサイト|テストさん募集サイト</title>
    <meta name="description" content="ディスクリプションが入るよ！！">

    <link rel="stylesheet" href="./css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./scripts/js/main.js" defer></script>
</head>
<body>
    <header>
        <div class="headLine">
            <h1 class="logo">
                <img src="./img/logo.png" alt="テストサイト|テストさん募集サイト">
            </h1>
            <p class="secondHead">あのの<br>あれが満載!</p>
        </div>
    </header>

    <main>
        <form id="contact_form" name="contact_form" class="h-adr" action="mail.php" method="post">
            <div class="topText">
                <p>日本最大規模の前原さんをご紹介</p>
                <img src="./img/descr.png" alt="テストで作ったあのサイト">
            </div>
            <div class="progress">
                <div class="bar"><span></span><span></span></div>
                <span class="msg">簡単30秒入力♪</span>
                <span class="prev">START</span>
                <span class="next">GOAL</span>
            </div>
            <section id="section_1" class="section_group">
                <h3 class="section_title">占い師経験について教えてください</h3>
                <ul class="section_content">
                    <?php foreach(FORM_CONTENT as $k): ?>
                        <?php foreach($k['value_list'] as $item_list): ?>
                            <li class="item">
                                <label class="inputRadio">
                                    <input type="radio" class="btn_section_content" name="<?php echo $k['name']?>" data-form_number="<?php echo $k['form_number']?>" value="<?php echo $item_list['value'] ?>"><span><?php echo $item_list['text'] ?></span>
                                </label>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section id="section_2" class="section_group">
                <div class="section_content">
                        <h3 class="section_content_title">就職したい地域を教えてください</h3>
                        <input type="radio" id="btnSec2-0" name="就職したい地域" value="未回答" style="display:none;" checked="">
                        <div class="areaGrp areaGrp1">
                            <ul class="section_content">
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-1" name="就職したい地域" value="北海道">
                                    <span>北海道</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-2" name="就職したい地域" value="東北地方">
                                    <span>東北地方</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-3" name="就職したい地域" value="関東地方">
                                    <span>関東地方</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-4" name="就職したい地域" value="中部地方">
                                    <span>中部地方</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-5" name="就職したい地域" value="関西地方">
                                    <span>関西地方</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-6" name="就職したい地域" value="九州地方">
                                    <span>九州地方</span>
                                </label>
                                </li>
                            </ul>
                        </div>
                </div>
            </section>

            <section id="section_3" class="section_group">
                <div class="section_content">
                        <h3 class="section_content_title">希望する給与額</h3>
                        <input type="radio" id="btnSec2-0" name="希望給与額" value="未回答" style="display:none;" checked="">
                        <div class="salaryGrp salaryGrp1">
                            <ul class="section_content">
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-2-1" name="希望給与額" value="200〜400万">
                                    <span>200〜400万</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-2-2" name="希望給与額" value="400〜600万">
                                    <span>400〜600万</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-2-3" name="希望給与額" value="600〜800万">
                                    <span>600〜800万</span>
                                </label>
                                </li>
                                <li class="item">
                                    <label class="inputRadio inputRadio1">
                                    <input type="radio" id="btnSec2-2-4" name="希望給与額" value="1千万以上">
                                    <span>1千万以上</span>
                                </label>
                                </li>
                            </ul>
                        </div>
                </div>
            </section>

            <section id="section_4" class="section_group">
                <div class="section_content">
                    <h3 class="section_content_title">希望する転職時期を教えてください</h3>
                    <ul class="section_content">
                        <li class="item">
                            <label class="inputRadio inputRadio1">
                                <input type="radio" id="btnSec4-1" name="転職時期" value="1ヶ月以内">
                                <span>1ヶ月以内</span>
                            </label>
                        </li>
                        <li class="item">
                            <label class="inputRadio inputRadio1">
                                <input type="radio" id="btnSec4-2" name="転職時期" value="3ヶ月以内">
                                <span>3ヶ月以内</span>
                            </label>
                        </li>
                        <li class="item">
                            <label class="inputRadio inputRadio1">
                                <input type="radio" id="btnSec4-3" name="転職時期" value="6ヶ月以内">
                                <span>6ヶ月以内</span>
                            </label>
                        </li>
                        <li class="item">
                            <label class="inputRadio inputRadio1">
                                <input type="radio" id="btnSec4-4" name="転職時期" value="12ヶ月以内">
                                <span>12ヶ月以内</span>
                            </label>
                        </li>
                        <li class="item">
                            <label class="inputRadio inputRadio1">
                                <input type="radio" id="btnSec4-5" name="転職時期" value="未定">
                                <span>未定</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </section>

            <section id="section_6" class="section_group">
                <div class="section_content">
                    <div class="formUnit">
                        <dt class="formUnitHead">
                            <span class="item">都道府県</span>
                        </dt>
                        <dd class="formUnitBody">
                            <div class="select select1">
                                <select name="都道府県" id="pref" class="p-region">
                                    <option value="" selected="">▼都道府県を選択</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="東京都">東京都</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                </select>
                            </div>
                        </dd>
                    </div>
                    <div class="formUnit">
                        <dt class="formUnitHead">
                            <span class="item">年齢</span>
                        </dt>
                        <dd class="formUnitBody">
                            <div class="select select1">
                                <select name="年齢" id="birthyear" class="p-region">
                                    <option value="" selected>---</option>
                                    <option value="17">17歳</option>
                                    <option value="18">18歳</option>
                                    <option value="19">19歳</option>
                                    <option value="20">20歳</option>
                                    <option value="21">21歳</option>
                                    <option value="22">22歳</option>
                                    <option value="23">23歳</option>
                                    <option value="24">24歳</option>
                                    <option value="25">25歳</option>
                                    <option value="26">26歳</option>
                                    <option value="27">27歳</option>
                                    <option value="28">28歳</option>
                                    <option value="29">29歳</option>
                                    <option value="30">30歳</option>
                                    <option value="31">31歳</option>
                                    <option value="32">32歳</option>
                                    <option value="33">33歳</option>
                                    <option value="34">34歳</option>
                                    <option value="35">35歳</option>
                                    <option value="36">36歳</option>
                                    <option value="37">37歳</option>
                                    <option value="38">38歳</option>
                                    <option value="39">39歳</option>
                                    <option value="40">40歳</option>
                                    <option value="41">41歳</option>
                                    <option value="42">42歳</option>
                                    <option value="43">43歳</option>
                                    <option value="44">44歳</option>
                                    <option value="45">45歳</option>
                                    <option value="46">46歳</option>
                                    <option value="47">47歳</option>
                                    <option value="48">48歳</option>
                                    <option value="49">49歳</option>
                                    <option value="50">50歳</option>
                                    <option value="51">51歳</option>
                                    <option value="52">52歳</option>
                                    <option value="53">53歳</option>
                                    <option value="54">54歳</option>
                                    <option value="55">55歳</option>
                                    <option value="56">56歳</option>
                                    <option value="57">57歳</option>
                                    <option value="58">58歳</option>
                                    <option value="59">59歳</option>
                                </select>
                            </div>
                        </dd>
                    </div>
                    <div class="formUnit">
                        <dt class="formUnitHead">
                            <span class="item">性別</span>
                        </dt>
                        <dd class="formUnitBody">
                            <div class="select select1">
                                <select name="性別" id="sex" class="p-region">
                                    <option value="" selected>---</option>
                                    <option value="男性">男性</option>
                                    <option value="女性">女性</option>
                                </select>
                            </div>
                        </dd>
                    </div>
                    <div class="formUnit">
                        <dt class="formUnitHead">
                            <span class="item">お名前</span>
                        </dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1">
                                <input type="text" id="name" name="お名前" maxlength="20" placeholder="鈴木 太郎">
                            </div>
                        </dd>
                    </div>
                    <div class="formUnit">
                        <dt class="formUnitHead">
                            <span class="item">ふりがな</span>
                        </dt>
                        <dd class="formUnitBody">
                            <div class="inputText inputText1">
                                <input type="text" id="kana" name="ふりがな" maxlength="20" placeholder="すずき たろう">
                            </div>
                        </dd>
                    </div>
                </div>
                <div id="btnSec6" class="btnFloat btnNext">次へ</div>
            </section>
        </form>
    </main>

    <footer>
    </footer>
    </body>

    <script>
</html>