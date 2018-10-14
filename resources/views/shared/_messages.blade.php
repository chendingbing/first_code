<?php
/**
 * Created by PhpStorm.
 * User: chendingbing
 * Date: 2018/10/11
 * Time: 14:04
 */
?>
@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{$msg}}">
                {{session()->get($msg)}}
            </p>
        </div>
        @endif
@endforeach