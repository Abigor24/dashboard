<?php

  function redirect_to($locate){
    return header("Location: $locate");
  }