<?php

namespace TCG\Voyager\Actions;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Support\Facades\Auth;

class PublishAction extends AbstractAction
{
    public function getTitle()
    {
  return $this->data->{'published'}=="unpublished"?'Publish Me':'Unpublish Me';
    }

    public function getIcon()
    {
      // Action icon which display in left of button based on current status
        return $this->data->{'published'}=="unpublished"?'voyager-external ':'voyager-x';
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

        return $this->dataType->slug == 'h-products' && Auth::user()->hasRole('super-admin');

    }
    public function getDefaultRoute()
    {
      // URL for action button when click
     return route('posts.publishadmin', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
}
