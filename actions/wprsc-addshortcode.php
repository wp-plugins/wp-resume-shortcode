<?php


class wprsc_addshortcode
{
	protected $TagGlobalWrapper = 'div';
	protected $ClassGlobalWrapper = 'itemcv';
	
	protected $TagDateWrapper = 'div';
	protected $ClassDateWrapper = 'dateitemcv';
	
	protected $Tagline1 = 'span';
	protected $Tagline2 = 'span';
	protected $Classline1 = 'line1';
	protected $Classline2 = 'line2';
	
	protected $TagDescWrapper = 'div';
	protected $ClassDescWrapper = 'descitemcv';
	
	protected $TagContentWrapper = 'div';
	protected $ClassContentWrapper = 'contentitemcv';
	

    public function __construct()
    {
        add_shortcode( 'itemcv', array($this, 'itemcv_shortcode') );
    }
	
	//Shortcodes pour les CV items
	public function itemcv_shortcode( $atts, $content = null ) {
	
		extract( shortcode_atts( array(
			'startdate' => '',
			'dateseparator' => '',
			'enddate' => '',
			'line1' => '',
			'lineseparator' => '',
			'line2' => '',
		), $atts, 'itemcv' ) );
		
		$dateseparator = "<br />";
		$lineseparator = "<br />";
		if ($atts['dateseparator'] != "")
			$dateseparator = $atts['dateseparator'];
		if ($atts['lineseparator'] != "")
			$lineseparator = $atts['lineseparator'];
	
		//Ouverture du wrapper principal
		$result = '<' . $this->TagGlobalWrapper . ' class="' . $this->ClassGlobalWrapper . '">';
		
		//Si j'ai une date de début et une date de fin
		if($atts['startdate'] != "" && $atts['enddate'] != ""){
			$result .= '<' . $this->TagDateWrapper . ' class="' . $this->ClassDateWrapper . '">';
			$result .= $atts['startdate'];
			$result .= $dateseparator;
			$result .= $atts['enddate'];
			$result .= '</' . $this->TagDateWrapper . '>';
		}
				
		//Si j'ai une line1 et une ligne 2
		if($atts['line1'] != "" && $atts['line2'] != ""){
			$result .= '<' . $this->TagDescWrapper . ' class="' . $this->ClassDescWrapper . '">';
			$result .= '<' . $this->Tagline1 . ' class="' . $this->Classline1 . '">' . $atts['line1'] . '</' . $this->Tagline1 . '>';
			$result .= $lineseparator;
			$result .= '<' . $this->Tagline2 . ' class="' . $this->Classline2 . '">' . $atts['line2'] . '</' . $this->Tagline2 . '>';
			$result .= '</' . $this->TagDescWrapper . '>';
		}
		
		//Si j'ai une line1 mais pas de ligne 2
		if($atts['line1'] != "" && ($atts['line2'] == "" || $atts['line2'] == NULL)){
			$result .= '<' . $this->TagDescWrapper . ' class="' . $this->ClassDescWrapper . '">';
			$result .= '<' . $this->Tagline1 . ' class="' . $this->Classline1 . '">' . $atts['line1'] . '</' . $this->Tagline1 . '>';
			$result .= '</' . $this->TagDescWrapper . '>';
		}
		
		//Si j'ai une line2 mais pas de ligne 1
		if(($atts['line1'] == "" || $atts['line1'] == NULL) && $atts['line2'] != ""){
			$result .= '<' . $this->TagDescWrapper . ' class="' . $this->ClassDescWrapper . '">';
			$result .= '<' . $this->Tagline2 . ' class="' . $this->Classline2 . '">' . $atts['line2'] . '</' . $this->Tagline2 . '>';
			$result .= '</' . $this->TagDescWrapper . '>';
		}
		
		//Si content n'est pas null
		if($content){
			$result .= '<' . $this->TagContentWrapper . ' class="' . $this->ClassContentWrapper . '">';
			$result .= $content;
			$result .= '</' . $this->TagContentWrapper . '>';
		}
		
		//fermeture du wrapper principal
		$result .= '</' . $this->TagGlobalWrapper . '>';
		return $result;
	}
}

?>