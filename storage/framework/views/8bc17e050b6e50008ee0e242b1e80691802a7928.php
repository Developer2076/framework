





<!-- Grey with black text -->



<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?php echo url('/'); ?>">MEDICARE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo url('/'); ?>">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('/about'); ?>">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('/blog'); ?>">BLOG</a>
            </li>













            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle w3-text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    USER
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                        <a class="dropdown-item" href="<?php echo url('/logout'); ?>">Logout</a>
                    <?php else: ?>
                        <a class="dropdown-item" href="<?php echo url('/login'); ?>">Login</a>
                        <a class="dropdown-item" href="<?php echo url('/register'); ?>">Register</a>
                    <?php endif; ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('/contact'); ?>">CONTACT</a>
            </li>
        </ul>
        
        
        
        
    </div>
</nav>
<?php /**PATH /var/www/html/__project/framework/resources/views/templates/nav.blade.php ENDPATH**/ ?>