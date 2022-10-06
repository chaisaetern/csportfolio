<?php
/**
 * Template Part Name: Projects Page
 *
 * @package csportfolio
 * 
 */
?>
<!-- Projects Page -->

<div class="projects-page section page" id="page3" data-id="projects">

    <div class="projects">

    <?php 
    
    $projects = array(
        array(
            'name' => 'Project 1',
            'src' => get_field('project_image_1'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 2',
            'src' => get_field('project_image_2'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 3',
            'src' => get_field('project_image_3'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 4',
            'src' => get_field('project_image_4'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 5',
            'src' => get_field('project_image_5'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 6',
            'src' => get_field('project_image_6'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 7',
            'src' => get_field('project_image_7'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 8',
            'src' => get_field('project_image_8'),
            'desc' => 'This is a project I\'ve created.',
        ),
        array(
            'name' => 'Project 9',
            'src' => get_field('project_image_9'),
            'desc' => 'This is a project I\'ve created.',
        ),
    );

    for($i = 0; $i < count($projects); $i++) {
    // for($i = 0; $i < 6; $i++) {

    ?>

        <div class="project">

            <figure><img src="<?php echo esc_url( $projects[$i]['src'] ); ?>" alt="Project"></figure>

            <a href="<?php esc_url( $projects[$i]['src'] ); ?>" target="_blank">
                <i class="fa-regular fa-eye"></i>
            </a>

            <h6><?php printf( esc_html_e( $projects[$i]['name'], 'csportfolio' ) ); ?></h6>

            <div class="project-desc">
                <p><?php printf( esc_html_e( 'This is a one or two sentence about the project.', 'csportfolio' ) ); ?></p>
            </div>
            
        </div>

    <?php } ?>
       
    </div>
    
</div>