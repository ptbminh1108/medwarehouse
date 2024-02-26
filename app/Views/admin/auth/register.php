<?= $this->extend('admin/layout/layout_no_header') ?>
<?= $this->section('content') ?>



<!-- Main content -->

<section class="content content justify-content-center d-flex" id="register-header-step" >
  <div class="row  form-register">
    <div class="col-sm-4" id="header-step-1">
      <div  class="row">
        <div class="col-sm-2">
          <div class="round-cirle">1</div>
        </div>
        <div class="col-sm-8">
          <div class="header-step-title">Declaration</div>
        </div>
      </div>
    </div>
    <div class="col-sm-4" id="header-step-2">
      <div  class="row">
        <div class="col-sm-2">
          <div class="round-cirle">2</div>
        </div>
        <div class="col-sm-8">
          <div class="header-step-title">Personal Details</div>
        </div>
      </div>
    </div>
    <div class="col-sm-4" id="header-step-3">
      <div  class="row">
        <div class="col-sm-2">
          <div class="round-cirle">3</div>
        </div>
        <div class="col-sm-8">
          <div class="header-step-title final">Confirmation</div>
        </div>
      </div>
  </div>

</section>

<section class="content justify-content-center d-flex" id='register-form'>

<?php echo form_open_multipart('auth/register/save', [ 'class' => 'form-validate form-register', 'autocomplete' => 'off' ]); ?>

  
  <div class="row" id="step-1">
    <div class="col-sm-12">
      <!-- Default card -->
      <div class="card">
        <div class="card-header d-flex justify-content-center">
          <h2 class="card-title "><?php echo lang('App.register_step_1_title') ?></h2>
        </div>
        <div class="card-body">
          Once you’re setup you’ll be able to:

          <ul>
            <li>Support the business internally</li>

            <li>To get more order as higher possibilities</li>

            <li>To analysis the cost from the supplier</li>

            <li>To analysis the price offer to the customer</li>

            <li>To create, print and send estimate, sales order and invoice</li>

            <li>To create, print and send purchase order and bill</li>

            <li>To track every task and deal by automation.</li>
          </ul>


        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    
      
    </div>
   
  </div>
  


  <div class="row" id='step-2'>
    <div class="col-sm-12">
      <!-- Default card -->
      <div class="card">
        <div class="card-header d-flex justify-content-center">
          <h2 class="card-title "><?php echo lang('App.register_step_2_title') ?></h2>
        </div>
        <div class="card-body">

          <!-- Name -->
          <div class="form-group">
            <label for="formClient-Name"><?php echo lang('App.user_name') ?></label>
            <input type="text" class="form-control" name="name" id="formClient-Name" required placeholder="<?php echo lang('App.user_enter_name') ?>" onkeyup="$('#formClient-Username').val(createUsername(this.value))" autofocus />
          </div>
          <!-- Name -->

          <!-- Phone number -->
          <div class="form-group">
            <label for="formClient-Contact"><?php echo lang('App.user_contact') ?></label>
            <input type="text" class="form-control" name="phone" id="formClient-Contact" placeholder="<?php echo lang('App.user_enter_contact') ?>" />
          </div>
          <!-- Phone number -->

          <!-- Phone Email -->
          <div class="form-group">
            <label for="formClient-Email"><?php echo lang('App.user_email') ?></label>
            <input type="email" class="form-control" name="email" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="<?php echo lang('App.user_email_exists') ?>" id="formClient-Email" required placeholder="Enter email">
          </div>
          <!-- Phone Email -->

          <!-- Username  -->
          <div class="form-group">
            <label for="formClient-Username"><?php echo lang('App.user_username') ?></label>
            <input type="text" class="form-control" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="<?php echo lang('App.user_username_take') ?>" name="username" id="formClient-Username" required placeholder="<?php echo lang('App.user_enter_username') ?>" />
          </div>
          <!-- Username  -->

          <!-- Address  -->
          <div class="form-group">
            <label for="formClient-Address"><?php echo lang('App.user_address') ?></label>
            <textarea type="text" class="form-control" name="address" id="formClient-Address" placeholder="<?php echo lang('App.user_enter_address') ?>" rows="3"></textarea>
          </div>
          <!-- Address  -->
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    
      
    </div>
   
  </div>

  <div class="row" id='step-3'>
    <div class="col-sm-12">
      <!-- Default card -->
      <div class="card">
        <div class="card-header d-flex justify-content-center">
          <h2 class="card-title "><?php echo lang('App.register_step_3_title') ?></h2>
        </div>
        <div class="card-body">
          <!-- Password -->
          <div class="form-group">
            <label for="formClient-Password"><?php echo lang('App.user_password') ?></label>
            <input type="password" class="form-control" name="password" minlength="6" id="formClient-Password" required placeholder="<?php echo lang('App.user_password') ?>">
          </div>
          <!-- Password -->
          <!-- Confirm Password -->
          <div class="form-group">
            <label for="formClient-ConfirmPassword"><?php echo lang('App.user_password_confirm') ?></label>
            <input type="password" class="form-control" name="confirm_password" equalTo="#formClient-Password" id="formClient-ConfirmPassword" required placeholder="<?php echo lang('App.user_password_confirm') ?>">
          </div>
         
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    
      
    </div>
   
  </div>

  <!-- Default card -->
  <div class="card">
    <div class="card-footer">
      <div class="row" id="button-step-1">
        <div class="col-sm-6">
          <div class="col text-center"><button type="button" onclick={getStartedClick()}  class="btn btn-flat btn-get-started"><?php echo lang('App.register_get_started') ?></button></div>
        </div>
        <div class="col-sm-6">
          <div class="col text-center"><button type="button" class="btn btn-flat btn-cancel"><?php echo lang('App.register_cancel') ?></button></div>
        </div>
      </div>
      <div class="row" id="button-step-2">
        <div class="col-sm-6">
          <div class="col text-center"><button type="button" onclick={backStep1Click()} class="btn btn-flat btn-get-started"><?php echo lang('App.register_back') ?></button></div>
        </div>
        <div class="col-sm-6">
          <div class="col text-center"><button type="button" onclick={moveStep3Click()} class="btn btn-flat btn-cancel"><?php echo lang('App.register_next') ?></button></div>
        </div>
      </div>
      <div class="row" id="button-step-3">
        <div class="col-sm-6">
          <div class="col text-center"><button  type="button" onclick={backStep2Click()} class="btn btn-flat btn-get-started"><?php echo lang('App.register_back') ?></button></div>
        </div>
        <div class="col-sm-6">
          <div class="col text-center"><button type="submit" class="btn btn-flat btn-cancel"><?php echo lang('App.register_submit') ?></button></div>
        </div>
      </div>
    </div>
    <!-- /.card-footer-->

  </div>
  <!-- /.card -->

