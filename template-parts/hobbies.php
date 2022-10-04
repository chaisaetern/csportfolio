<?php
/**
 * Template Part Name: Hobbies
 *
 * @package csportfolio
 * 
 */
?>
<!-- Hobbies Template Part-->

<!-- Hobbies -->
<div class="hobbies">

    <div class="hobby-header">
        <h1><?php printf( esc_html__( '%s', 'csportfolio' ), 'HOBBIES' ); ?></h1>
    </div>

    <div class="hobby-container">

    <?php 
    $hobbies = array(
        array(
            'name' => '★Gamer',
            'desc' => 'Legend has it...',
            'icon' => '<i class="fa-solid fa-gamepad"></i>',
        ),
        array(
            'name' => '★Fishing',
            'desc' => 'Nature at it\'s finest.',
            'icon' => '<i class="fa-solid fa-fish"></i>',
        ),
        array(
            'name' => '★Techie',
            'desc' => 'Computer Nerd',
            'icon' => '<i class="fa-solid fa-microchip"></i>',
        ),
        array(
            'name' => '★THC Friendly',
            'desc' => 'World Peace',
            'icon' => '<i class="fa-solid fa-cannabis"></i>',
        ),
        array(
            'name' => '★Music',
            'desc' => 'For the soul.',
            'icon' => '<i class="fa-solid fa-music"></i>',
        ),
    );

    for($i = 0; $i < count($hobbies); $i++) {

    ?>

        <div class="hobby">

            <div class="hobby-icon">

                <h1><?php echo $hobbies[$i]['icon']; ?></h1>

                <svg width="24" height="24" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M 300 54C 264 54 231 73 213 104C 213 104 13 450 13 450C -4 481 -4 519 13 550C 13 550 213 896 213 896C 231 927 264 946 300 946C 300 946 700 946 700 946C 736 946 769 927 787 896C 787 896 987 550 987 550C 1004 519 1004 481 987 450C 987 450 787 104 787 104C 769 73 736 54 700 54C 700 54 300 54 300 54C 300 54 300 54 300 54M 300 103C 300 103 300 103 300 103C 300 103 700 103 700 103C 718 103 734 113 743 129C 743 129 943 475 943 475C 952 491 952 509 943 525C 943 525 743 871 743 871C 734 887 718 897 700 897C 700 897 300 897 300 897C 282 897 266 887 257 871C 257 871 57 525 57 525C 48 509 48 491 57 475C 57 475 257 129 257 129C 266 113 282 103 300 103C 300 103 300 103 300 103 M 0,0" transform="rotate(90,500,500)"/></svg>
                
            </div>

            <div class="hobby-desc">

                <h5><?php echo $hobbies[$i]['name']; ?></h5>

                <p><?php echo $hobbies[$i]['desc']; ?></p>  
                
            </div>
        
        </div>

    <?php } ?> 

    </div>

</div>