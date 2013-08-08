<div class="signup">
    
    <div class="page-header">
        <h1>Signup <small>Not sure what for</small></h1>
    </div>
    
    <?php echo Form::open(array('action' => 'IndexController@signup')); ?>
    
    <?php echo Form::token(); ?>
    
    <?php echo Form::close(); ?>
    
</div>