<?php echo form_close(); ?>

</section>
<!-- /.content -->

<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
  $(document).ready(function() {
    $('.form-validate').validate();

      //Initialize Select2 Elements
    $('.select2').select2()

  })

  function previewImage(input, previewDom) {

    if (input.files && input.files[0]) {

      $(previewDom).show();

      var reader = new FileReader();

      reader.onload = function(e) {
        $(previewDom).find('img').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }else{
      $(previewDom).hide();
    }

  }

  function createUsername(name) {
      return name.toLowerCase()
        .replace(/ /g,'_')
        .replace(/[^\w-]+/g,'')
        ;;
  }



  $(document).ready(function() {
    $("#step-2").addClass("hidden");
    $("#step-3").addClass("hidden");
    $("#button-step-2").addClass("hidden");
    $("#button-step-3").addClass("hidden");
  })

  function getStartedClick(){
    $("#step-1").addClass("hidden");
    $("#step-2").removeClass("hidden");
    $("#button-step-1").addClass("hidden");
    $("#button-step-2").removeClass("hidden");

    $("#header-step-1 .round-cirle").html(` <i class="fas fa-check" style="color:rgb(65 209 106)"></i>`);


  }

  function backStep1Click(){
    $("#step-2").addClass("hidden");
    $("#step-1").removeClass("hidden");
    $("#button-step-2").addClass("hidden");
    $("#button-step-1").removeClass("hidden");

    $("#header-step-1 .round-cirle").html(`1`);

  }

  function backStep2Click(){
    $("#step-3").addClass("hidden");
    $("#step-2").removeClass("hidden");
    $("#button-step-3").addClass("hidden");
    $("#button-step-2").removeClass("hidden");
    $("#header-step-2 .round-cirle").html(`2`);

  }
  function moveStep3Click(){
    $("#step-2").addClass("hidden");
    $("#step-3").removeClass("hidden");
    $("#button-step-2").addClass("hidden");
    $("#button-step-3").removeClass("hidden");

    $("#header-step-2 .round-cirle").html(` <i class="fas fa-check" style="color:rgb(65 209 106)"></i>`);

  }
  
</script>
<?=  $this->endSection() ?>


