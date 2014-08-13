<div class='container'>
    <a href="#"><?php echo $this->Html->image('logo.png', array('class' => 'logo')); ?></a>
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <?php 
                        echo $this->html->link('Home', 
                            array('controller' => 'jobs', 'action' => 'index')); 
                    ?>
                </li>
                <li>
                    <?php 
                        echo '<li>';                         
                        echo '<a href="#" id="about_us">About Us</a>'; 
                        echo '</li>';
                    ?>
                </li>
                <li>
                    <?php 
                        echo '<li>';                         
                        echo '<a href="#" id="contact_us">Contact Us</a>'; 
                        echo '</li>';
                    ?>
                </li>
            </ul>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(!$logged_in) {
                            echo '<li>';                         
                            echo '<a title="login to apply or post a job" id="login" href="#">Login</a>'; 
                            echo '</li>';
                            echo '<li>';  
                            echo $this->Html->link('Register', array('controller' => 'users',
                                    'action' => 'register'));
                            echo '</li>';
                        }
                        if($logged_in) {
                            echo '<li>';                         
                            echo '<a href="" id="post_job">Post Job</a>'; 
                            echo '</li>';
                            echo '<li class="dropdown">';
                            echo '<a href="" class="dropdown-toggle" data-toggle="dropdown">';                       
                            echo $current_user;                           
                            echo '<b class="caret"></b>';                        
                            echo '</a>';
                            echo '<ul class="dropdown-menu">';
                            echo '<li><a href="#">Update Profile</a></li>';
                            echo '<li><a href="#">Change Password</a></li>';
                            echo '<li>';
                            echo $this->Html->link('Logout', array('controller' => 'users',
                                    'action' => 'logout'));
                            echo '</li>';
                            echo '</ul>';
                            echo '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>        
</div>

