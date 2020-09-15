<?php

namespace TCG\Voyager\Actions;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Support\Facades\Auth;

class ApproveAction extends AbstractAction
{
    public function getTitle()
    {
  return $this->data->{'active'}=="Approved"?'Pending':'Approve';
    }

    public function getIcon()
    {
      // Action icon which display in left of button based on current status
        return $this->data->{'status'}=="Approved"?'voyager-x':'voyager-external';
    }

    public function getPolicy()
    {
        return 'edit' ;
    }

    public function getAttributes()
    {
      return [
          'class' => 'btn btn-sm btn-success pull-left',
      ];
    }
    public function shouldActionDisplayOnDataType()
    {

        return $this->dataType->slug == 'h-products' && Auth::user()->hasRole('super-user');

    }
    public function getDefaultRoute()
    {
      // URL for action button when click
     return route('posts.publish', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
}
