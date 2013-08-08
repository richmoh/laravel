<div class="signup">

    <div class="page-header">
        <h1>Signup <small>Not sure what for...</small></h1>
    </div>

    <?php echo Form::open(array('action' => 'IndexController@signup', 'class'=>'form-horizontal')); ?>
        <div class="control-group">
            <label class="control-label" for="inputEmail">Firstname</label>
            <div class="controls">
                <?php echo Form::text('firstname', Input::get('firstname')); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Surname</label>
            <div class="controls">
                <?php echo Form::text('surname', Input::get('surname')); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Email</label>
            <div class="controls">
                <?php echo Form::text('email', Input::get('email')); ?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Password</label>
            <div class="controls">
                <?php echo Form::password('password'); ?>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn">Signup</button>
            </div>
        </div>
    <?php echo Form::close(); ?>

</div>

