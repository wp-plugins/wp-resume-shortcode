<?php


class wprsc_addmenu
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'afficher_lien_menu') );
    }
	
	function afficher_lien_menu() {
		if (function_exists('add_options_page')) {
			$plugin_page_options = add_options_page(
				'WP Resume SC',
				'WP Resume SC',
				'administrator',
				'wordpress_resume_shortcode',
				array($this, 'fonction_de_la_page_options')
			);
		}
	}

	// la page des options
	public function fonction_de_la_page_options() {

		if (!current_user_can('administrator'))  {
			wp_die( __('You do not have sufficient permissions to access this page.') );
		}

		?>

		<div class="wrap">
			<h2>Wordpress Resume Shortcode</h2>
			
			
			<table>
			<tr>
				<td style="width: 50%;">
				<div class="tool-box">
				<h3 class="title">How to use it</h3>
				<p>Just add the shortcode [itemcv] in your page content.</p>
				<p class="description">You can chose to share the amazing stuff you have done during this experience, by writing it between [itemcv] and [/itemcv].</p>
				
				<p>Some optional attributes are also available :</p>
								
				<p class="description">
					* startdate : optional, start date of the experience (works together with enddate)
					<br />* dateseparator : optional, default is "< b r   / >".
					<br />* enddate : optional, end date of the experience (works together with startdate)
					<br />* line1 : optional, for example the employer (standalone)
					<br />* lineseparator : optional, default is "< b r   / >"
					<br />* line2 : optional, for example the position (standalone)
				</p>
				
				<p>For example</p>
				
				<p class="description">
					[itemcv startdate="January 2012" enddate="December 2013" line1="Apple Inc." lineseparator=" - " line2="Chief Marketing Officer"]
					<br />I have designed the new iPhone 7<br />
					[/itemcv]
				</p>

			</div>
				</td>
				<td style="width: 50%; text-align: center">
			<img src="<?php echo plugin_dir_url( __FILE__ ); ?>assets/screen.jpg" alt="Screenshot" />
				</td>
			</tr>
			</table>
			
		</div>
		
			
			<br />
			
		<div id="welcome-panel" class="welcome-panel">
			<div class="welcome-panel-content">
				<div class="welcome-panel-column-container">
					<h4>Thanks for using Wordpress Resume Shortcode</h4>
					<p class="message">
						Contribute on bitbucket : <a href="https://bitbucket.org/patrickroux/wordpress-resume-shortcode" target="blank" >https://bitbucket.org/patrickroux/wordpress-resume-shortcode</a>
						<br />
						<a href="http://www.patrickroux.fr" target="blank_">http://www.patrickroux.fr</a> / <a href="http://www.twitter.com/AdopteUnRoux" target="blank_">@AdopteUnRoux</a>
					</p>
						
					<p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=B6TNY6XGYV8GE" class="button button-primary" target="_blank">Donation</a></p>
				</div>
			</div>
		</div>
			

			
		<?php
	

	}
	
	
	
}

?>