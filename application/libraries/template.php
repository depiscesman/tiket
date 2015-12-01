<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Template 
{
	var $template_data = array();
	function template()
	{
		$this->template_data['jsscript'] = '';
  		$this->template_data['cssstyle'] = '';
	}

	function set($name, $value)
	{
		$this->template_data[$name]=$value;
	}

	// function set_js($value) 
	// {
 //  		$this->template_data['jsscript'] .= "<script type='text/javascript'>".$value."</script>\n";
	// }

	// function load_js($value) 
	// {
 //  		$this->template_data['jsscript'] .= "<script type='text/javascript' src='".base_url().$value."'></script>\n";
	// }

	// function load_css($value) 
	// {
 //  		$this->template_data['cssstyle'] .= "<link rel='stylesheet' href='".base_url().$value."' type='text/css' media='screen'>";
	// }

	function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
	{
		$this->CI =& get_instance();
		$this->set('menu', $this->CI->load->view($view, $view_data, TRUE));
		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
		return $this->CI->load->view($template, $this->template_data, $return);
	}	

}