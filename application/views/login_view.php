<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TATCO - Decisão com Segurança</title>

        <!-- FAVICON -->
        <link rel="icon" type="image/gif" href="<?php echo $localurl.'assets/img/icon/favicon.gif' ?>" />

        <!-- The stylesheet -->
        <link rel="stylesheet" href="<?php echo $localurl.'/assets/css/styles.css' ?>" />

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="main">

            <h1><img src="<?php echo $localurl.'assets/img/logotatco.png' ?>" ></h1>
            <?php echo form_open('login/entrar') ?>
                <div class="row email">
                    <input type="text" id="email" name="email" placeholder="Email" />
                </div>

                <div class="row pass">
                    <input type="password" id="password1" name="password" placeholder="Password" />
                </div>
                <!-- The rotating arrow -->
                <input type="submit" value="Entrar" />

            </form>
        </div>

        <!-- JavaScript includes - jQuery, the complexify plugin and our own script.js -->
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="<?php echo $localurl.'assets/js/jquery.complexify.js' ?>"></script>
        <script src="<?php echo $localurl.'assets/js/script.js' ?>"></script>

    </body>
</html>