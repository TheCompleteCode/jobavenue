<?php
    //var_dump($current_user);
?>
<div class="container">
    <div class="col-md-offset-2">
        <input type="text" placeholder="Job Keyword" size="45">
        <select name="top_job_category" id="top_job_category">
            <option value="" >All Categories</option>
            <option  value='accounting-finance' >Accounting / Finance</option>
            <option  value='admin_office_clerical' >Admin / Office / Clerical</option>
            <option  value='Airline_Airport' >Airline / Airport</option>
            <option  value='call_center_bpo' >Call Center / BPO</option>
            <option  value='Domestic_Caretaker' >Domestic / Caretaker</option>
            <option  value='education_schools' >Education / Schools</option>
            <option  value='engineering_architecture' >Engineering / Architecture</option>
            <option  value='food_restaurant' >Food / Restaurant</option>
            <option  value='foreign_language_jobs' >Foreign Language</option>
            <option  value='govt_non_profit' >Government / Non-profit</option>
            <option  value='health_medical_science' >Health / Medical / Science</option>
            <option  value='hrm_tourism' >Hotel / Spa / Salon</option>
            <option  value='hr_recruitment_training' >HR / Recruitment / Training</option>
            <option  value='it' >IT / Computers</option>
            <option  value='legal_documentation' >Legal / Documentation</option>
            <option  value='maritime_seabased' >Maritime / Seabased</option>
            <option  value='production_manufacturing' >Production / Manufacturing</option>
            <option  value='purchasing' >Purchasing / Buyer</option>
            <option  value='sales_marketing_retail' >Sales / Marketing / Retail</option>
            <option  value='skilled_work_technical' >Skilled Work / Technical</option>            
        </select>

        <select id="top_job_location">
            <option value="all">All Location</option>
            <option value="cebu">Cebu</option>
            <option value="manila">Manila</option>
            <option value="davao">Davao</option>
        </select>
        <button>Search</button>
    </div><br/>
    
    <div class="row">
        <div id="jobs" class="col-md-9">  
            <ul class="list-group">
                <li class="list-group-item">
                        <h4><a href="#">PHP Developer</a></h4>
                        <div>
                            <p>IBM Philippines - Davao City
                                <span class="pull-right" style="padding-left: 12%;">
                                    August 13, 2014
                                </span>
                                <span class="pull-right">
                                    2 years exp. required
                                </span>
                                
                            </p>
                        </div>
                </li> 
            </ul>
            <ul class="list-group">
                <li class="list-group-item">
                        <h4><a href="#">Network Administrator</a></h4>
                        <div>
                            <p>Microsoft Corporation - Cebu City
                                <span class="pull-right" style="padding-left: 12%;">
                                    August 8, 2014
                                </span>
                                <span class="pull-right">
                                    5 years exp. required
                                </span>
                                
                            </p>
                        </div>
                </li> 
            </ul>
            <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>            
                <?php 
                /*if(isset($jobs)) {
                    foreach($jobs as $job) {
                        $d = new DateTime($job['Job']['date']);
                        $date = $d->format('F j, Y');
                        echo '<tr><td class="col-sm-2">'.$this->Html->link($job['Job']['title'], 
                                        array('controller' => 'jobs', 'action' => 'view', $job['Job']['id'])).'</td>';
                        echo '<td class="col-sm-1">'.$job['Job']['experience'].'</td>';
                        echo '<td class="col-sm-2">'.$job['Job']['company'].'</td>';
                        echo '<td class="col-sm-2">'.$job['Job']['location'].'</td>';
                        echo '<td class="col-sm-1">'.$date.'</td></tr>';
                    }
                }*/
                ?>
        </div>
        <!--<div class="col-md-3" name="side_job_location" id="side_job_locatioin">
            <ul class="list-group">
                <li class="list-group-item list-group-item-success"><b>Location</b></li>
                <a href="#" class="list-group-item">Cebu City</a>
                <a href="#" class="list-group-item">Mandaue City</a>
                <a href="#" class="list-group-item">Davao City</a>
            </ul>
        </div>-->
        <div class="col-md-3" name="side_search_option" id="side_search_option">
            <ul class="list-group custom-list-group">
                <li class="list-group-item list-group-item-success"><b>Location</b></li>
                <a href="#" id="cebu" class="list-group-item">Cebu City</a>
                <a href="#" id="mandaue" class="list-group-item">Mandaue City</a>
                <a href="#" id="davao" class="list-group-item">Davao City</a>
                <a href="#" id="dumaguete" class="list-group-item">Dumaguete City</a>
                <li class="list-group-item list-group-item-success"><b>Job Category</b></li>
                <a href="#"id="all" class="list-group-item">All Categories</a>
                <a href="#"id='accounting_finance' class="list-group-item">Accounting / Finance</a>
                <a href="#"id='admin_office_clerical' class="list-group-item">Admin / Office / Clerical</a>
                <a href="#"id='Airline_Airport' class="list-group-item">Airline / Airport</a>
                <a href="#"id='arts_media_design' class="list-group-item">Arts / Media / Design</a>
                <a href="#"id='call_center_bpo' class="list-group-item">Call Center / BPO</a>
                <a href="#"id='Domestic_Caretaker' class="list-group-item">Domestic / Caretaker</a>
                <a href="#"id='education_schools' class="list-group-item">Education / Schools</a>
                <a href="#"id='engineering_architecture' class="list-group-item">Engineering / Architecture</a>
                <a href="#"id='food_restaurant' class="list-group-item">Food / Restaurant</a>
                <a href="#"id='foreign_language_jobs' class="list-group-item">Foreign Language</a>
                <a href="#"id='govt_non_profit' class="list-group-item">Government / Non-profit</a>
                <a href="#"id='health_medical_science' class="list-group-item">Health / Medical / Science</a>
                <a href="#"id='hrm_tourism' class="list-group-item">Hotel / Spa / Salon</a>
                <a href="#"id='hr_recruitment_training' class="list-group-item">HR / Recruitment / Training</a>
                <a href="#"id='it' class="list-group-item">IT / Computers</a>
                <a href="#"id='legal_documentation' class="list-group-item">Legal / Documentation</a>
                <a href="#"id='logistics_warehousing' class="list-group-item">Logistics / Warehousing</a>
                <a href="#"id='maritime_seabased' class="list-group-item">Maritime / Seabased</a>
                <a href="#"id='production_manufacturing' class="list-group-item">Production / Manufacturing</a>
                <a href="#"id='sales_marketing_retail' class="list-group-item">Sales / Marketing / Retail</a>
                <a href="#"id='skilled_work_technical' class="list-group-item">Skilled Work / Technical</a>                  
            </ul>
        </div>
    </div>
    
</div>
