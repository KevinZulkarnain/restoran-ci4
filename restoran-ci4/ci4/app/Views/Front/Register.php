<?= $this->extend('Template/Front') ?>
<?= $this->section('content') ?>

<style>

@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}

</style>
<body>

<div class="wrapper">
    <form class="form form-signin" method="post" action="<?= base_url('authregister') ?>">
    <?php if (session()->getFlashdata('info') != null) : ?>
    <center>
        <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('info') ?></div>
    </center>  
    <?php endif; ?>    
      <h2 class="form-signin-heading">Register</h2>
      <input type="text" class="form-control mb-2" name="pelanggan" placeholder="Name" required="" autofocus="" />
      <input type="text" class="form-control mb-2" name="alamat" placeholder="Alamat" required="" autofocus="" />
      <input type="text" class="form-control mb-2" name="telp" placeholder="Telepon" required="" autofocus="" />
      <input type="text" class="form-control mb-2" name="email" placeholder="Email Address" required="" autofocus="" />
      <input type="text" class="form-control mb-2" name="password" placeholder="Password" required="" autofocus="" />    
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register"></input>  
      <a style="background : red" class="btn btn-lg btn-danger btn-block"
                                    href="<?= base_url('login')?>">Login</a>
    </form>
  </div>
      
</body>


<?= $this->endSection() ?>