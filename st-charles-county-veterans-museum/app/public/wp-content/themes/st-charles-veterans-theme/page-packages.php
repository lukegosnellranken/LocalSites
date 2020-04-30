<?php
get_header(); 

while(have_posts()) {
    the_post(); 
    pageBanner();
?>



    <div class="container container--narrow page-section">

    <?php
        $theParent = wp_get_post_parent_id(get_the_ID());

        if ($theParent) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
            </div>
        <?php }
    ?>

    <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));
        if($theParent or $testArray){ ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
                <ul class="min-list">
                    <?php
                        if($theParent){
                            $findChildrenOf = $theParent;
                        } else {
                            $findChildrenOf = get_the_ID();
                        }
                        wp_list_pages(array(
                            'title_li' => NULL,
                            'child_of' => $findChildrenOf
                        ));
                    ?>
                </ul>
            </div>
    <?php }
    ?>

    <!-- no pulling content -->

    <p id="packages-title">We have many different levels of sponsorship available for you!</p>

    <div id="all-packages">
        <div class="packages-div row group">
            <div class="one-third">
                <img class="sponsor-image" src="<?php echo get_theme_file_uri('images/sponsorpackages/founding.png') ?>"/> 
            </div>

            <div class="two-thirds">
                <p class="sponsor-title">Founding Sponsors - $10,000 or above</p>
                <p class="sponsor-info-alt">Available up to our year 2 anniversary of the museum</p>

                <div class="sponsor-list">
                    <ul>
                    <li>Your name in Gallery 2! Exclusive, Five Year Sponsorship - Largest donor</li>
                    <li>Listing as Founding Sponsor on website with link to your website</li>
                    <li>Permanent Dog Tag on League of Honor Wall</li>
                    <li>Recognition in Ralph's Reveille</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="packages-div row group">
            <div class="one-third">
                <img class="sponsor-image" src="<?php echo get_theme_file_uri('images/sponsorpackages/patriot.png') ?>"/> 
            </div>

            <div class="two-thirds">
                <p class="sponsor-title">Patriot Sponsors - $10,000 or above</p>
                <p class="sponsor-info-alt">Available after our year 2 anniversary of the museum</p>

                <div class="sponsor-list">
                    <ul>
                    <li>Your name in Gallery 2! Exclusive, Five Year Sponsorship - Largest donor</li>
                    <li>Listing as Founding Sponsor on website with link to your website</li>
                    <li>Permanent Dog Tag on League of Honor Wall</li>
                    <li>Recognition in Ralph's Reveille</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="packages-div row group">
            <div class="one-third">
                <img class="sponsor-image" src="<?php echo get_theme_file_uri('images/sponsorpackages/patriot.png') ?>"/> 
            </div>

            <p class="sponsor-title">The Grove - $5,000</p>
            <p class="sponsor-info">The Museum front faces due West. On the North side is a grove of trees that produce abundant shade all day. 
                Our plan incudes a dry creek (currently a low ditch) that meanders from the parking lot to the rear of the museum. 
                The Grove will featue a Seabees-built bridge across the creek, picnic table(s), benches and reflection points along the sidewalk. 
                The community garden club will install several appropriate flower beds along the walk. This area will be used as a gathering place and outdoor educational area. 
                The sponsors name will be prominently displayed on a sign. The sponsor will be featured on the League of Honor Wall, 
                picture on website with sign and recognition in Ralph's Reveille.
            </p>
        </div>

        <div class="packages-div row group">
            <div class="one-third">
                <img class="sponsor-image" src="<?php echo get_theme_file_uri('images/sponsorpackages/patriot.png') ?>"/> 
            </div>

            <p class="sponsor-title">Veterans Memorial - $5,000</p>
            <p class="sponsor-info">Our Veterans Memorial will be a 10' x 10' area surrounding the flag poles in front of our museum. 
                Veterans Memorial will honor St. Charles County Veterans. Families will have the opportunity to replace a brick with the name of their Veteran.
            </p>
            <p class="sponsor-info">The bricks include 3 lines of print and 12 characters per line that can be purchased for $250 each.</p>
            <p class="sponsor-info">This area will be bordered by low bushes on 2 sides with a walkway from the parking lot into the memorial area. 
                There will be a reflection bench with the sponsor's name and a prominent sign at the entrance to the memorial. 
                The sponsor will be featured on the League of Honor Wall, picture on website with sign and recognition in Ralph's Reveille.
            </p>
        </div>

        <div class="packages-div row group">
            <div class="one-third">
                <img class="sponsor-image" src="<?php echo get_theme_file_uri('images/sponsorpackages/patriot.png') ?>"/> 
            </div>

            <p class="sponsor-title">Heroes Walk - $4,000</p>
            <p class="sponsor-info">Heroes Walk is the sidewalk that circles the entire museum. Along the way you will find placards, memorials, 
                and signs that honor St. Charles County Veterans. The sponsor's name will be prominently displayed along the path or on the building at several points for 2 years. 
                The sponsor will be featured on the League of Honor Wall, picture on website with sign and recognition in Ralph's Reveille.
            </p>
        </div>

        <div class="packages-div row group">
            <div class="one-third">
                <img class="sponsor-image" src="<?php echo get_theme_file_uri('images/sponsorpackages/patriot.png') ?>"/> 
            </div>

            <p class="sponsor-title">Veterans Healing Gardens - $3,000</p>
            <p class="sponsor-info">Our Veterans often express a need for a therapeutic task or endeavor that involves the entire family. 
                Our Healing Gardens will allow families to design, plan and nurture 1 of 8 designated garden spaces. Our community garden club will assist with the design, 
                planting and prescribing of a care program for the garden areas. There will be a Healing Gardens sign listing our partnership with our community garden club. 
                The designated garden areas are varied in location and design: a 48 square foot flower bed, long flower beds along the building and the open garden area 
                in the parking lot circle. The open garden area in the parking lot circle will have a monument feature to be determined. 
                Our hope is a garden that has the power to heal and holds meaning for every family member. 
                There will be a sign at each garden area prominently displaying the sponsor’s name for 2 years. 
                The sponsor will be featured on the League of Honor Wall, picture on website with sign and recognition in Ralph’s Reveille.
            </p>
        </div>

        <div class="packages-div row group">
            <div class="one-third">
                <img class="sponsor-image" src="<?php echo get_theme_file_uri('images/sponsorpackages/patriot.png') ?>"/> 
            </div>

            <p class="sponsor-title">Veterans Theatre - $2,500</p>
            <p class="sponsor-info">In the middle of the museum between our galleries is our Veterans Theater. 
                In a quiet room, visitors can sit back and listen to our Veterans first-hand accounts of their service to our country through first-hand video and audio stories. 
                The sponsor's name will be prominently displayed on the waall in the theater and along the doorway leading into the theater for 2 years. 
                The sponsor will be featured on the League of Honor Wall, picture on website with sign and recognition in Ralph’s Reveille.
            </p>
        </div>

    </div>

</div>


<?php }
    get_footer();
?>