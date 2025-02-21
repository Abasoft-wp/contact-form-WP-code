<?php
    /**
     * Template Name: sign-up-view
     *
     *
     */

 
    get_header();
     ?>
     
     <h3>Member Registration Sign-up View</h3>
     <div class="scrollmenu" style="overflow: auto; white-space: nowrap;">
     <table class = "table-borderd">
         <thead>
             <th>S/N</th>
             <th>Category</th>
             <th>Name of Org</th>
             <th>Acronym</th>
             <th>Org Email</th>
             <th>Org Number</th>
             <th>WhatsApp number</th>
             <th>E.D Name</th>
             <th>E.D Emmail</th>
             <th>E.D Number</th>
             <th>Address</th>
             <th>City</th>
             <th>State</th>
             <th>Zone</th>
             
             <th>Year of Est.</th>
             <th>Short Desc.</th>
             <th>Registered with</th>
             <th>CAC Reg. date</th>
             <th>Annual return file year</th>
             <th>Org budget</th>
             <th>URL</th>
             <th>Org. Desc</th>
             <th>BOT Present</th>
             <th>BOT funcioning</th>
             <th>Org. Beneficiary</th>
             <th>Thematic Area</th>
             <th>SDG Goals fit</th>
             <th>Persion filling form</th>
             
             <th>Email</th>
             <th>Authority to rep. Org</th>
             <th>No of pple impacted</th>
             <th>NNNGO to support on</th>
             <th>Known NNNGO by</th>
             <th>Communication with</th>
             <th>Declarations</th>
             <th>Accepted</th>
             <th>Declined</th>
            
         </thead>
         
         <tbody>
             
             <?php
                
                global $wpdb;
                
                $result = $wpdb-> get_results("SELECT * FROM sign_up  ORDER BY id DESC" , ARRAY_A);
                
                $count =1;
                foreach ($result as $key){
                  ?>  
                <tr>
                    <td><?php echo $count; ?></td>
                    
                    <td><?php echo $key['categ']; ?></td>
                    <td><?php echo $key['name_org']; ?></td>
                    <td><?php echo $key['acronym']; ?></td>
                    <td><?php echo $key['org_email']; ?></td>
                    <td><?php echo $key['org_p_number']; ?></td>
                    <td><?php echo $key['whatsapp_number']; ?></td>
                    <td><?php echo $key['name_of_ED']; ?></td>
                    <td><?php echo $key['ED_email']; ?></td>
                    <td><?php echo $key['ED_p_number']; ?></td>
                    <td><?php echo $key['office_address']; ?></td>
                    <td><?php echo $key['city']; ?></td>
                    <td><?php echo $key['state']; ?></td>
                    <td><?php echo $key['geo_p_zone']; ?></td>
                    <td><?php echo $key['year_of_est']; ?></td>
                    <td><?php echo $key['short_desc_org']; ?></td>
                    
                    <td><?php $registered_with = $key['registered_with'];
                    $registered_with = $registered_with ? explode(",", $registered_with) : "";
                    if($registered_with){
                        foreach($registered_with as $wale){
                            echo "<button class=\"registered_with\">
                            {$wale}
                            </button>";
                        }
                    } ?></td>
                    
                    <td><?php echo $key['CAC_date_of_incorp']; ?></td>
                    <td><?php echo $key['year_annual_returns']; ?></td>
                    <td><?php echo $key['orgs_annual_budget']; ?></td>
                    <td><?php echo $key['website_facebook_url']; ?></td>
                    
                    <td><?php $org_best_desc = $key['org_best_desc'];
                    $org_best_desc = $org_best_desc ? explode(",", $org_best_desc) : "";
                    if($org_best_desc){
                        foreach($org_best_desc as $wale){
                            echo "<button class=\"org_best_desc\">
                            {$wale}
                            </button>";
                        }
                    } ?></td>
                    
                    <td><?php echo $key['org_board_of_trust']; ?></td>
                    <td><?php echo $key['org_board_of_trust_funct']; ?></td>
                    
                    <td><?php $bene_org = $key['bene_org'];
                    $bene_org = $bene_org ? explode(",", $bene_org) : "";
                    if($bene_org){
                        foreach($bene_org as $wale){
                            echo "<button class=\"bene_org\">
                            {$wale}
                            </button>";
                        }
                    } ?></td>
                    
                    
                    <td><?php $thematic = $key['thematic'];
                    $thematic = $thematic ? explode(",", $thematic) : "";
                    if($thematic){
                        foreach($thematic as $wale){
                            echo "<button class=\"thematic\">
                            {$wale}
                            </button>";
                        }
                    } ?></td>
                    
                    <td><?php $org_SDG_goals = $key['org_SDG_goals'];
                    $org_SDG_goals = $org_SDG_goals ? explode(",", $org_SDG_goals) : "";
                    if($org_SDG_goals){
                        foreach($org_SDG_goals as $wale){
                            echo "<button class=\"org_SDG_goals\">
                            {$wale}
                            </button>";
                        }
                    } ?></td>
                    
                    <td><?php echo $key['name_of_person_fill_app']; ?></td>
                    <td><?php echo $key['email_of_person_fill_app']; ?></td>
                    <td><?php echo $key['auth_to_rep_ur_org']; ?></td>
                    <td><?php echo $key['no_pple_DIRECTLY_impacted']; ?></td>
                    
                    <td><?php $thematic_sup = $key['thematic_sup'];
                    $thematic_sup = $thematic_sup ? explode(",", $thematic_sup) : "";
                    if($thematic_sup){
                        foreach($thematic_sup as $wale){
                            echo "<button class=\"thematic_sup\">
                            {$wale}
                            </button>";
                        }
                    } ?></td>
                    
                    <td><?php echo $key['hear_abt_nnngo']; ?></td>
                    <td><?php echo $key['mode_of_comm']; ?></td>
                    
                    <td><?php $dec_thematic = $key['dec_thematic'];
                    $dec_thematic = $dec_thematic ? explode(",", $dec_thematic) : "";
                    if($dec_thematic){
                        foreach($dec_thematic as $wale){
                            echo "<button class=\"dec_thematic\">
                            {$wale}
                            </button>";
                        }
                    } ?></td>
                    <td>
                        
                        <input type="submit" value="Accepted" name="delete">
                        
                    </td>
                    <td>
                        
                        <input type="submit" value="Declined" name="delete">
                        </td>
                        
                   
                </tr>    
                    
                <?php
                $count++;
                }
                
                
             ?>
             
         </tbody>
         
     </table>
     </div>
     <div>
         <?php
         
            the_content();    
            
         ?>

     </div>
    
     <?php   
     get_footer();
     ?>