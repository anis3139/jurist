 <div class="pt-5">
     <h3 class="mb-5">
         <?php
                $jurist_cn = get_comments_number();
                if ( $jurist_cn <= 1 ) {
                    echo esc_html($jurist_cn) . " " . __( "Comment", "jurist" );
                } else {
                    echo esc_html($jurist_cn) . " " . __( "Comments", "jurist" );
                }
                ?>
     </h3>
     
     
     <ul class="comment-list">
     <?php
                wp_list_comments(
                    
                );
                ?>
     </ul>
     <div class="comments-pagination">
                <?php
                the_comments_pagination( array(
                    'screen_reader_text' => __( 'Pagination', 'jurist' ),
                    'prev_text'          => '<' . __( 'Previous Comments', 'jurist' ),
                    'next_text'          => '>' . __( 'Next Comments', 'jurist' ),
                ) );
                ?>
            </div>
     <div class="comment-form-wrap pt-5">
        
         <h3 class="h2">
                    <?php _e("Add Comment","jurist"); ?>
                </h3>

                <?php
                comment_form();
                ?>

         
     </div>
 </div>
