<div dir="rtl">

# BOOKREADS

بوکریدز برنامه ای مشابه به سایت معروف و پرطرفدار GOODREADS است. این برنامه بر روی فریم ورک سدف و به زبان php نوشته شده است.
در این برنامه کاربران امکان وارد کردن نظر،امتیاز دهی به کتاب، وارد کردن پروسه ی خواندن یک کتاب و اپلود یک کتاب را دارند.
این برنامه بر پایه ی یک شبکه اجتماعی نوشته شده است که کاربران با یکدیگر تعامل دارند.
![](https://github.com/web-programming-course/SadafSocialNetwork/blob/BookReads/image/intro.png)


# مراحل نصب سدف
در این قسمت مراحل نصب سدف و راه اندازی برنامه را بررسی می کنیم.
برای نصب صدف، ابتدا باید وب سرور آپاچی یا nginx را نصب کنیم.

توضیحات این بخش برای سرور enginx  است..

در ادامه باید php fpm را نصب کنیم

حال باید My SQL  متناسب با ورژن php نصب کنیم. این کار با دستور زیر انجام می شود:
<div dir="rtl">

    Sudo apt install php7.4 -mysql
</div>
در این قسمت باید config  های  nginx  را در مسیر زیر تنظیم کنیم و ورژن php درست را وارد کنیم.
<div dir="rtl">
    /etc/nginx/sites-available/default
</div>    
سپس برای restare باید دستور زیر را وارد می کنیم.
    Sudo systemctl restart nginx    
حال نیاز است برخی تغییرات در فایل  php.ini است، این فایل در مسیر زیر قرار دارد:

    /etc/php/<version>/fpm/php.in
    
-  باید مقدار short_open_path رو از off به آن on تغییر بدیم
-  در متغیر include_path باید include_path هایی که در htacess امده است را ذخیره کنیم.
-  برای اینکه بتوانیم فایل اپلود شده را دریافت کنیم، باید upload_max_filesize را نسبت به اندازه فایل ها تنظیم کنیم. همچنین file_uploads را باید on کنیم.

پس از ذخیره، نیاز به restart می باشد.

    Sudo systemctl restart php7.4 -fpm.service




# راه اندازی پایگاه داده

برای ساخت پایگاه داده، ابتدا باید پایگاه داده سدف را ساخت. به این منظور فایل simple_sadaf_database.sql را که شامل table های اصلی برنامه سدف است را ران می کنیم.

حال باید پایگاه داده مربوط به BookReads را ران کنیم. به این منظور کد createDatabase.sql در مسیر زیر را اجرا می کنیم:

    Database/Query/createDatabase.sql

برای اضافه کردن داده نیز فایل fillDB.sql می دهد. این فایل در مسیر زیر قرار دارد

    Database/Query/Insert\ Data/fillDB.sql



# صفحات 
این برنامه شامل ۵ صفحه اصلی می باشد.
* form.php : 

 این صفحه به منظور اضافه کردن یک کتاب توسط کاربر پیاده سازی شده است. در این صفحه اطلاعات کتاب و فایل کتاب از کاربر گرفته می شود ، برای اطلاعات یک رکورد در دیتابیس ایجاد می شود و فایل کتاب و عکس روی جلد آن در دو پوشه ی جدا در  UploadFile  ذخیره می شود. مکان فایل کتاب و تصویر روی جلد نیز در دیتابیس ذخیره می شود.
 
 ![](https://github.com/web-programming-course/SadafSocialNetwork/blob/BookReads/image/form.png)
 
* searchBook.php : 

این صفحه برای جستجو میان کتاب ها استفاده می شود.
امکان جستجو بر اساس نام و نویسنده ی کتاب وجود دارد. پس از جستجو  تصویر روی جلد کتاب به همراه اسم کتاب خواهد امد. اسم کتاب لینکی است به صفحه پروفایل کتاب که در انجا اطلاعات کتاب را خواهیم داشت .

![](https://github.com/web-programming-course/SadafSocialNetwork/blob/BookReads/image/search.jpg)

* mylibrary.php : 

این صفحه اطلاعات مربوط به قفسه کتاب های هر شخص را نشان می دهد. هر شخص سه قفسه ی کتاب های خوانده شده و در حال خواندن و برای خواندن دارد.
هر کاربر می تواند یک کتاب را به یکی از این سه قفسه اضافه کند.
![](https://github.com/web-programming-course/SadafSocialNetwork/blob/BookReads/image/libary.jpg)

* firstpage.php : 

این صفحه ورودی سایت است.لینک به صفحات دیگر در این صفحه وجود دارد. علاوه بر آن در این صفحه به کاربر پیشنهاد کتاب خواهیم داد.

![](https://github.com/web-programming-course/SadafSocialNetwork/blob/BookReads/image/firsrt.jpg)

* BookProfile.php : 

در این بخش اطلاعات مربوط به کتاب را نشان می دهیم. این صفحه شامل اطلاعاتی مانند خلاصه کتاب، اسم کتاب، نویسنده و ناشر و ... می باشد.
کاربر در این صفحه امکان گذاشتن نظر برای کتاب را دارد. همچنین می تواند با توجه به نظر خود به کتاب امتیاز دهد
کاربر امکان پاسخ دادن به نظر کاربر دیگر را دارد. همچنین می تواند یک نظر را لایک کند.

![](https://github.com/web-programming-course/SadafSocialNetwork/blob/BookReads/image/profile.jpg)


</div>
