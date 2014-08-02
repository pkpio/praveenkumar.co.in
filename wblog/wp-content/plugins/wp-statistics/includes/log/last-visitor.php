<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.show-map').click(function(){
			alert('<?php _e('To be added soon', 'wp_statistics'); ?>');
		});

	postboxes.add_postbox_toggles(pagenow);
	});
</script>
<?php
	include_once( dirname( __FILE__ ) . "/../functions/country-codes.php" ); 
	
	$get = array('agent', 'ip');
	
	foreach($get as $gets) {
		if( array_key_exists($gets, $_GET) ) {
			$_var = $gets;
			$_get = $_GET[$gets];
		}
	}
		
	if( $_get ) {
		$total = $wpdb->query("SELECT * FROM `{$table_prefix}statistics_visitor` WHERE `{$_var}` LIKE '%{$_get}%'");
	} else {
		$total = $wpdb->query("SELECT * FROM `{$table_prefix}statistics_visitor`");
	}
	
	$total_visitor = $wpdb->query("SELECT * FROM `{$table_prefix}statistics_visitor`");
?>
<div class="wrap">
	<?php screen_icon('options-general'); ?>
	<h2><?php _e('Recent Visitors', 'wp_statistics'); ?></h2>
	<ul class="subsubsub">
		<li class="all"><a <?php if(!$_get) { echo 'class="current"'; } ?>href="?page=wps_visitors_menu"><?php _e('All', 'wp_statistics'); ?> <span class="count">(<?php echo $total_visitor; ?>)</span></a> |</li>
		<?php
			if($_var == 'agent') {
				$Browsers = wp_statistics_ua_list();
				$i = 0;
				$Total = count( $Browsers );
				$spacer = " |";
				
				foreach( $Browsers as $Browser ) {
					if($Browser == null) continue;
					$i++;
					if($_get == $Browser) { $current = 'class="current" '; } else { $current = ""; }
					if( $i == $Total ) { $spacer = ""; }
					echo "<li><a " . $current . "href='?page=wps_visitors_menu&agent=" . $Browser . "'> " . __($Browser, 'wp_statistics') ." <span class='count'>(" . number_format_i18n(wp_statistics_useragent($Browser)) .")</span></a>" . $spacer . "</li>";
				}
			} elseif($_var) {
				if($_get) { $current = 'class="current" '; } else { $current = ""; }
				echo "<li><a {$current} href='?page=wps_visitors_menu&{$_var}={$_get}'>{$_get} <span class='count'>({$total})</span></a></li>";
			}
		?>
	</ul>
	<div class="postbox-container" id="last-log">
		<div class="metabox-holder">
			<div class="meta-box-sortables">
				<div class="postbox">
					<div class="handlediv" title="<?php _e('Click to toggle', 'wp_statistics'); ?>"><br /></div>
					<?php if($_var) { ?>
					<h3 class="hndle"><span><?php _e('Search for', 'wp_statistics'); ?>: <?php echo $_get; ?></span></h3>
					<?php } else { ?>
					<h3 class="hndle"><span><?php _e('Recent Visitors', 'wp_statistics'); ?></span></h3>
					<?php } ?>
					<div class="inside">
							<?php
								// Instantiate pagination object with appropriate arguments
								$pagesPerSection = 10;
								$options = array(25, "All");
								$stylePageOff = "pageOff";
								$stylePageOn = "pageOn";
								$styleErrors = "paginationErrors";
								$styleSelect = "paginationSelect";

								$Pagination = new Pagination($total, $pagesPerSection, $options, false, $stylePageOff, $stylePageOn, $styleErrors, $styleSelect);
								
								$start = $Pagination->getEntryStart();
								$end = $Pagination->getEntryEnd();

								// Retrieve MySQL data
								if( $_get ) {
									$result = $wpdb->get_results("SELECT * FROM `{$table_prefix}statistics_visitor` WHERE `{$_var}` LIKE '%{$_get}%' ORDER BY `{$table_prefix}statistics_visitor`.`ID` DESC  LIMIT {$start}, {$end}");
								} else {
									$result = $wpdb->get_results("SELECT * FROM `{$table_prefix}statistics_visitor` ORDER BY `{$table_prefix}statistics_visitor`.`ID` DESC  LIMIT {$start}, {$end}");
								}
								
								// Check to see if User Agent logging is enabled.
								$DisplayUA = get_option( "wps_store_ua" );
								
								echo "<div class='log-latest'>";
								
								foreach($result as $items) {
									echo "<div class='log-item'>";
										echo "<div class='log-referred'><a href='?page=wp-statistics/wp-statistics.php&type=last-all-visitor&ip={$items->ip}'>".wp_statistics_icons('dashicons-visibility', 'visibility')."{$items->ip}</a></div>";
										echo "<div class='log-ip'>{$items->last_counter} - <a href='http://www.geoiptool.com/en/?IP={$items->ip}' target='_blank'>{$items->ip}</a></div>";
										echo "<div class='clear'></div>";
										echo "<a class='show-map' title='".__('Map', 'wp_statistics')."'>".wp_statistics_icons('dashicons-location-alt', 'map')."</a>";
										
										if(get_option('wps_geoip')) {
											echo "<img src='".plugins_url('wp-statistics/assets/images/flags/' . $items->location . '.png')."' title='{$ISOCountryCode[$items->location]}' class='log-tools'/>";
										}
										
										if( array_search( strtolower( $items->agent ), array( "chrome", "firefox", "msie", "opera", "safari" ) ) !== FALSE ){
											$agent = "<img src='".plugins_url('wp-statistics/assets/images/').$items->agent.".png' class='log-tools' title='{$items->agent}'/>";
										} else {
											$agent = wp_statistics_icons('dashicons-editor-help', 'unknown');
										}
										
										echo "<div class='log-agent'><a href='?page=wp-statistics/wp-statistics.php&type=last-all-visitor&agent={$items->agent}'>{$agent}</a></div>";
										
										echo "<div class='log-url'><a href='{$items->referred}' title='{$items->referred}'>".wp_statistics_icons('dashicons-admin-links', 'link')." ".substr($items->referred, 0, 100)."[...]</a></div>";
									echo "</div>";
								}
								
								echo "</div>";
							?>
					</div>
				</div>
				
				<div class="pagination-log">
					<?php echo $Pagination->display(); ?>
					<p id="result-log"><?php echo ' ' . __('Page', 'wp_statistics') . ' ' . $Pagination->getCurrentPage() . ' ' . __('From', 'wp_statistics') . ' ' . $Pagination->getTotalPages(); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>