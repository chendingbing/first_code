<?php
/**
 * Created by PhpStorm.
 * User: chendingbing
 * Date: 2018/10/10
 * Time: 16:55
 */
?>
<a href="{{ route('users.show', $user->id) }}">
  <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>