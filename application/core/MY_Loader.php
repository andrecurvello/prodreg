<?php 

class MY_Loader extends CI_Loader {
    /**
     * Load Multiple Views
     *
     * This function is used to load multiple "view" files.  It has three parameters:
     *
     * 1. An array of the "view" file to be included.
     * 2. An associative array of data to be extracted for use in the views.
     * 3. TRUE/FALSE - whether to return the data or load it.  In
     * some cases it's advantageous to be able to return data so that
     * a developer can process it in some way.
     *
     * @access   public
     * @param    mixed
     * @param    array
     * @param    bool
     * @return   mixed
     */
    function multiview($view = array(), $vars = FALSE, $return = FALSE)
    {
        $return_value = '';
        if (is_array($view)) {
        	
            foreach ($view as $current_index => $current_view) {
                $current_vars = $vars;
				
                if (is_array($vars[$current_index])) {
                    $current_vars = $vars[$current_index];
                }
				
                $result = $this->view($current_view, $current_vars, $return);
                if (is_string($result)) {
                    $return_value .= $result;
                }
            }
            return $result;
        } else {
            return $this->view($view, $vars, $return);
        }
    }
}
/* End of file MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */