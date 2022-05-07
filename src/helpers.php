<?php

use Luanardev\LivewireAlert\LivewireAlert;

function toastr($message, $type="success")
{
	$alert = new LivewireAlert();
	return $alert->toastr($message, $type);
}

function alert($message, $type="success")
{
	$alert = new LivewireAlert();
	return $alert->alert($message, $type);
}

function toastrSuccess($message)
{
   return toastr($message, 'success');
}

function toastrInfo($message)
{
    return toastr($message, 'info');
}

function toastrWarning($message)
{
    return toastr($message, 'warning');
}
   
function toastrError($message)
{
    return toastr($message, 'error');
}
   
function alertSuccess($message)
{
    return alert($message, 'success');
}

function alertInfo($message)
{
    return alert($message, 'info');
}

function alertWarning($message)
{
    return alert($message, 'warning');
}
   
function alertError($message)
{
    return alert($message, 'error');
}
   

