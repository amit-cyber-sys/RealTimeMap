<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md" id="app">
                    <example-component></example-component>
                </div>
            </div>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTAd7NWyRzSvRlcxJyzvz2DSVNDYUn5Hk&callback=initMap" async defer>
</script>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /home/invezza/laravel-work/RealTimeMap/resources/views/welcome.blade.php ENDPATH**/ ?>