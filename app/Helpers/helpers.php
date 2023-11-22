<?php

use App\Models\Map;
use App\Models\Sidebar;
use Outl1ne\NovaMediaHub\Models\Media;

/**

 * Write code on Method

 *

 * @return response()

 */

if (! function_exists('getMedia')) {
    function getMedia($id, $size) { 
        $data = Media::find($id);
        if(!empty($data)) {
            if(!empty($size)) {
                return env('APP_URL') . '/storage/media/' . $data->id . '/conversions/' . $data->conversions[$size];
            } else {
                return $data->url;
            }
        }
    }
}

if (! function_exists('getMap')) {
    function getMap($id) { 
        $data = Map::find($id);
        if(!empty($data)) {
            return $data;
        }
    }
}

if (! function_exists('hashSocialShare')) {
    function hashSocialShare($actual_link, $pageTitle) { 
        if( nova_get_setting('social_sharing') == 1 ):
		echo '<div class="social-share">';
		echo '<div style="vertical-align: middle;" class="social-icons">';
				if (nova_get_setting('email_share') == 1):
					echo '<a class="social-icon colored" href="mailto:me@me.com?subject=&body=' . $actual_link . ' - ' . $pageTitle . ' ">';
					echo '<i class="fas fa-envelope"></i>';
					echo '</a>';
				endif;
				if (!empty(nova_get_setting('facebook_sharing_app_id')) && nova_get_setting('facebook_share') == 1 ):
					echo '<a class="social-icon colored" target="_blank" href="https://www.facebook.com/dialog/share?app_id=' .  nova_get_setting('facebook_sharing_app_id'). ' &amp;href=' .  $actual_link . ' &amp;redirect_uri=' .  $actual_link . ' ">';
					echo '<i class="fab fa-facebook-f"></i>';
					echo '</a>';
				endif;
				if (nova_get_setting('twitter_share') == 1):
					echo '<a class="social-icon colored" target="_blank" href="https://twitter.com/intent/tweet?text=' .  $pageTitle . ' &amp;url=' .  $actual_link . ' ">';
					echo '<i class="fab fa-twitter"></i>';
					echo '</a>';
				endif;
				if (nova_get_setting('linkedin_share') == 1):
					echo '<a class="social-icon colored" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;title=' .  $pageTitle . ' &amp;url=' .  $actual_link . ' ">';
					echo '<i class="fab fa-linkedin-in"></i>';
					echo '</a>';
				endif;
				if (nova_get_setting('viber_share') == 1):
					echo '<a class="social-icon colored" target="_blank" href="viber://forward?text=' .  $pageTitle . '  ' .  $actual_link . ' ">';
					echo '<i class="fab fa-viber"></i>';
					echo '</a>';
				endif;
				if (nova_get_setting('whatsapp_share') == 1):
					echo '<a class="social-icon colored" target="_blank" href="whatsapp://send?text=' .  $pageTitle . '  ' .  $actual_link . ' ">';
					echo '<i class="fa-brands fa-whatsapp"></i>';
					echo '</a>';
				endif;
				if (nova_get_setting('telegram_share') == 1):
					echo '<a class="social-icon colored" target="_blank" href="https://t.me/share/url?url=' .  $actual_link . ' &amp;text=' .  $pageTitle . ' ">';
					echo '<i class="fa-brands fa-telegram"></i>';
					echo '</a>';
				endif;
			echo '</div>';
			echo '</div> <!-- / social-share -->';
		endif;
    }
}

// if (! function_exists('getSidebar')) {
//     function getSidebar($id) { 
//         $data = Sidebar::find($id);
//         if(!empty($data)) {
//             return $data;
//         }
//     }
// }


class ThaanaDate
{
	// ' . { format()
	
	/**
	 * Returns a ASCII thaana date formatted according to the given format string
	 *
	 * This function is meant as a direct Dhivehi replacement for PHP's date() function
	 *
	 * @param string $format		String formatting for the date
	 * @param integer $timestamp	Integer UNIX timestamp
	 * @return string				String formatted date in Dhivehi
	 */
	public static function format($format, $timestamp)
	{
		// Return blank if timestamp is invalid
		if (empty($timestamp) || !is_numeric($timestamp)) return '';
		
		// Setup months translation array
		$months = array(1 => 'ޖެނުއަރީ', 2 => 'ފެބްރުއަރީ', 3 => 'މާޗް', 
						4 => 'އޭޕްރިލް', 5 => 'މެއި', 6 => 'ޖޫން', 
						7 => 'ޖުލައި', 8 => 'އޯގަސްޓް', 9 => 'ސެޕްޓެމްބަރ', 
						10 => 'އޮކްޓޯބަރ', 11 => 'ނޮވެމްބަރ', 12 => 'ޑިސެމްބަރ');
		
		// Setup week day translation array
		$dayofweek = array(	0 => 'އާދީއްތަ', 1 => 'ހޯމަ', 2 => 'އަންގާރަ', 
							3 => 'ބުދަ', 4 => 'ބުރާސްފަތި', 5 => 'ހުކުރު', 
							6 => 'ހޮނިހިރު');
		
		// Setup ante/post meridiem translation array
		$ampm = array('am' => 'މެންްދުރުކުރި', 'pm' => 'މެންްދުރުފަސް');
		
		// Split timestamp into date parts
		$dateparts = getdate($timestamp);
		
		// Construct the date in dhivehi using the formatting
		$dhivehidate = '';
		for ($i = 0; $i < strlen($format); $i++) {
			
			// Check the current char in the format string
			switch ($format[$i]) {
				case 'D':
				case 'l':
					// Day of the week - short and long
					$dhivehidate .= $dayofweek[$dateparts['wday']];
					break;
				
				case 'S':
					// Ordinal suffix but dhivehi doesn't have such so ignore
					break;
				
				case 'F':
				case 'M':
					// Textual representation of month - short and long
					$dhivehidate .= $months[$dateparts['mon']];
					break;
				
				case 'a':
				case 'A':
					// Ante meridiem and Post meridiem
					$dhivehidate .= ($dateparts['hours'] < 12) ? $ampm['am'] : $ampm['pm'];
					break;
				
				case ' ':
					$dhivehidate .= ' ';
					break;
				
				case '\\':
					// Escape slashes - get escaped char
					$i++;
					$dhivehidate .= $format[$i];
					break;
				
				default:
					$dhivehidate .= date($format[$i], $timestamp);
			}
		}
		
		return $dhivehidate;
		
	}
	
	// . ' }
	
}