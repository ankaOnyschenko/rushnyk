<?php
/*
	Template Name: Допомога проекту
*/
?>
<?php get_header(); ?>
        <div class="wrap-content">
        <h2>Допомога проекту</h2>
		
<div class="help">


    <form enctype="multipart/form-data" name="MyForm" action="<?php bloginfo('template_url') ?>/mail.php" method="post" id="feedback-form">
        <label>Ім'я</label><br />
        <input class="name" type="text" name="name" required placeholder="Тарас" x-autocompletetype="name"><br />
        <label>Email</label><br />
        <input class="email" type="email" name="email" required placeholder="example@mail.info" x-autocompletetype="email"><br />
        <label>Номер телефону</label><br />
        <input class="tel" type="telefon" name="tel" required placeholder="+38 (063) 555 55 55" x-autocompletetype="email"><br />
        <label>Файл</label><br />
		<input class="file" type="file" name="file" value="Обрати файл">
       <div class="message"> <label>Повідомлення</label><br />
        <textarea name="body" required placeholder="Текст..." rows="17"></textarea></div><br />
        <input class="submit" type="submit" value="відправити">
    </form>

    <div class="details">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    <div class="recvizits">

        <h3>Реквізити</h3><br/>
        <span class="carts">XXXX XXXX XXXX XXXX</span><br/>
        <span class="bank">Приват Банк</span><br/>

        <span class="surname">Китов Дмитро</span><br/>
        <p class="text">Благодійний внесок на підтримку
            проекту "Полотняний літопис
            України"</p>
    </div>
    </div>

</div>
    </div>


<?php get_footer(); ?>	