			

				<?php echo $this->Form->create( array('class' => 'form-login')); ?>
					<div class="errorHandler alert alert-danger no-display">
						<i class="icon-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
					<div class="form-group">
							<span class="input-icon">
								<input id="UserUsername" type="text" class="form-control" name="data[User][username]" placeholder="Username" required="required">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input id="UserPassword" type="password" class="form-control password" name="data[User][password]" placeholder="Password"  required="required">
								<i class="fa fa-lock"></i>
								
						</div>
						
						
					
					
						
						<div class="form-actions">
							<button type="submit" class="btn btn-bricky pull-right">
								Login <i class="icon-circle-arrow-right"></i>
							</button>
						</div>
						
					</fieldset>
				</form>
			

