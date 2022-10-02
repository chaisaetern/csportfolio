<?php
/**
 * Template Part Name: Skills
 *
 * @package csportfolio
 * 
 */
?>
<!-- Skills Template Part -->

<div class="skills-container">

    <div class="skills">

        <?php 

            $skills = array(
                array(
                    'name' => 'HTML',
                    'exp' => 'Experienced',
                    'icon' => '<i class="devicon-html5-plain"></i>',
                    'status' => 'active'
                ),
                array(
                    'name' => 'CSS',
                    'exp' => 'Experienced',
                    'icon' => '<i class="devicon-css3-plain"></i>',
                    'status' => 'active'
                ),
                array(
                    'name' => 'JS/ES6',
                    'exp' => 'Experienced',
                    'icon' => '<i class="devicon-javascript-plain"></i>',
                    'status' => 'active'
                ),
                array(
                    'name' => 'React',
                    'exp' => 'Experienced',
                    'icon' => '<i class="devicon-react-original"></i>',
                    'status' => 'inactive'
                ),
                array(
                    'name' => 'PHP/WordPress',
                    'exp' => 'Medium',
                    'icon' => '<i class="devicon-php-plain"></i>',
                    'status' => 'active'
                ),
                array(
                    'name' => 'NodeJS',
                    'exp' => 'Medium',
                    'icon' => '<i class="devicon-nodejs-plain"></i>',
                    'status' => 'inactive'
                ),
                array(
                    'name' => 'mySQL',
                    'exp' => 'Medium',
                    'icon' => '<i class="devicon-mysql-plain"></i>',
                    'status' => 'inactive'
                ),
                array(
                    'name' => 'mongodb',
                    'exp' => 'Medium',
                    'icon' => '<i class="devicon-mongodb-plain"></i>',
                    'status' => 'inactive'
                ),
            );


            for($i = 0; $i < count($skills); $i++) {

        ?>

        <div class="skill parallax" data-offset="20">

            <div class="skill-icon">
                
                <h1><?php echo $skills[$i]['icon']; ?></h1>

                <svg width="24" height="24" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M 300 54C 264 54 231 73 213 104C 213 104 13 450 13 450C -4 481 -4 519 13 550C 13 550 213 896 213 896C 231 927 264 946 300 946C 300 946 700 946 700 946C 736 946 769 927 787 896C 787 896 987 550 987 550C 1004 519 1004 481 987 450C 987 450 787 104 787 104C 769 73 736 54 700 54C 700 54 300 54 300 54C 300 54 300 54 300 54M 300 103C 300 103 300 103 300 103C 300 103 700 103 700 103C 718 103 734 113 743 129C 743 129 943 475 943 475C 952 491 952 509 943 525C 943 525 743 871 743 871C 734 887 718 897 700 897C 700 897 300 897 300 897C 282 897 266 887 257 871C 257 871 57 525 57 525C 48 509 48 491 57 475C 57 475 257 129 257 129C 266 113 282 103 300 103C 300 103 300 103 300 103 M 0,0" transform="rotate(90,500,500)"/></svg>

            </div>

            <div class="skill-desc">

                <h5>✪<?php echo $skills[$i]['name']; ?></h5>

                <p><?php echo $skills[$i]['exp']; ?></p>

                <p class="<?php echo $skills[$i]['status'] ?>"><?php echo $skills[$i]['status']; ?></p>
                
            </div>

        </div>

        <?php } ?>

    </div>

    <div class="skill-header parallax" data-offset="7">
        <h1>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'S' ); ?><br>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'K' ); ?><br>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'I' ); ?><br>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'L' ); ?><br>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'L' ); ?><br>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'S' ); ?><br>
        </h1>
    </div>

</div>