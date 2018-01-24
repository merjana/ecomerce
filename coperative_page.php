<?php
$NoNavBar = 1;
include "init.php";
?>





    <div id="wrapper" class="container" dir="rtl">
        <!-- navbar -->
        <section class="navbar main-menu" dir="rtl">
            <div class="navbar-inner main-menu">
                <a href="index.php" class="arabic_logo pull-left hidden-phone">
                    <img src="layout/images/logo.png" alt="">
                </a>
                <nav id="menu" class="pull-right menu_arabic">
                    <ul>

                        <li><a href="./register_arabic.php">تسجيل الدخول</a></li>
                        <li><a href="./coperative_page.php"> الإتصال بنا </a>
                        <li><a href="./about_arabic.php">معلومات عنا</a></li>
                        <!--li><a href="./index_arabic.php"> الرئيسية</a></li-->
                    </ul>
                </nav>
            </div>
        </section>


    <div class="coperative-page">
    <div class="text-center">
        <h1>استمارة الإتصال</h1>
    </div>


        <form action="#" method="post" class="" >
            <fieldset>
                <div class="control-group">
                    <label class="control-label">  إسم التعاونية </label>
                    <div class="controls">
                        <input type="text" placeholder="" class="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">البريد الإلكتروني</label>
                    <div class="controls">
                        <input type="email" placeholder="" class="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">العنوان</label>
                    <div class="controls">
                        <input type="password" placeholder="" class="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">المدينة</label>
                    <div class="controls">
                        <input type="password" placeholder="" class="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label ">المنتج</label>
                    <select name="category" id="">
                        <option value="" selected disabled class="active">نوع المنتج</option>
                        <option value="">الوجه</option>
                        <option value="">الجسم</option>
                        <option value="">زيت للأكل</option>
                        <option value="">الشعر</option>
                        <option value="">مرهمات</option>
                    </select>
                    <input type="text" placeholder="اسم المنتج">

                </div>
                <div id="add_another_product">

                </div>
                <div class="control-group">
                    <button class="btn btn-primary" id="koka">إضافة منتج أخر</button>
                </div>
                <div class="control-group">
                    <label for="" class="control-label">رسالتك</label>
                    <textarea name="message" id="" cols="30" rows="10" class="input-xxlarge"></textarea>
                </div>


                <div class="control-group">
                    <label for="" class="control-label">لست روبوت</label>
                    <input type="checkbox">
                </div>
                <hr>
                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="فتح حساب"></div>
            </fieldset>
        </form>
</div>
</div>


<section id="footer-bar" dir="rtl">
    <div class="row">
        <div class="span4">

        </div>
        <div class="span5">
            <img src="layout/images/logo.png" alt=""></p>
            <p>يذكر أن شجرة أركان من النباتات الطبيعية التي تنمو فقط في الجنوب المغربي والجنوب الغربي الجزائري في تندوف ومستغانم وجنوب فلسطين المحتلة بصحراء النقب ووادي عربة، وقد عمرت هذه الشجرة ملايين السنين، وتتوفر على قدرة هائلة لمقاومة الجفاف ومحاربة ظاهرة التصحر، وتنتشر على مساحة آلاف الهكتار.</p>
            <br/>
            <span class="social_icons">
							<a class="facebook" href="#">فيسبوك</a>
							<a class="twitter" href="#">توتر</a>
							<a class="skype" href="#">انستغرام</a>
						</span>
        </div>

        <div class="span3">
            <h4>تصفح</h4>
            <ul class="nav">
                <li><a href="index.php">الرئسية</a></li>
                <li><a href="about.php">من نحن</a></li>
                <li><a href="contact.php">اتصل بنا</a></li>
                <li><a href="register.php">دخول</a></li>
            </ul>
        </div>

    </div>
</section>
<section id="copyright" class="text-center">
    <span> 2018; جميع الحقوق محفوضة </span>
</section>
</div>

<script src="themes/js/common.js"></script>
<script src="themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });

            $("#koka").click(function (event){
                event.preventDefault();
                //alert("kora")
                $("#add_another_product").append(
                    '<div class="control-group">\n'+
                    '<select name="category" id="">\n' +
                    '<option value="" selected disabled class="active">نوع المنتج</option>\n' +
                    '<option value="">الوجه</option>\n' +
                    '<option value="">الجسم</option>\n' +
                    ' <option value="">زيت للأكل</option>\n' +
                    '<option value="">الشعر</option>\n' +
                    '<option value="">مرهمات</option>\n' +
                    '</select>\n' +
                    '<input type="text" placeholder="اسم المنتج">'+
                    '</div>\n'
                )

            })
        });
    });
</script>



</body>
</html>




