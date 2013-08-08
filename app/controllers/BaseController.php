<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
    
    protected function validate($validator)
    {
        if ($validator->fails())
        {
           $messages = $validator->messages();

           $this->display_message('errors', $messages->all());
           
           return false;
        }
        
        return true;
    }
    
    protected function display_message($type, $messages)
    {
        $html = '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        
        switch ($type)
        {
            case 'errors':
                
                $html = '<div class="alert alert-error"><strong>Not so fast!</strong>'.$html;
                
                if(count($messages) == 1)
                {
                    $html .= ' ' . current($messages);
                    
                }else
                {
                    $html .= '<ul>';
                    
                    foreach ($messages as $message)
                    {
                        $html .= '<li>';
                        $html .= $message;
                        $html .= '</li>';
                    }
                    
                    $html .= '</ul>';
                }
                
                break;
        }
        
        $html .= '</div>';
        
        $this->layout->messages = $html;
    }
}