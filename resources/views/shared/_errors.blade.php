<?php
/**
 * Created by PhpStorm.
 * User: chendingbing
 * Date: 2018/10/11
 * Time: 13:24
 */
?>
@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>
@endif
