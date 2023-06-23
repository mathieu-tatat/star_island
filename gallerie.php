<?php   require_once 'config/function.php';
        require_once 'inc/header.inc.php';
        require_once 'navDis.php';
        if (isset($_GET['a']) && $_GET['a']=='dis'){

            unset($_SESSION['user']);
            $_SESSION['messages']['info'][]='A bientôt !!';
            header('location:./');
            exit();


    }
?>

    <main>
 
    <div class="slideGal">
	<figure>
		<img src="https://source.unsplash.com/EbuaKnSm8Zw/800x533" alt="">
		<img src="https://source.unsplash.com/kG38b7CFzTY/800x533" alt="">
		<img src="https://source.unsplash.com/nvzvOPQW0gc/800x533" alt="">
		<img src="https://source.unsplash.com/2lYHiNtjSwg/800x533" alt="">
		<img src="https://source.unsplash.com/CjS3QsRuxnE/800x533" alt="">
		<img src="https://source.unsplash.com/xxeAftHHq6E/800x533" alt="">
		<img src="https://source.unsplash.com/bjhrzvzZeq4/800x533" alt="">
		<img src="https://source.unsplash.com/7mUXaBBrhoA/800x533" alt="">
        
	</figure>
	<nav>
		<button class="nav prev">Prev</button>
		<button class="nav next">Next</button>
	</nav>
</div>
    </main>
<script src="<?=  BASE_PATH; ?>assets/js/gallerie.js"></script>
<?php     require_once 'inc/footer.inc.php';          ?>
