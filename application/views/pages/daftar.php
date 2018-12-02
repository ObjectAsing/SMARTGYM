<div class="page register">
		<div class="register-form-box full">
			<div class="centered">

				<div class="form-page-box full">
					<div class="head-box full">
						<div class="title full text-center">
							<h1>REGISTER</h1>
						</div>
					</div>

					<div class="login-form full">
						<form action="" method="post">
							<div class="form-box ox-full">
								<label for="" class="form-lable">Nama Band :</label>
								<div class="error" style="color:#c22;">
									<?php echo form_error('nama_band'); ?>
								</div>

								<input type="text" class="form-input" name="nama_band"  value="<?php echo set_value('nama_band'); ?>" placeholder="nama band">
							</div>

							<div class="form-box ox-full">
								<label for="" class="form-lable">Email Band :</label>
								<div class="error" style="color:#c22;">
									<?php echo form_error('email'); ?>
								</div>
								<input type="text" class="form-input" name="email" value="<?php echo set_value('email'); ?>" placeholder="email">
							</div>

							<div class="form-box ox-full">
							<div class="error" style="color:#c22;">
								<?php echo form_error('password'); ?>
							</div>

								<label for="" class="form-lable">Password Band :</label>
								<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-input" placeholder="password">
							</div>

							<div class="form-box ox-full">
								<label for="" class="form-lable">Confirm Password Band :</label>
								<div class="error" style="color:#c22;">
									<?php echo form_error('password'); ?>
								</div>
								<input type="password" class="form-input" name="repassword" value="<?php echo set_value('repassword'); ?>" placeholder="confirm password">
							</div>

							<div class="form-box ox-full">
								<label for="" class="form-lable">Alamat :</label>
								<div class="error" style="color:#c22;">
									<?php echo form_error('alamat'); ?>
								</div>
								<textarea name="alamat" class="form-area" cols="30" rows="10"><?php echo set_value('alamat'); ?></textarea>
							</div>

							<div class="form-box ox-full">
								<label for="" class="form-lable">No Telefon Band :</label>
								<div class="error" style="color:#c22;">
									<?php echo form_error('handphone'); ?>
								</div>
								<input type="text" class="form-input" name="handphone" value="<?php echo set_value('handphone'); ?>" placeholder="nomor telefon">
							</div>

							<div class="form-box ox-full">
								<label for="" class="form-lable">Jumlah Personil Band :</label>
								<div class="error" style="color:#c22;">
									<?php echo form_error('jumlah_personil'); ?>
								</div>
								<input type="text" name="jumlah_personil" value="<?php echo set_value('jumlah_personil'); ?>" class="form-input" placeholder="jumlah personil">
							</div>

							<div class="form-box ox-full">
								<div class="center">
									<input type="submit" value="Daftar" class="btn-group-default" name="daftar">
								</div>
							</div>
						</form>
					</div>				
				</div>
			</div>
		</div>
	</div>

